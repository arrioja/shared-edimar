<?
include("config.php");

$_GET['id']=$_POST['id'];
$linko=mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db($db);
$ssqlo="select * from productos where idpro='".$_GET['id']."'";
$resulto=mysql_query($ssqlo);
$ro=mysql_fetch_array($resulto);
//***-*-*-*-*-***********************************************************ADMIN
$ss_a="select * from administracion";
$re_a=mysql_query($ss_a);
$ro_a=mysql_fetch_array($re_a);
$max_pro_pag=$ro_a['max_pro_pag'];
$pagina=$ro_a['pagina'];
$dir=$ro_a['dir'];
$geren=$ro_a['geren'];
$titulo=$ro_a['titulo'];
$moneda=$ro_a['moneda'];
//***********************************************************************FIN ADMIN*******************

mail($_GET['correo'],"Ha recibido un producto en su correo enviada por: ".$_GET['envia']."... Soluparts C.A",'<html><body><font face="arial" size="2"><table width="30" border="0" cellspacing="0" cellpadding="0"><tr><td><img name="interface2_r1_c1" src="'.$dir.'img/interface2_r1_c1.jpg" width="782" height="159" border="0" id="interface2_r1_c1" alt=""></td></tr><tr><td height="170"><table width="176" border="0" align="center" cellpadding="0" cellspacing="0"><tr><td height="19" colspan="2"><img name="interface2_r2_c5" src="'.$dir.'img/interface2_r2_c5.jpg" width="394" height="30" border="0" id="interface2_r2_c5" alt=""></td></tr><tr><td width="166"><div align="center"><img src="'.$dir.$ro['foto1'].'" alt="" width="166" height="147"></div><div align="center"></div></td><td width="228" valign="top"><span class="style1"><br>-Nombre: '.$ro['nombre'].'</span></td></tr></table></td></tr></table>-Este producto le fue enviado por: '.$_GET['envia'].'.</font></body></html>',$headers);

mysql_close($linko);
?>
<html>
<head>
<title>Enviado...</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.Estilo3 {
	font-size: 10px;
	font-family: Arial, Helvetica, sans-serif;
}
-->
</style>
<script>
 function borra_datos()
  {
  window.opener.document.form_amigo.envia.value=""
  window.opener.document.form_amigo.correo.value=""
  }
</script>
<link rel="stylesheet" href="stylos.css" type="text/css">
</head>
<body onLoad="borra_datos()">
<p class="Estilo3">-Se ha enviado el producto a la direccion indicada...</p>
<p class="Estilo3"><a href="javascript:close()" class="categoria">Cerrar</a></p>
</body>
</html>