<?
include("../config.php");
//datos
$titular=$_POST['titular'];
$descripcion=$_POST['descripcion'];

$linko=mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db($db);

$ssver_insert="select * from noticias where titular='".$_POST['titular']."' and descripcion='".$_POST['descripcion']."'";
$rever_insert=mysql_query($ssver_insert);
$numsver_insert=mysql_fetch_array($rever_insert);

if($numsver_insert==0)
	{
					$num=rand(1,1000000);
					$dir="../img/noticias/";
				    if($userfile!="")
 					{
					$foto1=$dir.$num.$userfile_name;
					move_uploaded_file($userfile,$dir.$num.$userfile_name);
				    }
					else
					{
					$foto1="img/sf.jpg";
 					} 

$ssqlo="insert into noticias(titular,descripcion,foto) values('$titular','$descripcion','$foto1')";
mysql_query($ssqlo);
mysql_close($linko);
    }
?>
<html>
<head>
<title>Redireccionando...</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style TYPE="text/css">
<!--
A { font-family: Arial,Helvetica,sans-serif; color: #000000;text-decoration:underline}
-->
</style>
<script language="javascript">
function AutoCarga() {
resp=confirm("Para repetir la operacion de click Aceptar, para volver a la pagina del panel haga click en Cancelar")
  if(resp==true) 
   {
   window.history.go(-1)
   }
  else
   {
   location="index.php"
   }
}
</script>
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
                <td width="513" height="595" valign="top"><table width="159" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="31"><div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><a href="erase_cat.php"></a></font><strong><font size="2" face="Arial, Helvetica, sans-serif"><a href="add_cat.php"><img src="nuevo.gif" width="27" height="27" border="0" align="left"></a></font></strong></div></td>
                    <td width="128"><strong><font size="2" face="Arial, Helvetica, sans-serif">Agregar Noticia </font></strong></td>
                  </tr>
                </table>
                          <form action="added_noticia.php" method="post" name="formulario">
                            <p><font size="2" face="Arial, Helvetica, sans-serif">Noticia Agregada con exito... </font></p>
                        </form>
                  <p>&nbsp;</p>
                  <p>&nbsp; </p>
                  <p><font size="2" face="Arial, Helvetica, sans-serif"><a href="index.php"></a></font></p>
                  <p align="center"><font size="2" face="Arial, Helvetica, sans-serif"><a href="erase_cat.php"><br>
                            </a><a href="../log_out.php"><br>
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