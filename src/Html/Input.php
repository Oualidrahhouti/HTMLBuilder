<?php
    namespace html_builder\Html;
    
    use html_builder\Base\ElementVide;

    class Input extends ElementVide{

        public function setType($value)
        {
            $value=strtolower($value);
            $allowedTypes=["test","password","radio","checkbox","file","reset","button","submit"];
            if (in_array($value, $allowedTypes))
                $this->setAttribute("type", $value);

        }
        public function setName($value)
        {
            $this->setAttribute("name",$value);
        }

        public function setPlaceHolder($value)
        {
            $this->setAttribute("placeholder", $value);
        }
    }
