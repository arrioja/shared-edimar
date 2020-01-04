<?php include('conexion.php');
   
   
   $query="SELECT  Edimar as Permiso FROM permisopag";
   $reg_Per=mysql_query($query, $conexion) or die(mysql_error()); $rowPer = mysql_fetch_assoc($reg_Per);
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
   
 $query_reg_most = "SELECT * FROM metadatos";
 $reg_most = mysql_query($query_reg_most, $conexion) or die(mysql_error());
 //$rowEdimar = mysql_fetch_assoc($reg_most);
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

<body marginheight="0" topmargin="0" marginwidth="0" leftmargin="0">
<script language="JavaScript1.2">mmLoadMenus('<?php echo $_GET["Id"];?>','<?php echo $usr;?>');</script>
<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><iframe name="cabecera" frameborder="0"  width="100%" height="124" src="<?php echo "Cabecera.php?".$UR."&Id=".$_GET["Id"]."&Usr=".$usr?>"></iframe></td>
  </tr>
  
  <tr>
    <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="12%" valign="top"><script language="JavaScript">menuP('<?php echo $_GET["Id"];?>','<?php echo $usr;?>');</script></td>
        <td width="74%" valign="top"><br><?php if (($rowPer['Permiso']==$permiso)||($rowPer['Permiso']=='0')||($permiso=='1')){?>
          <table width="98%"  border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td align="center" class="Titulo"> <br>
                <?php  
			  $cad=''; 
			  if ((isset($_GET["Id"]))&& ($_GET["Id"]=='_Ing'))
			{echo "Datos y Metadatos";} 
			else {echo "Datos y Metadatos"; } ?>        </td>
            </tr>
            <tr>
              <td><br><table width="90%"  border="0" align="center" cellpadding="0" cellspacing="0">
			   <tr>
			      <td width="97%" height="40"   >&nbsp;</td>
			      <td width="3%" class="Borde_Punteado">
			        <?php if($permiso=='1'){?>
                    <A href="<?php echo "instMetaD.php?".$UR."&Id=".$_GET["Id"]."&Usr=".$usr?>"> <img border="0" src="Imagenes/nuevo.jpg" width="21" height="23"> A&ntilde;adir</A>
                    <?php }else{echo "&nbsp;";}?>                  </td>
			   </tr>
			  
               
                <tr>
                  <td height="25"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="cuadro">
                    <tr>
                      <td width="20%" height="20" align="center" bgcolor="#6699CC" class="Titulo_I">Base de Datos </td>
                      <td width="17%" align="center" bgcolor="#6699CC" class="Titulo_I">Creador</td>
                      <td width="18%" align="center" bgcolor="#6699CC" class="Titulo_I">Encargado</td>
                      <td width="23%" align="center" bgcolor="#6699CC" class="Titulo_I">Descripci&oacute;n</td>
                      <td width="10%" align="center" bgcolor="#6699CC" class="Titulo_I">&nbsp;</td>
                    </tr>
					<?php $i=1;
			  while($rowEdimar = mysql_fetch_assoc($reg_most)){?>
                    <tr>
                      <td class="borde_SupI"><p class="Parrafo_II"><?php echo $rowEdimar["Nombre_BD"];?></p></td>
                      <td class="borde_SupI"><span class="Parrafo_II"><?php echo $rowEdimar["Creador"];?></span></td>
                      <td class="borde_SupI"><span class="Parrafo_II"><?php echo $rowEdimar["Encargado"];?></span></td>
                      <td class="borde_SupI"><span class="Parrafo_II"><?php echo $rowEdimar["Descrip"];?></span></td>
                      <td class="borde_Sup"><p class="Parrafo_II">
                        <?php if($permiso=='1'){?>
                        </p>
                        <table width="100%"  border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td align="center" >
							<a href="<?php echo "instMetaD.php?".$UR."&Id=".$_GET["Id"]."&Usr=".$usr."&Op=M&Cod=".$rowEdimar["Cod"]."&T=".$_GET["T"]?>" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('<?php echo "mod".$i;?>','','Imagenes/mod.jpg',1)"><img src="Imagenes/mod2.jpg" alt="Modificar" name="<?php echo "mod".$i;?>" width="21" height="23" border="0"></a></td>
                            <td align="center"><a href="#" onClick="window.open('<?php echo "eliminarMetaD.php?".$UR."&Id=".$_GET["Id"]."&Usr=".$usr."&Cod=".$rowEdimar['Cod']."&T=".$_GET["T"];?>','','height=200,width=375');" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('<?php echo "elim".$i;?>','','Imagenes/eliminar.jpg',1)"><img src="Imagenes/eliminar2.jpg" alt="Eliminar" name="<?php echo "elim".$i;?>" width="21" height="23" border="0"></a></td>
                          </tr>
                        </table>
                        <?php }else{
						 if ($rowEdimar['Descarga']!=''){?><a href="<?php echo "Metadatos/". $rowEdimar['Descarga']; ?>"><img src="Imagenes/pdf.gif" width="35" height="33" border="0"></a><?php }else{?>&nbsp;<?php }
						}?></td>
                    </tr>
					 <?php $i++;}?>
                  </table>                </td>
                  <td height="25">&nbsp;</td>
                </tr></table>
              <br></td>
            </tr>
        </table>
          <?php }else{ echo "   Contenido Protegido";}?></td>
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
