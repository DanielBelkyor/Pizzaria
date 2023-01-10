<?php

class Usuario{
    private $id;
    private $nome;

    function getId(){
        return $this->id;
    }

    function setId($id){
        $this->$id = $id;
        return $this;
    }
}