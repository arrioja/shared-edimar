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
	if ((trim($_POST['Titulo'])!="")&&(trim($_POST['Link'])!="")){
	$nom_arch=$_FILES["Imagen"]["name"];
	mysql_query("BEGIN",$conexion);
	 if ($_GET["Op"]=='M'){
	   
       $insertvend = sprintf("update link, edimar set Titulo=%s, Link=%s where Cod=%s",
	                   GetSQLValueString($_POST['Titulo'], "text"),
					   GetSQLValueString($_POST['Link'], "text"),
					   GetSQLValueString($_GET['Cod'], "text"));
       $Result2 = mysql_query($insertvend, $conexion) or die(mysql_error());
	   if (mysql_errno() != 0){$err=1;}
		// $num = count($nomFoto)-1; 
		if (($err==0)&&($nom_arch!='')){		
		 
		  copy($Imagen, "Imagenes/".$nom_arch);
		  $insertvend = sprintf("update link set Imagen=%s where Cod=%s",
					   GetSQLValueString($nom_arch, "text"),					   
					   GetSQLValueString($_GET['Cod'], "text"));
          $Result2 = mysql_query($insertvend, $conexion) or die(mysql_error());
		if (mysql_errno() != 0){$err=1;}
		}
	    
	  }else{
	  $cad='';$cad2='';
	  if ($nom_arch!=''){	 
	    $insertvend = sprintf("INSERT INTO link (Titulo, Imagen,Link) VALUES (%s,%s, %s)",
                       GetSQLValueString($_POST['Titulo'], "text"),
					   GetSQLValueString($nom_arch, "text"),
					   GetSQLValueString($_POST['Link'], "text"));
	  }else{
	    $insertvend = sprintf("INSERT INTO link (Titulo,Link) VALUES (%s, %s)",
                       GetSQLValueString($_POST['Titulo'], "text"),
					   GetSQLValueString($_POST['Link'], "text"));
	  }
        $Result2 = mysql_query($insertvend, $conexion) or die(mysql_error());
		
	  } // $_GET["Op"] 
	  if ($err==1){
		    mysql_query("ROLLBACK",$conexion);
		 }else{
		    mysql_query("COMMIT",$conexion);
	  } //else
	}else {$vacios=1;}
 
}//del aceptar
  if ($vacios==0){header("Location: links.php?".$UR."&Id=".$_GET["Id"]."&Usr=".$_GET["Usr"]);}
}else{
  if ($_GET["Op"]=='M'){
  $query_reg_most = "SELECT * FROM link where Cod='".$_GET["Cod"]."'";
  $Linea = mysql_query($query_reg_most, $conexion) or die(mysql_error());
  $rowLinea = mysql_fetch_assoc($Linea);
  $Link=$rowLinea["Link"]; $Titulo=$rowLinea["Titulo"];}
}//del if isset


   
 
 
 if ($_GET["Op"]=='M'){  $subtitulo='Modificar Link'; }else{$subtitulo='Añadir Nuevo Link';}
 
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
            <td ><br>
              <br>
                <table width="100%"  border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="52%" valign="top"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
					<form action="" method="post" enctype="multipart/form-data" name="form2">

                      <tr >
                        <td align="center" colspan="2" >                            <table width="100%"  border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="16%" height="40" align="left">*Titulo:</td>
                            <td width="84%" align="left"><input name="Titulo" type="text" id="Titulo" size="60" value="<?php echo $Titulo;?>"></td>
                          </tr>
                          <tr align="left">
                            <td height="40">*Link:</td>
                            
                            <td height="40"><input name="Link" type="text" id="Link" size="45" maxlength="45" value="<?php echo $Link;?>"></td>
                          </tr>
						  
                          <tr>
                            <td height="40">Imagen a mostrar: </td>
                            <td align="left"><input name="Imagen" type="file" id="Imagen" ></td>
                          </tr> 
                        </table></td>
                      </tr>
                      <tr>
                        <td width="69%" height="50" class="Borde_Punteado Estilo1">* Datos Obligatorios</td>
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
