<?
include("../../config_ory.php");
//recibe los datos del formulario********************
$id=$_POST['id'];
$linko=mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db($db);
//**para borrar el archivo correspondiente a la imagen
$ssqlo="select * from destacados where id_destacado='$id'";
$resulto=mysql_query($ssqlo);
$rowo=mysql_fetch_array($resulto);
$imagen_borrar=$rowo['foto'];
unlink("../../".$imagen_borrar);
//************para borrar el campo de la bd
$ssqlo2="delete from destacados where id_destacado='$id'";
mysql_query($ssqlo2);
mysql_close($linko);
?>
<html>
<head>
<title>Destino destacado borrado con exito...</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script>
function cambia()
 {
 resp=confirm("Para borrar otro de click Aceptar, para volver a la pagina del panel haga click en Cancelar")
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
<font size="2" face="Arial, Helvetica, sans-serif">Borrado con exito... </font>
</body>
</html>