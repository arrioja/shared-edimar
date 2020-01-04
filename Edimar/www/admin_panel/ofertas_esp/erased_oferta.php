<?
include("../../config_ory.php");
$linko=mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db($db);
$ssqlo="delete from ofertas where id_oferta='".$_POST['producto']."'";
mysql_query($ssqlo);
mysql_close($linko);
?>
<html>
<head>
<title>Espere por favor...</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script>
function cambia()
 {
 resp=confirm("Para Borrar otro de click Aceptar, para volver a la pagina del panel haga click en Cancelar")
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