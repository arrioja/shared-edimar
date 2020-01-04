<?
include("../../config_ory.php");
$cual_listar=$_POST['cual_listar'];

$linko=mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db($db);
$ssqlo="select * from productos where idcat='$cual_listar'";
$resulto=mysql_query($ssqlo);
$nums=mysql_num_rows($resulto);
?>
<html>
<head>
<title>Ofertas Especiales...</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<p align="center"><img src="../../images/logo_admin.jpg" width="202" height="175"></p>
<p>&nbsp;</p>
<p><strong><font size="2" face="Arial, Helvetica, sans-serif"><img src="../../images/Img.gif" width="18" height="18"> 
  Ofertas Especiales</font></strong></p>
<p><font size="2" face="Arial, Helvetica, sans-serif">Los productos para la categoria 
  seleccionado son:</font></p>
<form action="added_oferta.php" method="post" name="formo">
  <table width="79%" border="1" cellspacing="0">
    <tr bordercolor="#999999" bgcolor="#000080"> 
      <td><font color="#FFFFFF" size="2" face="Arial, Helvetica, sans-serif"><strong>Seleccione</strong></font></td>
      <td><font color="#FFFFFF" size="2" face="Arial, Helvetica, sans-serif"><strong>Numero</strong></font></td>
      <td><font color="#FFFFFF" size="2" face="Arial, Helvetica, sans-serif"><strong>Nombre 
        del producto</strong></font></td>
      <td><font color="#FFFFFF" size="2" face="Arial, Helvetica, sans-serif"><strong>Precio</strong></font></td>
      <td><font color="#FFFFFF" size="2" face="Arial, Helvetica, sans-serif"><strong>Referencia</strong></font></td>
    </tr>
    <?
	 for ($io=0;$io<$nums;$io++)
	  {
	  mysql_data_seek($resulto,$io);
	  $rowo=mysql_fetch_array($resulto);
	  echo "<tr><td><input type='radio' name='producto' value='".$cual_listar."|".$rowo['idpro']."'></td><td>".($io+1)."</td><td>".$rowo['nombre']."</td><td>".$rowo['precio']."</td><td>".$rowo['referencia']."</td></tr>";
	  }
	mysql_close($linko);
	?>
  </table>
  <p> <font size="2" face="Arial, Helvetica, sans-serif"> 
    <input type="submit" name="Submit" value="Agregar Oferta...">
    </font></p>
  <p><font size="2" face="Arial, Helvetica, sans-serif"><a href="../index.php"><img src="../../images/icon_newest_reply.gif" width="18" height="9" border="0"> 
    Volver al panel</a></font></p>
</form>
<font size="2" face="Arial, Helvetica, sans-serif"><br>
</font> 
</body>
</html>