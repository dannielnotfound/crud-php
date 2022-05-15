<?php
    abstract class classConexao{
        #Realizará a conexão com o banco de dados.
        protected function conectaDB(){
            try{
               $Con = new mysqli("localhost", "root", "", "crud");
               return $Con;
            }catch(Exception $Erro){
                $Erro->getMessage();   
            }
        }
    }
?>