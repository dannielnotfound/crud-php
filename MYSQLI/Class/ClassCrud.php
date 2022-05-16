<?php
    class ClassCrud extends ClassConexao{
        #Atributos
        private $Crud;
        private $Contador;
        private $Resultado;

        #Preparação das declarativas
        private function preparedStatement($Query, $Tipos, $Parametros){
            $this->countParametros($Parametros);

            $Con = $this->conectaDB();
            $this->Crud->$Con->Prepare($Query);
            if($this->Contador >0){
                $CallParametros = [];
                foreach($Parametros as $Key => $Parametro){
                    $CallParametros[$Key] = &$Parametro[$Key];
                }
                array_unshift($CallParametros, $Tipos);
                call_user_func_array(array($this->Crud, 'bind_param'), $CallParametros);
            }
            $this->Crud->execute();
            $this->Resultado=$this->Crud;
        }


        #Contador de parâmetros
        private function countParametros($Parametros){
            $this->Contador=count($Parametros);
        }
    }
?>
