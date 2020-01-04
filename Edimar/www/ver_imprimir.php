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
<title><? echo $titulo?></title>
<link rel="stylesheet" href="stylos.css" type="text/css">
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
}
-->
</style>
<script>
 function avisarlo()
  {
  print()
  }
  
</script>
</head>
<body onLoad="avisarlo()">
<p>
<?
//print('<font face="arial" size="2"><img src="thumb.php?i='.$ro9['foto1'].'&w=300&h=200&adjust=w" align="left" border="0"><b>NOMBRE:</b> '.$ro9['nombre'].'<br><br><br>'.$ro9['descripcion'].'</font>');
?>
<table width="737" border="0" cellspacing="8" cellpadding="0">
  <tr>
    <td width="32" valign="top" bgcolor="#EEEEEE"><img src="thumb.php?i=<? echo $ro9['foto1']?>&w=300&h=200&adjust=w" align="left" border="0"></td>
    <td width="705" colspan="2"><font face="arial" size="2"><b>NOMBRE:</b> <? echo $ro9['nombre']?><br>
    <br><br><? echo $ro9['descripcion']?></font></td>
  </tr>
</table>
</body>
</html>
<? mysql_close($linko8);?>