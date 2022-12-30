<?php
// Gestionnaire d'erreurs
function myErrorHandler($errno, $errstr, $errfile, $errline)
{
   if (!(error_reporting() & $errno)) {
        // Ce code d'erreur n'est pas inclus dans error_reporting(), donc il continue
        // jusqu'au gestionaire d'erreur standard de PHP
        return false;
    }

    // $errstr doit peut être être échappé :
    $errstr = htmlspecialchars($errstr);

	$random = rand(10000, 100000);
	echo "
	<style>
	@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');
	.container-alert-$random {
		background-color: #181818e3;
		position: absolute;
		left: 0;
		top: 0;
		width: 100%;
		height: 100vh;
	}
	.content-alert-$random {
		box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
		font-family: 'Poppins', sans-serif;
		background-color: #181818;
		border-radius: 14px;
		position: absolute;
		font-size: 20px;
		padding: 30px;
		color: #fff;
		left: 50%;
		top: 50%;
		width: 60%;
		height: auto;
		transform: translate(-50%, -50%);
	}
	</style>
	";

    switch ($errno) {
    case E_USER_ERROR:
        echo "<div class='container-alert-$random'><div class='content-alert-$random'><a>Mon ERREUR</b> [$errno] $errstr<br />\n";
        echo "  Erreur fatale sur la ligne $errline dans le fichier $errfile";
        echo ", PHP " . PHP_VERSION . " (" . PHP_OS . ")<br />\n";
        echo "Arrêt...</a></div></div>\n";
        exit(1);

    case E_USER_WARNING:
        echo "<div class='container-alert-$random'><div class='content-alert-$random'><a>Mon ALERTE</b> [$errno] $errstr</a></div></div>\n";
        break;

    case E_USER_NOTICE:
        echo "<div class='container-alert-$random'><div class='content-alert-$random'><a>Mon AVERTISSEMENT</b> [$errno] $errstr</a></div></div>\n";
        break;

    default:
        echo "<div class='container-alert-$random'><div class='content-alert-$random'><a><strong>Type d'erreur inconnu</strong> [$errno] ligne $errline : $errstr</a></div></div>\n";
        break;
    }

    /* Ne pas exécuter le gestionnaire interne de PHP */
    return true;
}

// Configuration du gestionnaire d'erreurs
$old_error_handler = set_error_handler("myErrorHandler");

class Query {

	public function __constructError(string $value) {
		if(!empty($value)){
			$this->error = $value;
			return $this->error;
		}else{
			$this->error = Null;
			return $this->error;
		}
	}

	public function __error() {
		if(!empty($this->error)){
			return $this->error;
		}//Finir les erreurs !
	}

	public function executeQuery(string $query, array $params, array $entries, string $table, int $execute): \PDOStatement {

		if($execute == true){
			require('../config/database.php');
			$arrayTable = array();
			$arrayColumns = array();

			$existTable = $db->prepare('SHOW TABLES FROM '.$dbname);
			$existTable->execute();

			while($rowTable = $existTable->fetch()){
				$arrayTable[] = $rowTable[0];
			}
			
			if(in_array($table, $arrayTable)){
				$tab = true;
			}else{
				$tab = false;
			}

			if($tab == true){

				foreach($entries as $entrie){
					$existCol = $db->prepare('SHOW COLUMNS FROM '.$table);
					$existCol->execute();
					while($arrayCol = $existCol->fetch()){
						foreach($arrayCol as $keyCol => $valueCol){
							if($valueCol == $entrie){
								array_push($arrayColumns, $valueCol);
							}
						}
					}
				}

				foreach(array_unique($arrayColumns) as $col){
					foreach($entries as $entrie){

						if($col == $entrie){
							$stmt = $db->prepare($query);
							$stmt->execute($params);
							if(PDO::ERRMODE_WARNING == Null){
								return $this->__constructError('Une erreur s\'est produite, veuillez réessayer dans quelques instants.');
							}else{
								return $stmt;
							}
						}else{
							return $this->__constructError('La colonne est inexistante.');
						}
						
					}
				}
				
			}else{
				return $this->__constructError('La table est inexistante.');
			}
		}else{
			require('../config/database.php');
			$stmt = $db->prepare($query);
			$stmt->execute($params);
			if(PDO::ERRMODE_WARNING == Null){
				return $this->__constructError('Une erreur s\'est produite, veuillez réessayer dans quelques instants.');
			}else{
				return $stmt;
			}
		}
	}

