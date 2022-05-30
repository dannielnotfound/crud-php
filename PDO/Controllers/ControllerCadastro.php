<?php
include("../Includes/Variaveis.php");
include("../Class/ClassCrud.php");
//echo "$Id<br> $Nome<br> $Genero<br> $Cidade <br> $Email <br>";
$Crud = new ClassCrud();
$Crud->insertDB("cadastro", "?, ?, ?, ?, ?", array($Id, $Nome, $Genero, $Cidade, $Email));
include("../Includes/modal.php");
?>