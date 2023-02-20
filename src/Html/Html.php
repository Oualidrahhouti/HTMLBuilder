<?php

namespace html_builder\Html;

use html_builder\Base\ElementNonVide;
use html_builder\Base\Node;

class Html extends ElementNonVide
{
    public function addElement(Node $e)
    {
        if ($e instanceof Head || $e instanceof Body)
        {
           foreach ($this->getElements() as $element)
               if ($element->getClassName()==$e->getClassName())
                   return;
           parent::addElement($e);
        }
    }


}