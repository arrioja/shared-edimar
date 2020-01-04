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
	if ((trim($_POST['Caracteristica'])!="")&&(trim($_POST['Propulsion'])!="")&&(trim($_POST['EquipoN'])!="")&&(trim($_POST['EquipoC'])!="")&&(trim($_POST['Funciones'])!="")&&(trim($_POST['Info'])!="")){
	
	  mysql_query("BEGIN",$conexion);
	
	   
       $insertvend = sprintf("update buque, edimar set Caracteristica=%s, Propulsion=%s, EquipoN=%s, EquipoC=%s, Funciones=%s, Info=%s, edimar.FechaA=%s where edimar.Idioma=%s and  buque.Cod=%s",
	                   GetSQLValueString($_POST['Caracteristica'], "text"),
					   GetSQLValueString($_POST['Propulsion'], "text"),
					   GetSQLValueString($_POST['EquipoN'], "text"),
					   GetSQLValueString($_POST['EquipoC'], "text"),
					   GetSQLValueString($_POST['Funciones'], "text"),
					   GetSQLValueString($_POST['Info'], "text"),
					   GetSQLValueString(date('Y/m/d'), "text"),
					   GetSQLValueString($id, "text"),
					   GetSQLValueString($_GET['Cod'], "text"));
       $Result2 = mysql_query($insertvend, $conexion) or die(mysql_error());
	   	  
	  if ($err==1){
		    mysql_query("ROLLBACK",$conexion);
		 }else{
		    mysql_query("COMMIT",$conexion);
		 } //else

	}else {$vacios=1;}
 
}//del aceptar
  if ($vacios==0){header("Location: buque.php?".$UR."&Id=".$_GET["Id"]."&Usr=".$_GET["Usr"]."&Cod=".$_GET["Cod"]);}
}else{
 
  $query_reg_most = "SELECT *  FROM buque";
  $Proy = mysql_query($query_reg_most, $conexion) or die(mysql_error());
  $rowProy = mysql_fetch_assoc($Proy);
  $Caracteristica=$rowProy["Caracteristica"]; $Propulsion=$rowProy["Propulsion"];$EquipoN=$rowProy["EquipoN"];
  $EquipoC=$rowProy["EquipoC"];$Funciones=$rowProy["Funciones"];$Info=$rowProy["Info"];
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
              <?php echo "Modificar Datos del Buque"?>      </td>
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
                                <td height="40" align="left" colspan="4" class="Borde_PunteadoII"><p class="Titulo_II">Datos </p> </td>
                              </tr>
                              <tr>
                                <td width="16%" height="40" align="left">*Informaci&oacute;n General:</td>
                                <td width="84%" colspan="3" align="left">&nbsp;</td>
                              </tr>
                              <tr align="left">
                                <td height="40" colspan="4"><textarea name="Info" cols="75" rows="4" id="textarea3"><?php echo $Info;?></textarea></td>
                              </tr>
                              <tr align="left">
                                <td height="40" colspan="4">*Caracter&iacute;sticas Generales:</td>
                              </tr>
                              <tr align="left">
                                <td colspan="4"><textarea name="Caracteristica" cols="75" rows="6" id="textarea4"><?php echo $Caracteristica;?></textarea></td>
                              </tr>
                              <tr align="left">
                                <td height="40" colspan="4">*Propulsi&oacute;n: </td>
                              </tr>
                              <tr align="left">
                                <td height="40" colspan="4"><textarea name="Propulsion" cols="75" rows="6" id="Propulsion"><?php echo $Propulsion;?></textarea></td>
                              </tr>
                              <tr align="left">
                                <td height="40" colspan="4">*Equipo de Navegaci&oacute;n y Comunicaciones:</td>
                              </tr>
                              <tr align="left">
                                <td colspan="4"><textarea name="EquipoN" cols="75" rows="6" id="textarea5"><?php echo $EquipoN;?></textarea></td>
                              </tr>
                              <tr align="left">
                                <td height="40" colspan="4">*Equipos Cient&iacute;ficos: </td>
                              </tr>
                              <tr align="left">
                                <td colspan="4"><textarea name="EquipoC" cols="75" rows="6" id="EquipoC"><?php echo $EquipoC;?></textarea></td>
                              </tr>
                              <tr align="left">
                                <td height="40" colspan="4">*Funciones del Barco:</td>
                              </tr>
                              <tr align="left">
                                <td colspan="4"><textarea name="Funciones" cols="75" rows="6" id="Funciones"><?php echo $Funciones;?></textarea></td>
                              </tr>
                          </table></td>
                        </tr>
                        <tr>
                          <td width="69%" height="30" align="left" valign="bottom" >&nbsp;</td>
                          <td width="31%" height="20" align="center">&nbsp;</td>
                        </tr>
                        <tr>
                          <td height="50" align="left" class="Borde_Punteado Estilo1"> * Datos Obligatorios<br></td>
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
