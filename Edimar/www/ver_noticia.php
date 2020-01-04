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
$geren2=$ro_a['geren2'];
$titulo=$ro_a['titulo'];
$moneda=$ro_a['moneda'];
//***********************************************************************FIN ADMIN
//obtencion de datos de la noticia
$ss3="select * from noticias where id='".$_GET['id']."'";
$re3=mysql_query($ss3);
$ro3=mysql_fetch_array($re3);

//para mostrar los pros*****
$ssmostrarlo="select * from subcatalogos order by nombre asc";
$remostrarlo=mysql_query($ssmostrarlo);
mysql_data_seek($remostrarlo,0);
$romostrarlo=mysql_fetch_array($remostrarlo);
//***************************
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

function ampliar()
 {
 window.open ('ver_foto.php?id=<? echo $_GET["idpro"]?>','fotodelpro', 'width=400,height=315,top=10,left=300,toolbar=no,directories=no,menubar=no,status=yes,scrollbars=no,resizable=no')
 }
 //-->
</script>
<link rel="stylesheet" href="stylos.css" type="text/css">
<style type="text/css">
<!--
.style3 {
	color: #666666;
	font-weight: bold;
}
-->
</style>
</head>
<body bgcolor="#e6e6e6" onLoad="MM_preloadImages('img/index_r2_c2_f2.jpg','img/index_r3_c2_f2.jpg','img/index_r4_c2_f2.jpg','img/index_r5_c2_f2.jpg');">
<table width="782" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
   <td><img name="index_r1_c1" src="img/index_r1_c1.jpg" width="782" height="159" border="0" id="index_r1_c1" alt="" /></td>
  </tr>
  <tr>
   <td><table align="left" border="0" cellpadding="0" cellspacing="0" width="782">
	  <tr>
	   <td valign="top" background="img/pnotis.jpg" bgcolor="#FFFFFF"><table align="left" border="0" cellpadding="0" cellspacing="0" width="207">
		  <tr>
		   <td><table align="left" border="0" cellpadding="0" cellspacing="0" width="207">
			  <tr>
			   <td><img name="index_r2_c1" src="img/index_r2_c1.jpg" width="8" height="223" border="0" id="index_r2_c1" alt="" /></td>
			   <td><table align="left" border="0" cellpadding="0" cellspacing="0" width="199">
				  <tr>
				   <td><a href="index.php" onMouseOut="MM_swapImgRestore();" onMouseOver="MM_swapImage('index_r2_c2','','img/index_r2_c2_f2.jpg',1);"><img name="index_r2_c2" src="img/index_r2_c2.jpg" width="199" height="30" border="0" id="index_r2_c2" alt="" /></a></td>
				  </tr>
				  <tr>
				   <td><a href="nosotros.php" onMouseOut="MM_swapImgRestore();" onMouseOver="MM_swapImage('index_r3_c2','','img/index_r3_c2_f2.jpg',1);"><img name="index_r3_c2" src="img/index_r3_c2.jpg" width="199" height="28" border="0" id="index_r3_c2" alt="" /></a></td>
				  </tr>
				  <tr>
				   <td><a href="verproducto.php?act=mostrar&idsubcat=<? echo $romostrarlo['idsubcat']?>" onMouseOut="MM_swapImgRestore();" onMouseOver="MM_swapImage('index_r4_c2','','img/index_r4_c2_f2.jpg',1);"><img name="index_r4_c2" src="img/index_r4_c2.jpg" width="199" height="28" border="0" id="index_r4_c2" alt="" /></a></td>
				  </tr>
				  <tr>
				   <td><a href="contacto.php" onMouseOut="MM_swapImgRestore();" onMouseOver="MM_swapImage('index_r5_c2','','img/index_r5_c2_f2.jpg',1);"><img name="index_r5_c2" src="img/index_r5_c2.jpg" width="199" height="28" border="0" id="index_r5_c2" alt="" /></a></td>
				  </tr>
				  <tr>
				   <td bgcolor="#FFFFFF"><table width="199" height="109" border="0" cellpadding="0" cellspacing="0">
                     <tr>
                       <td>&nbsp;</td>
                     </tr>
                   </table></td>
				  </tr>
				</table></td>
			  </tr>
			</table></td>
		  </tr>
		  <tr>
		   <td><img name="index_r7_c1" src="img/index_r7_c1.jpg" width="207" height="29" border="0" id="index_r7_c1" alt="" /></td>
		  </tr>
		  <tr>
		   <td background="img/index_r8_c1.jpg"><table align="left" border="0" cellpadding="0" cellspacing="0" width="207">
			  <tr>
			   <td background="img/index_r8_c1.jpg"><img name="index_r8_c1" src="img/index_r8_c1.jpg" width="8" height="50" border="0" id="index_r8_c1" alt="" /></td>
			   <td><table width="191" height="217" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
                 <tr>
                   <td valign="top"><iframe src="noticias.php" width="190" height="180" frameborder="0" scrolling="no"></iframe></td>
                 </tr>
               </table></td>
			   <td><img name="index_r8_c3" src="img/index_r8_c3.jpg" width="8" height="217" border="0" id="index_r8_c3" alt="" /></td>
			  </tr>
			</table></td>
		  </tr>
		</table></td>
	   <td background="img/index_r2_c4.jpg"><img name="index_r2_c4" src="img/index_r2_c4.jpg" width="17" height="469" border="0" id="index_r2_c4" alt="" /></td>
	   <td><table align="left" border="0" cellpadding="0" cellspacing="0" width="558">
		  <tr>
		   <td><table align="left" border="0" cellpadding="0" cellspacing="0" width="558">
			  <tr>
			   <td><img src="img/notiseinfo.jpg" width="394" height="30"></td>
			   <td><img name="interface2_r2_c6" src="img/interface2_r2_c6.jpg" width="164" height="30" border="0" id="interface2_r2_c6" alt="" /></td>
			  </tr>
			</table></td>
		  </tr>
		  <tr>
		   <td><table align="left" border="0" cellpadding="0" cellspacing="0" width="558">
			  <tr>
			   <td><table width="529" height="439" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
                 <tr>
                   <td valign="top"><br>
                     <table width="479" border="0" align="center" cellpadding="0" cellspacing="0">
                       <tr>
                         <td width="246" height="44"><table width="477" height="18" border="0" cellpadding="0" cellspacing="0">
                             <tr>
                               <td width="477" height="18" class="style3"><? echo $ro3['titular']?></td>
                             </tr>
                           </table>
                             <br></td>
                       </tr>
                       <tr>
                         <td><?
						  $foto="";
						  if($ro3['foto']!="img/sf.jpg")
						   {
						   $foto='<img src="thumb.php?i='.str_replace("../","",$ro3['foto']).'&w=150&h=100&adjust=w" border="0" align="left">';
						   }
						   
						  echo "<font face='arial' size='2'>".$foto.$ro3['descripcion']."</font>";
						 ?>
                         </td>
                       </tr>
                     </table>
                     <br>
                     <table width="473" border="0" align="center" cellpadding="0" cellspacing="0">
                       <tr>
                         <td width="160" height="20"><a href="index.php" target="_self" class="caja_amigo"><img src="img/volver.jpg" width="64" height="13" border="0"></a></td>
                         <td width="319">&nbsp;</td>
                       </tr>
                     </table></td>
                 </tr>
               </table></td>
			   <td background="img/index_r3_c7.jpg"><img name="index_r3_c7" src="img/index_r3_c7.jpg" width="29" height="439" border="0" id="index_r3_c7" alt="" /></td>
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

<map name="index_r9_c1Map"><area shape="rect" coords="528,51,759,70" href="http://scenografik.com" target="_blank">
</map></body>
</html>
<? mysql_close($linko8)?>