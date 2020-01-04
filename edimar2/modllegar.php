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
	if ((trim($_POST['Cod'])!="")&&(trim($_POST['Parraf1'])!="")&&(trim($_POST['Parraf2'])!="")){
	mysql_query("BEGIN",$conexion);
       $insertvend = sprintf("update edimar set ComoLL_I=%s,ComoLL_II=%s,ComoLL_III=%s,ComoLL_IV=%s,FechaA=%s where Cod=%s",
					   GetSQLValueString($_POST['Parraf1'], "text"),
                       GetSQLValueString($_POST['Parraf2'], "text"),
					   GetSQLValueString($_POST['Parraf3'], "text"),
					   GetSQLValueString($_POST['Parraf4'], "text"),
					   GetSQLValueString(date('Y/m/d'), "text"),
					   GetSQLValueString($_POST['Cod'], "text"));
       $Result2 = mysql_query($insertvend, $conexion) or die(mysql_error());
	  if (mysql_errno() != 0){$err=1;}
	   if ($err==1){
		    mysql_query("ROLLBACK",$conexion);
		 }else{
		    mysql_query("COMMIT",$conexion);
		 } //else
	}else {$vacios=1;}
 
}//del aceptar
  if ($vacios==0){header("Location: como_llegar.php?".$UR."&Id=".$_GET["Id"]."&Usr=".$_GET["Usr"]);}
}else{
  $query_reg_most = "SELECT Cod , ComoLL_I, ComoLL_II,ComoLL_III, ComoLL_IV FROM  edimar where Idioma='".$id."'";
  $reg_most = mysql_query($query_reg_most, $conexion) or die(mysql_error());
  $rowEdimar = mysql_fetch_assoc($reg_most);
  $totalRows_reg_most = mysql_num_rows($reg_most);
  $Cod=$rowEdimar['Cod']; $Parraf1=$rowEdimar['ComoLL_I']; $Parraf2=$rowEdimar['ComoLL_II']; 
  $Parraf3=$rowEdimar['ComoLL_III']; $Parraf4=$rowEdimar['ComoLL_IV']; 
}//del if isset
 
///////////////////////////////////////////captura el periso del usuario////////////////////////////////////////////////////////////
 if ((empty($_GET["Usr"]))||($_GET["Usr"]=='0')){  
  if ((!empty($_POST["nick"]))&&(!empty($_POST["pass"]))){
   $query="SELECT Cod, Permiso, Nick FROM usuario where Nick='".$_POST["nick"]."' and Pass='".$_POST["pass"]."'";
   $reg_Usr=mysql_query($query, $conexion) or die(mysql_error());
   $rowUsr = mysql_fetch_assoc($reg_Usr); $usr=$rowUsr["Cod"]; $permiso=$rowUsr["Permiso"];$Nick=$rowUsr["Nick"];}
 }else{$query="SELECT Cod, Permiso, Nick FROM usuario where Cod='".$_GET["Usr"]."'";
   $reg_Usr=mysql_query($query, $conexion) or die(mysql_error());
   $rowUsr = mysql_fetch_assoc($reg_Usr); $usr=$rowUsr["Cod"]; $permiso=$rowUsr["Permiso"];$Nick=$rowUsr["Nick"];}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

 

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
    <td><iframe name="cabecera" frameborder="0"  width="100%" height="124" src="<?php echo "Cabecera.php?".$UR."&Id=".$_GET["Id"]."&Usr=".$usr?>"></iframe></td>
  </tr>
  
  <tr>
    <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="12%" valign="top"><script language="JavaScript">menuP('<?php echo $_GET["Id"];?>','<?php echo $usr;?>');</script></td>
        <td width="74%" valign="top"><table width="98%"  border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><br>
                <table width="99%"  border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="76%" height="30" align="center" class="Titulo">&nbsp;</td>
                    <td width="24%" align="center" >&nbsp;</td>
                  </tr>
                  <tr align="left">
                    <td colspan="2" class="Titulo"> <br>
                      <?php if ($id=='I'){echo "Where we are";}
					else{echo "Como Llegar a Edimar";}?></td>
                  </tr>
                  <tr>
                    <td colspan="2"><br><br>
                        <table width="100%"  border="0" cellspacing="0" cellpadding="0">
						<form action="" method="post" name="forma">
                          <tr>
                            <td height="20" colspan="2" valign="top" class="Titulo_II">*Primer P&aacute;rrafo (<em>M&aacute;ximo 4 lineas</em>) </td>
                          <tr>
                            <td height="21" colspan="2" align="center"><textarea name="Parraf1" cols="70" rows="4" id="Parraf1"><?php  echo  $Parraf1; ?></textarea>
                              <input type="hidden" name="Cod" value="<?php echo $Cod;?>">                              
                              <span class="Titulo">                              </span></td>
                          <tr>
                            <td height="50" colspan="2" valign="bottom" class="Titulo_II">*Segundo P&aacute;rrafo</td>
                          <tr>
                            <td height="21" colspan="2" align="center"><textarea name="Parraf2" cols="70" rows="7" id="textarea"><?php  echo  $Parraf2; ?>
                            </textarea></td>
                          <tr>
                            <td height="50" colspan="2" align="left" valign="bottom" class="Titulo_II">Tercer P&aacute;rrafo</td>
                          <tr>
                            <td height="21" colspan="2" align="center" ><textarea name="Parraf3" cols="70" rows="7" id="textarea2"><?php  echo  $Parraf3; ?>
                            </textarea></td>
                          <tr>
                            <td height="50" colspan="2" align="left" valign="bottom" class="Titulo_II">Cuarto P&aacute;rrafo</td>
                          <tr>
                            <td colspan="2" align="center" ><p>
                              
                              <textarea name="Parraf4" cols="70" rows="7" id="textarea3"><?php  echo  $Parraf4; ?>
                              </textarea>
                             
                                </p>                                </td>
                          <tr>
                            <td width="77%" height="40" class="Borde_Punteado"><span class="Estilo1">* Datos Obligatorios</span></td>
                            <td width="23%" class="Parrafo">&nbsp;</td>
                          <tr>
                            <td height="40" class="Parrafo"><p>&nbsp;</p></td>
							<td align="center" class="Borde_Punteado">							  <input name="boton" type="submit" id="boton" value="Aceptar">
							  <input name="boton" type="submit" id="boton" value="Cancelar"></td>
                          </form>
                          </table>
                        <p class="Parrafo">&nbsp; </p></td>
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

