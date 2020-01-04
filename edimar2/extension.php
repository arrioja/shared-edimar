<?php include('conexion.php');
   $query="SELECT  Dpto as Permiso FROM permisopag";
   $reg_Per=mysql_query($query, $conexion) or die(mysql_error()); $rowPer = mysql_fetch_assoc($reg_Per);
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



$query_reg_most = "SELECT Cod, Extension, Imagen, Nombre FROM departamento where Idioma='".$id."'";
 $reg_most = mysql_query($query_reg_most, $conexion) or die(mysql_error());
 //$rowEdimar = mysql_fetch_assoc($reg_most);
 //$totalRows_reg_most = mysql_num_rows($reg_most);
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
.style1 {font-size: 10px}
-->
</style>
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
        <td width="81%" valign="top"><?php if (($rowPer['Permiso']==$permiso)||($rowPer['Permiso']=='0')||($permiso=='1')){?>
		
          <table width="98%"  border="0" cellspacing="0" cellpadding="0">
		  <?php $i=1;
		   while ($rowEdimar = mysql_fetch_assoc($reg_most)){ 
			
			if ((trim($rowEdimar['Extension'])!='')||($permiso=='1')||($rowEdimar['Cod']==$usrD)||($rowEdimar['Extension']!=NULL)){ ?>
		  <tr>
              <td width="75%" height="40" align="left" class="Titulo">&nbsp;</td>
              <td width="25%" align="center" > <p class="Borde_Punteado">&nbsp;<?php if(($permiso=='1')||($rowEdimar['Cod']==$usrD)){?>
                <A href="<?php echo "modExt.php?".$UR."&Id=".$_GET["Id"]."&Usr=".$usr."&Cod=".$rowEdimar['Cod']?>"> <img border="0" src="Imagenes/mod.jpg" width="21" height="23"> Modificar</A>
                <?php }?></p></td>
            </tr>
			
			
            <tr>
              <td align="left" class="Borde_Punteado" > <p class="Titulo"><br>
                <?php  echo $rowEdimar['Nombre']; ?>              
              </p>
                <p class="Parrafo"><?php  echo $rowEdimar['Extension']; ?> </p>
				<br>              
				<p align="right">&nbsp;</p>
                <p>&nbsp;</p></td>
              <td align="left" ><img src="<?php echo "Imagenes/".$rowEdimar["Imagen"]?>" width="241" height="223"></td>
            </tr>
            <?php }} ?>
          <tr>
              <td colspan="2"><br>
                <p class="Parrafo">&nbsp; </p></td>
            </tr>
        </table>
		
          <p>
            <?php }else{ echo "   Contenido Protegido";}?>
          </p>
          <p align="center"><a href="<?php echo "index.php?".$UR."&Id=".$Id."&Usr=".$usr;?>" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image4','','Imagenes/logoE2.jpg',1)"><img src="Imagenes/logoE.jpg" name="Image4" width="104" height="48" border="0"></a> </p></td>
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
