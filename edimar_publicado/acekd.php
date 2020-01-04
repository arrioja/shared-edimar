<?php include('conexion.php');
   $query="SELECT  Edimar  as Permiso FROM permisopag";
   $reg_Per=mysql_query($query, $conexion) or die(mysql_error()); $rowPer = mysql_fetch_assoc($reg_Per);
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


$query_reg_most = "SELECT * FROM  edimar where Idioma='".$id."'";
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
<script language="JavaScript1.2">mmLoadMenus('<?php echo $Id;?>','<?php echo $usr;?>');</script>
<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><iframe name="cabecera" frameborder="0"  width="100%" height="124" src="<?php echo "Cabecera.php?".$UR."&Id=".$_GET["Id"]."&Usr=".$usr?>"></iframe></td>
  </tr>
  
  <tr>
    <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="12%" valign="top"><script language="JavaScript">menuP('<?php echo $Id;?>','<?php echo $usr;?>');</script></td>
        <td width="74%" valign="top">
		<?php if (($rowPer['Permiso']==$permiso)||($rowPer['Permiso']=='0')||($permiso=='1')){?>
		<table width="98%"  border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="663"  height="30" align="center" class="Titulo">&nbsp;</td>
            <td width="184" align="center" class="Borde_Punteado"><?php if($permiso=='1'){?>
			<A href="<?php echo "modedimar.php?".$UR."&Id=".$Id."&Usr=".$usr?>">
			<img border="0" src="Imagenes/mod.jpg" width="21" height="23"> Modificar</A><?php }?></td>
          </tr>
          <tr>
            <td colspan="2" align="center" class="Titulo"> <br><?php  echo $rowEdimar['Titulo']; ?>      </td>
            </tr>
          <tr>
            <td colspan="2"><br>
                <table width="100%"  border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td class="Parrafo"><?php echo  $rowEdimar['Parrafo_I']; ?> </td>
                    <td class="Parrafo">&nbsp;</td>
                    <td width="41%" align="center"><img src="Imagenes/edimar.jpg" alt="Edimar" width="300" height="189"><br>                    </td>
                  </tr>
            <tr><td width="56%" class="Parrafo"><p><?php echo  $rowEdimar['Parrafo_II']; ?></p>
              <p>&nbsp; </p>
              <?php }else{ echo "   Contenido Protegido";}?></td>
              <td width="3%" >&nbsp;</td>
              <td valign="top" class="borde_rayado"><p class="Titulo">Misi&oacute;n</p>
                <p class="Parrafo"><?php echo  $rowEdimar['Mision']; ?></p>
                <p class="Parrafo">&nbsp;</p>
                <p class="Titulo">Visi&oacute;n</p>
				<p class="Parrafo"><?php echo  $rowEdimar['Vision']; ?></p>
				</td>
            <tr> </tr>
                </table>
                <p class="Parrafo">&nbsp; </p></td>
          </tr>
        </table>
		</td>
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
