<?php $conexion = mysql_connect("localhost", "borg1978_root", "ivotrino"); 
mysql_select_db("borg1978_bdedimar", $conexion); 
$UR="fti=yes&curmbox=00000000%2d0000%2d0000%2d0000%2d000000000001&a=c49ada04efe4dbbebabf65088e7c412b19e55dc687b349189bd90b9e41231034";
$id='';$usr='0'; $permiso=''; ; $Nick='';
 if ((isset($_GET["Id"]))&& ($_GET["Id"]=='_Ing')){  $id='I';} else {
 $id='E';}
 if ((empty($_GET["Usr"]))||($_GET["Usr"]=='0')){  
  if ((!empty($_POST["nick"]))&&(!empty($_POST["pass"]))){
   $query="SELECT Cod, Permiso, Nick FROM usuario where Nick='".$_POST["nick"]."' and Pass='".$_POST["pass"]."'";
   $reg_Usr=mysql_query($query, $conexion) or die(mysql_error());
   $rowUsr = mysql_fetch_assoc($reg_Usr); $usr=$rowUsr["Cod"]; $permiso=$rowUsr["Permiso"];$Nick=$rowUsr["Nick"];}
 }else{$query="SELECT Cod, Permiso, Nick FROM usuario where Cod='".$_GET["Usr"]."'";
   $reg_Usr=mysql_query($query, $conexion) or die(mysql_error());
   $rowUsr = mysql_fetch_assoc($reg_Usr); $usr=$rowUsr["Cod"]; $permiso=$rowUsr["Permiso"];$Nick=$rowUsr["Nick"];}
   
$query_reg_most = "SELECT personal.Cod, personal.Nombre, Apellido, Cargo, Categoria, 
                   departamento.Nombre as Dpto  FROM personal left join departamento on 
				   Dpto=departamento.Cod where personal.Cod='".$_GET["Cod"]."'";
 $reg_most = mysql_query($query_reg_most, $conexion) or die(mysql_error());
 $rowEdimar = mysql_fetch_assoc($reg_most);
 $totalRows_reg_most = mysql_num_rows($reg_most);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Pagina Edimar</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="Estilo_Edimar.css" rel="stylesheet" type="text/css">
<script language="JavaScript" src="menu_p.js"></script>

<script language="JavaScript" src="mm_menu.js"></script>
</head>

<body marginheight="0" topmargin="0" marginwidth="0" leftmargin="0">
<script language="JavaScript1.2">mmLoadMenus('<?php echo $_GET["Id"];?>','<?php echo $usr;?>');</script>
<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="2%" rowspan="2"><img src="Imagenes/Banner_Izq.jpg" width="319" height="82"></td>
                <td width="96%"><img src="Imagenes/Centro_Sup.jpg" width="100%" height="36"></td>
                <td width="2%" rowspan="2"><img src="Imagenes/Banner_Der_Sup.jpg" width="385" height="82"></td>
              </tr>
              <tr>
                <td height="46" align="right" background="Imagenes/Linea_R.jpg"><a href="<?php echo "index.php?".$UR."&Id=_E&Usr=".$usr;?>">Espa&ntilde;ol</a> /<a href="<?php echo "index.php?".$UR."&Id=_Ing&Usr=".$usr;?>"> Ingles</a></td>
              </tr>
          </table></td>
  </tr>
  <tr>
    <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="143"><table width="143"  border="0" cellspacing="0" cellpadding="0" height="42">
          <tr>
            <td width="50" rowspan="2" align="left"><img src="Imagenes/Curva_II.jpg" width="50" height="42"></td>
            <td width="71" ><table width="71"  border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="29" align="left"><img src="Imagenes/casa.jpg" width="29" height="23"></td>
                  <td width="13"><img src="Imagenes/Centro_M.jpg" width="13" height="23"></td>
                  <td width="29" align="right"><img src="Imagenes/Sobre.jpg" width="29" height="23"></td>
                </tr>
            </table></td>
            <td width="22" rowspan="2" align="left"><img src="Imagenes/Curva_III.jpg" width="22" height="42"></td>
          </tr>
          <tr>
            <td  valign="bottom"><img src="Imagenes/curva_I.jpg" width="71" height="19"></td>
          </tr>
        </table></td>
        <td width="363" align="center" background="Imagenes/Centro_Inf_II.jpg"><table width="95%" height="35" cellpadding="0" cellspacing="0"  class="Borde_Punteado">
          <form name="form1" method="post" action="">
            <tr>
              <td width="41%" class="letra_Busq"><div align="right">Busqueda /Search: &nbsp;</div></td>
              <td width="43%">
                <input type="text" name="textfield">
              </td>
              <td width="16%"><input type="submit" name="Submit" value="  Ir "></td>
            </tr>
          </form>
        </table></td>
        <td >&nbsp;</td>
        <td width="296" align="right"><img src="Imagenes/Banner_Der_Inf.jpg" width="296" height="42"></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="12%" valign="top"><script language="JavaScript">menuP('<?php echo $_GET["Id"];?>','<?php echo $usr;?>');</script></td>
        <td width="74%" valign="top"><table width="98%"  border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td align="center" class="Titulo"> <br>
      </td>
          </tr>
          <tr>
            <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td height="35"><span class="Titulo_II">
                  <?php  echo $rowEdimar["Nombre"]." ".$rowEdimar["Apellido"];?>
                </span></td>
              </tr>
              <tr>
                <td height="20"><?php echo utf8_decode($rowEdimar["Cargo"]);?></td>
              </tr>
              <tr>
                <td height="20"><?php echo utf8_decode($rowEdimar["Categoria"]);?></td>
              </tr>
              <tr>
                <td height="20"><?php if ($rowEdimar["Dpto"]!=''){echo "Dpto. ".utf8_decode($rowEdimar["Dpto"]);}?></td>
              </tr>
            </table>              
              <br><br>
               
              <table width="100%"  border="0" cellspacing="0" cellpadding="0" class="cuadro">
                  <tr align="center" bgcolor="#6699CC">
                    <td height="35" colspan="2" class="Titulo_I">
                      <?php  if ((isset($_GET["Id"]))&& ($_GET["Id"]=='_Ing'))
			                  { echo "Recient Publications"; }else {echo "Publicaciones Recientes";};?>                   </td>
                  </tr>
				 <?php $i=1;
					$query_reg = "SELECT Cod_pe, Cod, Descrip, Dir FROM publicacion inner join public_per on Cod=Cod_Po and Cod_Pe='".$_GET["Cod"]."'";
                    $Public = mysql_query($query_reg, $conexion) or die(mysql_error());
					?>
					<?php while ($regPublic = mysql_fetch_assoc($Public)) {?>
                  <tr>
                    <td width="89%" height="40" class="borde_SupI"><p class="Parrafo"><?php echo $regPublic["Descrip"]; ?></p></td>
                    <td width="11%" align="center" class="borde_Sup"><a href=<?php echo "Publicaciones/".$regPublic["Dir"]; ?>><img border="0" name=<?php echo "pdf".$i; ?> src="Imagenes/pdf.gif" width="35" height="33"></a></td>
                  </tr>
				  <?php }?>
                </table>
                <p class="Parrafo">&nbsp; </p></td>
          </tr>
        </table></td>
        <td width="14%" class="borde_rayado"><table width="100%" height="535"  border="0" cellpadding="0" cellspacing="0" >
            <tr>
              <td >Noticias</td>
            </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center"><img src="Imagenes/barra_Inf.jpg" width="95%" height="27"></td>
  </tr>
</table>
</body>
</html>
