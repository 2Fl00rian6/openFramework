<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/' :
        $titleDocument = "Accueil";
        $content = "../model/pages/home.php";
        break;
    case '' :
        $titleDocument = "Accueil";
        $content = "../model/pages/home.php";
        break;
    case '/template' :
        $titleDocument = "Template CRUD";
        $content = "../model/pages/template.php";
        break;
    case '/documentation' :
        $titleDocument = "Documentation";
        $content = "../model/pages/documentation.php";
        break;
    default:
        http_response_code(404);
        $titleDocument = "Erreur 404";
        $content = "../model/error/404.php";
        break;
}