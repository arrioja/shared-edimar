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
 	    $err=0;
  if  ($_POST['boton']=="Aceptar") {
    //modificar  noticias
	if ((trim($_POST['Resena'])!="")&&(trim($_POST['Mision'])!="")&&(trim($_POST['Vision'])!="")){
	$nom_arch=$_FILES["Imagen"]["name"]; 
	 mysql_query("BEGIN",$conexion); 
       $insertvend = sprintf("update departamento, edimar set departamento.Resena=%s,departamento.Mision=%s,departamento.Vision=%s,
	                          departamento.FechaA=%s, edimar.FechaA=%s where departamento.Cod=%s and edimar.Idioma=departamento.Idioma
							  and departamento.Idioma=%s",
					   GetSQLValueString($_POST['Resena'], "text"),
                       GetSQLValueString($_POST['Mision'], "text"),
					   GetSQLValueString($_POST['Vision'], "text"),
					   GetSQLValueString(date('Y/m/d'), "text"),
					   GetSQLValueString(date('Y/m/d'), "text"),
					   GetSQLValueString($_GET['Cod'], "text"),
					   GetSQLValueString($id, "text"));
       $Result2 = mysql_query($insertvend, $conexion) or die(mysql_error());
	   
	  if (mysql_errno() != 0){$err=1;}
		
		if (($err==0)&&($nom_arch!='')){		
		  
		  copy($Imagen, "Imagenes/".$nom_arch);
		  $insertvend = sprintf("update departamento set  Imagen=%s where Cod=%s and Idioma=%s",
					   GetSQLValueString($nom_arch, "text"),	
					   GetSQLValueString($_GET['Cod'], "text"),					   
					   GetSQLValueString($id, "text"));
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
  if ($vacios==0){header("Location: departamento.php?".$UR."&Id=".$_GET["Id"]."&Usr=".$_GET["Usr"]."&Cod=".$_GET["Cod"]);}
}else{
 $query_reg_most = "SELECT * FROM departamento where Cod='".$_GET["Cod"]."' and Idioma='".$id."'";
 $reg_most = mysql_query($query_reg_most, $conexion) or die(mysql_error());
 $rowEdimar = mysql_fetch_assoc($reg_most);
 $totalRows_reg_most = mysql_num_rows($reg_most);
  $Resena=$rowEdimar['Resena']; $Mision=$rowEdimar['Mision']; $Vision=$rowEdimar['Vision']; $Imagen= $rowEdimar['Imagen'];
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

<body marginheight="0" topmargin="0" marginwidth="0" leftmargin="0">
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
            <td width="75%" height="30" align="left" class="Titulo">&nbsp;</td>
            <td width="25%" align="center" >&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2" align="left" class="Titulo"> <br>
                <?php  echo $rowEdimar['Nombre']; ?>            </td>
          </tr>
          <tr>
            <td colspan="2"><br>
                <table width="100%"  border="0" cellspacing="0" cellpadding="0">
				<form action="" method="post" enctype="multipart/form-data" name="forma">
                  <tr>
                    <td width="57%" class="Parrafo"> <table width="90%"  border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td height="50" colspan="2" align="left" class="Titulo_II">*Rese&ntilde;a Historica </td>
                      </tr>
                      <tr>
                        <td colspan="2" align="left" class="Titulo_II"><textarea name="Resena" cols="75" rows="10" id="Resena"><?php echo $Resena; ?></textarea></td>
                      </tr>
                      <tr>
                        <td height="50" colspan="2" align="left" class="Titulo_II">*Misi&oacute;n</td>
                      </tr>
                      <tr>
                        <td colspan="2" class="Parrafo"><textarea name="Mision" cols="75" rows="5"><?php echo  $Mision; ?></textarea>                          </td>
                      </tr>
                      <tr>
                        <td height="50" colspan="2" align="left" class="Titulo_II">*Visi&oacute;n</td>
                      </tr>
                      <tr >
                        <td colspan="2" class="Parrafo"><textarea name="Vision" cols="75" rows="5"><?php echo  $Vision; ?></textarea>                          </td>
                      </tr>
                      <tr>
                        <td height="50" colspan="2"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="22%">Imagen a Mostrar: </td>
                            <td width="78%"><input name="Imagen" type="file" id="Imagen" value="<?php echo  $Imagen; ?>"></td>
                          </tr>
                        </table></td>
                      </tr>
                      <tr class="Parrafo">
                        <td width="72%" height="30" class="Borde_Punteado Estilo1">*Datos Obligatorios </td>
                        <td width="28%">&nbsp;</td>
                      </tr>
                      <tr class="Parrafo">
                        <td height="30">&nbsp;</td>
                        <td height="30" align="center" class="Borde_Punteado"><input name="boton" type="submit" id="boton" value="Aceptar">
                          <input name="boton" type="submit" id="boton" value="Cancelar"></td>
                      </tr>
                    </table></td>
                    </tr>
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