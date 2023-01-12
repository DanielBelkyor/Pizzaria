<?php

class PizzaDao{

    public function save(Pizza $pizza){

        $sql = "
        insert into pizza(no_pizza, de_pizza, vl_pizza, dt_cadastro)
        values('".$pizza->getNome()."','".$pizza->getDescription()."',".$pizza->getValor().",'".$pizza->getDataHora()."')
        ";

        Conexao::getConexao()->query($sql);
       // print_r($sql);
    }
    
    public function update(Pizza $pizza){
        $sql = "
        update pizza set
        no_pizza = '" . $pizza->getNome() . "',
        vl_pizza = " . $pizza->getValor() . ",
        de_pizza = '" . $pizza->getDescription() . "'
        where id = " . $pizza->getId() . "
        ";

        Conexao::getConexao()->query($sql);
    }

    public function getPizzaId($IdPizza):Pizza
    {
        $pizza = new Pizza();

        $sql = "SELECT * from pizza where id =".$IdPizza;

        $recordSet = Conexao::getConexao()->query($sql);

        if($row = $recordSet->fetch_assoc())
        {
            $pizza->setDataHora($row['dt_cadastro']);
            $pizza->setDescription($row['de_pizza']);
            $pizza->setId($row['id']);
            $pizza->setNome($row['no_pizza']);
            $pizza->setValor($row['vl_pizza']);
        }

        return $pizza;

    }

    public function getTodas()
    {
        $pizzas  = [];

        $sql = "SELECT * from pizza ";

        $recordSet = Conexao::getConexao()->query($sql);
 
        while ($row = $recordSet->fetch_assoc()) {

            $pizza = new Pizza();
            $pizza->setDataHora($row['dt_cadastro']);
            $pizza->setDescription($row['de_pizza']);
            $pizza->setId($row['id']);
            $pizza->setNome($row['no_pizza']);
            $pizza->setValor($row['vl_pizza']);

            $pizzas[] = $pizza;
        }

        return $pizzas;
        
    }

}