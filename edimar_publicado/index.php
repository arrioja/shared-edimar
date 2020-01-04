<?php include('conexion.php');
   $query="SELECT  Edimar  as Permiso FROM permisopag";
   $reg_Per=mysql_query($query, $conexion) or die(mysql_error()); $rowPer = mysql_fetch_assoc($reg_Per);
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


$query_reg_most = "SELECT Titulo, Parrafo_I, date_format(FechaA, '%d/%m/%Y') as FechaA FROM  edimar where Idioma='".$id."'";
 $reg_most = mysql_query($query_reg_most, $conexion) or die(mysql_error());
 $rowEdimar = mysql_fetch_assoc($reg_most);
 $totalRows_reg_most = mysql_num_rows($reg_most);
 $query_reg_mostP = "SELECT proyecto.Cod,   Titulo FROM proyecto where proyecto.Idioma='".$id."' LIMIT 0 , 5";
 $reg_mostP = mysql_query($query_reg_mostP, $conexion) or die(mysql_error());
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
.style1 {font-size: 12px}
-->
</style>
</head>

<body marginheight="0" topmargin="0" marginwidth="0" leftmargin="0">
<script language="JavaScript1.2">mmLoadMenus('<?php echo $Id;?>','<?php echo $usr;?>');</script>
<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><iframe name="cabecera" frameborder="0"  width="100%" height="124" src="<?php echo "Cabecera.php?".$UR."&Id=".$_GET["Id"]."&Usr=".$usr?>"></iframe></td>
  </tr>
  
  <tr>
    <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="12%" valign="top"><script language="JavaScript">menuP('<?php echo $Id;?>','<?php echo $usr;?>');</script></td>
        <td width="74%" valign="top"><br><table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="53%"><span class="Titulo">
              <?php  echo $rowEdimar['Titulo']; ?>
              </span>
                <p class="Parrafo">
                  <?php  echo $rowEdimar['Parrafo_I']; ?>...<a href="<?php echo "acekd.php?".$UR."&Id=".$_GET["Id"]."&Cod=".$rowEdimarP["Cod"]."&Usr=".$usr;?>"> (+)                </a></p></td>
            <td width="2%">&nbsp;</td>
            <td width="45%" align="center" class="Borde_Punteado"><p>Conozca nuestras Instalaciones</p>              <img src="Imagenes/edimar.jpg" width="300" height="189"><br>
              <p>
			    <a href="<?php echo "Edimar360.php?".$UR."&Id=".$_GET["Id"]."&Usr=".$usr?>">Vista 360º			</a></p></td>
          </tr>
          <tr>
            <td colspan="2">&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2" valign="top" class="Borde_Punteado"><p class="Titulo">Proyectos de Investigaci&oacute;n </p>
              <p>&nbsp;</p>
              <table width="90%"  border="0" align="center" cellpadding="0" cellspacing="0">
                
                <?php 
			  while($rowEdimarP = mysql_fetch_assoc($reg_mostP)){?>
                <tr>
                  <td height="50" ><a href="<?php echo "proyecto.php?".$UR."&Id=".$_GET["Id"]."&Cod=".$rowEdimarP["Cod"]."&Usr=".$usr;?>"><?php echo "*. ".$rowEdimarP["Titulo"];?></a></td>
                  </tr>
                <?php }?>
              </table>              
              <p >&nbsp;</p></td>
            <td><div class="Borde_Punteado"><p class="Titulo" >Ofertas de Tesis  </p>
              <p >&nbsp;</p>
              <p >&nbsp;</p>
              <p >&nbsp;</p>
              <p >&nbsp;</p>
              <p >&nbsp;</p></div>
              <p class="Titulo" >Cursos / Talleres </p>
              <p >&nbsp;</p>
			  <p >&nbsp;</p>
			  <p >&nbsp;</p>
			  <p >&nbsp;</p></td>
          </tr>
          <tr>
            <td colspan="2" align="left"><table width="350" height="38" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td height="20" valign="middle" class="Titulo style1"> 
                        <p>N&uacute;mero de Visitas: </p>
                        </td> 
                      <td align="left" valign="middle"> 
                        <iframe frameborder="0" src="contador.php" width="200" height="30" scrolling="no"></iframe></td>
              </tr>
              <tr>
                      <td valign="middle" class="Titulo style1">&Uacute;ltima 
                        Actualizaci&oacute;n: </td>
                      <td height="18" valign="middle"> 
                        <?php  echo $rowEdimar['FechaA']; ?>
                      </td>
              </tr>
            </table></td>
            <td >&nbsp;</td>
          </tr>
          <tr>
            <td colspan="3">&nbsp;</td>
          </tr>
        </table>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          </td>
        <td width="14%" valign="top" class="borde_rayado" align="center">
            
              <iframe frameborder="0"  width="100%" height="800" src="<?php echo "linknoti.php?".$UR."&Id=".$_GET["Id"]."&Usr=".$usr?>"></iframe></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center"><img src="Imagenes/barra_Inf.jpg" width="95%" height="27"></td>
  </tr>
</table>
</body>
</html>
