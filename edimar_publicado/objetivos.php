<?php include('conexion.php');
   $query="SELECT  Objetivo as Permiso FROM permisopag";
   $reg_Per=mysql_query($query, $conexion) or die(mysql_error()); $rowPer = mysql_fetch_assoc($reg_Per);
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
   
 $query_reg_most = "SELECT * FROM  edimar where Idioma='".$id."'";
 $reg_most = mysql_query($query_reg_most, $conexion) or die(mysql_error());
 $rowEdimar = mysql_fetch_assoc($reg_most);
 $query_reg_most = "SELECT * FROM  objetivo where Tipo='O' and Idioma='".$id."'";
 $query_facilidad="SELECT * FROM  objetivo where Tipo='F' and Idioma='".$id."'";
 $objetivo = mysql_query($query_reg_most, $conexion) or die(mysql_error());
 $facilidad=mysql_query($query_facilidad, $conexion) or die(mysql_error());
 $totalObj = mysql_num_rows($objetivo);
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

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" onLoad="MM_preloadImages('Imagenes/eliminar.jpg','Imagenes/mod.jpg')">
<script language="JavaScript1.2">mmLoadMenus('<?php echo $_GET["Id"];?>','<?php echo $usr;?>');</script>
<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  
  <tr>
    <td><iframe name="cabecera" frameborder="0"  width="100%" height="124" src="<?php echo "Cabecera.php?".$UR."&Id=".$_GET["Id"]."&Usr=".$usr?>"></iframe></td>
  </tr>
  <tr>
    <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="12%" valign="top"><script language="JavaScript">menuP('<?php echo $_GET["Id"];?>','<?php echo $usr;?>');</script></td>
        <td width="74%" valign="top">
		<?php if (($rowPer['Permiso']==$permiso)||($rowPer['Permiso']=='0')||($permiso=='1')){?>
		<table width="98%"  border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td align="center" class="Titulo"> <br> <?php  echo  $rowEdimar['Titulo']; ?>      </td>
          </tr>
          <tr>
            <td><br><br>
                <table width="100%"  border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="52%" rowspan="2" valign="top"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td class="Borde_Punteado"><span class="Titulo">Facilidades</span></td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td height="30">&nbsp;</td>
                        <td align="center" class="Borde_Punteado">
                          <?php if($permiso=='1'){?>
                          <A  title="Añadir Nueva Facilidad" href="<?php echo "Insertobj.php?".$UR."&Id=".$_GET["Id"]."&Usr=".$usr."&T=F";?>"> <img src="Imagenes/nuevo.jpg" alt="Añadir Nueva Facilidad" width="21" height="23" border="0"> A&ntilde;adir </A>
                          <?php }?>                        </td>
                      </tr>
                      <tr>
                        <td height="20" colspan="2">&nbsp;</td>
                      </tr>
                      <?php $i=1;
					   while ($rowfacilidad = mysql_fetch_assoc($facilidad)) { ?>
                      <tr>
                        <td colspan="2" class="Parrafo"><?php  echo $i.".- ".$rowfacilidad['Descrip']; ?></td>
                      </tr>
                      <tr>
                        <td width="69%" height="10">&nbsp;</td>
                        <td width="31%" class="Borde_Punteado"><?php if($permiso=='1'){?>
                          <table width="100%"  border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td align="center"><a href="<?php echo "Insertobj.php?".$UR."&Id=".$_GET["Id"]."&Usr=".$usr."&T=F&Op=M&Cod=".$rowfacilidad['Cod']?>" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('<?php echo "mod".$i;?>','','Imagenes/mod.jpg',1)"><img src="Imagenes/mod2.jpg" alt="Modificar Facilidad" name="<?php echo "mod".$i;?>" width="21" height="23" border="0"></a></td>
                            <td align="center"><a href="#" onClick="window.open('<?php echo "eliminarObj.php?".$UR."&Id=".$_GET["Id"]."&T=F&Usr=".$usr."&Cod=".$rowfacilidad['Cod']?>','','height=200,width=375');" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('<?php echo "elim".$i;?>','','Imagenes/eliminar.jpg',1)"><img src="Imagenes/eliminar2.jpg" alt="Eliminar Facilidad" name="<?php echo "elim".$i;?>" width="21" height="23" border="0"></a></td>
                          </tr>
                        </table>
                          <?php }?></td>
                      <tr><td height="20" colspan="2">&nbsp;</td>
      <?php $i++;}; ?>
                    </table></td>
                    <td width="4%">&nbsp;</td>
                    <td width="44%"><img src="Imagenes/edimar.jpg" width="300" height="189"></td>
                  </tr>
                  <tr>
                    <td width="4%">&nbsp;</td>
                    <td align="center" class="borde_rayado"><br>                     <table width="95%"  border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="70%" align="left" class="Borde_Punteado"><span class="Titulo">Objetivos</span></td>
                        <td width="30%">&nbsp;</td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td class="Borde_Punteado"><?php if($permiso=='1'){?>
                          <A  title="A&ntilde;adir Nuevo Objetivo" href="<?php echo "Insertobj.php?".$UR."&Id=".$_GET["Id"]."&Usr=".$usr."&T=o";?>"> <img src="Imagenes/nuevo.jpg" alt="A&ntilde;adir Nuevo Objetivo" width="21" height="23" border="0"> A&ntilde;adir </A>
                          <?php }?></td>
                      </tr>
                      <tr>
                        <td colspan="2">&nbsp;</td>
                      </tr>
                      <?php $i=1;
					   while ($rowObjetivos = mysql_fetch_assoc($objetivo)) { ?>
                      <tr>
                        <td colspan="2" class="Parrafo"><?php  echo $i.".- ".$rowObjetivos['Descrip']; ?></td>
                      </tr>
                      <tr>
                        <td height="10"><span class="Borde_Punteado">
                          <?php if($permiso=='1'){?>
                        </span></td>
                        <td height="10" class="Borde_Punteado"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td align="center"><a href="<?php echo "Insertobj.php?".$UR."&Id=".$_GET["Id"]."&Usr=".$usr."&T=O&Op=M&Cod=".$rowObjetivos['Cod']?>" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('<?php echo "modO".$i;?>','','Imagenes/mod.jpg',1)"><img src="Imagenes/mod2.jpg" alt="Modificar Objetivo" name="<?php echo "modO".$i;?>" width="21" height="23" border="0"></a></td>
                            <td align="center"><a href="#" onClick="window.open('<?php echo "eliminarObj.php?".$UR."&Id=".$_GET["Id"]."&T=o&Usr=".$usr."&Cod=".$rowObjetivos['Cod']?>','','height=200,width=375');" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('<?php echo "elimO".$i;?>','','Imagenes/eliminar.jpg',1)"><img src="Imagenes/eliminar2.jpg" alt="Eliminar Objetivo" name="<?php echo "elimO".$i;?>" width="21" height="23" border="0"></a></td>
                          </tr>
                        </table>
                          <?php }?></td>
                      <tr><td height="10" colspan="2">&nbsp;</td>
      <?php $i++;}; ?>
                    </table></td>
                  </tr>
                </table>
                <p class="Parrafo">&nbsp; </p></td>
          </tr>
        </table>
		<?php }else{?> <br><br>
		<?php echo "   Contenido Protegido";}?>		</td>
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
