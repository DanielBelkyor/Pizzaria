<?php

include("../config/include.php");

/*
$pizza = new Pizza();

$pizza->setDataHora(date("y-m-d"));
$pizza->setNome("calabresa");
$pizza->setValor(25);
$pizza->setDescription("boa");

//echo $pizza->getDataHora();

//print_r($pizza);
/*/

$pizzaDao = new PizzaDao();

$result = $pizzaDao->getTodas();

foreach($result as $pizza)
{
    echo "<a href='test.php?id=".$pizza->getId()."' >".$pizza->getNome() . "</a><br>";
}

if(isset($_GET['id'])){

    $pizza =  $pizzaDao->getPizzaId($_GET['id']);
    echo $pizza->getNome();

}