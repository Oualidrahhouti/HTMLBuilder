<?php
    namespace html_builder\Base;
    abstract class Text extends Node
    {
        private $str;
        public function __construct($s)
        {
            $this->str=$s;
        }
        public function getStr()
        {
            return $this->str;
        }
        public function setStr($value)
        {
            $this->str = $value;
        }
        public function render()
        {
            return $this->str;
        }
    }