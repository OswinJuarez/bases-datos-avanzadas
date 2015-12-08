<?php
class Emisor{
	public $rfc_emisor;
	public $nombre_emisor;
}
class Receptor{
	public $rfc_receptor;
	public $nombre_receptor;
}
class Direccion{
	public $direccion;
	public $municipio;
	public $estado;
	public $codigopostal;
	public $pais;
}
class Concepto{
	public $id_concepto;
	public $importe;
	public $sub_total;
	public $descuento;
	public $total;
}
class Detalle_Concepto{
	public $id_detalle;
	public $precio_unitario;
	public $cantidad;
	public $unidad;
	public $descripcion;
}
class Impuesto{
	public $id_impuesto;
	public $tipo;
	public $nombre_impuesto
}
class Metodo_Pago{
	public $id_metodo_pago;
	public $metodo_pago;
	public $forma_pago;
}
class Factura{
    public $id_factura;
}
class Complemento_CFDI{
	public $id_CFDI;
	public $version;
	public $fecha_emision;
	public $fecha_certificado;
}
?>