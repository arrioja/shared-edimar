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

session_register('id');
include("../config.php");
$cual_pro=$_POST['producto'];
$_SESSION['id']=$cual_pro;
$_SESSION['pid']=$cual_pro;

$linko=mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db($db);
$ssqlo="select * from productos where idpro='$cual_pro'";
$resulto=mysql_query($ssqlo);
$rowo=mysql_fetch_array($resulto);
//se obtienne los valores de la bd
$nombre=$rowo['nombre'];
$descripcion=$rowo['descripcion'];
$precio=$rowo['precio'];
$referencia=$rowo['referencia'];
$fabricante=$rowo['fabricante'];
$stock=$rowo['stock'];
$idsubcat=$rowo['idsubcat'];

?>
<html>
<head>
<title>Modificando Producto...</title>
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
                    <td width="283"><strong><font size="2" face="Arial, Helvetica, sans-serif">Modificar Producto</font></strong></td>
                  </tr>
                </table>
                          <div align="right"><br>
                              <font size="2" face="Arial, Helvetica, sans-serif"><a href="index.php"><img src="regresar.gif" width="117" height="34" border="0"></a></font>
                          </div>
                          <form name="form1" method="post" action="modfinal_pro.php?idpro=<? echo $cual_pro?>">
                            <table width="659" border="0">
                              <tr>
                                <td width="144"><font size="2" face="Arial, Helvetica, sans-serif">Nombre del producto:</font></td>
                                <td width="505"><font size="2" face="Arial, Helvetica, sans-serif">
                                  <input name="nombre" type="text" id="nombre" value="<? echo $nombre?>" size="50" maxlength="60">
                                  <input name="referencia" type="hidden" id="referencia">
                                  <input name="fabricante" type="hidden" id="fabricante">
                                  <input name="stock" type="hidden" id="stock">
                                </font></td>
                              </tr>
                              <tr>
                                <td><font size="2" face="Arial, Helvetica, sans-serif">Descripcion:</font></td>
                                <td><font size="2" face="Arial, Helvetica, sans-serif">
                                  <textarea name="descripcion" cols="60" rows="10" id="descripcion"><? echo $descripcion?></textarea>
                                  <br>
                                </font></td>
                              </tr>
                              <tr>
                                <td><font size="2" face="Arial, Helvetica, sans-serif">Precio:</font></td>
                                <td><font size="2" face="Arial, Helvetica, sans-serif">
                                  <input name="precio" type="text" id="precio" value="<? echo $precio?>" maxlength="15">
                                </font></td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td><font size="2" face="Arial, Helvetica, sans-serif">
                                  <input type="submit" name="Submit2" value="Modificarlo...">
                                </font></td>
                              </tr>
                              <tr>
                                <td><span class="style1">Departamento:</span></td>
                                <td><select name="idsubcat">
                                <?
								$ssqlo="select * from subcatalogos";
$resulto=mysql_query($ssqlo);
$nums=mysql_num_rows($resulto);
								
	 for ($io=0;$io<$nums;$io++)
	  {
	  mysql_data_seek($resulto,$io);
	  $rowo=mysql_fetch_array($resulto);
	  echo $rowo['select'];
	  }
	?>
                              </select> 
                                  <span class="style1">Antes: 
                                  <? 
								  $ssdep="select * from subcatalogos where idsubcat='".$idsubcat."'";
								  $redep=mysql_query($ssdep);
								  $rodep=mysql_fetch_array($redep);
								  
								  echo $rodep['nombre'];
								  ?>
                                  </span></td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                              </tr>
                            </table>
                            <p><font size="2" face="Arial, Helvetica, sans-serif"><br>
                                  <br>
                              Si quieres modificar las fotos de tu producto continua bajando, para el formulario,<br>
                            de las fotos...</font></p>
                        </form>
                          <p><font size="2" face="Arial, Helvetica, sans-serif"><strong>Modifica las fotos del articulo 
                            aqui, son maximo 1 fotos por articulo</strong></font></p>
                          <p><font size="2" face="Arial, Helvetica, sans-serif">
                            <iframe src="../subir_fotos.php?id=<? echo $_POST['producto']?>" height="220" width="400"></iframe>
                             </font></p>
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
<?
mysql_close($linko);
?>