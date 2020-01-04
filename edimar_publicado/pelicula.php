<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Documento sin t&iacute;tulo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="Estilo_Edimar.css" rel="stylesheet" type="text/css">
</head>

<body marginheight="0" topmargin="0" marginwidth="0" leftmargin="0">
<table width="90%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><?php if (isset($_GET["Pel"])) {?>
	<OBJECT width="300" height="218">
<PARAM NAME="movie" VALUE="<?php echo $_GET["Pel"];?>">
<EMBED SRC="<?php echo "Edimar360/".$_GET["Pel"];?>" width="300" height="218">
</EMBED>
</OBJECT>
<?php }?>
</td>
  </tr>
  <tr>
    <td height="50" align="center" class="Titulo" ><?php echo $_GET["Cad"];?></td>
  </tr>
</table>
</body>
</html>