	public function classToTable(string $class): string {
		$tmp = explode('\\', $class);
		return strtolower(end($tmp));
	}
	
	//Params Name_table & Column_table & Value_insert
	public function create(string $table, array $entries, array $fields){
		if(!empty($table)){
			if(count($entries) == count($fields)){
				$query = "INSERT INTO " . $this->classToTable($table) . " (";
	
				foreach($entries as $entrie){
					$query .= $entrie;
					if($entrie != end($entries)){
						$query .= ', ';
					}
				}
			
				$query .= ') VALUES (';
			
				foreach($fields as $field){
					$query .= '?';
					if($field != end($fields)){
						$query .= ', ';
					}
				}
			
				$query .= ')';
				return $this->executeQuery($query, $fields, $entries, $table, true);
			}else{
				return $this->__constructError('Veuillez vérifier la deuxième ou troisième valeur, il y a une erreur de syntaxe.');
			}
		}else{
			return $this->__constructError('Veuillez vérifier le nom de la table.');
		}
	}

	//Params Name_table & Column_table & Value_insert
	public function update(string $table, array $entries, array $fields, string $column, int $id){
		if(!empty($table)){
			if(!empty($column)){
				if(count($entries) == count($fields)){
					$query = "UPDATE " . $this->classToTable($table) . " SET ";

					foreach(array_combine($fields, $entries) as $field => $entrie){
							$query .= $entrie . " = ?";
							if($field != end($fields)){
								$query .= ', ';
							}
					}

					$query .= ", updated_at = now()";
					
					$query .= ' WHERE '.$column.' = '.$id;
					return $this->executeQuery($query, $fields, $entries, $table, true);
				}else{
					return $this->__constructError('Veuillez vérifier la deuxième ou troisième valeur, il y a une erreur de syntaxe.');
				}
			}else{
				return $this->__constructError('Veuillez vérifier le nom de la table.');
			}
		}else{
			return $this->__constructError('Veuillez vérifier le nom de la table.');
		}
	}

	public function delete(string $table, string $column, string $id){
		if(!empty($table)){
			$query = "DELETE FROM " . $this->classToTable($table) . " WHERE ".$column." = ?";

			$fields = [$id];
			$entries = [];
			return $this->executeQuery($query, $fields, $entries, $table, false);
		}else{
			return $this->__constructError('Veuillez vérifier le nom de la table.');
		}
	}

	function read(string $table, array $filters): mixed {
		$emptyArray = [];
		$query = 'SELECT * FROM ' . $this->classToTable($table) . ' WHERE ';
		foreach (array_keys($filters) as $filter) {
		  $query .= $filter . " = ?";
		  if ($filter != array_key_last($filters)) $query .= 'AND ';
		}
		$stmt = $this->executeQuery($query, array_values($filters), $emptyArray, $table, false);
		return $stmt->fetch();
	}

	function readMany(string $table, array $filters = [], array $order = [], int $limit = null, int $offset = null): mixed {
		$emptyArray = [];
		$query = 'SELECT * FROM ' . $this->classToTable($table);
		if (!empty($filters)) {
		  $query .= ' WHERE ';
		  foreach (array_keys($filters) as $filter) {
			$query .= $filter . " = ?";
			if ($filter != array_key_last($filters)) $query .= 'AND ';
		  }
		}
		if (!empty($order)) {
		  $query .= ' ORDER BY ';
		  foreach ($order as $key => $val) {
			$query .= $key . ' ' . $val;
			if ($key != array_key_last($order)) $query .= ', ';
		  }
		}
		if (isset($limit)) {
		  $query .= ' LIMIT ' . $limit;
		  if (isset($offset)) {
			$query .= ' OFFSET ' . $offset;
		  }
		}
		$stmt = $this->executeQuery($query, array_values($filters), $emptyArray, $table, false);
		return $stmt->fetchAll();
	  }

	public function showSuccess(string $content) {
		$type = "success";
		$icon = '<svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>';
		require_once('../model/components/_alert.php');
	}
	
	public function showError(string $content) {
		$type = "error";
		$icon = '<svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>';
		require_once('../model/components/_alert.php');
	}

	public function showWarning(string $content) {
		$type = "warning";
		$icon = '<svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" /></svg>';
		require_once('../model/components/_alert.php');
	}
}