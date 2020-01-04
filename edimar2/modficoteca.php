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
	if ((trim($_POST['Titulo'])!="")&&(trim($_POST['Parraf1'])!="")){$err=0;
	mysql_query("BEGIN",$conexion); 
       $insertvend = sprintf("update ficoteca, edimar set ficoteca.Titulo=%s,ficoteca.Descrip=%s, FechaA=%s  where ficoteca.Cod=%s and ficoteca.Idioma=edimar.Idioma",
					   GetSQLValueString($_POST['Titulo'], "text"),
                       GetSQLValueString($_POST['Parraf1'], "text"),
					   GetSQLValueString(date('Y/m/d'), "text"),
					   GetSQLValueString($_POST['Cod'], "text"));
       $Result2 = mysql_query($insertvend, $conexion) or die(mysql_error());
	  if (mysql_errno() != 0){$err=1;}
		// $num = count($nomFoto)-1; 
		if (($err==0)&&($nom_arch!='')){		
		 
		  copy($arch, "Proyectos/".$nom_arch);
		  $insertvend = sprintf("update ficoteca set  Descarga=%s, Permiso=%s where Cod=%s",
					   GetSQLValueString($nom_arch, "text"),
					   GetSQLValueString($_POST['per'], "text"),					   
					   GetSQLValueString($_POST['Cod'], "text"));
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
  if ($vacios==0){header("Location: ficoteca.php?".$UR."&Id=".$_GET["Id"]."&Usr=".$_GET["Usr"]);}
}else{
  $query_reg_most = "SELECT * FROM  ficoteca where Idioma='".$id."'";
  $reg_most = mysql_query($query_reg_most, $conexion) or die(mysql_error());
  $rowEdimar = mysql_fetch_assoc($reg_most);
  $totalRows_reg_most = mysql_num_rows($reg_most);
  $Cod=$rowEdimar['Cod']; $Titulo=$rowEdimar['Titulo']; $Parraf1=$rowEdimar['Descrip']; $Parraf2=$rowEdimar['Divulgacion']; 
  
  
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
	color: #FF0000;
	font-size: 12px;
}
-->
</style>
</head>

<body marginheight="0" topmargin="0" marginwidth="0" leftmargin="0">
<script language="JavaScript1.2">mmLoadMenus('<?php echo $_GET["Id"];?>','<?php echo $usr;?>');</script>
<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><iframe name="cabecera" frameborder="0"  width="100%" height="124" src="<?php echo "Cabecera.php?".$UR."&Id=".$_GET["Id"]."&Usr=".$usr?>" scrolling="no"></iframe></td>
  </tr>
  
  <tr>
    <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="12%" valign="top"><script language="JavaScript">menuP('<?php echo $_GET["Id"];?>','<?php echo $usr;?>');</script></td>
        <td width="74%" valign="top"><table width="98%"  border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="80%" align="center" class="Titulo"> <br>      </td>
            </tr>
          <tr>
            <td><br>
                <table width="100%"  border="0" cellspacing="0" cellpadding="0">
				<form name="form2" method="post" action="">
                  <tr>
                    <td height="20" colspan="4" class="Titulo_II">*T&iacute;tulo:</td>
                  </tr>
                  <tr>
                    <td colspan="4" class="Parrafo">                     
                      <textarea name="Titulo" cols="80" rows="2" id="Titulo"><?php  echo $Titulo; ?>
                      </textarea></td>
                  </tr>
                  <tr>
                    <td height="40" colspan="4" class="Titulo_II">*Decripci&oacute;n: </td>
                  </tr>
                  <tr>
                    <td colspan="4" class="Parrafo"><textarea name="Parraf1" cols="80" rows="20" id="Parraf1"><?php echo $Parraf1; ?>
                      </textarea>                       </td>
                    </tr>
                  <tr>
                    <td width="136" height="40"  class="Titulo_II">Adjuntar Archivo </td>
                    <td width="332"  class="Titulo_II"><input name="arch" type="file" id="arch2" value="<?php echo $arch;?>"></td>
                    <td width="162"  class="Titulo_II">**Permiso de Archivo:</td>
                    <td height="40"  class="Titulo_II"><select name="per">
                      <option value="0">Todo P&uacute;blico</option>
                      <option value="2">Usuario Registrado</option>
                    </select></td>
                  <tr>
                  <td colspan="4" class="Parrafo"><input name="Cod" type="hidden" id="Cod" value="<?php echo $Cod; ?>"></td>
				  <tr>
				    <td height="50" colspan="3" valign="bottom" class="Borde_Punteado Estilo1"><p>* Datos Obligatorios <br>**Dato Obligatorio si Adjunta un Archivo</p></td>
				    <td width="217" align="center" class="Parrafo">&nbsp;</td>
				  <tr>
				    <td height="35" colspan="3" valign="bottom" >&nbsp;</td>
				    <td align="center" class="Borde_Punteado"><span class="Parrafo">
				      <input name="boton" type="submit" id="boton" value="Aceptar">
                      <input name="boton" type="submit" id="boton" value="Cancelar">
				    </span></td>
				    </form>
                        </table>
                <p class="Parrafo">&nbsp; </p></td>
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
