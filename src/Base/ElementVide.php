<?php
    namespace html_builder\Base;
    abstract class ElementVide extends Element
    {
        public function render()
        {
            $str="<";
            $str.=$this->getClassName();
            foreach ($this->getAttributes() as $k => $v)
                $str.= " $k=\"$v\"";
            $str.="/>";
            return $str;
        }
    }