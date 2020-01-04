<?
include("../../config_ory.php");

$linko=mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db($db);
$ssqlo="select * from ofertas";
$resulto=mysql_query($ssqlo);
$nums=mysql_num_rows($resulto);
?>
<html>
<head>
<title>Borrar Oferta...</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<p align="center"><img src="../../images/logo_admin.jpg" width="195" height="195"></p>
<p><strong><font size="2" face="Arial, Helvetica, sans-serif"><img src="../../images/Img.gif" width="18" height="18"> 
  Borrar Oferta </font></strong></p>
<form action="erased_pro.php" method="post" name="formo">
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
	  $ss2="select * from productos where idpro='".$rowo['id_producto']."'";
	  $re2=mysql_query($ss2);
  	  $rowo2=mysql_fetch_array($re2);
      echo "<tr><td><input type='radio' name='pro' value='".$rowo2['idpro']."'></td><td>".($io+1)."</td><td>".$rowo2['nombre']."</td><td>".$rowo2['precio']."</td><td>".$rowo2['referencia']."</td></tr>";
	  }
	mysql_close($linko);
	?>
  </table>
  <p> <font size="2" face="Arial, Helvetica, sans-serif"> 
    <input type="submit" name="Submit" value="Borrar Oferta...">
    </font></p>
  <p><font size="2" face="Arial, Helvetica, sans-serif"><a href="../index.php"><img src="../../images/icon_newest_reply.gif" width="18" height="9" border="0"> 
    Volver al panel</a></font></p>
</form>
<font size="2" face="Arial, Helvetica, sans-serif"><br>
</font> 
</body>
</html>
