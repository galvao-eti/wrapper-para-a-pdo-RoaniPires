<?php

class Config {
	public $tipo;
	public $host;
	public $porta;
	public $base;
	public $usuario;
	public $senha;
	public $dsn = 'mysql:host=localhost;dbname=turma3';

	function __construct(string $tipo, string $host, string $porta, string $base, string $usuario, string $senha, string $dsn)
	{
		$this->tipo = $tipo;
		$this->host = $host;
		$this->porta = $porta;
		$this->base = $base;
		$this->usuario = $usuario;
		$this->senha = $senha;
		$this->dsn = $dsn;
	}

}



