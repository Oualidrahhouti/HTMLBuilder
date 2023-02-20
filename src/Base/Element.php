<?php
    namespace html_builder\Base;
    abstract class Element extends Node
    {
        protected $attributes;
        public function __construct(array $attr=null)
        {
            $this->attributes=$attr;
            if(is_null($this->attributes))
                $this->attributes=[];
        }

        public  function getClassName()
        {
            $class=\get_class($this);
            $class=\explode("\\", $class);
            $class=\strtolower(end($class));

            return $class;
        }
        public function getAttributes()
        {
            return $this->attributes;
        }

        public function getAttribute(string $attr)
        {
            if (isset($attributes[$attr]))
                return $this->attributes[$attr];
            return null;
        }

        protected function setAttribute($attr, $v)
        {
            $this->attributes[$attr]=$v;
            return $this;
        }

        public function removeAttribute($attr)
        {
            unset($this->attributes[$attr]);
        }

        public function setId($value)
        {
            $this->setAttribute("id", $value);
        }

        public function setClass($value)
        {
            $this->setAttribute("class", $value);
        }
    }
