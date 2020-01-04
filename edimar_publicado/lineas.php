<?php include('conexion.php');
   $query="SELECT  LineaInvs as Permiso FROM permisopag";
   $reg_Per=mysql_query($query, $conexion) or die(mysql_error()); $rowPer = mysql_fetch_assoc($reg_Per);
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

 $query_reg_most = "SELECT linea_invest.Cod, Nombre as Dpto, Titulo, departamento.Cod as CodDpto FROM linea_invest inner join 
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
    <td><iframe name="cabecera" frameborder="0"  width="100%" height="124" src="<?php echo "Cabecera.php?".$UR."&Id=".$_GET["Id"]."&Usr=".$usr?>"></iframe></td>
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
			else { echo "Lineas de Investigación"; } ?>        </td>
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
                  <td height="40" class="Borde_PunteadoII"><p class="Titulo_II"><br><?php echo $rowEdimar["Dpto"];?></p>                  </td>
                  <td height="40" class="Borde_PunteadoII"><?php if ($rowEdimar["CodDpto"]==$usrD){?><A href="<?php echo "instlinea.php?".$UR."&Id=".$_GET["Id"]."&Usr=".$usr."&NomD=". $rowEdimar["Dpto"]."&CodD=".$rowEdimar["CodDpto"]?>"> <img border="0" src="Imagenes/nuevo.jpg" width="21" height="23"> A&ntilde;adir</A><?php }else{?>&nbsp;<?php }?></td>
			  </tr> <?php }?>
                <tr>
                  <td width="83%" height="45" class="Parrafo_II"><a href="<?php echo "linea.php?".$UR."&Id=".$_GET["Id"]."&Cod=".$rowEdimar["Cod"]."&Usr=".$usr;?>"><?php echo $rowEdimar["Titulo"];?></a></td>
                  <td width="17%" class="borde_rayado"><?php if(($permiso=='1')||($rowEdimar["CodDpto"]==$usrD)){?>
                    <table width="100%"  border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td align="center"><a href="<?php echo "instlinea.php?".$UR."&Id=".$_GET["Id"]."&Usr=".$usr."&Op=M&Cod=".$rowEdimar["Cod"];?>" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('<?php echo "mod".$i;?>','','Imagenes/mod.jpg',1)"><img src="Imagenes/mod2.jpg" alt="Modificar Facilidad" name="<?php echo "mod".$i;?>" width="21" height="23" border="0"></a></td>
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
