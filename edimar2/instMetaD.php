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
	if ((trim($_POST['Titulo'])!="")&&(trim($_POST['Creador'])!="")&&(trim($_POST['Encar'])!="")&&(trim($_POST['Descrip'])!="")){
	 $nom_arch=$_FILES["arch"]["name"];
	  mysql_query("BEGIN",$conexion);
	 if ($_GET["Op"]=='M'){
	   
       $insertvend = sprintf("update metadatos, edimar set Nombre_BD=%s, Creador=%s, Encargado=%s, metadatos.Descrip=%s,   edimar.FechaA=%s where metadatos.Idioma=edimar.Idioma and  metadatos.Cod=%s",
	                   GetSQLValueString($_POST['Titulo'], "text"),
					   GetSQLValueString($_POST['Creador'], "text"),
					   GetSQLValueString($_POST['Encar'], "text"),
					   GetSQLValueString($_POST['Descrip'], "text"),
					   GetSQLValueString(date('Y/m/d'), "text"),
					   GetSQLValueString($_GET['Cod'], "text"));
       $Result2 = mysql_query($insertvend, $conexion) or die(mysql_error());
	   if (mysql_errno() != 0){$err=1;}
		// $num = count($nomFoto)-1; 
		if (($err==0)&&($nom_arch!='')){		
		 
		  copy($arch, "Metadatos/".$nom_arch);
		  $insertvend = sprintf("update metadatos set  Descarga=%s where Cod=%s",
					   GetSQLValueString($nom_arch, "text"),					   
					   GetSQLValueString($_GET['Cod'], "text"));
          $Result2 = mysql_query($insertvend, $conexion) or die(mysql_error());
		if (mysql_errno() != 0){$err=1;}
		}
		
			    
	  }else{
	  if ($nom_arch!=''){		copy($arch, "Metadatos/".$nom_arch);}$Dpt='';
	  /*if ($_GET["CodD"]!=''){$Dpt=$_GET["CodD"];}else{$Dpt=$_POST['Dpto'];};*/ 
	    $insertvend = sprintf("INSERT INTO metadatos (Nombre_BD, Creador, Encargado, Descrip, Descarga,Permiso,Idioma) VALUES (%s, %s,%s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['Titulo'], "text"),
					   GetSQLValueString($_POST['Creador'], "text"),
					   GetSQLValueString($_POST['Encar'], "text"),
					   GetSQLValueString($_POST['Descrip'], "text"),
					   GetSQLValueString($nom_arch, "text"),
					   GetSQLValueString($_POST['Per'], "text"),
					   GetSQLValueString($id, "text"));
        $Result2 = mysql_query($insertvend, $conexion) or die(mysql_error());
		if (mysql_errno() != 0){$err=1;}else{
	 $insertvend = sprintf("update edimar set edimar.FechaA=%s where Idioma=%s",
                       GetSQLValueString(date('Y/m/d'), "text"),
					   GetSQLValueString($id, "text"));
            $Result3 = mysql_query($insertvend, $conexion) or die(mysql_error());
			if (mysql_errno() != 0){$err=1;}
	 }		
			
	  } // $_GET["Op"] 
	  if ($err==1){
		    mysql_query("ROLLBACK",$conexion);
		 }else{
		    mysql_query("COMMIT",$conexion);
		 } //else

	}else {$vacios=1;}
 
}//del aceptar
  if ($vacios==0){header("Location: metadatos.php?".$UR."&Id=".$_GET["Id"]."&Usr=".$_GET["Usr"]."&T=".$_GET["T"]);}
}else{
  if ($_GET["Op"]=='M'){
  $query_reg_most = "SELECT *  FROM metadatos";
  $Proy = mysql_query($query_reg_most, $conexion) or die(mysql_error());
  $rowProy = mysql_fetch_assoc($Proy);
  $Titulo=$rowProy["Nombre_BD"]; $Creador=$rowProy["Creador"];$Encar=$rowProy["Encargado"];$Descrip=$rowProy["Descrip"];
  
  }
}//del if isset


   
/* $query_reg_most = "SELECT Titulo FROM  edimar where Idioma='".$id."'";
 $reg_most = mysql_query($query_reg_most, $conexion) or die(mysql_error());
 $rowEdimar = mysql_fetch_assoc($reg_most);*/
 
 if ($_GET["Op"]=='M'){  $subtitulo='Modificar Metadatos'; }else{$subtitulo='Añadir Nuevo Metadatos';}
 
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
              <?php echo $subtitulo;?>      </td>
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
                                <td colspan="3" align="left"><input name="Titulo" type="text" id="textarea3" value="<?php echo $Titulo;?>" size="20"></td>
                              </tr>
                              <tr align="left">
                                <td height="40" >*Creador:</td>
                                <td height="40" colspan="3"><input name="Creador" type="text" id="Titulo" value="<?php echo $Creador;?>" size="20"></td>
                              </tr>
                              <tr align="left">
                                <td height="40">*Encargado:</td>
                                <td height="40"><input name="Encar" type="text" id="Fase2" size="20" value="<?php echo $Encar;?>"></td>
                                <td height="40">&nbsp;</td>
                                <td height="40">&nbsp;</td>
                              </tr>
                              <tr align="left">
                                <td height="40" colspan="4">*Descripci&oacute;n:</td>
                              </tr>
                              <tr align="left">
                                <td colspan="4"><textarea name="Descrip" cols="75" rows="6" id="textarea4"><?php echo $Descrip;?></textarea></td>
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
