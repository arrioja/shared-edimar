<?
include("../../config_ory.php");
$dato=explode("|",$_POST['producto']);
$id_catalogo=$dato[0];
$id_producto=$dato[1];

$linko=mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db($db);
$ss2="select * from ofertas where id_producto='".$id_producto."'";
$re=mysql_query($ss2);
$nums=mysql_num_rows($re);
if($nums==0)
 {
 $ssqlo="insert into ofertas (id_producto, id_catalogo) values ('$id_producto', '$id_catalogo')";
 mysql_query($ssqlo);
 }
mysql_close($linko);
?>
<html>
<head>
<title>Redireccionando...</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script>
function cambia()
 {
 resp=confirm("Para agregar otro de click Aceptar, para volver a la pagina del panel haga click en Cancelar")
  if(resp==true) 
   {
   window.history.go(-1)
   }
  else
   {
   location="../index.php"
   }
 }
</script>
</head>
<body onLoad="cambia()">
<font size="2" face="Arial, Helvetica, sans-serif">Redireccionando... </font>
</body>
</html>