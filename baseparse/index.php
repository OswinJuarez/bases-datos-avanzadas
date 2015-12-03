<?php
    $xmlDoc = new DOMDocument();
    $xmlDoc->load("CFDi_A5.xml");
    $x = $xmlDoc->documentElement;

    $Comprobante = $x -> getElementsByTagName('Comprobante');
    $Emisor = $x -> getElementsByTagName('Emisor');
    $DomicilioFiscal = $x -> getElementsByTagName('DomicilioFiscal');
    $ExpedidoEn = $x -> getElementsByTagName('ExpedidoEn');
    $RegimenFiscal = $x -> getElementsByTagName('RegimenFiscal');
    $Receptor = $x -> getElementsByTagName('Receptor');
    $Concepto = $x -> getElementsByTagName('Concepto');



echo "---------------------------------------------------- <BR>";
    foreach ($Emisor as $emi){
      echo $emi->getAttribute('nombre') . "<br>";
      echo $emi->getAttribute('rfc') . "<br>";
    }
echo "---------------------------------------------------- <BR>";
    foreach ($DomicilioFiscal as $domi){
      echo $domi->getAttribute('calle') . "<br>";
      echo $domi->getAttribute('codigoPostal') . "<br>";
      echo $domi->getAttribute('colonia') . "<br>";
      echo $domi->getAttribute('estado') . "<br>";
      echo $domi->getAttribute('localidad') . "<br>";
      echo $domi->getAttribute('municipio') . "<br>";
      echo $domi->getAttribute('noExterior') . "<br>";
      echo $domi->getAttribute('pais') . "<br>";
    }
echo "---------------------------------------------------- <BR>";
foreach ($ExpedidoEn as $domi){
      echo $domi->getAttribute('calle') . "<br>";
      echo $domi->getAttribute('codigoPostal') . "<br>";
      echo $domi->getAttribute('colonia') . "<br>";
      echo $domi->getAttribute('estado') . "<br>";
      echo $domi->getAttribute('localidad') . "<br>";
      echo $domi->getAttribute('municipio') . "<br>";
      echo $domi->getAttribute('noExterior') . "<br>";
      echo $domi->getAttribute('pais') . "<br>";
    }
echo "---------------------------------------------------- <BR>";
foreach ($RegimenFiscal as $emi){
      echo $emi->getAttribute('Regimen') . "<br>";
      echo $emi->getAttribute('rfc') . "<br>";
    }
echo "---------------------------------------------------- <BR>";
    foreach ($Receptor as $emi){
      echo $emi->getAttribute('nombre') . "<br>";
      echo $emi->getAttribute('rfc') . "<br>";
    }
echo "---------------------------------------------------- <BR>";
    foreach ($Concepto as $domi){
      echo $domi->getAttribute('cantidad') . "<br>";
      echo $domi->getAttribute('unidad') . "<br>";
      echo $domi->getAttribute('noIdentificacion') . "<br>";
      echo $domi->getAttribute('descripcion') . "<br>";
      echo $domi->getAttribute('valorUnitario') . "<br>";
      echo $domi->getAttribute('importe') . "<br>";
    }
echo "---------------------------------------------------- <BR>";
    
      echo $x->getAttribute('version') . "<br>";
      echo $x->getAttribute('serie') . "<br>";
      echo $x->getAttribute('folio') . "<br>";
      echo $x->getAttribute('fecha') . "<br>";
      echo $x->getAttribute('sello') . "<br>";
      echo $x->getAttribute('certificado') . "<br>";
      echo $x->getAttribute('formaDePago') . "<br>";
      echo $x->getAttribute('metodoDePago') . "<br>";
      echo $x->getAttribute('LugarExpedicion') . "<br>";
      echo $x->getAttribute('noCertificado') . "<br>";
      echo $x->getAttribute('tipoDeComprobante') . "<br>";
      echo $x->getAttribute('descuento') . "<br>";
      echo $x->getAttribute('subTotal') . "<br>";
      echo $x->getAttribute('total') . "<br>";  
      
    



