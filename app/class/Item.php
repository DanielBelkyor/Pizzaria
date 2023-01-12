<?php

class Item{

    protected $id;
    protected $vendaId;
    protected $pizzaId;
    protected $valorItem;

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
	public function getVendaId() {
		return $this->vendaId;
	}

	/**
	 * @param mixed $vendaId 
	 * @return self
	 */
	public function setVendaId($vendaId): self {
		$this->vendaId = $vendaId;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getPizzaId() {
		return $this->pizzaId;
	}
	
	/**
	 * @param mixed $pizzaId 
	 * @return self
	 */
	public function setPizzaId($pizzaId): self {
		$this->pizzaId = $pizzaId;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getValorItem() {
		return $this->valorItem;
	}
	
	/**
	 * @param mixed $valorItem 
	 * @return self
	 */
	public function setValorItem($valorItem): self {
		$this->valorItem = $valorItem;
		return $this;
	}
}