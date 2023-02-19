<?php
    namespace html_builder\Base;
    use html_builder\Base\Element;

    abstract class ElementNonVide extends Element
    {
        private $elements=[];
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
            foreach ($this->elements as $e)
                $str.=$e->render();

            $str="<";
            $str.=$this->getClassName();
            $str.=">";
            
            return $str;
        }
    }