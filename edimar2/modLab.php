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
	if ((trim($_POST['Descrip'])!="")&&(trim($_POST['Titulo'])!="")&&(trim($_POST['Producto'])!="")&&(trim($_POST['Analisis'])!="")&&(trim($_POST['Recursos'])!="")&&(trim($_POST['Contactos'])!="")){
	 $nom_arch=$_FILES["arch"]["name"];
	  mysql_query("BEGIN",$conexion);
	
	   
       $insertvend = sprintf("update laboratorios, edimar set laboratorios.Descrip=%s, laboratorios.Titulo=%s, Analisis=%s, Recursos=%s, Contactos=%s, edimar.FechaA=%s where laboratorios.Idioma=edimar.Idioma and laboratorios.Idioma=%s and  laboratorios.Cod=%s",
	                   GetSQLValueString($_POST['Descrip'], "text"),
					   GetSQLValueString($_POST['Titulo'], "text"),
					   GetSQLValueString($_POST['Analisis'], "text"),
					   GetSQLValueString($_POST['Recursos'], "text"),
					   GetSQLValueString($_POST['Contactos'], "text"),
					   GetSQLValueString(date('Y/m/d'), "text"),
					   GetSQLValueString($id, "text"),
					   GetSQLValueString($_GET['Cod'], "text"));
       $Result2 = mysql_query($insertvend, $conexion) or die(mysql_error());
	   if (mysql_errno() != 0){$err=1;}
		// $num = count($nomFoto)-1; 
		if (($err==0)&&($nom_arch!='')){		
		 
		  copy($arch, "Laboratorios/".$nom_arch);
		  $insertvend = sprintf("update laboratorios set  Descarga=%s where Cod=%s",
					   GetSQLValueString($nom_arch, "text"),					   
					   GetSQLValueString($_GET['Cod'], "text"));
          $Result2 = mysql_query($insertvend, $conexion) or die(mysql_error());
		if (mysql_errno() != 0){$err=1;}
		}
		
			    
	  
	  if ($err==1){
		    mysql_query("ROLLBACK",$conexion);
		 }else{
		    mysql_query("COMMIT",$conexion);
		 } //else

	}else {$vacios=1;}
 
}//del aceptar
  if ($vacios==0){header("Location: laboratorio.php?".$UR."&Id=".$_GET["Id"]."&Usr=".$_GET["Usr"]."&Cod=".$_GET["Cod"]);}
}else{
 
  $query_reg_most = "SELECT *  FROM laboratorios where Cod='".$_GET["Cod"]."' and Idioma='".$id."'";
  $Proy = mysql_query($query_reg_most, $conexion) or die(mysql_error());
  $rowProy = mysql_fetch_assoc($Proy);
  $Titulo=$rowProy["Titulo"]; $Descrip=$rowProy["Descrip"];$Producto=$rowProy["Producto"];$Analisis=$rowProy["Analisis"];
  $Recursos=$rowProy["Recursos"];$Contactos=$rowProy["Contactos"];
 // if ($rowProy["Tipo"]=='E'){$Tipo='Ejecución'; $CodT='E';}else{$Tipo='Culminado';$CodT='C';}
 
}//del if isset


   
 
 

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
    <td><iframe name="cabecera" frameborder="0"  width="100%" height="124" src="<?php echo "Cabecera.php?".$UR."&Id=".$_GET["Id"]."&Usr=".$usr?>" scrolling="no"></iframe></td>
  </tr>
  
  <tr>
    <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="5%" valign="top"><script language="JavaScript">menuP('<?php echo $_GET["Id"];?>','<?php echo $usr;?>');</script></td>
        <td width="81%" valign="top"><table width="98%"  border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td align="center" class="Titulo"> <br> 
              <?php echo "Modificar Laboratorio"?>      </td>
          </tr>
          <tr>
            <td align="right" ><br>
              <br>                <table width="100%"  border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="52%" valign="top"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                      <form action="" method="post" enctype="multipart/form-data" >
                        <tr >
                          <td align="center" colspan="2" >
                            <table width="100%"  border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td height="40" align="left" colspan="4" class="Borde_PunteadoII"><p class="Titulo_II">Datos Generales</p> </td>
                              </tr>
                              <tr>
                                <td width="16%" height="40" align="left">*Titulo:</td>
                                <td colspan="3" align="left">&nbsp;</td>
                              </tr>
                              <tr align="left">
                                <td height="40" colspan="4"><textarea name="Titulo" cols="75" rows="2" id="textarea3"><?php echo $Titulo;?></textarea></td>
                              </tr>
                              <tr align="left">
                                <td height="40" colspan="4">*Descripci&oacute;n:</td>
                              </tr>
                              <tr align="left">
                                <td colspan="4"><textarea name="Descrip" cols="75" rows="6" id="textarea4"><?php echo $Descrip;?></textarea></td>
                              </tr>
                              <tr align="left">
                                <td height="40" colspan="4">*Productos a Analizar: </td>
                              </tr>
                              <tr align="left">
                                <td height="40" colspan="4"><textarea name="Producto" cols="75" rows="2" id="Producto"><?php echo $Producto;?></textarea></td>
                              </tr>
                              <tr align="left">
                                <td height="40" colspan="4">*An&aacute;lisis:</td>
                              </tr>
                              <tr align="left">
                                <td colspan="4"><textarea name="Analisis" cols="75" rows="6" id="textarea5"><?php echo $Analisis;?></textarea></td>
                              </tr>
                              <tr align="left">
                                <td height="40" colspan="4">*Contamos con: </td>
                              </tr>
                              <tr align="left">
                                <td colspan="4"><textarea name="Recursos" cols="75" rows="6" id="Recursos"><?php echo $Recursos;?></textarea></td>
                              </tr>
                              <tr align="left">
                                <td height="40" colspan="4">*Como acceder a nuestros servicios:</td>
                              </tr>
                              <tr align="left">
                                <td colspan="4"><textarea name="Contactos" cols="75" rows="6" id="Contactos"><?php echo $Contactos;?></textarea></td>
                              </tr>
                             
                              <tr>
                                <td height="40">Adjuntar Archivo: </td>
                                <td width="39%" align="left"><input name="arch" type="file" id="arch2" value="<?php echo $arch;?>"></td>
                                <td width="22%" align="left">**Permiso de Archivo:</td>
                                <td width="23%" align="left"><select name="Per">
                                    <option value="0">Todo P&uacute;blico</option>
                                    <option value="2">Usuario Registrado</option>
                                </select></td>
                              </tr>
                          </table></td>
                        </tr>
                        <tr>
                          <td width="69%" height="30" align="left" valign="bottom" >&nbsp;</td>
                          <td width="31%" height="20" align="center">&nbsp;</td>
                        </tr>
                        <tr>
                          <td height="50" align="left" class="Borde_Punteado Estilo1"> * Datos Obligatorios<br>
**Dato Obligatorio si Adjunta un Archivo</td>
                          <td height="35" align="center" class="Borde_Punteado"><input name="boton" type="submit" id="boton2" value="Aceptar">                          </td>
                        </tr>
                        <?php  if ($_GET["Op"]=='M'){ ?>
                        <?php }?>
                      </form>
                  </table></td>
                </tr>
              </table>             </td>
          </tr>
          <tr>
            <td height="30" align="right" class="Borde_Punteado" >&nbsp;</td>
          </tr>
          <tr>
            <td height="30" align="right"  >&nbsp;</td>
          </tr>
        </table></td>
        <td width="14%" valign="top" class="borde_rayado"><table width="100%" height="535"  border="0" cellpadding="0" cellspacing="0" >
            <tr>
              <td valign="top" ><iframe frameborder="0"  width="100%" height="800" src="<?php echo "linknoti.php?".$UR."&Id=".$_GET["Id"]."&Usr=".$usr?>"></iframe></td>
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
