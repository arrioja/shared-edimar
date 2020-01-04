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

include("../config.php");
$subcatalogo=$_POST['subcatalogo'];

$linko=mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db($db);
$ssqlo="select * from clientes order by id desc";
$resulto=mysql_query($ssqlo);
$nums=mysql_num_rows($resulto);
?>
<html>
<head>
<title>Edicion de clientes</title>
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
                <td width="513" height="595" valign="top"><table width="314" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="31"><div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><a href="erase_cat.php"></a></font><strong><font size="2" face="Arial, Helvetica, sans-serif"><a href="antes_listar_productos.php"><img src="modificar.gif" width="27" height="27" border="0" align="left"></a><a href="erase_cat.php"></a><a href="add_cat.php"></a></font></strong></div></td>
                    <td width="283"><strong><font size="2" face="Arial, Helvetica, sans-serif">Clientes</font></strong></td>
                  </tr>
                </table>
                          <p><font size="2" face="Arial, Helvetica, sans-serif">Los clientes registrados:</font></p>
                          <form action="hacer_clientes.php" method="post" name="formo">
                            <table width="450" border="1" cellspacing="0" bordercolor="#999999">
                              <tr bgcolor="#000080">
                                <td width="16%" bgcolor="#000066"><font color="#FFFFFF" size="2" face="Arial, Helvetica, sans-serif"><strong>Seleccione</strong></font></td>
                                <td width="32%" bgcolor="#000066"><font color="#FFFFFF" size="2" face="Arial, Helvetica, sans-serif"><strong>Nombres</strong></font></td>
                                <td width="17%" bgcolor="#000066"><font color="#FFFFFF" size="2" face="Arial, Helvetica, sans-serif"><strong>Cedula</strong></font></td>
                                <td width="21%" bgcolor="#000066"><font color="#FFFFFF" size="2" face="Arial, Helvetica, sans-serif"><strong>Telefono</strong></font></td>
                                <td width="14%" bgcolor="#000066"><font color="#FFFFFF" size="2" face="Arial, Helvetica, sans-serif"><strong>Email</strong></font></td>
                              </tr>
                              <?
	 for ($io=0;$io<$nums;$io++)
	  {
	  mysql_data_seek($resulto,$io);
	  $rowo=mysql_fetch_array($resulto);
	  echo "<tr><td><input type='radio' name='id' value='".$rowo['id']."'></td><td>".$rowo['nombre']." ".$rowo['apellido']."</td><td>".$rowo['cedula']."</td><td>".$rowo['telefono']."</td><td>".$rowo['email']."</td></tr>";
	  }
	mysql_close($linko);
	?>
                            </table>
                            <p><font size="2" face="Arial, Helvetica, sans-serif">-Con Marca:
                                <select name="hacer" id="hacer">
                                    <option selected>Seleccione</option>
                                    <option value="Borrar">Borrar</option>
                                    <option value="Actualizar">Actualizar</option>
                                    <option value="Agregar">Agregar</option>
                            </select>
                            </font></p>
                            <p><font size="2" face="Arial, Helvetica, sans-serif">
                              <input type="submit" name="Submit" value="Continuar...">
                            </font><font size="2" face="Arial, Helvetica, sans-serif"> </font></p>
                            <p align="center"><font size="2" face="Arial, Helvetica, sans-serif"><a href="index.php"><br>
                                <br>
                              <img src="regresar.gif" width="117" height="34" border="0"></a></font></p>
                          </form>
                          <br>
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