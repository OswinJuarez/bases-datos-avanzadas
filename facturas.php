<?php 
	class Facturacion{
		public $id;
		public $rfc;
		public $fecha;
		public $cliente; 
		public $desarrollador;

		public function __construct($id, $rfc, $fecha, $cliente, $desarrollador)
		{
			$this->id=$id;
			$this->rfc=$rfc;
			$this->fecha=$fecha;
			$this->cliente=$cliente;
			$this->desarrollador=$desarrollador;
		}
	}
?>