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
$id=$_POST['id'];
$hacer=$_POST['hacer'];

$linko=mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db($db);

switch($hacer)
 {
 case "Borrar":
 //borrado de un cliente
 $ss="delete from clientes where id='".$id."'";
 mysql_query($ss);
 $jvs="alert('Se ha borrado con exito el cliente...') \n window.history.back() \n ";
 break;
 case "Actualizar":
 $jvs="window.open('../reg_cliente2.php?id=".$id."','etiq', 'width=480,height=300,top=10,left=10,toolbar=no,directories=no,menubar=no,status=yes,scrollbars=yes,resizable=yes') \n window.history.back() \n ";
 break;
 case "Agregar":
 $jvs="window.open('../reg_cliente.php','etiq2', 'width=480,height=300,top=10,left=10,toolbar=no,directories=no,menubar=no,status=yes,scrollbars=yes,resizable=yes') \n window.history.back() \n ";
 break;
 default:
 header("location:ver_clientes.php");
 }


$ssqlo="select * from clientes order by id desc";
$resulto=mysql_query($ssqlo);
$nums=mysql_num_rows($resulto);
?>

<html>
<head>
<title>Edicion de clientes...</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script>
function carga()
 {
 <? echo $jvs?>
 
 }

</script>
<style type="text/css">
<!--
.Estilo1 {
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
<body onLoad="carga()">
<span class="Estilo1">Redireccionando...</span>
</body>
</html>
<? mysql_close($linko)?>