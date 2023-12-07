<?php
session_start();
$koneksi=mysqli_connect("localhost","root","","chat_db");

echo $msg=$_POST["msg"];
$session_id=session_id();

$query=mysqli_query($koneksi,"insert into messages(session_id,body) values('$session_id','$msg')");
?>