
<?php
    $xmlDoc = new DOMDocument();
    $xmlDoc->load("CFDi_A5.xml");
    $x = $xmlDoc->documentElement;

    $fp = fopen('datosf.txt', 'w');



    $Comprobante = $x -> getElementsByTagName('Comprobante');
    $Emisor = $x -> getElementsByTagName('Emisor');
    $DomicilioFiscal = $x -> getElementsByTagName('DomicilioFiscal');
    $ExpedidoEn = $x -> getElementsByTagName('ExpedidoEn');
    $RegimenFiscal = $x -> getElementsByTagName('RegimenFiscal');
    $Receptor = $x -> getElementsByTagName('Receptor');
    $Concepto = $x -> getElementsByTagName('Concepto');

echo "---------------------------------------------------------------- <BR>";
    
     
    foreach ($Emisor as $emi){
      echo $emi->getAttribute('nombre') . "<br>";
      fwrite($fp,  $emi->getAttribute('nombre'). PHP_EOL);
      echo $emi->getAttribute('rfc') . "<br>";
      fwrite($fp, $emi->getAttribute('rfc') . PHP_EOL);
    }
echo "---------------------------------------------------------------- <BR>";
    foreach ($DomicilioFiscal as $domi){
      echo $domi->getAttribute('calle') . "<br>";
      fwrite($fp, $domi->getAttribute('calle') . PHP_EOL);
      echo $domi->getAttribute('codigoPostal') . "<br>";
      fwrite($fp, $domi->getAttribute('codigoPostal') . PHP_EOL);
      echo $domi->getAttribute('colonia') . "<br>";
      fwrite($fp, $domi->getAttribute('colonia') . PHP_EOL);
      echo $domi->getAttribute('estado') . "<br>";
      fwrite($fp, $domi->getAttribute('estado') . PHP_EOL);
      echo $domi->getAttribute('localidad') . "<br>";
      fwrite($fp, $domi->getAttribute('localidad') . PHP_EOL);
      echo $domi->getAttribute('municipio') . "<br>";
      fwrite($fp, $domi->getAttribute('municipio') . PHP_EOL);
      echo $domi->getAttribute('noExterior') . "<br>";
      fwrite($fp, $domi->getAttribute('noExterior') . PHP_EOL);
      echo $domi->getAttribute('pais') . "<br>";
      fwrite($fp, $domi->getAttribute('pais') . PHP_EOL);
    }
echo "---------------------------------------------------------------- <BR>";
foreach ($ExpedidoEn as $domi){
      echo $domi->getAttribute('calle') . "<br>";
      fwrite($fp, $domi->getAttribute('calle') . PHP_EOL);
      echo $domi->getAttribute('codigoPostal') . "<br>";
      fwrite($fp, $domi->getAttribute('codigoPostal') . PHP_EOL);
      echo $domi->getAttribute('colonia') . "<br>";
      fwrite($fp, $domi->getAttribute('colonia') . PHP_EOL);
      echo $domi->getAttribute('estado') . "<br>";
      fwrite($fp, $domi->getAttribute('estado') . PHP_EOL);
      echo $domi->getAttribute('localidad') . "<br>";
      fwrite($fp, $domi->getAttribute('localidad') . PHP_EOL);
      echo $domi->getAttribute('municipio') . "<br>";
      fwrite($fp, $domi->getAttribute('municipio') . PHP_EOL);
      echo $domi->getAttribute('noExterior') . "<br>";
      fwrite($fp, $domi->getAttribute('noExterior') . PHP_EOL);
      echo $domi->getAttribute('pais') . "<br>";
      fwrite($fp, $domi->getAttribute('pais') . PHP_EOL);
    }
echo "---------------------------------------------------------------- <BR>";
foreach ($RegimenFiscal as $emi){
      echo $emi->getAttribute('Regimen') . "<br>";
      fwrite($fp, $emi->getAttribute('Regimen') . PHP_EOL);
      echo $emi->getAttribute('rfc') . "<br>";
      fwrite($fp, $emi->getAttribute('rfc') . PHP_EOL);
    }
echo "---------------------------------------------------------------- <BR>";
    foreach ($Receptor as $emi){
      echo $emi->getAttribute('nombre') . "<br>";
      fwrite($fp, $emi->getAttribute('nombre') . PHP_EOL);
      echo $emi->getAttribute('rfc') . "<br>";
      fwrite($fp, $emi->getAttribute('rfc') . PHP_EOL);
    }
echo "---------------------------------------------------------------- <BR>";
    foreach ($Concepto as $domi){
      echo $domi->getAttribute('cantidad') . "<br>";
      fwrite($fp, $domi->getAttribute('cantidad') . PHP_EOL);
      echo $domi->getAttribute('unidad') . "<br>";
      fwrite($fp, $domi->getAttribute('unidad') . PHP_EOL);
      echo $domi->getAttribute('noIdentificacion') . "<br>";
      fwrite($fp, $domi->getAttribute('noIdentificacion') . PHP_EOL);
      echo $domi->getAttribute('descripcion') . "<br>";
      fwrite($fp, $domi->getAttribute('descripcion') . PHP_EOL);
      echo $domi->getAttribute('valorUnitario') . "<br>";
      fwrite($fp, $domi->getAttribute('valorUnitario') . PHP_EOL);
      echo $domi->getAttribute('importe') . "<br>";
      fwrite($fp, $domi->getAttribute('importe') . PHP_EOL);

    }

      echo $x->getAttribute('version') . "<br>";
      fwrite($fp, $x->getAttribute('version') . PHP_EOL);
      echo $x->getAttribute('serie') . "<br>";
      fwrite($fp, $x->getAttribute('serie') . PHP_EOL);
      echo $x->getAttribute('folio') . "<br>";
      fwrite($fp, $x->getAttribute('folio') . PHP_EOL);
      echo $x->getAttribute('fecha') . "<br>";
      fwrite($fp, $x->getAttribute('fecha') . PHP_EOL);
      echo $x->getAttribute('sello') . "<br>";
      fwrite($fp, $x->getAttribute('sello') . PHP_EOL);
      echo $x->getAttribute('certificado') . "<br>";
      fwrite($fp, $x->getAttribute('certificado') . PHP_EOL);
      echo $x->getAttribute('formaDePago') . "<br>";
      fwrite($fp, $x->getAttribute('formaDePago') . PHP_EOL);
      echo $x->getAttribute('metodoDePago') . "<br>";
      fwrite($fp, $x->getAttribute('metodoDePago') . PHP_EOL);
      echo $x->getAttribute('LugarExpedicion') . "<br>";
      fwrite($fp, $x->getAttribute('LugarExpedicion') . PHP_EOL);
      echo $x->getAttribute('noCertificado') . "<br>";
      fwrite($fp, $x->getAttribute('noCertificado') . PHP_EOL);
      echo $x->getAttribute('tipoDeComprobante') . "<br>";
      fwrite($fp, $x->getAttribute('tipoDeComprobante') . PHP_EOL);
      echo $x->getAttribute('descuento') . "<br>";
      fwrite($fp, $x->getAttribute('descuento') . PHP_EOL);
      echo $x->getAttribute('subTotal') . "<br>";
      fwrite($fp, $x->getAttribute('subTotal') . PHP_EOL);
      echo $x->getAttribute('total') . "<br>";  
      fwrite($fp, $x->getAttribute('total') . PHP_EOL);
    

echo "---------------------------------------------------------------- <BR>";

fclose($fp);

?>

<html>
  <head>
    <script>
      alert("ARCHIVO datosf.txt generado con exito.");
    </script>
  </head>
</html>