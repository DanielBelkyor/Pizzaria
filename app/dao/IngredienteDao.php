<?php

class IngredienteDao{

    public function save(Ingrediente $ingrediente){

        $sql = "
        insert into ingrediente(no_ingrediente)
        values('".$ingrediente->getIngrediente()."')
        ";

        Conexao::getConexao()->query($sql);
       // print_r($sql);
    }

    public function getIngredientesPizza(){

    }

    public function getIngredientes()
    {
        $ingredientes = [];

        $sql = "SELECT * from ingrediente";

        $recordSet = Conexao::getConexao()->query($sql);

        while($row = $recordSet->fetch_assoc()) {
            $ingredientes[] = $row;
        }
        return $ingredientes;
    }
    
    public function delete($id){
        $sql = "
        delete from ingrediente where id = $id";

        Conexao::getConexao()->query($sql);

    }
}