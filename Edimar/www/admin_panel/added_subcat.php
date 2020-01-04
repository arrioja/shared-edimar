<?
include("../config.php");
$name=$_POST['nombre'];//recibe el nombre del catalogo a agregar

//para asignarle un id al catalogo
$ido=fopen("../cuenta_subcat.txt","r+");
$recibo=fgets($ido,1000);
//$recibe=settype($recibo,"integer");
fclose($ido);
//para el menu de la parte de la izquierda la tabla
//$tabla="<tr bgcolor=\'#ffffff\'><td><img src=\'images/orange_arrow.gif\'><a class=\'enlace_izq\' title=\'".$name."\' href=\'verproducto.php?idcat=".$recibo."&txt_criterio=&pagina=1&criterio=\'>".$name."</a></td></tr>";
$tabla="<a title=\'".$name."\' href=\'verproducto.php?idcat=".$_POST['categoria']."&idsubcat=".$recibo."&txt_criterio=&pagina=1&criterio=\' class=subcategoria>".$name."</a><br>";
//para el select de borrado de catalogo o add de catalogo
$select="<option value=\'".$recibo."\'>".$name."</option>";

//conexion a la bd
$linko=mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db($db);
$ssqlo="INSERT INTO `subcatalogos` VALUES ('$recibo', '$name', '$tabla', '$select', '$categoria')";
mysql_query($ssqlo);
mysql_close($linko);

//para aumentar el contador de los catalogos
$ido2=fopen("../cuenta_subcat.txt","w+");
fwrite($ido2,$recibo+1);
fclose($ido2);
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
   window.history.go(-1)
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
                <td width="513" height="595" valign="top"><table width="257" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="31"><div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><a href="erase_cat.php"></a></font><strong><font size="2" face="Arial, Helvetica, sans-serif"><a href="add_cat.php"><img src="nuevo.gif" width="27" height="27" border="0" align="left"></a></font></strong></div></td>
                    <td width="226"><strong><font size="2" face="Arial, Helvetica, sans-serif">Agregar SubCatalogo </font></strong></td>
                  </tr>
                </table>
                          <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><br></font>
                            <p><font size="2" face="Arial, Helvetica, sans-serif">Se agrego correctamente 
                              el subcatalogo: <i><? echo $name?></i> </font></p>
</div>
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