<?php

namespace html_builder\Html;

use html_builder\Base\ElementNonVide;
use html_builder\Base\Node;

class Body extends ElementNonVide
{
    public function addElement(Node $e)
    {
        if ($e instanceof Html || $e instanceof Head)
            return;
        parent::addElement($e);

    }

}