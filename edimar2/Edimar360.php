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
    <td><iframe name="cabecera" frameborder="0"  width="100%" height="124" src="<?php echo "Cabecera.php?".$UR."&Id=".$_GET["Id"]."&Usr=".$usr?>" scrolling="no"></iframe></td>
  </tr>
  
  <tr>
    <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="5%" valign="top"><script language="JavaScript">menuP('<?php echo $Id;?>','<?php echo $usr;?>');</script></td>
        <td width="81%" valign="top">
		<?php if (($rowPer['Permiso']==$permiso)||($rowPer['Permiso']=='0')||($permiso=='1')){?>
		<table width="98%"  border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="72%" height="30" align="center" class="Titulo">&nbsp;</td>
            <td width="28%" align="center" >&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2" align="center" class="Titulo"> <br><?php  echo $rowEdimar['Titulo']; ?>      </td>
            </tr>
          <tr>
            <td colspan="2"><br>
                <table width="100%"  border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="53%" valign="top" class="Parrafo"><table width="90%"  border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td><a href="<?php echo "pelicula.php?".$UR."&Id=_E&Usr=".$usr."&Pel=EntrEdim.swf&Cad=Entrada de Edimar";?>" target="movies">Entrada de Edimar </a></td>
                      </tr>
                      <tr>
                        <td><a href="<?php echo "pelicula.php?".$UR."&Id=_E&Usr=".$usr."&Pel=EntrFla.swf&Cad=Entrada de Flasa";?>" target="movies">Entrada a Flasa </a></td>
                      </tr>
                      <tr>
                        <td><a href="<?php echo "pelicula.php?".$UR."&Id=_E&Usr=".$usr."&Pel=Direccion.swf&Cad=Direcci�n";?>" target="movies">Direcci&oacute;n</a></td>
                      </tr>
                      <tr>
                        <td><a href="<?php echo "pelicula.php?".$UR."&Id=_E&Usr=".$usr."&Pel=LabAguas.swf&Cad=Laboratorio de Aguas";?>" target="movies">Laboratorio Aguas</a></td>
                      </tr>
                      <tr>
                        <td><a href="<?php echo "pelicula.php?".$UR."&Id=_E&Usr=".$usr."&Pel=LabCal.swf&Cad=Laboratorio de Control de Calidad";?>" target="movies">Laboratorio Calidad </a></td>
                      </tr>
                      <tr>
                        <td><a href="<?php echo "pelicula.php?".$UR."&Id=_E&Usr=".$usr."&Pel=ContCal.swf&Cad=Control de Calidad";?>" target="movies">Control de Calidad </a></td>
                      </tr>
                      <tr>
                        <td><a href="<?php echo "pelicula.php?".$UR."&Id=_E&Usr=".$usr."&Pel=Microbiologia.swf&Cad=Microbiolog�a";?>" target="movies">Microbiolog&iacute;a</a></td>
                      </tr>
                      <tr>
                        <td><a href="<?php echo "pelicula.php?".$UR."&Id=_E&Usr=".$usr."&Pel=ContCal.swf&Cad=Control de Calidad";?>" target="movies">Oceanograf&iacute;a</a></td>
                      </tr>
                      <tr>
                        <td><a href="<?php echo "pelicula.php?".$UR."&Id=_E&Usr=".$usr."&Pel=Museo.swf&Cad=Museo Hnos. Benigno Roman";?>" target="movies">Museo Hnos Benigno Roman </a></td>
                      </tr>
                      <tr>
                        <td><a href="<?php echo "pelicula.php?".$UR."&Id=_E&Usr=".$usr."&Pel=ProyCariaco.swf&Cad=Proyecto Cariaco";?>" target="movies">Proyecto Cariaco </a></td>
                      </tr>
					  <tr>
                        <td><a href="<?php echo "pelicula.php?".$UR."&Id=_E&Usr=".$usr."&Pel=BiologiaP.swf&Cad=Biolog�a Pesquera";?>" target="movies">Biolog�a Pesquera </a></td>
                      </tr>
					  <tr>
                        <td><a href="<?php echo "pelicula.php?".$UR."&Id=_E&Usr=".$usr."&Pel=secretarias.swf&Cad=Secretarias";?>" target="movies">Secretarias </a></td>
                      </tr>
					  <tr>
                        <td><a href="<?php echo "pelicula.php?".$UR."&Id=_E&Usr=".$usr."&Pel=sigam.swf&Cad=SIGAM";?>" target="movies">SIGAM </a></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                      </tr>
                    </table> </td>
                    <td width="6%" class="borde_rayado">&nbsp;</td>
                    <td width="41%" align="center" > <iframe scrolling="no" name="movies" frameborder="0" width="300" height="400" src="pelicula.php"></iframe>                    </td>
                  </tr>
            <td colspan="3" class="Parrafo">&nbsp; </td>
            <tr> </tr>
                </table>
                <p class="Parrafo">&nbsp; </p></td>
          </tr>
        </table> <?php }?>		</td>
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
