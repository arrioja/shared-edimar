<?php include('conexion.php');
   $query="SELECT  Edimar  as Permiso FROM permisopag";
   $reg_Per=mysql_query($query, $conexion) or die(mysql_error()); $rowPer = mysql_fetch_assoc($reg_Per);
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


$query_reg_most = "SELECT * FROM  laboratorios where Cod='".$_GET["Cod"]."' and Idioma='".$id."'";
 $reg_most = mysql_query($query_reg_most, $conexion) or die(mysql_error());
 $rowEdimar = mysql_fetch_assoc($reg_most);
 $totalRows_reg_most = mysql_num_rows($reg_most);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Pagina Edimar</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="Estilo_Edimar.css" rel="stylesheet" type="text/css">
<script language="JavaScript" src="menu_p.js"></script>

<script language="JavaScript" src="mm_menu.js"></script>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" onLoad="MM_preloadImages('Imagenes/logoE2.jpg')">
<script language="JavaScript1.2">mmLoadMenus('<?php echo $Id;?>','<?php echo $usr;?>');</script>
<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><iframe name="cabecera" frameborder="0"  width="100%" height="124" src="<?php echo "Cabecera.php?".$UR."&Id=".$_GET["Id"]."&Usr=".$usr?>" scrolling="no"></iframe></td>
  </tr>
  
  <tr>
    <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="5%" valign="top"><script language="JavaScript">menuP('<?php echo $Id;?>','<?php echo $usr;?>');</script></td>
        <td width="81%" valign="top">
		<?php if (($rowPer['Permiso']==$permiso)||($rowPer['Permiso']=='0')||($permiso=='1')){?>
		<table width="98%"  border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="663"  height="30" align="center" class="Titulo">&nbsp;</td>
            <td width="184" align="center" class="Borde_Punteado"><?php if($permiso=='1'){?>
			<A href="<?php echo "modLab.php?".$UR."&Id=".$Id."&Usr=".$usr."&Cod=".$_GET["Cod"]?>">
			<img border="0" src="Imagenes/mod.jpg" width="21" height="23"> Modificar</A><?php }?></td>
          </tr>
          <tr>
            <td colspan="2" align="left" > <p class="Titulo">
              <?php  echo  $rowEdimar['Titulo'];  ?></p>
              <p class="Parrafo"><?php echo  $rowEdimar['Descrip']; ?> </p>
              <p class="Parrafo">&nbsp;</p>
              <p ><strong><?php  if ((isset($_GET["Id"]))&& ($_GET["Id"]=='_Ing'))
			         { echo "Productos a analizar: ";} 
			         else { echo "Productos a analizar: "; } ?></strong>
			<?php echo  $rowEdimar['Producto']; ?>  </p>
			 <p ><strong><?php  if ((isset($_GET["Id"]))&& ($_GET["Id"]=='_Ing'))
			         { echo "Análisis físicos y químicos ";} 
			         else { echo "Análisis físicos y químicos "; } ?></strong></p>
			<p  class="Parrafo"><?php echo  $rowEdimar['Analisis']; ?>  </p>
			<p ><strong><?php  if ((isset($_GET["Id"]))&& ($_GET["Id"]=='_Ing'))
			         { echo "Contamos con: ";} 
			         else { echo "Contamos con:"; } ?></strong></p>
			<p  class="Parrafo"><?php echo  $rowEdimar['Recursos']; ?>  </p>
			<p ><strong><?php  if ((isset($_GET["Id"]))&& ($_GET["Id"]=='_Ing'))
			         { echo "Como acceder a nuestros servicios: ";} 
			         else { echo "Como acceder a nuestros servicios:"; } ?></strong></p>
			<p  class="Parrafo"><?php echo  $rowEdimar['Contactos']; ?>  </p>
			<?php if (($rowEdimar['Descarga']!=NULL)&&(trim($rowEdimar['Descarga'])!='')) { ?>
			<p ><strong><?php  if ((isset($_GET["Id"]))&& ($_GET["Id"]=='_Ing'))
			         { echo "Download: ";} 
			         else { echo "Descargar: "; } ?></strong>
			<a href="<?php echo "Laboratorios/". $rowEdimar['Descarga']; ?>"><img src="Imagenes/pdf.gif" width="35" height="33" border="0"></a>  </p><?php  }?>
			  </td>
            </tr>
          <tr>
            <td colspan="2" align="center"><br>
                <table width="100%"  border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="58%" class="Parrafo"></td>
                    </tr>
                  <tr>
                    <td class="Parrafo">
                      <p>&nbsp;</p>
                      <?php }else{ echo "   Contenido Protegido";}?></td>
                  </tr>
            </table>
                <a href="<?php echo "index.php?".$UR."&Id=".$Id."&Usr=".$usr;?>" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image4','','Imagenes/logoE2.jpg',1)"><img src="Imagenes/logoE.jpg" name="Image4" width="104" height="48" border="0"></a> </td>
          </tr>
        </table>
		<p align="center"><a href="index.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image4','','Imagenes/logoE2.jpg',1)"></a></p></td>
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
