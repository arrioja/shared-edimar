<?php include('conexion.php');
   $query="SELECT  Edimar  as Permiso FROM permisopag";
   $reg_Per=mysql_query($query, $conexion) or die(mysql_error()); $rowPer = mysql_fetch_assoc($reg_Per);
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


$query_reg_most = "SELECT * FROM  consultoria where Idioma='".$id."'";
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
			<A href="<?php echo "modConsul.php?".$UR."&Id=".$Id."&Usr=".$usr?>">
			<img border="0" src="Imagenes/mod.jpg" width="21" height="23"> Modificar</A><?php }?></td>
          </tr>
          <tr>
            <td colspan="2" align="center" class="Titulo"> <br><?php  echo "CONSULTORIA AMBIENTAL"; ?>      </td>
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
                          <td width="70%" align="left" class="Borde_Punteado"><span class="Titulo">Proyectos</span></td>
                          <td width="30%">&nbsp;</td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td class="Borde_Punteado"><?php
						 $query_reg_most = "SELECT * FROM  proy_consult where Idioma='".$id."' and Tipo='P'";
                         $objetivo = mysql_query($query_reg_most, $conexion) or die(mysql_error());
                         $totalObj = mysql_num_rows($objetivo);

						  if($permiso=='1'){?>
                              <A  title="A&ntilde;adir Nuevo Objetivo" href="<?php echo "InsertPC.php?".$UR."&T=P&Id=".$_GET["Id"]."&Usr=".$usr?>"> <img src="Imagenes/nuevo.jpg" alt="A&ntilde;adir Nuevo Objetivo" width="21" height="23" border="0"> A&ntilde;adir </A>
                              <?php }?></td>
                        </tr>
                        <tr>
                          <td colspan="2">&nbsp;</td>
                        </tr>
						<tr>
                          <td colspan="2">
                        <?php $i=1;
					   while ($rowObjetivos = mysql_fetch_assoc($objetivo)) { ?>
                        <?php  echo $i.".- ".$rowObjetivos['Descrip']; ?>
                        
                            <?php if($permiso=='1'){?>
                         <a href="#" onClick="window.open('<?php echo "eliminarPC.php?".$UR."&Id=".$_GET["Id"]."&T=P&Usr=".$usr."&Cod=".$rowObjetivos['Cod']?>','','height=200,width=375');" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('<?php echo "elimO".$i;?>','','Imagenes/eliminar.jpg',1)"><img src="Imagenes/eliminar2.jpg" alt="Eliminar Objetivo" name="<?php echo "elimO".$i;?>" width="21" height="23" border="0"></a>
                              <?php }?>
                      <br>
                          <?php $i++;}; ?>
						  </td>
                        </tr>
                      </table>
                      <p>&nbsp;</p>
                      <table width="95%"  border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="70%" align="left" class="Borde_Punteado"><span class="Titulo">Servicios</span></td>
                          <td width="30%">&nbsp;</td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td class="Borde_Punteado"><?php
						 $query_reg_most2 = "SELECT * FROM  proy_consult where Idioma='".$id."' and Tipo='S'";
                         $objetivo2 = mysql_query($query_reg_most2, $conexion) or die(mysql_error());
                         $totalObj2 = mysql_num_rows($objetivo2);

						  if($permiso=='1'){?>
                              <A  title="A&ntilde;adir Nuevo Servicio" href="<?php echo "InsertPC.php?".$UR."&T=S&Id=".$_GET["Id"]."&Usr=".$usr;?>"> <img src="Imagenes/nuevo.jpg" alt="A&ntilde;adir Nuevo Objetivo" width="21" height="23" border="0"> A&ntilde;adir </A>
                              <?php }?></td>
                        </tr>
                        <tr>
                          <td colspan="2">&nbsp;</td>
                        </tr>
						<tr>
                          <td colspan="2">
                        <?php $i=1;
					   while ($rowObjetivos2 = mysql_fetch_assoc($objetivo2)) { ?>
                        <?php  echo $i.".- ".$rowObjetivos2['Descrip']; ?>
                        
                            <?php if($permiso=='1'){?>
                          <a href="#" onClick="window.open('<?php echo "eliminarPC.php?".$UR."&Id=".$_GET["Id"]."&T=S&Usr=".$usr."&Cod=".$rowObjetivos2['Cod']?>','','height=200,width=375');" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('<?php echo "elimS".$i;?>','','Imagenes/eliminar.jpg',1)"><img src="Imagenes/eliminar2.jpg" alt="Eliminar Objetivo" name="<?php echo "elimS".$i;?>" width="21" height="23" border="0"></a>
							
                              <?php }?>
                        <br>
                          <?php $i++;}; ?></td>
                        </tr>
                                            </table>                      <p>&nbsp;</p></td>
                  </tr>
                  <tr>
                    <td class="Parrafo"><p class="Titulo">
                      <?php if ($id='_E'){ echo "Contactos";}else{ echo "Contactos";}?>
                    </p>
                      <p><?php echo  $rowEdimar['Contactos']; ?></p>
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
