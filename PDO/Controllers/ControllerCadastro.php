<?php

include("../Includes/Variaveis.php");
include("../Class/ClassCrud.php");
echo "$Id<br> $Nome<br> $Genero<br> $Cidade";
$Crud = new ClassCrud();
$Crud->insertDB("cadastro", "?, ?, ?, ?", array($Id, $Nome, $Genero, $Cidade));
echo "Cadastro realizado com sucesso.";


?>