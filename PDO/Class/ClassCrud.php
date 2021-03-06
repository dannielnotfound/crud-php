<?php

    include("ClassConexao.php");
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
                for($i = 1; $i <= $this->Contador; $i++){
                    $this->Crud->bindValue($i, $Parametros[$i-1]); #Vincula um valor para um parâmetro de um array
                }
            }
            $this->Crud->execute();
        }   
        
        #Contador de parâmetros
        private function countParametros($Parametros){
            $this->Contador=count($Parametros);
        }

        #Inserção no Banco de Dados
        public function insertDB($Tabela, $Condicao, $Parametros){
            $this->preparedStatements("insert into {$Tabela} values ({$Condicao})", $Parametros);
            return $this->Crud;
        }

        #Seleção no Banco de Dados
        public function selectInDB($Campos, $Tabela, $Condicao, $Parametros){
            $this->preparedStatements("select {$Campos} from {$Tabela} {$Condicao}", $Parametros);
            return $this->Crud;
        }

        #Deletar Dados no DB
        public function deleteDB($Tabela, $Condicao, $Parametros){
            $this->preparedStatements("delete from {$Tabela} where {$Condicao}", $Parametros);
            return $this->Crud;
        }
    }
?>