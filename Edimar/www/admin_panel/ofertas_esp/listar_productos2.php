<?
include("../../config_ory.php");
$linko=mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db($db);
$ssqlo="select * from catalogos";
$resulto=mysql_query($ssqlo);
$nums=mysql_num_rows($resulto);

?>
<html>
<head>
<title>Listar Productos...</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<p><strong><font size="2" face="Arial, Helvetica, sans-serif"><img src="../../images/Img.gif" width="18" height="18"> 
  Listar Productos de un Catalogo</font></strong></p>
<p><font size="2" face="Arial, Helvetica, sans-serif">Por favor selecciona el 
  catalogo de productos que deseas listar...</font></p>
<form name="form1" method="post" action="listalos_productos2.php">
  <p> <font size="2" face="Arial, Helvetica, sans-serif"> 
    <select name="cual_listar">
      <?
	 for ($io=0;$io<$nums;$io++)
	  {
	  mysql_data_seek($resulto,$io);
	  $rowo=mysql_fetch_array($resulto);
	  echo $rowo['select'];
	  }
	mysql_close($linko);
	?>
    </select>
    </font></p>
  <p> <font size="2" face="Arial, Helvetica, sans-serif"> 
    <input type="submit" name="Submit" value="Listar Productos">
    </font></p>
  <p><font size="2" face="Arial, Helvetica, sans-serif"><a href="../index.php"><img src="../../images/icon_newest_reply.gif" width="18" height="9" border="0"> 
    Volver al panel</a></font></p>
</form>
<p>&nbsp; </p>
</body>
</html>
