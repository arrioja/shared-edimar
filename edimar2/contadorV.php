<?php

  $Arch = "visitas.dat";
  $abrir = fopen($Arch,"r");
  $cont = trim(fread($abrir,filesize($Arch)));

  if ($cont != "") $cont++; else $cont = 1;
  @fclose($abrir);
  $abrir = fopen($Arch,"w");
  @fputs($abrir,$Arch);

  for($i=0;$i<strlen($cont);$i++) {
    $imagen = substr($cont,$i,1);
    $contadorV .= "<img alt='$imagen ' src='$imagen.gif'>";
  }
  @fclose($abrir);
 echo $contadorV;
  }
?>
