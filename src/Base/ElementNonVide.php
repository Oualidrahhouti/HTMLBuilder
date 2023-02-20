<?php
    namespace html_builder\Base;

    abstract class ElementNonVide extends Element
    {
        private $elements;

        public function __construct(array $attr = null,array $elements=null)
        {
            parent::__construct($attr);
            $this->elements=$elements;
            if (is_null($this->elements))
                $this->elements=[];
        }

        public function addElement(Node $e)
        {
            $this->elements[]=$e;
        }

        public function getElements()
        {
            return $this->elements;
        }

        public function render()
        {
            $str="<";

            $str.=$this->getClassName();
            foreach ($this->getAttributes() as $k => $v)
                $str.=" $k\"$v\" ";
            $str.=">";
            foreach ($this->getElements() as $e)
                $str.=$e->render();

            $str.="</";
            $str.=$this->getClassName();
            $str.=">";
            
            return $str;
        }
    }