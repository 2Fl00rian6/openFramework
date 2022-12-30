<?php
if(isset($_POST['create-btn'])){
    if(!empty($_POST['user']) && !empty($_POST['email']) || $_POST['user'] == Null){
        $user = htmlspecialchars($_POST['user']);
        $email = htmlspecialchars($_POST['email']);
        $data->create('users', ['name', 'email'], [$user, $email]);
        header('Location: /template');
    }else{
        echo $data->showError('Veuillez compléter tous les champs...');
        header('Location: /template');
    }
}
if(isset($_POST['update-btn'])){
    if(!empty($_POST['users']) && !empty($_POST['email'])){
        $user = htmlspecialchars($_POST['users']);
        $email = htmlspecialchars($_POST['email']);
        $data->update('users', ['email'], [$email], 'id', $user);
        header('Location: /template');
    }else{
        echo $data->showError('Veuillez compléter tous les champs...');
        header('Location: /template');
    }
}
if(isset($_POST['delete-btn'])){
    if(!empty($_POST['users'])){
        $user = htmlspecialchars($_POST['users']);
        $data->delete('users', 'id', $user);
        header('Location: /template');
    }else{
        echo $data->showError('Veuillez compléter tous les champs...');
        header('Location: /template');
    }
}
$users = $data->readMany('users');

if(count($users) > 0){
    $table = Null;
    foreach($users as $user){
        $table .= "
        <tr>
            <th>".$user['id']."</th>
            <td>".$user['name']."</td>
            <td>".$user['email']."</td>
            <td>".$user['updated_at']."</td>
            <td>".$user['created_at']."</td>
        </tr>
        ";
    }
}else{
    $table = Null;
    echo $data->showError('Aucune donnée n\'a été trouvée pour le tableau.');
}

if(count($users) > 0){
    $select = Null;
    foreach($users as $user){
        $select .= "<option value='".$user['id']."'>".$user['name']."</option>";
    }
}else{
    $select = "<option value='Null'>Aucune donnée n'a été trouvée.</option>";
}