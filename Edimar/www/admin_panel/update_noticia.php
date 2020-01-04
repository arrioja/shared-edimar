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
$ssqlo="select * from noticias where id='".$_POST['id']."'";
$re=mysql_query($ssqlo);
$ro=mysql_fetch_array($re);

//Para escoger la foto q se mostrara
if($ro['foto']!="img/sf.jpg")
 {
 $foto_final=$ro['foto'];
 }
else
 {
 $foto_final="../img/sf.jpg";
 }
?>
<html>
<head>
<title>Modificacion de Noticias...</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script>
function verifica()
 {
 letras=document.formulario.descripcion.value.length
 if (letras>150)
   {
   alert("El contenido de la noticia es muy largo, modifiquelo por favor.")
   document.formulario.descripcion.focus()
   }
 }

function cuenta()
 {
 letras=document.formulario.descripcion.value.length
 document.formulario.caracts.value=letras
 }
</script>
<script language="javascript" type="text/javascript" src="tinymce/jscripts/tiny_mce/tiny_mce_src.js"></script>
<script language="javascript" type="text/javascript">
tinyMCE.init({
	mode : "textareas",
	theme : "advanced"
});
</script>
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
                    <td width="283"><font size="2"><strong><font face="Arial, Helvetica, sans-serif">Modificacion de Noticias </font></strong></font></td>
                  </tr>
                </table>
                          <form action="updated_noticia.php" method="post" enctype="multipart/form-data" name="formulario">
                            <table width="615" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td colspan="3"><p>&nbsp;</p></td>
                              </tr>
                              <tr>
                                <td width="133" height="42"><p><br>
                                        <font size="2" face="Arial, Helvetica, sans-serif">Titular:</font></p></td>
                                <td height="42" colspan="2"><input name="titular" type="text" id="titular" value="<? echo $ro['titular']?>"></td>
                              </tr>
                              <tr>
                                <td><p><font size="2" face="Arial, Helvetica, sans-serif">Descripcion: </font><br>
                                </p></td>
                                <td colspan="2"><textarea name="descripcion" cols="60" rows="10" id="descripcion" onBlur="verifica()" onKeyDown="cuenta()"><? echo $ro['descripcion']?></textarea></td>
                              </tr>
                              <tr>
                                <td>Foto:</td>
                                <td width="258"><input type="file" name="userfile"></td>
                                <td width="224"><img src="<? echo $foto_final?>" width="100" height="100" alt=""></td>
                              </tr>
                              <tr>
                                <td colspan="3">&nbsp;</td>
                              </tr>
                              <tr>
                                <td colspan="3"><div align="center">
                                  <input type="submit" name="Submit" value="Grabar noticia">
                                  <input name="id" type="hidden" id="id" value="<? echo $_POST['id']?>">
                                </div></td>
                              </tr>
                            </table>
                            <p align="center"><font size="2" face="Arial, Helvetica, sans-serif"><a href="index.php"><br>
                              <br>
                            <img src="regresar.gif" width="117" height="34" border="0"></a></font><br>
                            </p>
                        </form>
                          <p align="center"><br>
                          </p>
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
<? mysql_close($linko);?>