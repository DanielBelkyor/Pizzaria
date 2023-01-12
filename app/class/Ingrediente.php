<?php

class Ingrediente
{
    protected $id;

    protected $ingrediente;

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
	public function getIngrediente() {
		return $this->ingrediente;
	}
	
	/**
	 * @param mixed $ingrediente 
	 * @return self
	 */
	public function setIngrediente($ingrediente): self {
		$this->ingrediente = $ingrediente;
		return $this;
	}
}