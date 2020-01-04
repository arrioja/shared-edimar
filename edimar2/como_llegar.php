<?php include('conexion.php');
    $query="SELECT  ComoLL as Permiso FROM permisopag";
   $reg_Per=mysql_query($query, $conexion) or die(mysql_error()); $rowPer = mysql_fetch_assoc($reg_Per);
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

 $query_reg_most = "SELECT * FROM  edimar where Idioma='".$id."'";
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
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" onLoad="MM_preloadImages('Imagenes/logoE2.jpg')">
<script language="JavaScript1.2">mmLoadMenus('<?php echo $_GET["Id"];?>','<?php echo $usr;?>');</script>
<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><iframe name="cabecera" frameborder="0"  width="100%" height="124" src="<?php echo "Cabecera.php?".$UR."&Id=".$_GET["Id"]."&Usr=".$usr?>" scrolling="no"></iframe></td>
  </tr>
  
  <tr>
    <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="5%" valign="top"><script language="JavaScript">menuP('<?php echo $_GET["Id"];?>','<?php echo $usr;?>');</script></td>
        <td width="81%" valign="top"><table width="98%"  border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><br>
                <?php if (($rowPer['Permiso']==$permiso)||($rowPer['Permiso']=='0')||($permiso=='1')){?>
                <table width="99%"  border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="76%" height="30" align="center" class="Titulo">&nbsp;</td>
                    <td width="24%" align="center" class="Borde_Punteado"><?php if($permiso=='1'){?>
                      <A href="<?php echo "modllegar.php?".$UR."&Id=".$_GET["Id"]."&Usr=".$usr?>"> <img border="0" src="Imagenes/mod.jpg" width="21" height="23"> Modificar</A>
                      <?php }?></td>
                  </tr>
                  <tr align="left">
                    <td colspan="2" class="Titulo"> <br>
                      <?php if ($id=='I'){echo "Where we are";}
					else{echo "Como Llegar a Edimar";}?></td>
                  </tr>
                  <tr>
                    <td colspan="2" align="center"><br>
                      <br>
                        <table width="100%"  border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="56%" valign="top" class="Parrafo"><p><?php  echo  $rowEdimar['ComoLL_I']; ?> </p>
                                <p><?php  echo  $rowEdimar['ComoLL_II']; ?></p>
                                <p>
                                  <?php  echo  $rowEdimar['ComoLL_III']; ?>
                                </p></td>
                            <td width="2%" valign="top" class="Parrafo">&nbsp;</td>
                            <td width="42%" align="center" class="borde_rayado" ><p><img src="Imagenes/mapa_I.jpg" width="270" height="201"><br>
                                <img src="Imagenes/mapa_II.jpg" width="270" height="207"><br>
                                <img src="Imagenes/mapa_III.jpg" width="270" height="205">                            </p></td>
                          <tr>
                            <td height="21" colspan="3" align="center" class="Titulo">&nbsp;</td>
                          <tr>
                            <td colspan="3" class="Parrafo"><p>
                              <?php  echo  $rowEdimar['ComoLL_IV']; ?> 
                                </p>                            </td>
                          <tr>
                            <td colspan="3" class="Parrafo"><p>&nbsp;</p></td>
                          <tr> </tr>
                        </table>
                        <?php }else{ echo "   Contenido Protegido";}?>
                        <p><a href="<?php echo "index.php?".$UR."&Id=".$Id."&Usr=".$usr;?>" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image4','','Imagenes/logoE2.jpg',1)"><img src="Imagenes/logoE.jpg" name="Image4" width="104" height="48" border="0"></a> </p></td>
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
