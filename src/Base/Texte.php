<?php
    namespace html_builder\Base;
    abstract class Text extends Noeud
    {
        private $str;
        public function __construct($s)
        {
            $this->str=$s;
        }

        public function toHTML()
        {
            return $this->str;
        }
    }