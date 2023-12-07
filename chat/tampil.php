<?php

session_start();

$koneksi=mysqli_connect("localhost","root", "", "chat_db");

$query=mysqli_query($koneksi, "select * from messages order by created_at desc");


while ($data=mysqli_fetch_array($query)) { 
echo "<tr>"; 
echo "<td width='20%'>".$data['session_id']."</td>";
echo "<td width='5%'>:</td>";
echo "<td>".$data['body']."</td>";
echo "</tr>";

}



?>