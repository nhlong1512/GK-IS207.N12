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
            include_once 'HinhTruTron.php';
            $h1 = new HinhTruTron(2,3);
            echo "Thể tích : ".$h1->TheTich();
        ?>
    </body>
</html>
