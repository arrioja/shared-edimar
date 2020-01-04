<?php include('conexion.php');
   
$query_reg_most = "SELECT personal.Cod, personal.Nombre, Apellido, Cargo, Dir_Foto, Inf_Contacto, Sintesis, Categoria, 
                   departamento.Nombre as Dpto, departamento.Cod as CodD  FROM personal left join departamento on 
				   Dpto=departamento.Cod where personal.Cod='".$_GET["Cod"]."'";
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
<style type="text/css">
<!--
.Estilo1 {
	font-size: 12px;
	font-style: italic;
}
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
        <td width="81%" align="center" valign="top"><table width="98%"  border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td height="30" align="center" class="Titulo">&nbsp;</td>
            <td width="21%" align="center" class="Titulo">&nbsp;</td>
            <td width="24%" align="center" class="Borde_Punteado" ><?php if(($permiso=='1')||($rowEdimar["CodD"]==$usrD)){?>
              <A href="<?php echo "modpersonal.php?".$UR."&Id=".$_GET["Id"]."&Usr=".$usr."&Cod=".$_GET["Cod"]?>"> <img border="0" src="Imagenes/mod.jpg" width="21" height="23"> Modificar</A>
              <?php }?></td>
          </tr>
          <tr>
            <td height="30" colspan="3" align="center" >&nbsp;    </td>
          </tr>
          <tr>
            <td width="55%" rowspan="2" valign="top"><br>
                <table width="95%"  border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td height="35" class="Titulo_II"><?php  echo $rowEdimar["Nombre"]." ".$rowEdimar["Apellido"];?></td>
                  </tr>
                  <tr>
                    <td height="20"><?php echo $rowEdimar["Cargo"];?></td>
                  </tr>
                  <tr>
                    <td height="20"><?php echo $rowEdimar["Categoria"];?></td>
                  </tr>
                  <tr>
                    <td height="20"><?php if ($rowEdimar["Dpto"]!=''){echo "Dpto. ".$rowEdimar["Dpto"];}?></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td height="30" class="Titulo_II"><?php  if ((isset($_GET["Id"]))&& ($_GET["Id"]=='_Ing'))
			                  { echo "Education";} 
			            else { echo "Títulos"; } ?></td>
                  </tr>
                  <tr>
                    <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
					<?php $tipo='';
					$query_reg = "SELECT * from titulo where Cod='".$_GET["Cod"]."'  order by Tipo desc";
                    $Titulo = mysql_query($query_reg, $conexion) or die(mysql_error());
					 while ($regTitulo = mysql_fetch_assoc($Titulo)) {
					if ($tipo!=$regTitulo["Tipo"]){
					   $tipo=$regTitulo["Tipo"]; ?>
					  <tr>
 				        <td height="35"><span class="Estilo1"><?php echo $regTitulo["Tipo"].":";?></span></td>
					  </tr>
					  <?php };?>
                      <tr>
                        <td height="20"><?php echo $regTitulo["Universidad"]." ".$regTitulo["Mes"]." ".$regTitulo["ano"];?><br>
						    <?php echo "Titulo Obtenido: ".$regTitulo["Titulo"];?>						</td>
                      </tr>
					  <?php }; ?>
                    </table></td>
                  </tr>
                  <tr>
                    <td height="40"><span class="Titulo_II">
                      <?php  if ((isset($_GET["Id"]))&& ($_GET["Id"]=='_Ing'))
			                  { echo "Specialties";} 
			            else { echo "Especialidades"; } ?>
                    </span></td>
                  </tr>
				  <?php 
				    $query_reg = "SELECT * from especialidad where Cod='".$_GET["Cod"]."'";
                    $Esp = mysql_query($query_reg, $conexion) or die(mysql_error());
				  while ($regEsp = mysql_fetch_assoc($Esp)){?>
                  <tr>
                    <td height="25"><?php echo $regEsp["Descrip"];?></td>
                  </tr>
				  <?php }?>
                  <tr>
                    <td height="45" class="Titulo_II"><?php  if ((isset($_GET["Id"]))&& ($_GET["Id"]=='_Ing'))
			                  { echo "Research Overview";} 
			            else { echo "Síntesis de Investigación "; } ?></td>
                  </tr>
                  <tr>
                    <td height="30" class="Parrafo"><?php echo $rowEdimar["Sintesis"]; ?></td>
                  </tr>
                </table>
                <p class="Parrafo">&nbsp; </p></td>
            <td  height="246" colspan="2" align="center" valign="top" class="borde_rayado"><p><img name="foto" src="<?php echo "personal/".$rowEdimar["Dir_Foto"]?>" width="201" height="215" alt=""></p>
              <table width="90%"  border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td height="30" align="center" class="Titulo_II">Informaci&oacute;n de Contacto </td>
                </tr>
                <tr>
                  <td class="Parrafo"><?php echo $rowEdimar["Inf_Contacto"]; ?></td>
                </tr>
              </table>    <br>          
              <table width="90%"  border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td height="35" align="left"><span class="Titulo_II">
                    
                    <a href=<?php echo "proyectosP.php?".$UR."&Id=".$_GET["Id"]."&Cod=".$_GET["Cod"]; ?>><?php  if ((isset($_GET["Id"]))&& ($_GET["Id"]=='_Ing'))
			                  { echo "Research Programs"; }else {echo "Proyectos de Investigaci&oacute;n";};?> </a>
                   
                    
                 
                  </span></td>
                </tr>
                <tr>
                  <td height="35" align="left"><a href=<?php echo "publicacionesP.php?".$UR."&Id=".$_GET["Id"]."&Cod=".$_GET["Cod"]; ?>><?php  if ((isset($_GET["Id"]))&& ($_GET["Id"]=='_Ing')){ 
					echo "Recient Publications"; }else {echo "Publicaciones Recientes";}?> </a></td>
                </tr>
              </table>              <p>&nbsp;</p></td>
          </tr>
          <tr>
            <td colspan="2" valign="top" class="borde_rayado">&nbsp;</td>
          </tr>
        </table>
          <p><a href="<?php echo "index.php?".$UR."&Id=".$Id."&Usr=".$usr;?>" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image4','','Imagenes/logoE2.jpg',1)"><img src="Imagenes/logoE.jpg" name="Image4" width="104" height="48" border="0"></a></p></td>
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
