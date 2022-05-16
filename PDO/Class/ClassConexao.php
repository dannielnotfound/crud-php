<?php
    abstract class ClassConexao{
        #Realizará a conexão com o banco de dados.
        protected function conectaDB(){
            try{
                $Con = new PDO("mysql:host=localhost;dbname=crud;","root","");
                $Con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $Con;
                echo "Successful connection";
            }catch(PDOException $Erro){
                return $Erro->getMessage();
                echo "WARNING ". $Erro;
            }
        }
    }
