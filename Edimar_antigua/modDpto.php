<?php $conexion = mysql_connect("localhost", "root", ""); 
mysql_select_db("bd_edimar", $conexion);
$UR="fti=yes&curmbox=00000000%2d0000%2d0000%2d0000%2d000000000001&a=c49ada04efe4dbbebabf65088e7c412b19e55dc687b349189bd90b9e41231034";
$id='';$usr='0'; $permiso=''; ; $Nick='';
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
 	    $err=0;
  if  ($_POST['boton']=="Aceptar") {
    //modificar  noticias
	if ((trim($_POST['Resena'])!="")&&(trim($_POST['Mision'])!="")&&(trim($_POST['Vision'])!="")){
	 mysql_query("BEGIN",$conexion); 
       $insertvend = sprintf("update departamento set Resena=%s,Mision=%s,Vision=%s where Cod=%s and Idioma=%s",
					   GetSQLValueString($_POST['Resena'], "text"),
                       GetSQLValueString($_POST['Mision'], "text"),
					   GetSQLValueString($_POST['Vision'], "text"),
					   GetSQLValueString($_GET['Cod'], "text"),
					   GetSQLValueString($id, "text"));
       $Result2 = mysql_query($insertvend, $conexion) or die(mysql_error());
	  if (mysql_errno() != 0){$err=1;}
		
		if ($err==0){		
		  $nomFoto=explode("/",$Imagen); $num = count($nomFoto)-1; 
		  copy($Imagen, "Imagenes/Dpto".$_GET['Cod'].".jpg");
		  $insertvend = sprintf("update departamento set  Imagen=%s where Cod=%s and Idioma=%s",
					   GetSQLValueString("Dpto".$_GET['Cod'].".jpg", "text"),	
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

 
///////////////////////////////////////////captura el periso del usuario//////////////////////////////////////////////////////////// 
 if ((empty($_GET["Usr"]))||($_GET["Usr"]=='0')){  
  if ((!empty($_POST["nick"]))&&(!empty($_POST["pass"]))){
   $query="SELECT Cod, Permiso, Nick FROM usuario where Nick='".$_POST["nick"]."' and Pass='".$_POST["pass"]."'";
   $reg_Usr=mysql_query($query, $conexion) or die(mysql_error());
   $rowUsr = mysql_fetch_assoc($reg_Usr); $usr=$rowUsr["Cod"]; $permiso=$rowUsr["Permiso"];$Nick=$rowUsr["Nick"];}
 }else{$query="SELECT Cod, Permiso, Nick FROM usuario where Cod='".$_GET["Usr"]."'";
   $reg_Usr=mysql_query($query, $conexion) or die(mysql_error());
   $rowUsr = mysql_fetch_assoc($reg_Usr); $usr=$rowUsr["Cod"]; $permiso=$rowUsr["Permiso"];$Nick=$rowUsr["Nick"];}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////




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
    <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="2%" rowspan="2"><img src="Imagenes/Banner_Izq.jpg" width="319" height="82"></td>
                <td width="96%"><img src="Imagenes/Centro_Sup.jpg" width="100%" height="36"></td>
                <td width="2%" rowspan="2"><img src="Imagenes/Banner_Der_Sup.jpg" width="385" height="82"></td>
              </tr>
              <tr>
                <td height="46" align="right" background="Imagenes/Linea_R.jpg"><a href="<?php echo "index.php?".$UR."&Id=_E&Usr=".$usr;?>">Espa&ntilde;ol</a> /<a href="<?php echo "index.php?".$UR."&Id=_Ing&Usr=".$usr;?>"> Ingles</a></td>
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
            <td width="75%" height="30" align="left" class="Titulo">&nbsp;</td>
            <td width="25%" align="center" >&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2" align="left" class="Titulo"> <br>
                <?php  echo $rowEdimar['Nombre']; ?>
            </td>
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
        <td width="14%" class="borde_rayado"><table width="100%"   border="0" cellpadding="0" cellspacing="0" >
            <tr>
              <td >Noticias</td>
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