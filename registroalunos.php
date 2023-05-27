<?php

$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'estudo';

$pdo = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);


$nome = $_POST['nomealuno'];
$materia = $_POST['materia'];
$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$nota3 = $_POST['nota3'];
$media = ($nota1 + $nota2 + $nota3)/3;
$media = number_format($media, 1);

//echo $nome.'<br>';
//echo $nota1.'<br>';
//echo $nota2.'<br>';
//echo $nota3.'<br>';
//echo $media;

$inserir = "INSERT INTO alunos values('$nome','$materia','$nota1','$nota2','$nota3','$media')";
$result = $pdo->query($inserir);

if ($result = 1) {
    header('location: index.html');
} else {
   echo "erro";
}


?>