<?php include('conexion.php');
 
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
if (isset($_POST['boton']))  {
 	    
  if  ($_POST['boton']=="Aceptar") {
    //modificar  noticias
	if ((trim($_POST['Descrip'])!="")&&(trim($_POST['Titulo'])!="")){
	 if ($_GET["Op"]=='M'){
       $insertvend = sprintf("update noticia set Descrip=%s, Titulo=%s, Resumen=%s where Cod=%s",
					   GetSQLValueString($_POST['Descrip'], "text"),
					   GetSQLValueString($_POST['Titulo'], "text"),
					   GetSQLValueString($_POST['Resumen'], "text"),
                       GetSQLValueString($_GET['Cod'], "text"));
       $Result2 = mysql_query($insertvend, $conexion) or die(mysql_error());
	  }else{
	    $insertvend = sprintf("INSERT INTO noticia (Descrip,Titulo, Resumen,Fecha, Idioma,Tipo) VALUES (%s,%s,%s,%s,%s, %s)",
                       GetSQLValueString($_POST['Descrip'], "text"),
					   GetSQLValueString($_POST['Titulo'], "text"),
					   GetSQLValueString($_POST['Resumen'], "text"),
					   GetSQLValueString(date('Y/m/d'), "text"),
					   GetSQLValueString($id, "text"),
                       GetSQLValueString($_GET['T'], "text"));
        $Result2 = mysql_query($insertvend, $conexion) or die(mysql_error());
	  } // $_GET["Op"] 
	  
	}else {$vacios=1;}
 
}//del aceptar
  if ($vacios==0){header("Location: noticias.php?".$UR."&Id=".$_GET["Id"]."&Usr=".$_GET["Usr"]."&T=".$_GET['T']);}
}else{
  if ($_GET["Op"]=='M'){
  $query_reg_most = "SELECT * FROM  noticia where Cod='".$_GET["Cod"]."'";
  $objetivo = mysql_query($query_reg_most, $conexion) or die(mysql_error());
  $totalObj = mysql_num_rows($objetivo);$rowObjetivos = mysql_fetch_assoc($objetivo);
  $Titulo=$rowObjetivos["Titulo"];$Descrip=$rowObjetivos["Descrip"]; $Resumen=$rowObjetivos["Resumen"];}
}//del if isset


   
 $query_reg_most = "SELECT Titulo FROM  edimar where Idioma='".$id."'";
 $reg_most = mysql_query($query_reg_most, $conexion) or die(mysql_error());
 $rowEdimar = mysql_fetch_assoc($reg_most);
 if ($_GET["T"]=='N'){  $tipo='Noticia'; }else{$tipo='Evento';}
 if ($_GET["Op"]=='M'){  $subtitulo='Modificar '.$tipo; }else{$subtitulo='Agregar '.$tipo;}
 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Pagina Edimar</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="Estilo_Edimar.css" rel="stylesheet" type="text/css">
<script language="JavaScript" src="menu_p.js"></script>

<script language="JavaScript" src="mm_menu.js"></script>
<style type="text/css">
<!--
.Estilo1 {
	font-size: 12px;
	color: #FF0000;
}
-->
</style>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<script language="JavaScript1.2">mmLoadMenus('<?php echo $_GET["Id"];?>','<?php echo $usr;?>');</script>
<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><iframe name="cabecera" frameborder="0"  width="100%" height="124" src="<?php echo "Cabecera.php?".$UR."&Id=".$_GET["Id"]."&Usr=".$usr?>"></iframe></td>
  </tr>
  
  <tr>
    <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="12%" valign="top"><script language="JavaScript">menuP('<?php echo $_GET["Id"];?>','<?php echo $usr;?>');</script></td>
        <td width="74%" valign="top"><table width="98%"  border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td align="center" class="Titulo"> <br> <?php  echo $subtitulo; ?>      </td>
          </tr>
          <tr>
            <td ><br>
              <br>
                <table width="100%"  border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="52%" valign="top"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
					<form name="form2" method="post" action="">
                      <tr>
                        <td height="40" colspan="2" ><table width="90%"  border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="15%" height="40" class="Titulo_II">*Titulo</td>
                            <td width="85%"><input name="Titulo" type="text" id="Titulo" value="<?php echo $Titulo;?>" size="60" maxlength="70"></td>
                          </tr>
                          <tr>
                            <td height="40" colspan="2" class="Titulo_II">Resumen</td>
                          </tr>
                          <tr>
                            <td height="40" colspan="2" ><textarea name="Resumen" cols="75" rows="5" id="resumen"><?php echo $Resumen;?></textarea></td>
                          </tr>
                          <tr>
                            <td height="40" colspan="2" class="Titulo_II">*Descripci&oacute;n:</td>
                          </tr>
                          <tr>
                            <td colspan="2"><textarea name="Descrip" cols="75" rows="10" id="Descrip"><?php echo $Descrip;?></textarea></td>
                          </tr>
                        </table></td>
                      </tr>
                      
                      <tr >
                        <td align="center" colspan="2" >&nbsp;                            </td>
                      </tr>
                      <tr>
                        <td width="69%" height="40" class="Borde_Punteado Estilo1">* Datos Obligatorios</td>
                        <td width="31%" height="20" align="center">&nbsp;</td>
                      <tr><td height="30" >&nbsp;</td>
                
	                    <td height="35" align="center" class="Borde_Punteado"><input name="boton" type="submit" id="boton" value="Aceptar">
	                      <input name="boton" type="submit" id="boton" value="Cancelar"></td>
                      </form>
                    </table></td>
                    </tr>
                </table>
                <p class="Parrafo">&nbsp; </p></td>
          </tr>
        </table></td>
        <td width="14%" class="borde_rayado"><table width="100%" height="535"  border="0" cellpadding="0" cellspacing="0" >
            <tr>
              <td ><iframe frameborder="0"  width="100%" height="800" src="<?php echo "linknoti.php?".$UR."&Id=".$_GET["Id"]."&Usr=".$usr?>"></iframe></td>
            </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center"><img src="Imagenes/barra_Inf.jpg" width="95%" height="27"></td>
  </tr>
</table>
</body>
</html>
<?php if ($vacios==1){?>
 <script language="JavaScript" >
 	         alert('Debe introducir todos los campos obligatorios');
           </script>
<?php }?>
