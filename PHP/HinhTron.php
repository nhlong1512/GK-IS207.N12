<?php
    class HinhTron{
        private $r;
        public function __construct($r) {
            $this->r = $r;
        }
        public function DienTich()
        {
            return pi()*$this->r*$this->r;
        }
        public function ChiVi(){
            return pi()*$this->r*2;
        } 
    }
?>
