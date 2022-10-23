<?php
    include_once "HinhTron.php";
    class HinhTruTron extends HinhTron{
        private $h;
        public function __construct($r,$h) {
            parent::__construct($r);
            $this->h = $h;
        }
        public function TheTich(){
            return parent::DienTich()*$this->h;
        }
        
    }
?>