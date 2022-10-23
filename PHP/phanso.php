<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            class PhanSo{
                private $tu;
                private $mau;
                public function __construct($t, $m){
                    $this->tu=$t;
                    $this->mau=$m; 
                }
                public function gan($p){
                    $tem=new PhanSo(1,2);
                    $tem->tu=11;
                    $tem->mau=15;
                    //$this->tu=$p->tu;
                    //$this->mau=$p->mau;
                    return $tem; 
                }
                public function set($t,$m){
                    $this->tu=$t;
                    $this->mau=$m;
                } 
                public function in(){
                    echo $this->tu."/".$this->mau;
                }
                public function donGian(){
                    $t= $this->tu;
                    $m= $this->mau;
                    while($t!=$m){
                        if($t>$m)
                            $t=$t-$m;
                        else
                            $m=$m-$t;
                    }
                    $this->tu= $this->tu/$m;
                    $this->mau= $this->mau/$m;
                }
                public function tong($p){
                    $phansotam=new PhanSo(1,2);
                    $phansotam->tu=$this->tu*$p->mau+$this->mau*$p->tu;
                    $phansotam->mau=$this->mau*$p->mau;
                    return $phansotam; 
                }
                 public function tru($p){
                    //$phansotam=new PhanSo(1,2);
                    //$phansotam->tu=$this->tu*$p->mau-$this->mau*$p->tu;
                    //$phansotam->mau=$this->mau*$p->mau;
                    $tu=$this->tu*$p->mau-$this->mau*$p->tu;
                    $mau=$this->mau*$p->mau;
                    $phansotam=new PhanSo($tu,$mau);
                    return $phansotam; 
                }
                
            }
           ?>
    </body>
</html>
