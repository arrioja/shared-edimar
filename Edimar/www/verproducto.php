<?

include("config.php");
$linko8=mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db($db);
//***-*-*-*-*-***********************************************************ADMIN
$ss_a="select * from administracion";
$re_a=mysql_query($ss_a);
$ro_a=mysql_fetch_array($re_a);
$max_pro_pag=$ro_a['max_pro_pag'];
$pagina=$ro_a['pagina'];
$dir=$ro_a['dir'];
$geren=$ro_a['geren'];
$titulo=$ro_a['titulo'];
$moneda=$ro_a['moneda'];
//***********************************************************************FIN ADMIN

//para mostrar los pros*****
$ssmostrarlo="select * from subcatalogos order by nombre asc";
$remostrarlo=mysql_query($ssmostrarlo);
mysql_data_seek($remostrarlo,0);
$romostrarlo=mysql_fetch_array($remostrarlo);
//***************************

$ss7="select * from noticias";
$re7=mysql_query($ss7);
$nums7=mysql_num_rows($re7);

$conta=0;//cambiar el color a las filas
$idcat=1;
$idsubcat=$_GET['idsubcat'];

$criterio="where idcat=1 and idsubcat='".$_GET['idsubcat']."'";
if(!isset($_GET['pagina']))
 {
 $_GET['pagina']=1;
 }
$TAMANO_PAGINA = $max_pro_pag; //examino la página a mostrar y el inicio del registro a mostrar 
$pagina = $_GET["pagina"]; 
 if (!$pagina) {
  $inicio = 0;
  $pagina=1; 
  } 
   else 
    {    
	 $inicio = ($pagina - 1) * $TAMANO_PAGINA; 
	} 
?>
<html>
<head>
<title><? echo $titulo?></title>
<style type="text/css">
td img {display: block;}body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
BODY {
	 SCROLLBAR-FACE-COLOR: #4c4c4c; SCROLLBAR-HIGHLIGHT-COLOR: #4c4c4c; SCROLLBAR-SHADOW-COLOR: #EBEBEB; SCROLLBAR-3DLIGHT-COLOR: #4c4c4c; SCROLLBAR-ARROW-COLOR: #E60A0A; SCROLLBAR-TRACK-COLOR: #f3f3f3; SCROLLBAR-DARKSHADOW-COLOR: #EBEBEB
}
</style>
<script language="JavaScript1.2" type="text/javascript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}
function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

