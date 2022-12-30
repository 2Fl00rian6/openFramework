<?php
$lang = "fr";
require_once('../config/routes.php');
require_once('../model/layout.php');

if($data->__error() != Null){
    echo $data->__error();
}