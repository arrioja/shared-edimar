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
$ssqlo9="select * from productos where idpro='".$_GET['id']."'";
$resulto9=mysql_query($ssqlo9);
$nums9=mysql_num_rows($resulto9);
$ro9=mysql_fetch_array($resulto9);
?>
<html>
<head>
<title><? echo $titulo?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="stylos.css" type="text/css">
<style type="text/css">
.Estilo4 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 9px;
}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
</style>
</head>
<body>
<table width="370" border="0" align="left" cellpadding="0" cellspacing="0">
  <tr>
    <td width="393" height="72"><div align="center">
      <p><br>
            
			<img src="thumb.php?i=<? echo $ro9['foto1']?>&w=400&h=250&adjust=w" border="0" alt="Ver producto..."></p>
      <p class="Estilo4"><a href="javascript:close()" class="categoria">Cerrar</a></p>
    </div></td>
  </tr>
</table>
</body>
</html>
<? mysql_close($linko8);?>