<?php


$servidor = "127.0.0.1";
$usuario =  "root";
$senha =  "root";
$dbname = "projeto";

$link = mysqli_connect("127.0.0.1", "root", "", "projeto");

$result_aluno = "SELECT DISTINCT email * FROM aluno";
$resultado_usuario = mysqli_query($link, $result_aluno);
//$row_usuario = mysqli_fetch_assoc($resultado_usuario);
//var_dump($row_usuario);
while($row_usuario = mysqli_fetch_assoc($resultado_usuario))

var_dump($row_usuario)
//echo "email :" $row_usuario['email']."<br>"; 
?>