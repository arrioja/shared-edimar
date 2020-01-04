<?
include("../config.php");

$linko=mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db($db);

$ssver_update="select * from noticias where id='".$_POST['id']."'";
						$rever_update=mysql_query($ssver_update);
						$rover_update=mysql_fetch_array($rever_update);
						  if($userfile!='')
						   {
						    if($rover_update['foto']!='img/sf.jpg')
						     {
						      unlink($rover_update['foto']);
						     }
						$num=rand(1,1000000);
					    $dir="../img/noticias/";
						$foto1=$dir.$num.$userfile_name;
					    move_uploaded_file($userfile,$dir.$num.$userfile_name);
						
					    $ss_update="update noticias set titular='".$_POST['titular']."',descripcion='".$_POST['descripcion']."',foto='".$foto1."' where id='".$_POST['id']."'";
						mysql_query($ss_update);
						   }
						   else
						    {
						   $ss_update="update noticias set titular='".$_POST['titular']."',descripcion='".$_POST['descripcion']."' where id='".$_POST['id']."'";
						mysql_query($ss_update);
						   }  
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
                <td width="513" height="595" valign="top"><table width="314" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="31"><div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><a href="erase_cat.php"></a></font><strong><font size="2" face="Arial, Helvetica, sans-serif"><a href="antes_listar_productos.php"><img src="modificar.gif" width="27" height="27" border="0" align="left"></a><a href="erase_cat.php"></a><a href="add_cat.php"></a></font></strong></div></td>
                    <td width="283"><font size="2" face="Arial, Helvetica, sans-serif">Noticia actualizada con exito...</font></td>
                  </tr>
                </table>
                          <p align="center">&nbsp;</p>
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