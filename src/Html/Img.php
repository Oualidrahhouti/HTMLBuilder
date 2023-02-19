<?php

namespace html_builder\Html;

use html_builder\Base\ElementVide;

class Img extends ElementVide
{
    public function setSrc($value)
    {
        $this->setAttribute("src", $value);
    }
}