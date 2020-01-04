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
<title>Agregando Noticia</title>
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
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
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
                <td width="513" height="595" valign="top"><table width="159" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="31"><div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><a href="erase_cat.php"></a></font><strong><font size="2" face="Arial, Helvetica, sans-serif"><a href="add_cat.php"><img src="nuevo.gif" width="27" height="27" border="0" align="left"></a></font></strong></div></td>
                    <td width="128"><strong><font size="2" face="Arial, Helvetica, sans-serif">Agregar Noticia </font></strong></td>
                  </tr>
                </table>
                          <form action="added_noticia.php" method="post" enctype="multipart/form-data" name="formulario">
                            <table width="478" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td height="19" colspan="2"><p>&nbsp;</p></td>
                              </tr>
                              <tr>
                                <td width="142"><font size="2" face="Arial, Helvetica, sans-serif"><br>
                                  Titular:</font></td>
                                <td width="336"><input name="titular" type="text" id="titular"></td>
                              </tr>
                              <tr>
                                <td><p><font size="2" face="Arial, Helvetica, sans-serif">Descripci&oacute;n:</font> <br>
                                </p></td>
                                <td><textarea name="descripcion" cols="40" rows="8" id="descripcion" onBlur="verifica()" onKeyDown="cuenta()"></textarea></td>
                              </tr>
                              <tr>
                                <td><span class="style1">Foto:</span></td>
                                <td><input type="file" name="userfile"></td>
                              </tr>
                              <tr>
                                <td colspan="2">&nbsp;</td>
                              </tr>
                              <tr>
                                <td colspan="2"><p align="center"> <br>
                                <input type="submit" name="Submit2" value="Grabar noticia">
                                  </p>
                                <p>&nbsp;</p>
                                  <p align="center"><font size="2" face="Arial, Helvetica, sans-serif"><a href="index.php"></a></font> <font size="2" face="Arial, Helvetica, sans-serif"><a href="index.php"><img src="regresar.gif" width="117" height="34" border="0"></a></font></p></td>
                              </tr>
                            </table>
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
