<?php
    namespace html_builder\Base;
    abstract class ElementVide extends Element
    {
        public function toHTML()
        {
            $str="<";
            $class=\get_class($this);
            $class=\explode("\\",$class);
            $str.=\strtolower($class[count($class)-1]);

            foreach($this->getAttributes() as $k=>$v)
                $str.= " $k=\"$v\"";
            $str.="/>";
            return $str;
        }
    }