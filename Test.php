<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
use html_builder\Html\Input;

    require('vendor/autoload.php');

    $inputTag=new Input(["type"=>"text","name"=>"nom"]);
    $inputTag->setAttribute("placeholder","type something");

    echo $inputTag->render();