<?php
    abstract class classConexao{
        #Realizará a conexão com o banco de dados.
        protected function conectaDB(){
            try{
                $Con = new PDO("mysql:host=localhost;dbname=crud", "root", "");
                echo "Successful connection";
            }catch(PDOException $Erro){
                return $Erro->getMessage();
            }
        }
    }
?>