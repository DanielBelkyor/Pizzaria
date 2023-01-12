<?php

class VendaDao{

    public function save(Venda $venda){

        $sql = "
        insert into venda(cliente_id, dt_venda, vl_desconto)
        values(".$venda->getClienteId().",".$venda->getDataHoraVenda().",".$venda->getValorDesconto().")
        ";

        Conexao::getConexao()->query($sql);
       // print_r($sql);
    }


}