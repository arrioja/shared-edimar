<?
session_start();
if($_SESSION['tipo']==3)
  {
  header("location:index.php");
  }

if(isset($_POST['nick']))
 {
include("../config.php");
$linko=mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db($db);

 //***-*-*-*-*-***********************************************************ADMIN
$ss_a="select * from administracion";
$re_a=mysql_query($ss_a);
$ro_a=mysql_fetch_array($re_a);
$max_pro_pag=$ro_a['max_pro_pag'];
$pagina=$ro_a['pagina'];
$dir=$ro_a['dir'];
$geren=$ro_a['geren'];
$titulo=$ro_a['titulo'];
$moneda=$ro_a['moneda'];
$user=$ro_a['user'];
$pass=$ro_a['pass'];
//***********************************************************************FIN ADMIN

mysql_close($linko);
 
 if($_POST['nick']==$user && $_POST['contrasena']==$pass)
  {
  $_SESSION['tipo']=3;
  header("location:index.php");
  }
 }
?>
<html>
<head>
<title>Zona Administrativa, Prestige</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style TYPE="text/css">
<!--
A { font-family: Arial,Helvetica,sans-serif; color: #000000;text-decoration:underline}
-->
</style>
</head>
<body>
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
                <td width="513" height="595" valign="top"><table width="291" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="31"><div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><a href="erase_cat.php"></a></font><strong><font size="2" face="Arial, Helvetica, sans-serif"><a href="add_cat.php"><img src="nuevo.gif" width="27" height="27" border="0" align="left"></a></font></strong></div></td>
                    <td width="260"><font face="Arial, Helvetica, sans-serif">Ingrese su nombre de usuario y clave</font></td>
                  </tr>
                </table>
                          <form action="check.php" method="post" name="fr">
                            <table width="75%" border="0" align="center" cellspacing="0">
                              <tr>
                                <td valign="middle">&nbsp;</td>
                              </tr>
                              <tr>
                                <td><div align="center"><font size="1" face="Arial, Helvetica, sans-serif">Usuario: <br>
                                          <input name="nick" type="text" id="nick">
                                </font></div></td>
                              </tr>
                              <tr>
                                <td><div align="center"><font size="1" face="Arial, Helvetica, sans-serif">Clave:<br>
                                          <input name="contrasena" type="password" id="contrasena">
                                </font></div></td>
                              </tr>
                              <tr>
                                <td><div align="center"><font size="1" face="Arial, Helvetica, sans-serif">
                                    <input type="submit" name="Submit" value="Entrar">
                                </font></div></td>
                              </tr>
                              <tr>
                                <td><font size="1" face="Arial, Helvetica, sans-serif">&nbsp;</font></td>
                              </tr>
                            </table>
                          </form>
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
<div align="center"></div>
</body>
</html>
