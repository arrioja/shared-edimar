<?php include('conexion.php');
   $query="SELECT  Investigador as Permiso FROM permisopag";
   $reg_Per=mysql_query($query, $conexion) or die(mysql_error()); $rowPer = mysql_fetch_assoc($reg_Per);
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
   
$query_reg_most = "SELECT  departamento.Cod, departamento.Nombre as Dpto, personal.Nombre, Apellido, Correo FROM personal inner join departamento on departamento.Cod=Dpto where departamento.Idioma='".$id."' group by Dpto, personal.Cod";
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
.style1 {
	font-size: 12px;
	color: #006633;
	font-weight: bold;
}
-->
</style></head>

<body marginheight="0" topmargin="0" marginwidth="0" leftmargin="0">
<script language="JavaScript1.2">mmLoadMenus('<?php echo $_GET["Id"];?>','<?php echo $usr;?>');</script>
<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><iframe name="cabecera" frameborder="0"  width="100%" height="124" src="<?php echo "Cabecera.php?".$UR."&Id=".$_GET["Id"]."&Usr=".$usr?>" scrolling="no"></iframe></td>
  </tr>
  
  <tr>
    <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="5%" valign="top"><script language="JavaScript">menuP('<?php echo $_GET["Id"];?>','<?php echo $usr;?>');</script></td>
        <td width="81%" valign="top"><br><?php if (($rowPer['Permiso']==$permiso)||($rowPer['Permiso']=='0')||($permiso=='1')){?>
          <table width="98%"  border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="100%" colspan="2" align="center" class="Titulo"> <br>
                <?php  if ((isset($_GET["Id"]))&& ($_GET["Id"]=='_Ing'))
			{ echo "CONTACTENOS";} 
			else { echo "CONTACTENOS"; } ?>        </td>
            </tr>
            
            <tr>
              <td colspan="2" align="left"><p>&nbsp;</p>
                <br>
                
                <table width="66%"  border="0" align="center" cellpadding="0" cellspacing="0">
			    <?php $Dpto='';
			  
			  do{
			  if (( trim($rowEdimar["Correo"])!="")||($rowEdimar["Correo"]!=NULL)){
			  if ($Dpto!=$rowEdimar["Cod"]){ $Dpto=$rowEdimar["Cod"];
			    ?>
                  <tr >
                    <td height="30" colspan="2" class="Borde_Punteado" > <span class="style1"><?php echo $rowEdimar["Dpto"]; ?></span></td>
                  </tr>
				 <?php };?>
                  <tr>
                    <td width="46%" height="30" align="left" ><?php echo $rowEdimar["Nombre"]." ".$rowEdimar["Apellido"];?></td>
                    <td width="54%" ><a href="<?php echo "mailto:".$rowEdimar["Correo"]?>" target="_blank"><?php echo $rowEdimar["Correo"];?></a></td>
                  </tr>
				  <?php } } while($rowEdimar = mysql_fetch_assoc($reg_most))?>
                </table>                </td>
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
