<?php

class Conexao{

    public  static $link;

    public static function getConexao(){

        self::$link = mysqli_connect(DB_HOST,DB_USUARIO,DB_SENHA,DB_BANCO);
 
        if(!self::$link )
        {
          die('Não foi possível conectar ao banco de:' .mysqli_error());
        }            
        return self::$link ;

    }

    public function __destruct(){
      self::$link->close();
    }

}