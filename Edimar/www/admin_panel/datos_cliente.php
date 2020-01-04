<?
session_start();

if(!isset($_SESSION['tipo']))
 {
 $_SESSION['tipo']=0;
 }
if($_SESSION['tipo']!=3)
 {
 header("location:check.php");
 }

include("../config.php");

$linko=mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db($db);
$ssqlo="select * from pedidos where id='".$_GET['id']."'";
$re=mysql_query($ssqlo);
$ro=mysql_fetch_array($re);

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Cambiar status...</title>
<style type="text/css">
<!--
.style6 {font-size: 12px; font-family: Arial, Helvetica, sans-serif; font-weight: bold; }
.style8 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
-->
</style>
<style TYPE="text/css">
<!--
A { font-family: Arial,Helvetica,sans-serif; color: #000000;text-decoration:underline}
-->
</style>
</head>
<body>
<table width="382" border="0">
  <tr>
    <td width="376"><span class="style8">Nombre del cliente: </span><? echo $ro['nombre_cliente']?></td>
  </tr>
  <tr>
    <td><span class="style8">Empresa:</span><span class="style6"> <? echo $ro['nombre_empresa']?></span></td>
  </tr>
  <tr>
    <td><span class="style8">Direccion:</span><span class="style6"> <? echo $ro['direccion']?></span></td>
  </tr>
  <tr>
    <td><span class="style8">Ciudad:</span><span class="style6"> <? echo $ro['ciudad']?></span></td>
  </tr>
  <tr>
    <td><span class="style8">Telefonos:</span><span class="style6"> <? echo $ro['telefonos']?></span></td>
  </tr>
  <tr>
    <td><span class="style8">Cedula:</span><span class="style6"> <? echo $ro['cedula']?></span></td>
  </tr>
  <tr>
    <td><span class="style8">Email:</span><span class="style6"> <? echo $ro['email']?></span></td>
  </tr>
  <tr>
    <td><span class="style8">Comentarios:<br />
      <span class="style6"><? echo $ro['comentarios']?></span></span></td>
  </tr>
  <tr>
    <td><div align="center"><span class="style8"><a href="javascript:close()">Cerrar</a></span></div></td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
<? mysql_close($linko);?>