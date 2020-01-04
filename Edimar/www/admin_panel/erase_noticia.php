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

?>
<html>
<head>
<title>Borrar Noticia...</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style TYPE="text/css">
<!--
A { font-family: Arial,Helvetica,sans-serif; color: #000000;text-decoration:underline}
.style1 {
	color: #FFFFFF;
	font-weight: bold;
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
                <td width="513" height="595" valign="top"><table width="146" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="31"><div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><a href="erase_cat.php"></a></font><strong><font size="2" face="Arial, Helvetica, sans-serif"><a href="erase_cat.php"><img src="eliminar.gif" width="27" height="27" border="0" align="left"></a><a href="add_cat.php"></a></font></strong></div></td>
                    <td width="183"><strong><font size="2" face="Arial, Helvetica, sans-serif">Borrar Noticia </font></strong></td>
                  </tr>
                </table>
                          <form name="form1" method="post" action="erased_noticia.php">
                            <p align="center"><font size="2" face="Arial, Helvetica, sans-serif">Seleccione la noticia que desea borrar:</font></p>
                            <table border="1" width="400" align="center" cellspacing="0">
                              <tr bordercolor="#FFFFFF">
                                <td width="23%" bgcolor="#000066"><span class="style1"><font size="2" face="Arial, Helvetica, sans-serif">Seleccione</font></span></td>
                                <td width="77%" bgcolor="#000066"><div align="left" class="style1"><font size="2" face="Arial, Helvetica, sans-serif">Titular</font></div></td>
                              </tr>
                              <?
					  $ssq="select * from noticias order by id desc";
					  $res=mysql_query($ssq);
					  $num=mysql_num_rows($res);
					  
					  for($i=1;$i<=$num;$i++)
					   {
					    mysql_data_seek($res,($i-1));
					    $row=mysql_fetch_array($res);
					    //color de fondo de las celdas
						if(($i%2)==0)
						 {
						 $bg_color="#F7F7F7";
						 }
						 else
						 {
						 $bg_color="#ffffff";
						 }
						//obtencion de datos de la empresa
						echo "<tr><td><input type='radio' name='id' value='".$row['id']."'></td><td>".$row['titular']."</td></tr>";
						}
                       mysql_close($linko);
						?>
                            </table>
                            <div align="center">
                              <p><br>
                                  <input type="submit" name="Submit2" value="Borrar">
                              </p>
                            </div>
                          </form>
                          <p>&nbsp;</p>
                  <p align="center"><font size="2" face="Arial, Helvetica, sans-serif"><a href="index.php"><img src="regresar.gif" width="117" height="34" border="0"></a></font> </p>
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