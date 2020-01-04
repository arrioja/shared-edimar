<?php $conexion = mysql_connect("localhost", "borg1978_root", "ivotrino"); 
mysql_select_db("borg1978_bdedimar", $conexion); 
$UR="fti=yes&curmbox=00000000%2d0000%2d0000%2d0000%2d000000000001&a=c49ada04efe4dbbebabf65088e7c412b19e55dc687b349189bd90b9e41231034";
$id='';$usr='0'; $permiso=''; ; $Nick='';
 if ((isset($_GET["Id"]))&& ($_GET["Id"]=='_Ing')){  $id='I'; $Id='_Ing';} else { $id='E'; $Id='_E';}
 
///////////////////////////////////////////captura el periso del usuario////////////////////////////////////////////////////////////
 if ((empty($_GET["Usr"]))||($_GET["Usr"]=='0')){  
  if ((!empty($_POST["nick"]))&&(!empty($_POST["pass"]))){
   $query="SELECT Cod, Permiso, Nick FROM usuario where Nick='".$_POST["nick"]."' and Pass='".$_POST["pass"]."'";
   $reg_Usr=mysql_query($query, $conexion) or die(mysql_error());
   $rowUsr = mysql_fetch_assoc($reg_Usr); $usr=$rowUsr["Cod"]; $permiso=$rowUsr["Permiso"];$Nick=$rowUsr["Nick"];}
 }else{$query="SELECT Cod, Permiso, Nick FROM usuario where Cod='".$_GET["Usr"]."'";
   $reg_Usr=mysql_query($query, $conexion) or die(mysql_error());
   $rowUsr = mysql_fetch_assoc($reg_Usr); $usr=$rowUsr["Cod"]; $permiso=$rowUsr["Permiso"];$Nick=$rowUsr["Nick"];}
 /*  $query="SELECT  Edimar  as Permiso FROM permisopag";
   $reg_Per=mysql_query($query, $conexion) or die(mysql_error()); $rowPer = mysql_fetch_assoc($reg_Per);*/
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$query_reg_most = "SELECT Cod, Titulo,  DATE_FORMAT(Fecha,'%d/%m/%Y') as FechaM, Fecha FROM noticia where
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
<table width="90%"  border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="30" colspan="2" align="center" bgcolor="#6699CC" class="Titulo_II Estilo1">Ultimas Noticias </td>
  </tr>
   <tr>
    <td height="20" >&nbsp;</td>
  </tr>
  <?php while($rowEdimar = mysql_fetch_assoc($reg_most)){?>
 
  <tr>
    <td height="30" ><a href=<?php echo"noticia.php?".$UR."&Id=".$_GET["Id"]."&Usr=".$usr."&Cod=".$rowEdimar["Cod"];?> target="_parent"><?php echo $rowEdimar["Titulo"];?></a></td>
  </tr>
  <tr>
    
    <td align="right" class="Borde_Punteado" ><?php echo $rowEdimar["FechaM"];?></td>
  </tr>
  <tr>
    <td height="20" colspan="2">&nbsp;</td>
  
  <?php }?>
  </tr>

  <tr>
    <td height="30" colspan="2" bgcolor="#6699CC" class="Titulo_I"><div align="center">Links</div></td>
  </tr>
   <?php $query_reg_most = "SELECT * FROM link limit 5";
 $reg_Link = mysql_query($query_reg_most, $conexion) or die(mysql_error());
 while ($rowLink = mysql_fetch_assoc($reg_Link)){?>
  <tr>
    <td height="20" colspan="2"><a title="<?php echo $rowLink["Titulo"]?>" target="_blank" href="<?php echo "http://".$rowLink["Link"]?>"><img border="0" name="imgLink" src="<?php echo "Imagenes/".$rowLink["Imagen"];?>" width="100" height="95" style="background-color: #FFFFFF"> </td>
  </tr>
  <?php }?>
</table>
</body>
</html>
