<!DOCTYPE html>
<html>
<body>
<!-- 
 -->
 <form action="" method="$_GET">
    bayar: <input type="text" name="uang" /><br>
    <input type="submit"/>
</form>
 
 <?php
 if($_GET["uang"] >= 5000){
     echo"uang anda cukup";
     echo"__";
     echo"uang anda Rp:" ,$_GET["uang"];
 }else{
     echo"uang anda kurang";
     echo"__";
     echo"uang anda Rp:" ,$_GET["uang"];
 }

?>
</html>