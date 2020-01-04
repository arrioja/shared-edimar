<?php $conexion = mysql_connect("localhost", "root", ""); 
mysql_select_db("bd_edimar", $conexion); 
$UR="fti=yes&curmbox=00000000%2d0000%2d0000%2d0000%2d000000000001&a=c49ada04efe4dbbebabf65088e7c412b19e55dc687b349189bd90b9e41231034";
 function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = (!get_magic_quotes_gpc()) ? addslashes($theValue) : $theValue;

  switch ($theType) {
    case "text":       $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";       break;    
    case "int":       $theValue = ($theValue != "") ? intval($theValue) : "NULL";       break;
    case "double":       $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";       break;
    case "date":       $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";       break;
    case "defined":       $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;       break;
  }
  return $theValue;
}
if (isset($_POST['Boton']))  {
 	    
  if  ($_POST['Boton']=="  Si  ") {
   $SQL= sprintf("Delete from titulo where Cod=%s and Titulo=%s",
           GetSQLValueString($_GET['Cod'], "int"),
		   GetSQLValueString($_GET['CodT'], "text"));
		 $Result1 = mysql_query($SQL, $conexion) or die(mysql_error()); ?>
		 <script language="javascript">
		   window.opener.focus(); 
           window.opener.location.reload();
           window.close();
		 </script>
  <?php 
  }
} //isset boton

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Eliminar</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="Estilo_Edimar.css" rel="stylesheet" type="text/css">
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" >
<table width="100%"  border="0" cellspacing="0" cellpadding="0">
<form name="form1" method="post" action="">
  <tr>
    <td height="15" bgcolor="#66CCFF">&nbsp;</td>
  </tr>
  <tr>
    <td height="10" class="Borde_PunteadoII">&nbsp;</td>
  </tr>
  <tr>
    <td height="70" align="center"><?php echo "Seguro desea eliminar este Título"?></td>
  </tr>
  <tr>
    <td height="70" align="center"><input name="Boton" type="submit" id="Boton" value="  Si  ">
      <input name="Boton" type="submit" id="Boton" value="  No  " onClick="window.close()"></td>
  </tr>
  <tr>
    <td height="15" class="Borde_PunteadoII">&nbsp;</td>
  </tr>
  <tr>
    <td height="15" bgcolor="#66CCFF" >&nbsp;</td>
  </tr>
  </form>
</table>
</body>
</html>
