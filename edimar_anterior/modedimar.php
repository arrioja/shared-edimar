<?php $conexion = mysql_connect("localhost", "borg1978_root", "ivotrino"); 
mysql_select_db("borg1978_bdedimar", $conexion); 
  $UR="fti=yes&curmbox=00000000%2d0000%2d0000%2d0000%2d000000000001&a=c49ada04efe4dbbebabf65088e7c412b19e55dc687b349189bd90b9e41231034";
  $id='';$usr='0'; $permiso=''; ; $Nick=''; $Dper='';
if ((isset($_GET["Id"]))&& ($_GET["Id"]=='_Ing')){  $id='I';} else { $id='E';}
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
	if ((trim($_POST['Titulo'])!="")&&(trim($_POST['Parraf1'])!="")&&(trim($_POST['Parraf2'])!="")){
       $insertvend = sprintf("update edimar set Titulo=%s,Parrafo_I=%s,Parrafo_II=%s where Cod=%s",
					   GetSQLValueString($_POST['Titulo'], "text"),
                       GetSQLValueString($_POST['Parraf1'], "text"),
					   GetSQLValueString($_POST['Parraf2'], "text"),
					   GetSQLValueString($_POST['Cod'], "text"));
       $Result2 = mysql_query($insertvend, $conexion) or die(mysql_error());
	  
	}else {$vacios=1;}
 
}//del aceptar
  if ($vacios==0){header("Location: index.php?".$UR."&Id=".$_GET["Id"]."&Usr=".$_GET["Usr"]);}
}else{
  $query_reg_most = "SELECT * FROM  edimar where Idioma='".$id."'";
  $reg_most = mysql_query($query_reg_most, $conexion) or die(mysql_error());
  $rowEdimar = mysql_fetch_assoc($reg_most);
  $totalRows_reg_most = mysql_num_rows($reg_most);
  $Cod=$rowEdimar['Cod']; $Titulo=$rowEdimar['Titulo']; $Parraf1=$rowEdimar['Parrafo_I']; $Parraf2=$rowEdimar['Parrafo_II']; 
  
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
    <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="2%" rowspan="2"><img src="Imagenes/Banner_Izq.jpg" width="319" height="82"></td>
                <td width="96%"><img src="Imagenes/Centro_Sup.jpg" width="100%" height="36"></td>
                <td width="2%" rowspan="2"><img src="Imagenes/Banner_Der_Sup.jpg" width="385" height="82"></td>
              </tr>
              <tr>
                <td height="46" align="right" background="Imagenes/Linea_R.jpg"><a href="<?php echo "index.php?".$UR."&Id=_E&Usr=".$usr;?>">Espa&ntilde;ol</a> /<a href="<?php echo "index.php?".$UR."&Id=_Ing&Usr=".$usr;?>"> Ingles</a> </td>
              </tr>
          </table></td>
  </tr>
  <tr>
    <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="143"><table width="143"  border="0" cellspacing="0" cellpadding="0" height="42">
          <tr>
            <td width="50" rowspan="2" align="left"><img src="Imagenes/Curva_II.jpg" width="50" height="42"></td>
            <td width="71" ><table width="71"  border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="29" align="left"><img src="Imagenes/casa.jpg" width="29" height="23"></td>
                  <td width="13"><img src="Imagenes/Centro_M.jpg" width="13" height="23"></td>
                  <td width="29" align="right"><img src="Imagenes/Sobre.jpg" width="29" height="23"></td>
                </tr>
            </table></td>
            <td width="22" rowspan="2" align="left"><img src="Imagenes/Curva_III.jpg" width="22" height="42"></td>
          </tr>
          <tr>
            <td  valign="bottom"><img src="Imagenes/curva_I.jpg" width="71" height="19"></td>
          </tr>
        </table></td>
        <td width="363" align="center" background="Imagenes/Centro_Inf_II.jpg"><table width="95%" height="35" cellpadding="0" cellspacing="0"  class="Borde_Punteado">
          <form name="form1" method="post" action="">
            <tr>
              <td width="41%" class="letra_Busq"><div align="right">Busqueda /Search: &nbsp;</div></td>
              <td width="43%">
                <input type="text" name="textfield">
              </td>
              <td width="16%"><input type="submit" name="Submit" value="  Ir "></td>
            </tr>
          </form>
        </table></td>
        <td >&nbsp;</td>
        <td width="296" align="right"><img src="Imagenes/Banner_Der_Inf.jpg" width="296" height="42"></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="12%" valign="top"><script language="JavaScript">menuP('<?php echo $_GET["Id"];?>','<?php echo $usr;?>');</script></td>
        <td width="74%" valign="top"><table width="98%"  border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="80%" align="center" class="Titulo"> <br>
      </td>
            </tr>
          <tr>
            <td><br>
                <table width="100%"  border="0" cellspacing="0" cellpadding="0">
				<form name="form2" method="post" action="">
                  <tr>
                    <td height="20" colspan="3" class="Titulo_II">*T&iacute;tulo:</td>
                  </tr>
                  <tr>
                    <td colspan="3" class="Parrafo">                     
                      <textarea name="Titulo" cols="80" rows="2" id="Titulo"><?php  echo $Titulo; ?>
                      </textarea>
</td>
                  </tr>
                  <tr>
                    <td height="40" colspan="3" class="Titulo_II">*Primer P&aacute;rrafo (<em>Maximo 7 lineas </em>): </td>
                  </tr>
                  <tr>
                    <td colspan="3" class="Parrafo"><textarea name="Parraf1" cols="80" rows="7" id="Parraf1"><?php echo $Parraf1; ?>
                      </textarea>                       </td>
                    </tr>
                  <tr>
                    <td height="40" colspan="3"  class="Titulo_II">*Segundo P&aacute;rrafo:</td>
                  <tr>
                  <td colspan="3" class="Parrafo"><textarea name="Parraf2" cols="80" rows="10" id="Parraf2"><?php echo $Parraf2; ?>
                      </textarea>
                        <input name="Cod" type="hidden" id="Cod" value="<?php echo $Cod; ?>"></td>
				  <tr>
				    <td width="74%" height="50" colspan="2" valign="bottom" class="Borde_Punteado Estilo1">* Datos Obligatorios </td>
				    <td width="26%" align="center" class="Parrafo">&nbsp;</td>
				  <tr>
				    <td height="35" colspan="2" valign="bottom" >&nbsp;</td>
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
