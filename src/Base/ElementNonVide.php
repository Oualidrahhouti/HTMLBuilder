<?php
    namespace html_builder\Base;
    use html_builder\Base\Element;

    abstract class ElementNonVide extends Element
    {
        private $elements=[];
        public function addElement(Noeud $e)
        {
            $this->elements[]=$e;
        }

        public function toHTML()
        {
            $str="<";
            $class=\get_class($this);
            $class=\explode("\\",$class);
            $str.=\strtolower($class[count($class)-1]);
            foreach($this->getAttributes() as $k=>$v)
                $str.=" $k\"$v\" ";
            $str.=">";
            foreach($this->elements as $e)
                $str.=$e->toHTML();

            $str="<";
            $class=\get_class($this);
            $class=\explode("\\",$class);
            $str.=\strtolower($class[count($class)-1]);
            $str.=">";
            
            return $str;
        }
    }