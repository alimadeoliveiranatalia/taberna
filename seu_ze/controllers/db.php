<?php
$mysqli = new mysqli('localhost','root','123456','TABERNA');
if ($mysqli->connect_error) {
    die('Erro de Conecxão ('.$mysqli->connect_errno.')'.$mysqli
    ->connect_error);
}
else{
    echo"<center><h1>Conectada :) </h1></center>";
}

?>