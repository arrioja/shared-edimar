<?
include("../config.php");
$cual_pro=$_POST['producto'];

$linko=mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db($db);

$ssqlo_fotos="select * from productos where idpro='$cual_pro'";
$re_fotos=mysql_query($ssqlo_fotos);
$ro_fotos=mysql_fetch_array($re_fotos);
//borrando archivos de fotos
 if($ro_fotos['foto1']!='images/nofoto.gif')
  {
  unlink("../".$ro_fotos['foto1']);
  }

 if($ro_fotos['foto2']!='images/nofoto.gif')
  {
  unlink("../".$ro_fotos['foto2']);
  }
  
  if($ro_fotos['foto3']!='images/nofoto.gif')
  {
  unlink("../".$ro_fotos['foto3']);
  }

  if($ro_fotos['foto4']!='images/nofoto.gif')
  {
  unlink("../".$ro_fotos['foto4']);
  }
  
  if($ro_fotos['foto5']!='images/nofoto.gif')
  {
  unlink("../".$ro_fotos['foto5']);
  }


$ssqlo="delete from productos where idpro='$cual_pro'";
mysql_query($ssqlo);
$ssqlo="delete from ofertas where id_producto='$cual_pro'";
mysql_query($ssqlo);


mysql_close($linko);
?>
<html>
<head>
<title>Redireccionando...</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="javascript">
function AutoCarga() {
resp=confirm("Para repetir la operacion de click Aceptar, para volver a la pagina del panel haga click en Cancelar")
  if(resp==true) 
   {
   window.history.go(-2)
   }
  else
   {
   location="index.php"
   }
}
</script>
<style TYPE="text/css">
<!--
A { font-family: Arial,Helvetica,sans-serif; color: #000000;text-decoration:underline}
-->
</style>
</head>
<body onLoad="AutoCarga()">
<table width="735" border="0" align="center" cellpadding="0" cellspacing="0">
  <!-- fwtable fwsrc="admin.png" fwbase="admin.jpg" fwstyle="Dreamweaver" fwdocid = "424456105" fwnested="0" -->
  <tr>
    <td><img src="img/spacer.gif" width="11" height="1" border="0" alt=""></td>
    <td><img src="img/spacer.gif" width="713" height="1" border="0" alt=""></td>
    <td><img src="img/spacer.gif" width="11" height="1" border="0" alt=""></td>
    <td><img src="img/spacer.gif" width="1" height="1" border="0" alt=""></td>
  </tr>
  <tr>
    <td colspan="3"><img name="admin_r1_c1" src="img/admin_r1_c1.jpg" width="735" height="161" border="0" alt=""></td>
    <td><img src="img/spacer.gif" width="1" height="161" border="0" alt=""></td>
  </tr>
  <tr>
    <td colspan="3"><img name="admin_r2_c1" src="img/admin_r2_c1.jpg" width="735" height="23" border="0" alt=""></td>
    <td><img src="img/spacer.gif" width="1" height="23" border="0" alt=""></td>
  </tr>
  <tr>
    <td background="img/admin_r3_c1.jpg">&nbsp;</td>
    <td><table width="713" height="428" border="0" cellpadding="00" cellspacing="0">
      <tr>
        <td height="378" valign="top"><table width="696" height="136" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#0369A7">
          <tr>
            <td width="692" height="21" background="../img/barra.gif">&nbsp;</td>
          </tr>
          <tr>
            <td valign="top"><table width="513" height="595" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td width="513" height="595" valign="top"><table width="196" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="29"><div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><a href="erase_cat.php"></a></font><strong><font size="2" face="Arial, Helvetica, sans-serif"><a href="erase_cat.php"><img src="eliminar.gif" width="27" height="27" border="0" align="left"></a><a href="add_cat.php"></a></font></strong></div></td>
                    <td width="167"><strong><font size="2" face="Arial, Helvetica, sans-serif">Borrando Productos </font></strong></td>
                  </tr>
                </table>
                          <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><br>
                          Producto borrado con exito... </font>                          </div>
                          <p>&nbsp;</p>
                  <p><font size="2" face="Arial, Helvetica, sans-serif"><a href="index.php"></a></font></p>
                  <p align="center"><font size="2" face="Arial, Helvetica, sans-serif"><a href="erase_cat.php"><br>
                        </a></font></p></td>
              </tr>
            </table>
                    <p>&nbsp;</p></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
    <td background="img/admin_r3_c3.jpg">&nbsp;</td>
    <td><img src="img/spacer.gif" width="1" height="474" border="0" alt=""></td>
  </tr>
  <tr>
    <td colspan="3"><img name="admin_r4_c1" src="img/admin_r4_c1.jpg" width="735" height="31" border="0" alt=""></td>
    <td><img src="img/spacer.gif" width="1" height="31" border="0" alt=""></td>
  </tr>
</table>
</body>
</html>