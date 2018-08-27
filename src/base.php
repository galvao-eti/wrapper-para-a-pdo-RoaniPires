<?php

require 'config.php';

declare(strict_types = 1);

class Base extends Config{
    public $objetoPDO;

    function __construct( string $usuario, string $senha, string $dsn, $objetoPDO)
    {
        $this->usuario = $usuario;
        $this->senha = $senha;
        $this->dsn = $dsn;
        $this->$objetoPDO = $objetoPDO;       

    }

    public function conectar(){
        $objetoPDO = new PDO($dsn, $usuario, $senha);
    }

    public function preparar(){
        $stmt = $dbn->prepare("SELECT * FROM categoria");
    }

    public function desconectar(){
        $objetoPDO = NULL;
    }

}

?>
