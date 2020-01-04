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
$linko=mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db($db);
$ssqlo="select * from subcatalogos where idcat=1 order by nombre asc";
$resulto=mysql_query($ssqlo);
$nums=mysql_num_rows($resulto);

?>
<html>
<head>
<title>Agregar Nuevo Producto</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style TYPE="text/css">
<!--
A { font-family: Arial,Helvetica,sans-serif; color: #000000;text-decoration:underline}
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
-->
</style>
<script language="javascript" type="text/javascript" src="tinymce/jscripts/tiny_mce/tiny_mce_src.js"></script>
<script language="javascript" type="text/javascript">
tinyMCE.init({
	mode : "textareas",
	theme : "advanced"
});
</script>
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
    <td><table width="713" height="779" border="0" cellpadding="00" cellspacing="0">
      <tr>
        <td height="779" valign="top"><table width="696" height="779" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#0369A7">
          <tr>
            <td width="692" height="21" background="../img/barra.gif">&nbsp;</td>
          </tr>
          <tr>
            <td height="756" valign="top"><table width="513" height="640" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td width="513" height="640" valign="top"><table width="428" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="41"><div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><a href="erase_cat.php"></a></font><strong><font size="2" face="Arial, Helvetica, sans-serif"><a href="add_cat.php"><img src="nuevo.gif" width="27" height="27" border="0" align="left"></a></font></strong></div></td>
                    <td width="387"><strong><font size="2" face="Arial, Helvetica, sans-serif">Nuevo Producto para una Categoria o Departamento </font></strong></td>
                  </tr>
                </table>
                          <form action="added_pro.php" method="post" enctype="multipart/form-data" name="form1">
                            <p align="center">&nbsp;</p>
                            <table width="509" border="0">
                              <tr>
                                <td width="94"><span class="style1">Subcategoria:</span></td>
                                <td width="405"><font size="2" face="Arial, Helvetica, sans-serif">
                                  <select name="subcatalogo" id="subcatalogo">
                                    <?
	 for ($io=0;$io<$nums;$io++)
	  {
	  mysql_data_seek($resulto,$io);
	  $rowo=mysql_fetch_array($resulto);
	  echo $rowo['select'];
	  }
	
	?>
                                  </select>
                                <input name="catalogo" type="hidden" id="catalogo" value="<? echo $_POST['categoria']?>">
                                <input name="referencia" type="hidden" id="referencia">
                                <input name="fabricante" type="hidden" id="fabricante">
                                <input name="stock" type="hidden" id="stock">
                                </font></td>
                              </tr>
                              <tr>
                                <td><font size="2" face="Arial, Helvetica, sans-serif">Nombre del producto:</font></td>
                                <td><font size="2" face="Arial, Helvetica, sans-serif">
                                  <input name="nombre" type="text" id="nombre" size="50" maxlength="60">
                                </font></td>
                              </tr>
                              <tr>
                                <td><font size="2" face="Arial, Helvetica, sans-serif">Descripcion: </font></td>
                                <td><font size="2" face="Arial, Helvetica, sans-serif">
                                  <textarea name="descripcion" cols="60" rows="10" id="descripcion"></textarea>
                                  <br>
                                </font></td>
                              </tr>
                              <tr>
                                <td><font size="2" face="Arial, Helvetica, sans-serif">Precio:</font></td>
                                <td><font size="2" face="Arial, Helvetica, sans-serif">
                                  <input name="precio" type="text" id="precio" maxlength="15">
                                  Sin la moneda, es decir sin el &quot;bs&quot;</font></td>
                              </tr>
                              <tr>
                                <td><font size="2" face="Arial, Helvetica, sans-serif">Foto del producto:</font></td>
                                <td><input name="userfile" type="file" id="userfile"></td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                              </tr>
                              <tr>
                                <td colspan="2"><div align="center"><font size="2" face="Arial, Helvetica, sans-serif">
                                    <input type="submit" name="Submit2" value="Agregar Producto">
                                </font></div></td>
                              </tr>
                            </table>
                            <div align="center"></div>
                            <p>&nbsp;</p>
                          </form>
                          <p>&nbsp;</p>
                  <p align="center"><font size="2" face="Arial, Helvetica, sans-serif"><a href="index.php"><img src="regresar.gif" width="117" height="34" border="0"></a></font><font size="2" face="Arial, Helvetica, sans-serif"><a href="erase_cat.php"><br>
                            </a><a href="../log_out.php"><br>
                        </a></font></p>
                  </td>
              </tr>
            </table>
                </td>
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
<? mysql_close($linko)?>