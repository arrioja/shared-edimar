<?php include('conexion.php');
   
 $query_reg_most = "SELECT videos.Cod, departamento.Nombre as Dpto, videos.Nombre as Nombre, Descrip, Descarga as Dir, 
                   departamento.Cod as CodDpto FROM videos inner join
                   departamento on CodDpto=departamento.Cod and CodDpto='".$_GET["CodD"]."'
				    group by CodDpto,Cod";
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

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" onLoad="MM_preloadImages('Imagenes/logoE2.jpg')">
<script language="JavaScript1.2">mmLoadMenus('<?php echo $_GET["Id"];?>','<?php echo $usr;?>');</script>
<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  
  <tr>
    <td><iframe name="cabecera" frameborder="0"  width="100%" height="124" src="<?php echo "Cabecera.php?".$UR."&Id=".$_GET["Id"]."&Usr=".$usr?>"></iframe></td>
  </tr>
  <tr>
    <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="12%" valign="top"><script language="JavaScript">menuP('<?php echo $_GET["Id"];?>','<?php echo $usr;?>');</script></td>
        <td width="74%" valign="top"><table width="98%"  border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td align="center" class="Titulo"> <br>
              <?php  
			  
			echo "VIDEOS"?>      </td>
          </tr>
          <tr>
            <td><br><table width="90%"  border="0" align="center" cellpadding="0" cellspacing="0">
			<tr>
			    <td height="40">&nbsp;</td>
			    <td height="40" colspan="2"><?php if($permiso=='1'){?>
                  <A href="<?php echo "instVideos.php?".$UR."&Id=".$_GET["Id"]."&Usr=".$usr."&CodD=".$_GET["CodD"]?>"> <img border="0" src="Imagenes/nuevo.jpg" width="21" height="23"> A&ntilde;adir</A>
                  <?php }?></td>
			</tr>
			  <tr>
             <?php $dpto=''; $i=1;
			  while($rowEdimar = mysql_fetch_assoc($reg_most)){
			  if ($dpto!=$rowEdimar["Dpto"]){
			  $dpto=$rowEdimar["Dpto"];?>
			  
                <td height="40"  class="Borde_PunteadoII"><p class="Titulo_II"><br><?php echo $rowEdimar["Dpto"];?></p>                  </td>
                <td height="40" colspan="2" class="Borde_PunteadoII"><?php if ($rowEdimar["CodDpto"]==$usrD){?>
                  <A href="<?php echo "instVideos.php?".$UR."&Id=".$_GET["Id"]."&Usr=".$usr."&NomD=". $rowEdimar["Dpto"]."&CodD=".$rowEdimar["CodDpto"]."&T=".$_GET["T"]?>"> <img border="0" src="Imagenes/nuevo.jpg" width="21" height="23"> A&ntilde;adir</A>
                  <?php }else{?>
                  &nbsp;
                  <?php }?></td>
			  </tr> <?php }?>
              <tr>
                <td width="82%" height="45" class="Parrafo_II"><?php echo $rowEdimar["Descrip"];?></td>
                <td width="14%" align="center" class="borde_rayado"><?php if ($rowEdimar["Dir"]!=''){?><a href="<?php echo "Videos/".$rowEdimar["Dir"];?>"><?php echo $rowEdimar["Nombre"];?></a><?php }else{?>&nbsp;<?php }?></td>
                <td width="4%" align="center" class="borde_rayado"><?php if(($permiso=='1')||($rowEdimar["CodDpto"]==$usrD)){?>
                  <table width="100%"  border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td align="center"><a href="#" onClick="window.open('<?php echo "eliminarVideo.php?".$UR."&Id=".$_GET["Id"]."&Usr=".$usr."&Cod=".$rowEdimar['Cod']?>','','height=200,width=375');" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('<?php echo "elim".$i;?>','','Imagenes/eliminar.jpg',1)"><img src="Imagenes/eliminar2.jpg" alt="Eliminar Facilidad" name="<?php echo "elim".$i;?>" width="21" height="23" border="0"></a></td>
                    </tr>
                  </table>
                  <?php }?></td>
              </tr>
              <tr>
                <td height="20" class="Parrafo_II" >&nbsp;</td>
                <td colspan="2" class="borde_rayado">&nbsp;</td>
              </tr>
			  <?php $i++;}?>
            </table>              
              
              <p align="center"><a href="<?php echo "index.php?".$UR."&Id=".$Id."&Usr=".$usr;?>" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image4','','Imagenes/logoE2.jpg',1)"><img src="Imagenes/logoE.jpg" name="Image4" width="104" height="48" border="0"></a><br>               
              </p></td>
          </tr>
        </table></td>
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
