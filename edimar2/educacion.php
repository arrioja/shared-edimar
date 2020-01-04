<?php include('conexion.php');
   $query="SELECT  Dpto as Permiso FROM permisopag";
   $reg_Per=mysql_query($query, $conexion) or die(mysql_error()); $rowPer = mysql_fetch_assoc($reg_Per);
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



$query_reg_most = "SELECT Cod, Educacion, Nombre FROM departamento where Idioma='".$id."'";
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

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" onLoad="MM_preloadImages('Imagenes/logoE2.jpg','Imagenes/eliminar.jpg')">
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
			$query_reg = "SELECT * from materia where CodDpto='".$rowEdimar['Cod']."'";
                    $Titulo = mysql_query($query_reg, $conexion) or die(mysql_error());
					$totalRows_reg_most = mysql_num_rows($Titulo);
			if (($totalRows_reg_most>0)||($permiso=='1')||($rowEdimar['Cod']==$usrD)){ ?>
		  <tr>
              <td width="75%" height="30" align="left" class="Titulo">&nbsp;</td>
              <td width="25%" align="center" class="Borde_Punteado"><?php if(($permiso=='1')||($rowEdimar['Cod']==$usrD)){?>
                <A href="<?php echo "modEducD.php?".$UR."&Id=".$_GET["Id"]."&Usr=".$usr."&Cod=".$rowEdimar['Cod']?>"> <img border="0" src="Imagenes/mod.jpg" width="21" height="23"> Modificar</A>
                <?php }?></td>
            </tr>
			
			
            <tr>
              <td colspan="2" align="left" class="Borde_Punteado"> <p class="Titulo"><br>
                <?php  echo $rowEdimar['Nombre']; ?>              
              </p>
                <p class="Parrafo"><?php  echo $rowEdimar['Educacion']; ?> </p>
				<br>              
				<p align="right">
				<?php if(($permiso=='1')||($rowEdimar['Cod']==$usrD)){?>             
                <A  title="A&ntilde;adir Nueva Facilidad" href="<?php echo "InsertMat.php?".$UR."&Id=".$_GET["Id"]."&Usr=".$usr."&Cod=".$rowEdimar['Cod'];?>"> <img src="Imagenes/nuevo.jpg" width="21" height="23" border="0">A&ntilde;adir</A>
                <?php }?></p>
                <table width="90%"  border="0" align="center" cellpadding="0" cellspacing="0" class="cuadro">
                  <tr bgcolor="#6699CC">
                    <td width="33%" height="30" align="center" bgcolor="#6699CC" class="Titulo_I">Mater&iacute;a</td>
                    <td width="34%" align="center" class="Titulo_I">Descripci&oacute;n</td>
                    <td width="14%" align="center" class="Titulo_I">Horas Semanales </td>
                    <td width="14%" align="center" class="Titulo_I">Profesor</td>
					<?php if(($permiso=='1')||($rowEdimar['Cod']==$usrD)){?>
                    <td width="5%" class="Titulo_I">&nbsp;</td><?php }?>
                  </tr>
                  <?php $tipo='';
					/*$query_reg = "SELECT * from materia where CodDpto='".$rowEdimar['Cod']."'";
                    $Titulo = mysql_query($query_reg, $conexion) or die(mysql_error());*/
				while ($regTitulo = mysql_fetch_assoc($Titulo)) {
					if ($tipo!=$regTitulo["Tipo"]){
					   $tipo=$regTitulo["Tipo"];
					};?>
                  <tr>
                    <td height="30" class="borde_SupI"><p class="Parrafo_II"><?php echo $regTitulo["Nombre"];?></p></td>
                    <td class="borde_SupI"><p class="Parrafo_II"><?php echo $regTitulo["Descripcion"];?></p></td>
                    <td align="center" class="borde_SupI"><?php echo $regTitulo["Horas"];?></td>
                    <td align="center" class="borde_SupI"><?php echo $regTitulo["Profesor"];?></td>
					<?php if(($permiso=='1')||($rowEdimar['Cod']==$usrD)){?>
                    <td class="borde_Sup"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td align="center"><a href="#" onClick="window.open('<?php echo "eliminarMat.php?".$UR."&Id=".$_GET["Id"]."&Usr=".$usr."&Cod=".$regTitulo['Cod'];?>','','height=200,width=375');" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('<?php echo "elim".$i;?>','','Imagenes/eliminar.jpg',1)"><img src="Imagenes/eliminar2.jpg" alt="Eliminar Matería" name="<?php echo "elim".$i;?>" width="21" height="23" border="0"></a></td>
                        </tr>
                    </table></td><?php }?>
                  </tr>
                  <?php $i++;}; ?>
                </table>   
                <p>&nbsp;</p></td>
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
