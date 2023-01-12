<?php

class Pizza{
    protected $id;
    protected $nome;
	protected $description;
    protected $valor;
    protected $DataHora;


	/**
	 * @return mixed
	 */
	public function getId() {
		return $this->id;
	}
	
	/**
	 * @param mixed $id 
	 * @return self
	 */
	public function setId($id): self {
		$this->id = $id;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getNome() {
		return $this->nome;
	}

	/**
	 * @param mixed $nome 
	 * @return self
	 */
	public function setNome($nome): self {
		$this->nome = $nome;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getValor() {
		return $this->valor;
	}
	
	/**
	 * @param mixed $valor 
	 * @return self
	 */
	public function setValor($valor): self {
		$this->valor = $valor;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getDataHora() {
		return $this->DataHora;
	}
	
	/**
	 * @param mixed $DataHora 
	 * @return self
	 */
	public function setDataHora($DataHora): self {
		$this->DataHora = $DataHora;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * @param mixed $description 
	 * @return self
	 */
	public function setDescription($description): self {
		$this->description = $description;
		return $this;
	}
}