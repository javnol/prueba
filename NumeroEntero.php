<?php
	class NumeroEntero {
		// Z = {...,-8,...,0,1,...}
		private $z;
		public function __construct($ne){
			$this->z = $ne;
		}
		public function obtNumeroEntero(){
			return $this->z;
		} 
	}
?>