<?php
	// La clase NumeroEntero representa el concepto abstracto de número entero, el cual se representa por 
	// el conjunto Z = {...,-8,...,0,1,...}
	class NumeroEntero {
		private $z;	// variable que almacena un número entero que pertenece al conjunto Z
		public function __construct($ne){
			$this->z = $ne;
		}
		public function obtNumeroEntero(){
			return $this->z;
		} 
	}
?>