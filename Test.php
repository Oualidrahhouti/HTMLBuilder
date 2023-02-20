<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
use html_builder\Html\Input;
use html_builder\Html\Img;
use html_builder\Html\Head;
use html_builder\Html\Body;
use html_builder\Html\Br;
use html_builder\Html\Html;

    require('vendor/autoload.php');

    $inputTag=new Input(["type"=>"text","name"=>"nom"]);
    $inputTag->setPlaceHolder("type something");
    $brTag=new Br();
    $headTag=new Head();
    $bodyTag=new Body();
    $bodyTag->addElement($inputTag);
    $htmlTag=new Html();
    $htmlTag->addElement($headTag);
    $htmlTag->addElement($bodyTag);
    $htmlTag->addElement($inputTag);
    echo $htmlTag->render();