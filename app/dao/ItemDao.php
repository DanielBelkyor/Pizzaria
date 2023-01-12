<?php

class ItemDao{

    public function save(Item $item){

        $sql = "
        insert into item(venda_id, pizza_id, vl_item)
        values('".$item->getPizzaId()."'".$item->getValorItem()."".$item->getVendaId().")
        ";

        Conexao::getConexao()->query($sql);
       // print_r($sql);
    }


}