<?php include('conexion.php');
   
$query_reg_most = "SELECT * FROM proyecto where Cod='".$_GET["Cod"]."'";
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
        <td width="74%" valign="top"><table width="98%"  border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td  class="Titulo_II"> <br>
              <?php  echo $rowEdimar['Titulo']; ?>      </td>
          </tr>
          <tr>
            <td><br><br>
                <table width="100%"  border="0" cellspacing="0" cellpadding="0" class="cuadro">
                  <tr>
                    <td width="22%" class="borde_SupI"><p class="Titulo_II">
                      <?php  if ((isset($_GET["Id"]))&& ($_GET["Id"]=='_Ing'))
			         { echo "Phase";} 
			         else { echo "Fase"; } ?>
                    </p></td>
                    <td width="78%" class="borde_Sup"><p  class="Parrafo_II"> 
                     <?php echo  $rowEdimar['Fase']; ?></o> </td>
                  </tr>
                  <tr>
                    <td class="borde_SupI"><p class="Titulo_II">
                      <?php  if ((isset($_GET["Id"]))&& ($_GET["Id"]=='_Ing'))
			         { echo "Objectives";} 
			         else { echo "Objetivos"; } ?> </p>                   </td>
                    <td width="78%" class="borde_Sup"><p class="Parrafo_II"> <?php echo  $rowEdimar['Objetivos']; ?></p></td>
                  </tr>
                  <tr>
                    <td class="borde_SupI"><p class="Titulo_II"><?php  if ((isset($_GET["Id"]))&& ($_GET["Id"]=='_Ing'))
			         { echo "Participants";} 
			         else { echo "Participantes"; } ?></p></td>
                    <td width="78%" class="borde_Sup"><p class="Parrafo_II"> <?php echo  $rowEdimar['Participantes']; ?></p></td>
                  </tr>
                  <tr>
                    <td class="borde_SupI"><p class="Titulo_II"><?php  if ((isset($_GET["Id"]))&& ($_GET["Id"]=='_Ing'))
			         { echo "Personnel of Edimar";} 
			         else { echo "Personal de Edimar"; } ?></p></td>
					 <?php 
					  $query_reg = "SELECT Nombre, Apellido FROM personal inner join per_proy on personal.Cod=Cod_Pe and Cod_Pro='".$_GET["Cod"]."'";
                      $Personal = mysql_query($query_reg, $conexion) or die(mysql_error());
					  $regPer = mysql_fetch_assoc($Personal);
					 ?>
                    <td width="78%" class="borde_Sup">
					<?php $per=$regPer["Nombre"]." ".$regPer["Apellido"];
					while($regPer = mysql_fetch_assoc($Personal)){
					 $per= $per.", ".$regPer["Nombre"]." ".$regPer["Apellido"];
					}?>
					
					<p class="Parrafo_II"><?php echo $per;?></p></td>
                  </tr>
				  <?php if ((($rowEdimar['Permiso']=='0')||($permiso=='1')||($rowEdimar['Permiso']==$permiso))&&(trim($rowEdimar['Descarga'])!='')){?>
                  <tr>
                    <td class="borde_SupI"><span class="Titulo_II">
                      <?php  if ((isset($_GET["Id"]))&& ($_GET["Id"]=='_Ing'))
			         { echo "Download";} 
			         else { echo "Descarga"; } ?>
                    </span></td>
                    <td width="78%" class="borde_Sup"><?php if ($rowEdimar['Descarga']!=''){?><a href="<?php echo "Proyectos/". $rowEdimar['Descarga']; ?>"><img src="Imagenes/pdf.gif" width="35" height="33" border="0"></a><?php }else{?>&nbsp;<?php }?></td>
                  </tr><?php }?>
        <tr> </tr>
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
