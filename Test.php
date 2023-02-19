<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
use html_builder\Html\Input;

    require('vendor/autoload.php');

    $i=new Input(["type"=>"text","name"=>"nom"]);
    $i->setAttribute("placeholder","type something");
    echo $i->toHTML();