<?php

namespace html_builder\Html;

use html_builder\Base\ElementVide;

class Link extends ElementVide
{
    public function setSrc($value)
    {
        $this->setAttribute("src",$value);
    }

    public function setRelation($value)
    {
        $value=strtolower($value);
        $allowedRelations = ['alternate', 'author', 'dns-prefetch', 'help', 'icon',
            'license', 'next', 'pingback', 'preconnect', 'prefetch',
            'preload', 'prerender', 'prev', 'search', 'stylesheet'];
        if(in_array($value,$allowedRelations))
            $this->setAttribute("rel",$value);

    }
}