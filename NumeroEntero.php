<?php
	// La clase NumeroEntero representa el concepto abstracto de n�mero entero, el cual se representa por 
	// el conjunto Z = {...,-8,...,0,1,...}
	class NumeroEntero {
		private $z;	// variable que almacena un n�mero entero que pertenece al conjunto Z
		public function __construct($ne){
			$this->z = $ne;
		}
		public function obtNumeroEntero(){
			return $this->z;
		} 
	}
?>