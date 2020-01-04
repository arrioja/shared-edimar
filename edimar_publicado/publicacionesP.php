<?php include('conexion.php');
   
$query_reg_most = "SELECT personal.Cod, personal.Nombre, Apellido, Cargo, Categoria, 
                   departamento.Nombre as Dpto  FROM personal left join departamento on 
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
            <td align="center" class="Titulo"> <br>      </td>
          </tr>
          <tr>
            <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td height="35"><span class="Titulo_II">
                  <?php  echo $rowEdimar["Nombre"]." ".$rowEdimar["Apellido"];?>
                </span></td>
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
            </table>              
              <br><br>
               
              <table width="100%"  border="0" cellspacing="0" cellpadding="0" class="cuadro">
                  <tr align="center" bgcolor="#6699CC">
                    <td height="35" colspan="2" class="Titulo_I">
                      <?php  if ((isset($_GET["Id"]))&& ($_GET["Id"]=='_Ing'))
			                  { echo "Recient Publications"; }else {echo "Publicaciones Recientes";};?>                   </td>
                  </tr>
				 <?php $i=1;
					$query_reg = "SELECT Cod_pe, Cod, Descrip, Dir FROM publicacion inner join public_per on Cod=Cod_Po and Cod_Pe='".$_GET["Cod"]."'";
                    $Public = mysql_query($query_reg, $conexion) or die(mysql_error());
					?>
					<?php while ($regPublic = mysql_fetch_assoc($Public)) {?>
                  <tr>
                    <td width="89%" height="40" class="borde_SupI"><p class="Parrafo"><?php echo $regPublic["Descrip"]; ?></p></td>
                    <td width="11%" align="center" class="borde_Sup"><?php if ($regPublic["Dir"]!=''){?><a href=<?php echo "Publicaciones/".$regPublic["Dir"]; ?>><img border="0" name=<?php echo "pdf".$i; ?> src="Imagenes/pdf.gif" width="35" height="33"></a><?php }else{?>&nbsp;<?php }?></td>
                  </tr>
				  <?php }?>
                </table>
                <p class="Parrafo">&nbsp; </p></td>
          </tr>
        </table></td>
        <td width="14%" class="borde_rayado"><table width="100%" height="535"  border="0" cellpadding="0" cellspacing="0" >
            <tr>
              <td ><iframe frameborder="0"  width="100%" height="800" src="<?php echo "linknoti.php?".$UR."&Id=".$_GET["Id"]."&Usr=".$usr?>"></iframe></td>
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
