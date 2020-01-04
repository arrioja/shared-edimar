<?
include("config.php");
$linko8=mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db($db);
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
//***********************************************************************FIN ADMIN

//obtencion de los datos
$ssqlo9="select * from productos where idpro='".$_GET['idpro']."'";
$resulto9=mysql_query($ssqlo9);
$nums9=mysql_num_rows($resulto9);
$ro9=mysql_fetch_array($resulto9);
?>
<html>
<head>
<title>Mostrar descripcion...</title>
<link rel="stylesheet" href="stylos.css" type="text/css">
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
}
BODY {
	 SCROLLBAR-FACE-COLOR: #4c4c4c; SCROLLBAR-HIGHLIGHT-COLOR: #4c4c4c; SCROLLBAR-SHADOW-COLOR: #EBEBEB; SCROLLBAR-3DLIGHT-COLOR: #4c4c4c; SCROLLBAR-ARROW-COLOR: #E60A0A; SCROLLBAR-TRACK-COLOR: #f3f3f3; SCROLLBAR-DARKSHADOW-COLOR: #EBEBEB
}
-->
</style>
<script>
 function imprimir()
  {
   window.open ('ver_imprimir.php?idpro=<? echo $_GET["idpro"]?>', 'enviado_imrpimir', 'width=640,height=480,top=100,left=200,toolbar=no,directories=no,menubar=no,status=no,scrollbars=yes,resizable=yes')
  }
</script>
</head>
<body>
<p><font face="Arial, Helvetica, sans-serif" size="2"><? echo $ro9['descripcion']?></font></p>
</body>
</html>
<? mysql_close($linko8);?>