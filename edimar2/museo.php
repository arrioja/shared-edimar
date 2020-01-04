<?php include('conexion.php');
   $query="SELECT  Edimar  as Permiso FROM permisopag";
   $reg_Per=mysql_query($query, $conexion) or die(mysql_error()); $rowPer = mysql_fetch_assoc($reg_Per);
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


$query_reg_most = "SELECT * FROM  museo where Idioma='".$id."'";
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
			<A href="<?php echo "modmuseo.php?".$UR."&Id=".$Id."&Usr=".$usr?>">
			<img border="0" src="Imagenes/mod.jpg" width="21" height="23"> Modificar</A><?php }?></td>
          </tr>
          <tr>
            <td colspan="2" align="center" class="Titulo"> <br><?php  echo $rowEdimar['Titulo']; ?>      </td>
            </tr>
          <tr>
            <td colspan="2" align="center"><br>
                <table width="100%"  border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="58%" class="Parrafo"><?php echo  $rowEdimar['Descrip']; ?> </td>
                    <td width="3%" rowspan="2" align="center" valign="top" class="Parrafo"><p>&nbsp;</p>
                      <p>&nbsp;</p></td>
                    <td width="39%" rowspan="2" align="center" valign="top" class="borde_rayado"><p><img src="Imagenes/edimar.jpg" width="300" height="189"></p>
                      <table width="95%"  border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="70%" align="left" class="Borde_Punteado"><span class="Titulo">Objetivos</span></td>
                          <td width="30%">&nbsp;</td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td class="Borde_Punteado"><?php
						 $query_reg_most = "SELECT * FROM  objetivo_m where CodM='".$rowEdimar['Cod']."'";
                         $objetivo = mysql_query($query_reg_most, $conexion) or die(mysql_error());
                         $totalObj = mysql_num_rows($objetivo);

						  if($permiso=='1'){?>
                              <A  title="A&ntilde;adir Nuevo Objetivo" href="<?php echo "InsertobjM.php?".$UR."&Id=".$_GET["Id"]."&Usr=".$usr."&CodM=".$rowEdimar['Cod'];?>"> <img src="Imagenes/nuevo.jpg" alt="A&ntilde;adir Nuevo Objetivo" width="21" height="23" border="0"> A&ntilde;adir </A>
                              <?php }?></td>
                        </tr>
                        <tr>
                          <td colspan="2">&nbsp;</td>
                        </tr>
                        <?php $i=1;
					   while ($rowObjetivos = mysql_fetch_assoc($objetivo)) { ?>
                        <tr>
                          <td colspan="2" class="Parrafo"><?php  echo $i.".- ".$rowObjetivos['Objetivo']; ?></td>
                        </tr>
                        <tr>
                          <td height="10"><span class="Borde_Punteado">
                            <?php if($permiso=='1'){?>
                          </span></td>
                          <td height="10" class="Borde_Punteado"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td align="center"><a href="<?php echo "InsertobjM.php?".$UR."&Id=".$_GET["Id"]."&Usr=".$usr."&Op=M&Cod=".$rowObjetivos['Cod']?>" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('<?php echo "modO".$i;?>','','Imagenes/mod.jpg',1)"><img src="Imagenes/mod2.jpg" alt="Modificar Objetivo" name="<?php echo "modO".$i;?>" width="21" height="23" border="0"></a></td>
                                <td align="center"><a href="#" onClick="window.open('<?php echo "eliminarObjM.php?".$UR."&Id=".$_GET["Id"]."&T=o&Usr=".$usr."&Cod=".$rowObjetivos['Cod']?>','','height=200,width=375');" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('<?php echo "elimO".$i;?>','','Imagenes/eliminar.jpg',1)"><img src="Imagenes/eliminar2.jpg" alt="Eliminar Objetivo" name="<?php echo "elimO".$i;?>" width="21" height="23" border="0"></a></td>
                              </tr>
                            </table>
                              <?php }?></td>
                        <tr>
                          <td height="10" colspan="2">&nbsp;</td>
                          <?php $i++;}; ?>
                      </table></td>
                  </tr>
                  <tr>
                    <td class="Parrafo"><p class="Titulo">
                      <?php if ($id='_E'){ echo "Divulgaci&oacute;n";}else{ echo "Divulgaci&oacute;n";}?>
                    </p>
                      <p><?php echo  $rowEdimar['Divulgacion']; ?></p>
                      <p>&nbsp; </p>
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
