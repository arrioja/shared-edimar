<?php include('conexion.php');
   $query="SELECT  Dpto as Permiso FROM permisopag";
   $reg_Per=mysql_query($query, $conexion) or die(mysql_error()); $rowPer = mysql_fetch_assoc($reg_Per);
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



$query_reg_most = "SELECT * FROM departamento where Cod='".$_GET["Cod"]."' and Idioma='".$id."'";
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
        <td width="74%" valign="top"><?php if (($rowPer['Permiso']==$permiso)||($rowPer['Permiso']=='0')||($permiso=='1')){?>
          <table width="98%"  border="0" cellspacing="0" cellpadding="0">
		  <tr>
              <td width="75%" height="30" align="left" class="Titulo">&nbsp;</td>
              <td width="25%" align="center" class="Borde_Punteado"><?php if(($permiso=='1')||($_GET["Cod"]==$usrD)){?>
                <A href="<?php echo "modDpto.php?".$UR."&Id=".$_GET["Id"]."&Usr=".$usr."&Cod=".$_GET["Cod"]?>"> <img border="0" src="Imagenes/mod.jpg" width="21" height="23"> Modificar</A>
                <?php }?></td>
            </tr>
            <tr>
              <td colspan="2" align="left" class="Titulo"> <br>
                  <?php  echo $rowEdimar['Nombre']; ?>              </td>
            </tr>
            
          <tr>
              <td colspan="2"><br>
                  <table width="100%"  border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="57%" valign="top" class="Parrafo"><?php echo  $rowEdimar['Resena']; ?> </td>
                      <td width="2%" class="Parrafo">&nbsp;</td>
                      <td width="41%" align="center" valign="top" class="borde_rayado"><img src="<?php echo "Imagenes/".$rowEdimar["Imagen"]?>" width="241" height="223"> <br>
                          <table width="90%"  border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td height="50" align="left" class="Titulo_II">Misi&oacute;n</td>
                            </tr>
                            <tr>
                              <td class="Parrafo"><?php echo  $rowEdimar['Mision']; ?></td>
                            </tr>
                            <tr>
                              <td height="50" align="left" class="Titulo_II">Visi&oacute;n</td>
                            </tr>
                            <tr class="Parrafo">
                              <td><?php echo  $rowEdimar['Vision']; ?></td>
                            </tr>
							<tr class="Parrafo">
                              <td><p>&nbsp;</p>
                              <p><a href="<?php echo "galeriaDpto.php?".$UR."&Id=".$Id."&Usr=".$usr."&Cod=".$_GET["Cod"]?>">Galer&iacute;a de Im&aacute;genes</a></p>
                              <p><a href="<?php echo "galeriaDpto.php?".$UR."&Id=".$Id."&Usr=".$usr."&Cod=".$_GET["Cod"]?>">Videos</a> </p></td>
                            </tr>
                        </table></td>
                    </tr>
                    <tr> </tr>
                  </table>
                  <p class="Parrafo">&nbsp; </p></td>
            </tr>
        </table>
          <?php }else{ echo "   Contenido Protegido";}?></td>
        <td width="14%" valign="top" class="borde_rayado"><table width="100%"   border="0" cellpadding="0" cellspacing="0" >
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
