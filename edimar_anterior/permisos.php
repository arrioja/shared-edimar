<?php $conexion = mysql_connect("localhost", "borg1978_root", "ivotrino"); 
mysql_select_db("borg1978_bdedimar", $conexion); 
  $UR="fti=yes&curmbox=00000000%2d0000%2d0000%2d0000%2d000000000001&a=c49ada04efe4dbbebabf65088e7c412b19e55dc687b349189bd90b9e41231034";
  $id='';$usr='0'; $permiso=''; ; $Nick=''; $Buque1='';
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
       $insertvend = sprintf("update permisopag set Objetivo=%s,ComoLL=%s, Organigrama=%s, Ed360=%s, Investigador=%s, Dpto=%s, LineaInvs=%s, 
	                          ProyectoE=%s, ProyectoC=%s, Educacion=%s, PublicacionS=%s, PublicacionC=%s,  Noticia=%s, Evento=%s,
							  Trabj=%s, Pasantia=%s, Tesis=%s, LabAlim=%s, LabAguas=%s, Consultoria=%s, Sistema=%s, Buque=%s, Museo=%s",
					   GetSQLValueString($_POST['Obj'], "text"), GetSQLValueString($_POST['ComoLL'], "text"),
					   GetSQLValueString($_POST['Orga'], "text"),GetSQLValueString($_POST['Edim'], "text"),
					   GetSQLValueString($_POST['Inves'], "text"),GetSQLValueString($_POST['Dpto'], "text"),
					   GetSQLValueString($_POST['Linea'], "text"),GetSQLValueString($_POST['ProyE'], "text"),
					   GetSQLValueString($_POST['ProyC'], "text"),GetSQLValueString($_POST['Educa'], "text"),
					   GetSQLValueString($_POST['Public'], "text"),GetSQLValueString($_POST['Contrib'], "text"),
					   GetSQLValueString($_POST['Noti'], "text"),GetSQLValueString($_POST['Event'], "text"),
					   GetSQLValueString($_POST['Trab'], "text"),GetSQLValueString($_POST['Pasan'], "text"),
					   GetSQLValueString($_POST['Tesis'], "text"),GetSQLValueString($_POST['Alim'], "text"),
					   GetSQLValueString($_POST['Agua'], "text"),GetSQLValueString($_POST['Consult'], "text"),
					   GetSQLValueString($_POST['Sist'], "text"),GetSQLValueString($_POST['Buque'], "text"),
					   GetSQLValueString($_POST['Museo'], "text"));
       $Result2 = mysql_query($insertvend, $conexion) or die(mysql_error());
	  

 
}//del aceptar
  if ($vacios==0){header("Location: index.php?".$UR."&Id=".$_GET["Id"]."&Usr=".$_GET["Usr"]);}
}else{
  $query_reg_most = "SELECT * FROM  permisopag";
  $reg_most = mysql_query($query_reg_most, $conexion) or die(mysql_error());
  $rowEdimar = mysql_fetch_assoc($reg_most);
  $totalRows_reg_most = mysql_num_rows($reg_most);
  $Obj=$rowEdimar['Objetivo']; $ComoLL=$rowEdimar['ComoLL']; $Orga=$rowEdimar['Organigrama']; $Edim=$rowEdimar['Ed360']; 
  $Inves=$rowEdimar['Investigador'];$Dpto=$rowEdimar['Dpto']; $Linea=$rowEdimar['LineaInvs']; $ProyE=$rowEdimar['ProyectoE'];
  $ProyC=$rowEdimar['ProyectoC']; $Educa=$rowEdimar['Educacion']; $Public=$rowEdimar['PublicacionS']; $Contrib=$rowEdimar['PublicacionC'];
  $Noti=$rowEdimar['Noticia']; $Event=$rowEdimar['Evento']; $Trab=$rowEdimar['Trabj']; $Pasan=$rowEdimar['Pasantia'];
  $Tesis=$rowEdimar['Tesis']; $Alim=$rowEdimar['LabAlim']; $Agua=$rowEdimar['LabAguas']; $Consult=$rowEdimar['Consultoria'];
  $Sist=$rowEdimar['Sistema']; $Buque=$rowEdimar['Buque']; $Museo=$rowEdimar['Museo'];
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
            Mostrar Contenidos de P&aacute;ginas</td>
            </tr>
          <tr>
            <td><br>
                <table width="100%"  border="0" cellspacing="0" cellpadding="0">
				<form name="form2" method="post" action="">
                  <tr>
                    <td height="30" >*Objetivos y Facilidades de Edimar:</td>
                    <td colspan="2" ><select name="Obj">
					   <?php if ($Obj=='0'){?>
                      <option value="0" selected>Todo P�blico</option>
					  <option value="2">Usuario Registrado</option>
                       <?php }else{?>
                      <option value="0">Todo P&uacute;blico</option>
                      <option value="2" selected>Usuario Registrado</option><?php }?>
                    </select></td>
                  </tr>
                  <tr>
                    <td height="30">*Como Llegara a Edimar : </td>
                    <td colspan="2"><select name="ComoLL" id="ComoLL">
                       <?php if ($ComoLL=='0'){?>
                      <option value="0" selected>Todo P�blico</option>
					  <option value="2">Usuario Registrado</option>
                       <?php }else{?>
                      <option value="0">Todo P&uacute;blico</option>
                      <option value="2" selected>Usuario Registrado</option><?php }?>
                    </select></td>
                  </tr>
                  <tr>
                    <td height="30">*Organigrama:</td>
                    <td  colspan="2" ><select name="Orga" >
                       <?php if ($Orga=='0'){?>
                      <option value="0" selected>Todo P�blico</option>
					  <option value="2">Usuario Registrado</option>
                       <?php }else{?>
                      <option value="0">Todo P&uacute;blico</option>
                      <option value="2" selected>Usuario Registrado</option><?php }?>
                    </select></td>
                  </tr>
                  <tr>
                    <td height="30">*Edimar 360&ordm;:                        </td>
                    <td class="Parrafo" colspan="2"><select name="Edim">
                       <?php if ($Edim=='0'){?>
                      <option value="0" selected>Todo P�blico</option>
					  <option value="2">Usuario Registrado</option>
                       <?php }else{?>
                      <option value="0">Todo P&uacute;blico</option>
                      <option value="2" selected>Usuario Registrado</option><?php }?>
                    </select></td>
                  </tr><tr>
                    <td height="30">*Listado de Investigadores:</td>
                    <td colspan="2"><select name="Inves" >
                      <?php if ($Inves=='0'){?>
                      <option value="0" selected>Todo P�blico</option>
					  <option value="2">Usuario Registrado</option>
                       <?php }else{?>
                      <option value="0">Todo P&uacute;blico</option>
                      <option value="2" selected>Usuario Registrado</option><?php }?>
                    </select></td>
                  <tr>
                    <td height="30">*Departamentos:</td>
                    <td colspan="2"><select name="Dpto" >
                      <?php if ($Dpto=='0'){?>
                      <option value="0" selected>Todo P�blico</option>
					  <option value="2">Usuario Registrado</option>
                       <?php }else{?>
                      <option value="0">Todo P&uacute;blico</option>
                      <option value="2" selected>Usuario Registrado</option><?php }?>
                    </select></td>
                  <tr>
                    <td height="30">*Linea de Investigaci&oacute;n: </td>
                    <td colspan="2"><select name="Linea" >
                      <?php if ($Linea=='0'){?>
                      <option value="0" selected>Todo P�blico</option>
					  <option value="2">Usuario Registrado</option>
                       <?php }else{?>
                      <option value="0">Todo P&uacute;blico</option>
                      <option value="2" selected>Usuario Registrado</option><?php }?>
                    </select></td>
                  <tr>
                    <td height="30">*Proyectos en Ejecuci&oacute;n:</td>
                    <td colspan="2"><select name="ProyE" >
                       <?php if ($ProyE=='0'){?>
                      <option value="0" selected>Todo P�blico</option>
					  <option value="2">Usuario Registrado</option>
                       <?php }else{?>
                      <option value="0">Todo P&uacute;blico</option>
                      <option value="2" selected>Usuario Registrado</option><?php }?>
                    </select></td>
                  <tr>
                    <td height="30">*Proyectos Culminados: </td>
                    <td colspan="2"><select name="ProyC">
                      <?php if ($ProyC=='0'){?>
                      <option value="0" selected>Todo P�blico</option>
					  <option value="2">Usuario Registrado</option>
                       <?php }else{?>
                      <option value="0">Todo P&uacute;blico</option>
                      <option value="2" selected>Usuario Registrado</option><?php }?>
                    </select></td>
                  <tr>
                    <td height="30">*Educaci&oacute;n:</td>
                    <td colspan="2"><select name="Educa"  >
                       <?php if ($Educa=='0'){?>
                      <option value="0" selected>Todo P�blico</option>
					  <option value="2">Usuario Registrado</option>
                       <?php }else{?>
                      <option value="0">Todo P&uacute;blico</option>
                      <option value="2" selected>Usuario Registrado</option><?php }?>
                    </select></td>
                  <tr>
                    <td height="30">*Publicaciones Selectas: </td>
                    <td colspan="2"><select name="Public">
                       <?php if ($Public=='0'){?>
                      <option value="0" selected>Todo P�blico</option>
					  <option value="2">Usuario Registrado</option>
                       <?php }else{?>
                      <option value="0">Todo P&uacute;blico</option>
                      <option value="2" selected>Usuario Registrado</option><?php }?>
                    </select></td>
                  <tr>
                    <td height="30">*Contribuciones:</td>
                    <td colspan="2"><select name="Contrib">
                      <?php if ($Contrib=='0'){?>
                      <option value="0" selected>Todo P�blico</option>
					  <option value="2">Usuario Registrado</option>
                       <?php }else{?>
                      <option value="0">Todo P&uacute;blico</option>
                      <option value="2" selected>Usuario Registrado</option><?php }?>
                    </select></td>
                  <tr>
                    <td height="30">*Noticias:</td>
                    <td colspan="2"><select name="Noti">
                      <?php if ($Noti=='0'){?>
                      <option value="0" selected>Todo P�blico</option>
					  <option value="2">Usuario Registrado</option>
                       <?php }else{?>
                      <option value="0">Todo P&uacute;blico</option>
                      <option value="2" selected>Usuario Registrado</option><?php }?>
                    </select></td>
                  <tr>
                    <td height="30">*Eventos:</td>
                    <td colspan="2"><select name="Event">
                      <?php if ($Event=='0'){?>
                      <option value="0" selected>Todo P�blico</option>
					  <option value="2">Usuario Registrado</option>
                       <?php }else{?>
                      <option value="0">Todo P&uacute;blico</option>
                      <option value="2" selected>Usuario Registrado</option><?php }?>
                    </select></td>
                  <tr>
                    <td height="30">*Ofertas de Trabajo: </td>
                    <td colspan="2"><select name="Trab" id="select25">
                     <?php if ($Trab=='0'){?>
                      <option value="0" selected>Todo P�blico</option>
					  <option value="2">Usuario Registrado</option>
                       <?php }else{?>
                      <option value="0">Todo P&uacute;blico</option>
                      <option value="2" selected>Usuario Registrado</option><?php }?>
                    </select></td>
                  <tr>
                    <td height="30">*Pasant&iacute;as Disponibles: </td>
                    <td colspan="2"><select name="Pasan">
                      <?php if ($Pasan=='0'){?>
                      <option value="0" selected>Todo P�blico</option>
					  <option value="2">Usuario Registrado</option>
                       <?php }else{?>
                      <option value="0">Todo P&uacute;blico</option>
                      <option value="2" selected>Usuario Registrado</option><?php }?>
                    </select></td>
                  <tr>
                    <td height="30">*Propuestas de Tesis: </td>
                    <td colspan="2"><select name="Tesis">
                     <?php if ($Tesis=='0'){?>
                      <option value="0" selected>Todo P�blico</option>
					  <option value="2">Usuario Registrado</option>
                       <?php }else{?>
                      <option value="0">Todo P&uacute;blico</option>
                      <option value="2" selected>Usuario Registrado</option><?php }?>
                    </select></td>
                  <tr>
                    <td height="30">*Calidad de Alimentos: </td>
                    <td colspan="2"><select name="Alim">
                      <?php if ($Alim=='0'){?>
                      <option value="0" selected>Todo P�blico</option>
					  <option value="2">Usuario Registrado</option>
                       <?php }else{?>
                      <option value="0">Todo P&uacute;blico</option>
                      <option value="2" selected>Usuario Registrado</option><?php }?>
                    </select></td>
                  <tr>
                    <td height="30">*Calidad de Aguas: </td>
                    <td colspan="2"><select name="Agua">
                     <?php if ($Agua=='0'){?>
                      <option value="0" selected>Todo P�blico</option>
					  <option value="2">Usuario Registrado</option>
                       <?php }else{?>
                      <option value="0">Todo P&uacute;blico</option>
                      <option value="2" selected>Usuario Registrado</option><?php }?>
                    </select></td>
                  <tr>
                    <td height="30" >*Consultoria:</td>
                    <td class="Parrafo" colspan="2"><select name="Consult">
                      <?php if ($Consult=='0'){?>
                      <option value="0" selected>Todo P�blico</option>
					  <option value="2">Usuario Registrado</option>
                       <?php }else{?>
                      <option value="0">Todo P&uacute;blico</option>
                      <option value="2" selected>Usuario Registrado</option><?php }?>
                    </select></td>
                  <tr>
                    <td height="30" >*Sistema de Informaci&oacute;n Oceanogr&aacute;fico:</td>
                    <td colspan="2"><select name="Sist">
					<?php if ($Sist=='0'){?>
                      <option value="0" selected>Todo P�blico</option>
					  <option value="2">Usuario Registrado</option>
                       <?php }else{?>
                      <option value="0">Todo P&uacute;blico</option>
                      <option value="2" selected>Usuario Registrado</option><?php }?>
                    </select></td>
                  <tr>
                    <td height="30" >*Buque Hermanos Gines: </td>
                    <td colspan="2"><select name="Buque">
                     <?php if ($Buque=='0'){?>
                      <option value="0" selected>Todo P�blico</option>
					  <option value="2">Usuario Registrado</option>
                       <?php }else{?>
                      <option value="0">Todo P&uacute;blico</option>
                      <option value="2" selected>Usuario Registrado</option><?php }?>
                    </select></td>
                  <tr>
                  <td height="30" >* Museo Oceanol&oacute;gico Benigno Roman: </td>
				  <td colspan="2"><select name="Museo">
                          <?php if ($Museo=='0'){?>
                      <option value="0" selected>Todo P�blico</option>
					  <option value="2">Usuario Registrado</option>
                       <?php }else{?>
                      <option value="0">Todo P&uacute;blico</option>
                      <option value="2" selected>Usuario Registrado</option><?php }?>
                  </select></td>
                  <tr>
				    <td width="35%" height="50"  valign="bottom" class="Borde_Punteado Estilo1" colspan="2">* Datos Obligatorios </td>
				    <td  align="center" >&nbsp;</td>
				  <tr>
				    <td height="35"  valign="bottom" >&nbsp;</td>
				    <td width="39%" align="center" ><span class="Parrafo">
				      </span></td>
				    <td width="26%" align="center" class="Borde_Punteado"><span class="Parrafo">
				      <input name="boton" type="submit" id="boton2" value="Aceptar">
                      <input name="boton" type="submit" id="boton2" value="Cancelar">
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
