<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Contador de Visitas</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="Estilo_Edimar.css" rel="stylesheet" type="text/css">
</head>

<body leftmargin="0" topmargin="0" rightmargin="0" marginheight="0" marginwidth="0">
<?php
 
  $arch = "visitas.dat";
  $abrir = fopen($arch,"r");
  $visita = trim(fread($abrir,filesize($arch)));
  

  if ($visita != "") $visita++;
  else $visita= 1;
  @fclose($abrir);
  $abrir = fopen($arch,"w");
  @fputs($abrir,$visita);



  for($i=0;$i<strlen($visita);$i++) {
    $imagen = substr($visita,$i,1);
    $contV .= "<img alt='$imagen ' src='Imagenes/$imagen.gif'>";
  }
  @fclose($abrir);
  print $contV;
?>
</body>
</html>
