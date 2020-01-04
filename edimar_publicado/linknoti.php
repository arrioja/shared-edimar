<?php include('conexion.php');
     
 /*  $query="SELECT  Edimar  as Permiso FROM permisopag";
   $reg_Per=mysql_query($query, $conexion) or die(mysql_error()); $rowPer = mysql_fetch_assoc($reg_Per);*/
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$query_reg_most = "SELECT Cod, Titulo, LEFT(Resumen,15) as resumen,  DATE_FORMAT(Fecha,'%d/%m/%Y') as FechaM, Fecha FROM noticia where
                    Tipo='N'and Idioma='".$id."' order by Fecha Desc limit 10";
 $reg_most = mysql_query($query_reg_most, $conexion) or die(mysql_error());
 //$rowEdimar = mysql_fetch_assoc($reg_most);
 $totalRows_reg_most = mysql_num_rows($reg_most);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Documento sin t&iacute;tulo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="Estilo_Edimar.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.Estilo1 {color: #FFFFFF}
-->
</style>
</head>

<body marginheight="0" topmargin="0" marginwidth="0" leftmargin="0">
<table width="90"  border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="30" colspan="3" align="center" ><img src="Imagenes/noti.jpg" width="129" height="24"></td>
  </tr>
  
   <tr>
    <td height="13" colspan="2" >&nbsp;</td>
  </tr>
  <tr>
    <td height="30" width="13">&nbsp; </td>
    <td width="123"> <marquee direction="up" scrollamount="3" scrolldelay="150" onMouseOver="this.stop()" onmouseout="this.start()">
  <?php while($rowEdimar = mysql_fetch_assoc($reg_most)){?>
 <p>
 <div class="Borde_Punteado"><a href=<?php echo"noticia.php?".$UR."&Id=".$_GET["Id"]."&Usr=".$usr."&Cod=".$rowEdimar["Cod"];?> target="_parent"><?php echo $rowEdimar["Titulo"];?></a> <br><?php echo $rowEdimar["resumen"];?>
 </p>
 
    
    <?php echo $rowEdimar["FechaM"];?>  </div>  <?php }?> </marquee></td>
  </tr>


  <tr>
    <td height="30" colspan="3" align="center" ><img src="Imagenes/link" width="136" height="24"></td>
  </tr>
   <?php $query_reg_most = "SELECT * FROM link limit 5";
 $reg_Link = mysql_query($query_reg_most, $conexion) or die(mysql_error());
 while ($rowLink = mysql_fetch_assoc($reg_Link)){?>
  <tr>
    <td height="20" colspan="3"><a title="<?php echo $rowLink["Titulo"]?>" target="_blank" href="<?php echo "http://".$rowLink["Link"]?>"><img border="0" name="imgLink" src="<?php echo "Imagenes/".$rowLink["Imagen"];?>" width="100" height="95" style="background-color: #FFFFFF"> </td>
  </tr>
  <?php }?>
  
</table>
<blockquote>&nbsp;</blockquote>
</body>
</html>
