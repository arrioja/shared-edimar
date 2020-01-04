<?
session_start();

if(!isset($_SESSION['tipo']))
 {
 $_SESSION['tipo']=0;
 }
if($_SESSION['tipo']!=3)
 {
 header("location:check.php");
 }
?>
<html>
<head>
<title>Panel Administrativo</title>
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
    <td><table width="713" height="474" border="0" cellpadding="00" cellspacing="0">
      <tr>
        <td><table width="696" height="136" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#0369A7">
          <tr>
            <td width="692" height="21" background="../img/barra.gif">&nbsp;</td>
          </tr>
          <tr>
            <td valign="bottom"><table width="350" height="762" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td height="762" valign="top"><p><font size="2" face="Arial, Helvetica, sans-serif"><strong><br>
                    Categorias o departamentos </strong></font><font size="2" face="Arial, Helvetica, sans-serif"><strong><br>
                    <br>
                        Subcategoria</strong></font><br>
                        <br>
                        <font size="2" face="Arial, Helvetica, sans-serif"><a href="add_subcat.php"><img src="nuevo.gif" width="27" height="27" border="0" align="left"> Agregar 
                        Subcategoria</a><br>
                        <a href="erase_subcat.php"><br>
                        <img src="eliminar.gif" width="27" height="27" border="0" align="left"> Borrar Subcategoria </a></font></p>
                      <p><font size="2" face="Arial, Helvetica, sans-serif"><strong><br>
                        Productos</strong></font></p>
                      <p><font size="2" face="Arial, Helvetica, sans-serif"><a href="add_cat.php"><img src="nuevo.gif" width="27" height="27" border="0" align="left"></a><a href="add_pro.php">Agregar 
                      Productos a un Departamento</a><br>
                          <a href="listar_productos.php"><br>
                          <img src="modificar.gif" width="27" height="27" border="0" align="left">Modificar productos de un departamento</a><br>
                        <a href="antes_listar_productos2.php"><br>
                        </a><a href="erase_cat.php"><img src="eliminar.gif" width="27" height="27" border="0" align="left"></a><a href="listar_productos2.php">Borrar un producto de un departamento </a></font></p>
                    <p><font size="2" face="Arial, Helvetica, sans-serif"><strong><br>
                      Noticias</strong></font></p>
                    <p><font size="2" face="Arial, Helvetica, sans-serif"><a href="add_cat.php"><img src="nuevo.gif" width="27" height="27" border="0" align="left"></a><a href="add_noticia.php">Agregar Noticias</a><br>
                            <a href="antes_listar_productos.php"><br>
                          <img src="modificar.gif" width="27" height="27" border="0" align="left"></a><a href="antes_update_noticia.php">Modificar Noticias </a><br>
                      </font><font size="2" face="Arial, Helvetica, sans-serif"><a href="erase_cat.php"><br>
                      <img src="eliminar.gif" width="27" height="27" border="0" align="left"></a><a href="erase_noticia.php">Borrar Noticias </a></font></p>
                    <p><font size="2" face="Arial, Helvetica, sans-serif"><strong><br>
                        </strong><br>
                      </font><font size="2" face="Arial, Helvetica, sans-serif"><a href="antes_listar_productos.php"><img src="modificar.gif" width="27" height="27" border="0" align="left"></a><a href="administra.php">Administrar datos de la cuenta </a></font></p>
                    <p align="center">&nbsp;</p>
                    <table width="159" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="31"><div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><a href="erase_cat.php"><img src="eliminar.gif" width="27" height="27" border="0" align="left"></a></font></div></td>
                        <td width="128"><font size="2" face="Arial, Helvetica, sans-serif"><a href="../log_out.php">Salir del panel</a></font></td>
                      </tr>
                    </table>
                    </td>
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