//-->
</script>
<link rel="stylesheet" href="stylos.css" type="text/css">
<style type="text/css">
<!--
.style2 {	font-size: 10px;
	font-family: Arial, Helvetica, sans-serif;
}
.style4 {color: #EBEBEB}
-->
</style>
</head>
<body bgcolor="#e6e6e6" onLoad="MM_preloadImages('img/menu_r1_c1_f2.jpg','img/menu_r2_c1_f2.jpg','img/menu_r3_c1_f2.jpg','img/menu_r4_c1_f2.jpg')">
<table width="782" border="0" align="center" cellpadding="0" cellspacing="0">
<!-- fwtable fwsrc="interface3.png" fwbase="index.jpg" fwstyle="Dreamweaver" fwdocid = "1188687496" fwnested="1" -->
  <tr>
   <td><img name="index_r1_c1" src="img/index_r1_c1.jpg" width="782" height="159" border="0" id="index_r1_c1" alt="" /></td>
  </tr>
  <tr>
   <td><table width="782" border="0" align="left" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
	  <tr>
	   <td background="img/index_r2_c1.jpg"><table width="8" height="469" border="0" cellpadding="0" cellspacing="0" background="img/index_r2_c1.jpg">
         <tr>
           <td>&nbsp;</td>
         </tr>
       </table></td>
	   <td><table width="199" height="469" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
         <tr>
           <td valign="top" background="img/pnotis.jpg"><table border="0" cellpadding="0" cellspacing="0" width="199">
             <!-- fwtable fwsrc="interface2.png" fwbase="menu.jpg" fwstyle="Dreamweaver" fwdocid = "1188687496" fwnested="1" -->
             <tr>
               <td><a href="index.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('menu_r1_c1','','img22/menu_r1_c1_f2.jpg',1);"><img name="menu_r1_c1" src="img22/menu_r1_c1.jpg" width="199" height="30" border="0" id="menu_r1_c1" alt="" /></a></td>
             </tr>
             <tr>
               <td><a href="nosotros.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('menu_r2_c1','','img22/menu_r2_c1_f2.jpg',1);"><img name="menu_r2_c1" src="img22/menu_r2_c1.jpg" width="199" height="28" border="0" id="menu_r2_c1" alt="" /></a></td>
             </tr>
             <tr>
               <td><a href="verproducto.php?act=mostrar&idsubcat=<? echo $romostrarlo['idsubcat']?>" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('menu_r3_c1','','img22/menu_r3_c1_f2.jpg',1);"><img name="menu_r3_c1" src="img22/menu_r3_c1.jpg" width="199" height="28" border="0" id="menu_r3_c1" alt="" /></a></td>
             </tr>
			 <?
	 $ssqlo="select * from catalogos where idcat=1 order by nombre asc";
     $resulto=mysql_query($ssqlo); 
	 $nums=mysql_num_rows($resulto);


 for ($io=0;$io<$nums;$io++)
  {
	  mysql_data_seek($resulto,$io);
	  $rowo=mysql_fetch_array($resulto);
		 
		  $ssqlo2="select * from subcatalogos where idcat=1 order by nombre asc";
		  $resulto2=mysql_query($ssqlo2);
		  $nums2=mysql_num_rows($resulto2);
           for($o=0;$o<$nums2;$o++)
             {
		  	 mysql_data_seek($resulto2,$o);
	  	 	 $rowo2=mysql_fetch_array($resulto2);
			 print('<tr>
			 <td background="img/submenu.jpg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="verproducto.php?idsubcat='.$rowo2['idsubcat'].'&idcat=1&act=mostrar" class="categoria"><font face="arial" size="2" color="#666666"><b>'.$rowo2['nombre'].'</b></font></a>
		         </td>
				 </tr>');
		     }
  }
 			?>
             <tr>
               <td><a href="contacto.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('menu_r4_c1','','img22/menu_r4_c1_f2.jpg',1);"><img name="menu_r4_c1" src="img22/menu_r4_c1.jpg" width="199" height="28" border="0" id="menu_r4_c1" alt="" /></a></td>
             </tr>
             <tr>
               <td><table width="199" height="109" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
                   <tr>
                     <td><table width="199" height="109" border="0" cellpadding="0" cellspacing="0">
                       <tr>
                         <td>&nbsp;</td>
                       </tr>
                     </table></td>
                   </tr>
               </table></td>
             </tr>
             <tr>
               <td><img name="menu_r6_c1" src="img22/menu_r6_c1.jpg" width="199" height="29" border="0" id="menu_r6_c1" alt="" /></td>
             </tr>
             <tr>
               <td><table align="left" border="0" cellpadding="0" cellspacing="0" width="199">
                   <tr>
                     <td><table width="191" height="217" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
                         <tr>
                           <td valign="top"><iframe src="noticias.php" width="190" height="180" frameborder="0" scrolling="no"></iframe></td>
                         </tr>
                     </table></td>
                     <td><img name="menu_r7_c2" src="img22/menu_r7_c2.jpg" width="8" height="217" border="0" id="menu_r7_c2" alt="" /></td>
                   </tr>
               </table></td>
             </tr>
           </table>
             </td>
         </tr>
       </table></td>
	   <td background="img/index_r2_c3.jpg"><table width="17" height="469" border="0" cellpadding="0" cellspacing="0" background="img/index_r2_c3.jpg">
         <tr>
           <td>&nbsp;</td>
         </tr>
       </table></td>
	   <td valign="top" background="img22/PXL.jpg"><table align="left" border="0" cellpadding="0" cellspacing="0" width="558">
		  <tr>
		   <td><table align="left" border="0" cellpadding="0" cellspacing="0" width="558">
			  <tr>
			   <td><img name="interface2_r2_c5" src="img/interface2_r2_c5.jpg" width="394" height="30" border="0" id="interface2_r2_c5" alt="" /></td>
			   <td><img name="interface2_r2_c6" src="img/interface2_r2_c6.jpg" width="164" height="30" border="0" id="interface2_r2_c6" alt="" /></td>
			  </tr>
			</table></td>
		  </tr>
		  <tr>
		   <td background="img22/PXL.jpg"><table align="left" border="0" cellpadding="0" cellspacing="0" width="558">
			  <tr>
			   <td height="439" valign="top"><table width="529" height="254" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
                 <tr>
                   <td height="254" valign="top"><p>
                     <?
					   if(!isset($_GET['act']))
					    {
					   ?>
</p>
                     <table width="525" border="0" cellspacing="0" cellpadding="0">
                       <tr>
                         <td width="525"><span class="style2">
						 <script>
						 location="verproducto.php?act=mostrar&idsubcat=<? echo $romostrarlo['idsubcat']?>"
						 </script>
						 
						 </span> <span class="style4">zxczxczx </span></td>
                       </tr>
                     </table>
                     <?
					   }
					   ?>
                     <p>
                       <?
         if(isset($_GET['act']) && $_GET['act']=="mostrar")				    
		  {
		//miro a ver el número total de campos que hay en la tabla con esa búsqueda 
		$ssql="select * from productos ".$criterio; 
		$rs=mysql_query($ssql); 
		$num_total_registros=mysql_num_rows($rs); //calculo el total de páginas 
		$total_paginas=ceil($num_total_registros/$TAMANO_PAGINA);
		 if ($num_total_registros>0)
		  {
		  $bordesize=1;
		  $cfuente="white";
		  $bgcolor="#cc0000";
		  $fuente2="black";
		  }
		 else
		  {
		  echo "<br><b><font face='arial' size='1' color='#ffffff'>-No se encontraron resultados, disculpe las molestias...</font></b>";
		  $bordesize=0;//borde de la tabla, si no hay resultados
		  $bgcolor="white";
		  $cfuente="#ffffff";//color del texto si no hay results.
		  $fuente2="white";
		  }
		//construyo la sentencia SQL 
		$ssql= "select * from productos ".$criterio." limit ".$inicio.",".$TAMANO_PAGINA; 
		$rs = mysql_query($ssql); 
		while ($fila = mysql_fetch_object($rs))
		 {
  print('<table width="520" height="115" border="0" align="center" cellpadding="0" cellspacing="0">
                     <tr>
                       <td height="5" valign="middle"><img src="img/linea.gif" width="510" height="5">                       </td></tr>
                     <tr>
                       <td height="46"><table width="520" height="105" border="0" cellpadding="0" cellspacing="0">
                         <tr>
                           <td width="118" height="105"><a href="info_producto.php?idpro='.$fila->idpro.'">
						   <img src="thumb.php?i='.$fila->foto1.'&w=123&h=105&adjust=w" border="0" alt="Ver producto..."></a></td>
                           <td width="402"><table width="390" height="99" border="0" cellpadding="0" cellspacing="0">
                               <tr>
                                 <td width="28" background="img/gradient.jpg"><img src="img/gradient.jpg" border="0"></td>
                                 <td width="362"><table width="363" height="81" border="0" cellpadding="0" cellspacing="0">
                                     <tr>
                                       <td width="14"><div align="center"><img src="img/icon.jpg" width="4" height="9" /></div></td>
                                       <td width="283"><font face="arial" size="2"><b>Equipo:</b> '.$fila->nombre.'</font></td>
                                       <td width="65">&nbsp;</td>
                                     </tr>
                                     <tr>
                                       <td><div align="center"><img src="img/icon.jpg" width="4" height="9" /></div></td>
                                       <td><font face="arial" size="2">Descripci&oacute;n:</font></td>
                                       <td>&nbsp;</td>
                                     </tr>
                                     <tr>
                                       <td>&nbsp;</td>
                                       <td><font face="arial" size="2">'.substr(strip_tags($fila->descripcion),0,150).'...</font></td>
                                       <td valign="bottom" width="66"><a href="info_producto.php?idpro='.$fila->idpro.'"><img src="img/ver.jpg" width="66" height="20" border="0"></a></td>
                                     </tr>
                                 </table></td>
                               </tr>
                           </table></td>
                         </tr>
                       </table></td>
                     </tr>
                   </table>');
		 }
		 mysql_free_result($rs); 
		}
		?>
                     </p>
                     <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                       <tr>
                         <td>&nbsp;</td>
                         <td colspan="2"><? 

if(isset($_GET['act']) && $_GET['act']=='mostrar'){echo "<font face='arial' size='2'>-Se han encontrado<b> ".$num_total_registros."</b> productos.</font>";}?>
                             <br>
                             <br></td>
                       </tr>
                       <tr>
                         <td width="175" height="19">&nbsp;</td>
                         <td width="105">&nbsp;</td>
                         <td width="249"><? 
		 //muestro los distintos &iacute;ndices de las p&aacute;ginas, si es que hay varias p&aacute;ginas 
		  if ($total_paginas > 1){ 
		    for ($i=1;$i<=$total_paginas;$i++)
			  {        
			   if ($pagina == $i)//si muestro el &iacute;ndice de la p&aacute;gina actual, no coloco enlace
			      
				  echo "<font face='arial' size='2'> <u>".$pagina . " <u></font> ";
				else //si el &iacute;ndice no corresponde con la p&aacute;gina mostrada actualmente, coloco el enlace para ir a esa p&aacute;gina           
				 echo "<font face='arial' size='2'> <a href='verproducto.php?idcat=1&idsubcat=".$idsubcat."&txt_criterio=&pagina=".$i."&criterio=".$txt_criterio."&act=mostrar' class='categoria'>".$i."</a></font>";
				    } 
				 } 
		  ?></td>
                       </tr>
                     </table></td>
                 </tr>
               </table></td>
			   <td background="img/index_r3_c6.jpg"><table width="29" height="439" border="0" cellpadding="0" cellspacing="0">
                 <tr>
                   <td background="img22/index_r3_c6.jpg">&nbsp;</td>
                 </tr>
               </table></td>
			  </tr>
			</table></td>
		  </tr>
		</table></td>
	  </tr>
	</table></td>
  </tr>
  <tr>
   <td><img src="img/footini3.jpg" alt="" name="index_r9_c1" width="782" height="75" border="0" usemap="#index_r9_c1Map" id="index_r9_c1" />
     <map name="index_r9_c1Map">
       <area shape="rect" coords="525,54,759,68" href="http://scenografik.com" target="_blank">
     </map>
    </td>
  </tr>
</table>

<map name="index_r9_c1Map"><area shape="rect" coords="527,55,757,69" href="http://scenografik.com" target="_blank">
</map></body>
</html>
<? mysql_close($linko8)?>