<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Contador de Visitas</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="Estilo_Edimar.css" rel="stylesheet" type="text/css">
</head>

<body leftmargin="0" topmargin="0" rightmargin="0" marginheight="0" marginwidth="0">

<?php
 
  $destino = "numero.dat";
  $abrir = fopen($destino,"r");
  $cuenta = trim(fread($abrir,filesize($destino)));
  

  if ($cuenta != "") $cuenta++;
  else $cuenta = 1;
  @fclose($abrir);
  $abrir = fopen($destino,"w");
  @fputs($abrir,$cuenta);



  for($i=0;$i<strlen($cuenta);$i++) {
    $imagen = substr($cuenta,$i,1);
    $contador .= "<img alt='$imagen ' src='$imagen.gif'>";
  }
  @fclose($abrir);
  print $contador;
?>
</body>
</html>