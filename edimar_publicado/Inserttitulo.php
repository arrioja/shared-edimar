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
	if ((trim($_POST['Titulo'])!="")&&(trim($_POST['Uni'])!="")&&(trim($_POST['Ano'])!="")&&(trim($_POST['Tipo'])!="")){
	 
	    $insertvend = sprintf("INSERT INTO titulo (Cod, Titulo,Universidad,Mes, ano, Tipo) VALUES (%s, %s, %s,%s,%s,%s)",
                       GetSQLValueString($_GET['Cod'], "text"),
					   GetSQLValueString($_POST['Titulo'], "text"),
					   GetSQLValueString($_POST['Uni'], "text"),
					   GetSQLValueString($_POST['Mes'], "text"),
					   GetSQLValueString($_POST['Ano'], "text"),
					   GetSQLValueString($_POST['Tipo'], "text"));   
        $Result2 = mysql_query($insertvend, $conexion) or die(mysql_error());
	 
	  
	}else {$vacios=1;}
 
}//del aceptar
  if ($vacios==0){header("Location: modpersonal.php?".$UR."&Id=".$_GET["Id"]."&Usr=".$_GET["Usr"]."&Cod=".$_GET["Cod"]);}

}//del if isset


   
 $query_reg_most = "SELECT Nombre, Apellido, Cargo FROM  personal where Cod='".$_GET["Cod"]."'";
 $reg_most = mysql_query($query_reg_most, $conexion) or die(mysql_error());
 $rowEdimar = mysql_fetch_assoc($reg_most);
 
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
            <td align="center" > <div  class="Titulo"><br> <?php  echo  $rowEdimar['Nombre']." ".$rowEdimar['Apellido']; ?></div>
			<?php  echo  $rowEdimar['Cargo']; ?>      </td>
          </tr>
          <tr>
            <td ><br>
              <br>
                <table width="100%"  border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="52%" valign="top"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
					<form name="form2" method="post" action="">
                      <tr>
                        <td width="69%" height="60" valign="bottom" class="Borde_Punteado"><span class="Titulo"><?php echo "A�adir Nuevo T�tulo";?></span></td>
                        <td width="31%">&nbsp;</td>
                      </tr>
                      <tr>
                        <td height="30">&nbsp;</td>
                        <td align="center" >&nbsp;                        </td>
                      </tr>
                      <tr>
                        <td height="20" colspan="2" class="Titulo_II">                          <table width="90%"  border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td height="30">*T&iacute;tulo:</td>
                              <td colspan="3"><input name="Titulo" type="text" id="Titulo" size="60"></td>
                            </tr>
                            <tr>
                              <td height="30">*Universidad:</td>
                              <td colspan="3"><input name="Uni" type="text" id="Uni"></td>
                            </tr>
                            <tr>
                              <td width="28%" height="30">&nbsp; Mes:</td>
                              <td width="23%"><input name="Mes" type="text" id="Mes" size="12"></td>
                              <td width="11%">*A&ntilde;o:</td>
                              <td width="38%"><input name="Ano" type="text" id="Ano" size="4" maxlength="4"></td>
                            </tr>
                            <tr>
                              <td height="30" >*Tipo:</td>
                              <td colspan="3"><select name="Tipo" id="Tipo">
                                <option value="Pregrado">Pregrado</option>
                                <option value="Postgrado">Postgrado</option>
                              </select></td>
                            </tr>
                          </table></td>
                      </tr>
                      
                      <tr >
                        <td align="center" colspan="2" >&nbsp;                            </td>
                      </tr>
                      <tr>
                        <td height="40" class="Borde_Punteado Estilo1">* Datos Obligatorios</td>
                        <td height="20" align="center">&nbsp;</td>
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
