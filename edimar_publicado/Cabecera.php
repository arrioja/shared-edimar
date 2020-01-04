<?php include('conexion.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Pagina Edimar</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="Estilo_Edimar.css" rel="stylesheet" type="text/css">
</head>

<body leftmargin="0" topmargin="0" rightmargin="0" marginheight="0" marginwidth="0">
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="2%" rowspan="2"><img src="Imagenes/Banner_Izq.jpg" width="319" height="82" /></td>
        <td width="96%"><img src="Imagenes/Centro_Sup.jpg" width="100%" height="36" /></td>
        <td width="2%" rowspan="2"><img src="Imagenes/Banner_Der_Sup.jpg" width="385" height="82" /></td>
      </tr>
      <tr>
        <td height="46" align="right" background="Imagenes/Linea_R.jpg"><a href="<?php echo "index.php?".$UR."&Id=_E&Usr=".$usr;?>" target="_parent">Espa&ntilde;ol</a> /<a href="<?php echo "index.php?".$UR."&Id=_Ing&Usr=".$usr;?>" target="_parent"> Ingles</a> </td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="143"><table width="143"  border="0" cellspacing="0" cellpadding="0" height="42">
            <tr>
              <td width="50" rowspan="2" align="left"><img src="Imagenes/Curva_II.jpg" width="50" height="42" /></td>
              <td width="71" ><table width="71"  border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="29" align="left"><a href="<?php echo "index.php?".$UR."&Id=_E&Usr=".$usr;?>" target="_parent"><img src="Imagenes/casa.jpg" width="29" height="23" border="0" /></a></td>
                    <td width="13"><img src="Imagenes/Centro_M.jpg" width="13" height="23" /></td>
                    <td width="29" align="right"><img src="Imagenes/Sobre.jpg" width="29" height="23" /></td>
                  </tr>
              </table></td>
              <td width="22" rowspan="2" align="left"><img src="Imagenes/Curva_III.jpg" width="22" height="42" /></td>
            </tr>
            <tr>
              <td  valign="bottom"><img src="Imagenes/curva_I.jpg" width="71" height="19" /></td>
            </tr>
        </table></td>
        <td width="363" align="center" background="Imagenes/Centro_Inf_II.jpg"><table width="95%" height="35" cellpadding="0" cellspacing="0"  class="Borde_Punteado">
            <form action="" method="post" name="form1" id="form1">
              <tr>
                <td width="41%" class="letra_Busq"><div align="right">Busqueda /Search: &nbsp;</div></td>
                <td width="43%"><input type="text" name="textfield" />
                </td>
                <td width="16%"><input type="submit" name="Submit" value="  Ir " /></td>
              </tr>
            </form>
        </table></td>
        <td >&nbsp;</td>
        <td width="296" align="right"><img src="Imagenes/Banner_Der_Inf.jpg" width="296" height="42" /></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
