<?php
    namespace html_builder\Base;
    abstract class Element extends Noeud
    {
        protected $attributes=[];
        public function __construct(array $attr)
        {
            $this->attributes=$attr;
        }

        public function getAttributes()
        {
            return $this->attributes;
        }

        public function getAttribute(string $attr)
        {
            if(isset($attributes[$attr]))
                return $this->attributes[$attr];
        }

        public function setAttribute($attr,$v)
        {
            $this->attributes[$attr]=$v;
            return $this;
        }
    }
