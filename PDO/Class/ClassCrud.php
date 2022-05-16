<?php
    class ClassCrud extends ClassConexao{

        #Atributos
        private $Crud;
        private $Contador;
        
        #Preparação das declarativas
        private function preparedStatements($Query, $Parametros){
            $this->countParametros($Parametros);
            $this->Crud=$this->conectaDB()->prepare($Query);
            #Bind Value
            if($this->Contador > 0){
                for($i = 0; $i <= $this->Contador; $i++ ){
                    $this->Crud->bindValue($i, $Parametros[$i-1]); #Vincula um valor para um parâmetro de um array
                }
            }
            $this->Crud->execute();
        }   
        
        #Contador de parâmetros
        private function countParametros($Parametros){
            $this->Contador=count($Parametros);
        }
    }
?>