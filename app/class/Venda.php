<?php

class Venda{

    protected $id;
    protected $clienteId;
    protected $DataHoraVenda;
    protected $valorDesconto;


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
	public function getClienteId() {
		return $this->clienteId;
	}

	/**
	 * @param mixed $clienteId 
	 * @return self
	 */
	public function setClienteId($clienteId): self {
		$this->clienteId = $clienteId;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getDataHoraVenda() {
		return $this->DataHoraVenda;
	}
	
	/**
	 * @param mixed $DataHoraVenda 
	 * @return self
	 */
	public function setDataHoraVenda($DataHoraVenda): self {
		$this->DataHoraVenda = $DataHoraVenda;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getValorDesconto() {
		return $this->valorDesconto;
	}
	
	/**
	 * @param mixed $valorDesconto 
	 * @return self
	 */
	public function setValorDesconto($valorDesconto): self {
		$this->valorDesconto = $valorDesconto;
		return $this;
	}
}