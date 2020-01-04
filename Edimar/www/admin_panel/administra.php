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

 //***-*-*-*-*-***********************************************************ADMIN
$ss_a="select * from administracion";
$re_a=mysql_query($ss_a);
$ro_a=mysql_fetch_array($re_a);
$max_pro_pag=$ro_a['max_pro_pag'];
$pagina=$ro_a['pagina'];
$dir=$ro_a['dir'];
$geren=$ro_a['geren'];
$geren2=$ro_a['geren2'];
$titulo=$ro_a['titulo'];
$moneda=$ro_a['moneda'];
$user=$ro_a['user'];
$pass=$ro_a['pass'];
$asunto1=$ro_a['asunto1'];
$asunto2=$ro_a['asunto2'];
$id=$ro_a['id'];
//***********************************************************************FIN ADMIN

mysql_close($linko);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Modificando datos de su website</title>
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
                <td width="513" height="595" valign="top"><table width="159" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="31"><div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><a href="erase_cat.php"></a></font><strong><font size="2" face="Arial, Helvetica, sans-serif"><a href="add_cat.php"><img src="nuevo.gif" width="27" height="27" border="0" align="left"></a></font></strong></div></td>
                    <td width="128"><strong><font size="2" face="Arial, Helvetica, sans-serif">Datos de la cuenta </font></strong></td>
                  </tr>
                </table>
                          <form action="administralo.php" method="post" name="formulario">
                            <table width="532" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td width="532" height="19"><p>
                                  <input name="geren2" type="hidden" id="geren2">
                                  <input name="asunto1" type="hidden" id="asunto1">
                                  <input name="asunto2" type="hidden" id="asunto2">
                                  <input name="pagina" type="hidden" id="pagina">
                                  <input name="moneda" type="hidden" id="moneda">
                                </p></td>
                              </tr>
                              <tr>
                                <td><font size="2" face="Arial, Helvetica, sans-serif"><br>
                                  Titulo de la pagina web:</font>
                                    <input name="titulo" type="text" id="titulo" size="70" value="<? echo $titulo?>"></td>
                              </tr>
                              <tr>
                                <td><p><font size="2" face="Arial, Helvetica, sans-serif">Numero de productos a mostrar por pagina:
                                  <select name="max_pro_pag" id="max_pro_pag">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6" selected>6</option>
                                  </select>
                                  Antes: <? echo $max_pro_pag?></font><br>
                                </p></td>
                              </tr>
                              <tr>
                                <td><font size="2" face="Arial, Helvetica, sans-serif">Direccion raiz de la web :</font>
                                    <input name="dir" type="text" id="dir" value="<? echo $dir?>" size="70"></td>
                              </tr>
                              <tr>
                                <td><font size="2" face="Arial, Helvetica, sans-serif">Correo del administrador:</font>
                                    <input name="geren" type="text" id="geren" value="<? echo $geren?>" size="40">
                                    <font size="2" face="Arial, Helvetica, sans-serif"> Correo para las operaciones, ventas, registro de pagos, etc </font>
                                  <label></label>
                                  <label></label></td>
                              </tr>
                              
                              
                              <tr>
                                <td><font size="2" face="Arial, Helvetica, sans-serif">Nombre de usuario:
                                  <input name="user" type="text" id="user" value="<? echo $user?>">
                                </font></td>
                              </tr>
                              <tr>
                                <td><font size="2" face="Arial, Helvetica, sans-serif">Clave:
                                  <input name="pass" type="text" id="pass" value="<? echo $pass?>">
                                </font></td>
                              </tr>
                              <tr>
                                <td><p> <br>
                                        <input type="submit" name="Submit" value="Grabar...">
                                        <input name="id" type="hidden" id="id" value="<? echo $id?>">
                                  </p>
                                    <p><font size="2" face="Arial, Helvetica, sans-serif"><a href="index.php"></a></font> </p></td>
                              </tr>
                            </table>
                          </form>
                        <p>&nbsp;</p>
                  <p align="center"><font size="2" face="Arial, Helvetica, sans-serif"><a href="index.php"><img src="regresar.gif" width="117" height="34" border="0"></a></font> </p>
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
