<?php $conexion = mysql_connect("localhost", "borg1978_root", "ivotrino"); 
mysql_select_db("borg1978_bdedimar", $conexion); 
$UR="fti=yes&curmbox=00000000%2d0000%2d0000%2d0000%2d000000000001&a=c49ada04efe4dbbebabf65088e7c412b19e55dc687b349189bd90b9e41231034";
$id='';$usr='0'; $permiso=''; ; $Nick='';
 if ((isset($_GET["Id"]))&& ($_GET["Id"]=='_Ing')){  $id='I';} else { $id='E';}

///////////////////////////////////////////captura el periso del usuario////////////////////////////////////////////////////////////  
 if ((empty($_GET["Usr"]))||($_GET["Usr"]=='0')){  
  if ((!empty($_POST["nick"]))&&(!empty($_POST["pass"]))){
   $query="SELECT Cod, Permiso, Nick FROM usuario where Nick='".$_POST["nick"]."' and Pass='".$_POST["pass"]."'";
   $reg_Usr=mysql_query($query, $conexion) or die(mysql_error());
   $rowUsr = mysql_fetch_assoc($reg_Usr); $usr=$rowUsr["Cod"]; $permiso=$rowUsr["Permiso"];$Nick=$rowUsr["Nick"];}
 }else{$query="SELECT Cod, Permiso, Nick FROM usuario where Cod='".$_GET["Usr"]."'";
   $reg_Usr=mysql_query($query, $conexion) or die(mysql_error());
   $rowUsr = mysql_fetch_assoc($reg_Usr); $usr=$rowUsr["Cod"]; $permiso=$rowUsr["Permiso"];$Nick=$rowUsr["Nick"];}
   $query="SELECT  LineaInvs as Permiso FROM permisopag";
   $reg_Per=mysql_query($query, $conexion) or die(mysql_error()); $rowPer = mysql_fetch_assoc($reg_Per);
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

 $query_reg_most = "SELECT linea_invest.Cod, Nombre as Dpto, Titulo FROM linea_invest inner join 
                    departamento on Dpto=departamento.Cod and linea_invest.Idioma='".$id."'
				    and departamento.Idioma='".$id."' group by Dpto,Cod";
 $reg_most = mysql_query($query_reg_most, $conexion) or die(mysql_error());
 //$rowEdimar = mysql_fetch_assoc($reg_most);
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
        <td width="74%" valign="top"><?php if (($rowPer['Permiso']==$permiso)||($rowPer['Permiso']=='0')||($permiso=='1')){?>
          <table width="98%"  border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="100%" colspan="2" align="center" class="Titulo"> <br>
                <?php  if ((isset($_GET["Id"]))&& ($_GET["Id"]=='_Ing'))
			{ echo "Line of Investigation";} 
			else { echo "Lineas de Investigación"; } ?>
        </td>
            </tr>
            <tr>
              <td colspan="2"><br><table width="80%"  border="0" align="center" cellpadding="0" cellspacing="0">
			  <tr align="right">
			      <td height="40" colspan="2"><span class="Borde_Punteado">
			        <?php if($permiso=='1'){?>
                    <A href="<?php echo "instlinea.php?".$UR."&Id=".$_GET["Id"]."&Usr=".$usr?>"> <img border="0" src="Imagenes/nuevo.jpg" width="21" height="23"> A&ntilde;adir</A>
                    <?php }?>
                  </span></td>
			      </tr>
               <?php $dpto=''; $i=1;
			  while($rowEdimar = mysql_fetch_assoc($reg_most)){
			  if ($dpto!=$rowEdimar["Dpto"]){
			  $dpto=$rowEdimar["Dpto"];?>
			    
			  <tr>
                  <td height="40" colspan="2" class="Borde_PunteadoII"><p class="Titulo_II"><br><?php echo $rowEdimar["Dpto"];?></p>                  </td>
                </tr> <?php }?>
                <tr>
                  <td width="83%" height="45" class="Parrafo_II"><a href="<?php echo "linea.php?Id=".$_GET["Id"]."&Cod=".$rowEdimar["Cod"];?>"><?php echo $rowEdimar["Titulo"];?></a></td>
                  <td width="17%" class="borde_rayado"><?php if($permiso=='1'){?>
                    <table width="100%"  border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td align="center"><a href="<?php echo "instlinea.php?".$UR."&Id=".$_GET["Id"]."&Usr=".$usr."&Op=M&Cod=".$rowEdimar["Cod"]?>" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('<?php echo "mod".$i;?>','','Imagenes/mod.jpg',1)"><img src="Imagenes/mod2.jpg" alt="Modificar Facilidad" name="<?php echo "mod".$i;?>" width="21" height="23" border="0"></a></td>
                        <td align="center"><a href="#" onClick="window.open('<?php echo "eliminarLinea.php?".$UR."Id=".$_GET["Id"]."&Usr=".$usr."&Cod=".$rowEdimar['Cod']?>','','height=200,width=375');" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('<?php echo "elim".$i;?>','','Imagenes/eliminar.jpg',1)"><img src="Imagenes/eliminar2.jpg" alt="Eliminar Facilidad" name="<?php echo "elim".$i;?>" width="21" height="23" border="0"></a></td>
                      </tr>
                    </table>
                    <?php }?></td>
                </tr>
			    <?php $i++;}?>
              </table>              
              <br>               </td>
            </tr>
        </table>
          <?php }else{ echo "   Contenido Protegido";}?></td>
        <td width="14%" valign="top" class="borde_rayado"><table width="100%" height="535"  border="0" cellpadding="0" cellspacing="0" >
            <tr>
              <td valign="top" ><iframe frameborder="0"  width="100%" height="800" src="<?php echo "linknoti.php?".$UR."&Id=".$_GET["Id"]."&Usr=".$usr?>"></iframe></td>
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
