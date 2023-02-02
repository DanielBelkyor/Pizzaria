<?php

include "config/inicializar.php";


$ingrediente = new Ingrediente();

$ingrediente->setId(1);
$ingrediente->setIngrediente('Pimenta');

$ingrediente1 = new Ingrediente();

$ingrediente1->setId(2);
$ingrediente1->setIngrediente('Calabresa');

$pizza = new Pizza();
$pizza->setId(1);
$pizza->setNome('Pizza de calabresa');
$pizza->setIngredientes($ingrediente);
$pizza->setIngredientes($ingrediente1);

var_dump($pizza->getIngredientes());


