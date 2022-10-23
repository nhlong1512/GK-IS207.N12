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
        <form method="post" action="#">
            <table border ='0'>
            <tr>
                <td>
                    <table border='0'>
                        <tr>
                        <td>
                            Tử số 1:<input type="text" name="tu1"><br><br>
                            Mẫu số 1:<input type="text" name="mau1"><br><br>
                            Tử số 2:<input type="text" name="tu2"><br><br>
                            Mẫu số 2:<input type="text" name="mau2"><br><br>
                        <input type="Submit" name='Submit' value=" = "><br><br>
                        </td></tr>  
                    </table>
                </td> 
                <td>
                    <table border="0">
                        <tr>
                            <td>
                                Phép tính <br>
                                Cộng <input type="radio" name="pheptinh" value="1" checked><br>
                                Trừ <input type="radio" name="pheptinh" value="2"><br>
                                Nhân <input type="radio" name="pheptinh" value="3"><br>
                                Chia <input type="radio" name="pheptinh" value="4"><br>
                                
                            </td>
                        </tr>
                    </table>
                </td> 
            </tr>
        </table>    
        </form>
        <?php
          if(isset($_POST['Submit'])&&($_POST['Submit']==" = "))
          {
              $pheptinh=$_POST["pheptinh"];
              $tu1=(int)$_POST["tu1"];
              $mau1=(int)$_POST["mau1"];
              $tu2=(int)$_POST["tu2"];
              $mau2=(int)$_POST["mau2"];
              include "phanso.php";
              $ps1=new PhanSo($tu1,$mau1);
              $ps2=new PhanSo($tu2,$mau2);
              
              if($pheptinh=="1")
                $kq=$ps1->tong($ps2);
              if($pheptinh=="2")
                $kq=$ps1->tru($ps2); 
              $kq->in();
          }
        ?>
    </body>
</html>
