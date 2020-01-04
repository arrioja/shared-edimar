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
	if ((trim($_POST['Titulo'])!="")&&(trim($_POST['Descrip'])!="")){
	$nom_arch=$_FILES["Imagen"]["name"]; $cad='';
	if ($nom_arch!=''){$cad=$nom_arch; copy($Imagen, "Imagenes/".$nom_arch);}else{$cad=$_GET['Img'];}
	mysql_query("BEGIN",$conexion);
	 if ($_GET["Op"]=='M'){
      $insertvend = sprintf("update linea_invest, edimar, departamento set linea_invest.Titulo=%s, linea_invest.Descrip=%s,
	                         linea_invest.Dpto=%s, linea_invest.Imagen=%s,edimar.FechaA=%s, departamento.FechaA=%s 
							 where departamento.Cod=linea_invest.Dpto and departamento.Idioma=edimar.Idioma and 
							 linea_invest.Idioma=departamento.Idioma and linea_invest.Cod=%s ",
	                   GetSQLValueString($_POST['Titulo'], "text"),
					   GetSQLValueString($_POST['Descrip'], "text"),
					   GetSQLValueString($_POST['Dpto'], "text"),
					   GetSQLValueString($cad, "text"),
					   GetSQLValueString(date('Y/m/d'), "text"),
					   GetSQLValueString(date('Y/m/d'), "text"),
                       GetSQLValueString($_GET['Cod'], "text"));
       $Result2 = mysql_query($insertvend, $conexion) or die(mysql_error());
	   if (mysql_errno() != 0){$err=1;}
	  }else{
	  if ($nom_arch!=''){copy($Imagen, "Imagenes/".$nom_arch);}$Dpt='';
	  if ($_GET["CodD"]!=''){$Dpt=$_GET["CodD"];}else{$Dpt=$_POST['Dpto'];};  
	    $insertvend = sprintf("INSERT INTO linea_invest (Titulo,Descrip,Dpto,Imagen, Idioma) VALUES (%s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['Titulo'], "text"),
					   GetSQLValueString($_POST['Descrip'], "text"),
					   GetSQLValueString($Dpt, "text"),
					   GetSQLValueString($nom_arch, "text"),
                       GetSQLValueString($id, "text"));
        $Result2 = mysql_query($insertvend, $conexion) or die(mysql_error());
		if (mysql_errno() != 0){$err=1;}else{
	    $insertvend = sprintf("update edimar,departamento set edimar.FechaA=%s, departamento.FechaA=%s where departamento.Cod=%s and departamento.Idioma=edimar.Idioma and departamento.Idioma=%s",
                       GetSQLValueString(date('Y/m/d'), "text"),
					   GetSQLValueString(date('Y/m/d'), "text"),
					   GetSQLValueString($Dpt, "text"),
					   GetSQLValueString($id, "text"));
            $Result3 = mysql_query($insertvend, $conexion) or die(mysql_error());
			if (mysql_errno() != 0){$err=1;}
		}	
		
	  } // $_GET["Op"]*/ 
	  if ($err==1){
		    mysql_query("ROLLBACK",$conexion);
	  }else{
		    mysql_query("COMMIT",$conexion);
	  } //else*/
	}else {$vacios=1;}
 
}//del aceptar
  if ($vacios==0){header("Location: lineas.php?".$UR."&Id=".$_GET["Id"]."&Usr=".$_GET["Usr"]);}
}else{
  if ($_GET["Op"]=='M'){
  $query_reg_most = "SELECT linea_invest.Cod, Nombre as Dpto, departamento.Cod as CodDpto, Titulo, Descrip FROM linea_invest inner join 
                    departamento on Dpto=departamento.Cod and departamento.Idioma='".$id."' 
					and linea_invest.Cod='".$_GET["Cod"]."'";
  $Linea = mysql_query($query_reg_most, $conexion) or die(mysql_error());
  $rowLinea = mysql_fetch_assoc($Linea);
  $Descrip=$rowLinea["Descrip"]; $Titulo=$rowLinea["Titulo"];$Img=$rowLinea["Imagen"];$Dpto1=$rowLinea["Dpto"];$CodDpto=$rowLinea["CodDpto"];}
}//del if isset


   
 $query_reg_most = "SELECT Titulo FROM  edimar where Idioma='".$id."'";
 $reg_most = mysql_query($query_reg_most, $conexion) or die(mysql_error());
 $rowEdimar = mysql_fetch_assoc($reg_most);
 
 if ($_GET["Op"]=='M'){  $subtitulo='Modificar Linea de Investigación'; }else{$subtitulo='Añadir Nueva Linea de Investigación';}
 
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
                            <td height="40" colspan="2">*Descripci&oacute;n:</td>
                          </tr>
                          <tr align="left">
                            <td colspan="2"><textarea name="Descrip" cols="75" rows="6" id="Descrip"><?php echo $Descrip;?></textarea></td>
                          </tr>
                          <tr align="left">
                            <td height="40">*Departamento:</td>
							<td height="40">
							<?php  if ($_GET["CodD"]==''){
					           $query="SELECT Cod, Nombre FROM departamento where Idioma='".$id."'";
                               $reg_Dpto=mysql_query($query, $conexion) or die(mysql_error());
					        ?>
                            <select name="Dpto" id="Dpto">
							<?php  if ($_GET["Op"]=='M'){?>
							<option value="<?php echo $CodDpto?>"><?php echo $Dpto1; ?> </option><?php }?>
							  <?php while ($row_Dpto = mysql_fetch_assoc($reg_Dpto)){ ?>
                              <option value="<?php echo $row_Dpto['Cod']?>"><?php echo $row_Dpto['Nombre']; ?> </option>
                              <?php }   ?>
                            </select><?php }  else {echo $_GET["NomD"];} ?></td>
                          </tr>
						  
                          <tr>
                            <td height="40">Imagen a mostrar: </td>
                            <td align="left"><input name="Imagen" type="file" id="Imagen" value="">
                              <input name="Img" type="hidden" id="Img" value="<?php echo $Img?>"></td>
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
