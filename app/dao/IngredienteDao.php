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


}