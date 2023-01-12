<?php

class ClienteDao{

    public function save(Cliente $cliente){

        $sql = "
        insert into cliente(no_cliente, nu_telefone)
        values('".$cliente->getNome()."',".$cliente->getNumero().")
        ";

        Conexao::getConexao()->query($sql);
       // print_r($sql);
    }

    public function getClienteId($id)
    {
        $cliente = new Cliente();
 
    }


}