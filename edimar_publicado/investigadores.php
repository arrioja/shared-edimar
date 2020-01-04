<?php include('conexion.php');
   $query="SELECT  Investigador as Permiso FROM permisopag";
   $reg_Per=mysql_query($query, $conexion) or die(mysql_error()); $rowPer = mysql_fetch_assoc($reg_Per);
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
   
$query_reg_most = "SELECT  departamento.Cod, departamento.Nombre, Area FROM personal inner join departamento on departamento.Cod=Dpto where departamento.Idioma='".$id."' group by Dpto, Area";
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
        <td width="74%" valign="top"><br><?php if (($rowPer['Permiso']==$permiso)||($rowPer['Permiso']=='0')||($permiso=='1')){?>
          <table width="98%"  border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td colspan="2" align="center" class="Titulo"> <br>
                <?php  if ((isset($_GET["Id"]))&& ($_GET["Id"]=='_Ing'))
			{ echo "EDIMAR Faculty";} 
			else { echo "EDIMAR INVESTIGADORES Y TÉCNICOS"; } ?>        </td>
            </tr>
            <tr>
              <td width="77%" height="30" align="center" class="Titulo">&nbsp;</td>
              <td width="23%" align="center" class="Borde_Punteado"><?php if($permiso=='1'){?>
                <A href="<?php echo "indtpersonal.php?".$UR."&Id=".$_GET["Id"]."&Usr=".$usr?>"> <img border="0" src="Imagenes/nuevo.jpg" width="21" height="23"> A&ntilde;adir</A>
                <?php }?></td>
            </tr>
            <tr>
              <td colspan="2"><p>&nbsp;</p>
                <br>
                
              <table width="90%"  border="0" align="center" cellpadding="0" cellspacing="0" class="cuadro">
			    <?php $Dpto='';//$rowEdimar["Area"]; 
			  $area='';//$rowEdimar["Categoria"];
			  do{
			  if ($Dpto!=$rowEdimar["Cod"]){ $Dpto=$rowEdimar["Cod"];
			    //$area=$rowEdimar["Area"];?>
                  <tr bgcolor="#6699CC">
                    <td height="30" colspan="2" align="center" class="Titulo_I"><?php echo $rowEdimar["Nombre"]; ?> </td>
                  </tr>
				 <?php if ($Dpto==$usrD){?> 
				  <tr>
                    <td height="30" colspan="2" align="right" >
                     
                      <A href="<?php echo "indtpersonal.php?".$UR."&Id=".$_GET["Id"]."&Usr=".$usr."&NomD=". $rowEdimar["Nombre"]."&CodD=".$Dpto?>"> <img border="0" src="Imagenes/nuevo.jpg" width="21" height="23"> A&ntilde;adir</A>
                      
                    </span></td>
                  </tr>
			     <?php }};?>
                  <tr>
                    <td width="51%" height="40" align="center" class="borde_SupI"><p class="Titulo_II"><?php echo $rowEdimar["Area"]; ?> </p></td>
                    <td width="49%" class="borde_Sup"><table width="90%"  border="0" align="center" cellpadding="0" cellspacing="0">
                    <?php 
				  $query_reg = "SELECT  Cod, Nombre, Apellido FROM personal where Idioma='".$id."' and Dpto='".$Dpto."' and Area='".$rowEdimar["Area"]."'";
                  $reg_per = mysql_query($query_reg, $conexion) or die(mysql_error());
                  
				  while($rowPersonal = mysql_fetch_assoc($reg_per)){ ?>	
				      <tr>
                        <td height="25"><a href=<?php echo "investigador.php?".$UR."&Usr=".$usr."&Id=".$_GET["Id"]."&Cod=".$rowPersonal["Cod"]; ?>><?php echo $rowPersonal["Nombre"]." ".$rowPersonal["Apellido"];?></a></td>
                      </tr>
					  <?php }?>
                      
                  </table></td>
                  </tr>
				  <?php } while($rowEdimar = mysql_fetch_assoc($reg_most))?>
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
