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
?>
<html>
<head>
<title><? echo $titulo?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
<link rel="stylesheet" href="stylos.css" type="text/css">
<script language="JavaScript1.2" type="text/javascript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
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
 
function verifica()
 {
 if(document.form_envia.nombre.value=="" || document.form_envia.email.value=="" || document.form_envia.msg.value=="")
 alert("Faltan algunos datos necesarios en la planilla de envio...")
 document.form_envia.nombre.focus()
 }

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
<style type="text/css">
<!--
.style13 {
	font-size: 12px;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	color: #666666;
}
.style14 {font-family: Arial, Helvetica, sans-serif; color: #666666; font-size: 12px;}
.style16 {color: #FFFFFF}
.style18 {color: #333333; font-weight: bold; }
.style19 {color: #333333}
.style20 {font-size: 12px; font-family: Arial, Helvetica, sans-serif; font-weight: bold; color: #333333; }
-->
</style>
</head>
<body bgcolor="#e6e6e6" onLoad="MM_preloadImages('img/index_r2_c2_f2.jpg','img/index_r3_c2_f2.jpg','img/index_r4_c2_f2.jpg','img/index_r5_c2_f2.jpg','img/quiensedes_r1_c1_f2.jpg','img/quiensedes_r1_c3_f2.jpg')">
<table width="782" border="0" align="center" cellpadding="0" cellspacing="0">
<!-- fwtable fwsrc="interface2.png" fwbase="index.jpg" fwstyle="Dreamweaver" fwdocid = "1188687496" fwnested="1" -->
  <tr>
   <td><img name="index_r1_c1" src="img/index_r1_c1.jpg" width="782" height="159" border="0" id="index_r1_c1" alt="" /></td>
  </tr>
  <tr>
   <td><table align="left" border="0" cellpadding="0" cellspacing="0" width="782">
	  <tr>
	   <td valign="top" background="img/pnotis.jpg"><table width="207" border="0" align="left" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
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
		   <td><table align="left" border="0" cellpadding="0" cellspacing="0" width="207">
			  <tr>
			   <td><img name="index_r8_c1" src="img/index_r8_c1.jpg" width="8" height="217" border="0" id="index_r8_c1" alt="" /></td>
			   <td><table width="191" height="217" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
                 <tr>
                   <td valign="top"><iframe src="noticias.php" width="190" height="180" frameborder="0" scrolling="No"></iframe></td>
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
			   <td><table border="0" cellpadding="0" cellspacing="0" width="394">
                 <!-- fwtable fwsrc="quiensedes.png" fwbase="quiensedes.jpg" fwstyle="Dreamweaver" fwdocid = "1188687496" fwnested="1" -->
                 <tr>
                   <td><a href="nosotros.php" target="_self" onMouseOver="MM_swapImage('quiensedes_r1_c1','','img/quiensedes_r1_c1_f2.jpg',1);" onMouseOut="MM_swapImgRestore()"><img name="quiensedes_r1_c1" src="img/quiensedes_r1_c1.jpg" width="162" height="30" border="0" id="quiensedes_r1_c1" alt="" /></a></td>
                   <td><img name="quiensedes_r1_c2" src="img/quiensedes_r1_c2.jpg" width="13" height="30" border="0" id="quiensedes_r1_c2" alt="" /></td>
                   <td><a href="javascript:;" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('quiensedes_r1_c3','','img/quiensedes_r1_c3_f2.jpg',1);"><img name="quiensedes_r1_c3" src="img/quiensedes_r1_c3_f2.jpg" width="90" height="30" border="0" id="quiensedes_r1_c3" alt="" /></a></td>
                   <td><img name="quiensedes_r1_c4" src="img/quiensedes_r1_c4.jpg" width="129" height="30" border="0" id="quiensedes_r1_c4" alt="" /></td>
                 </tr>
               </table></td>
			   <td><img name="interface2_r2_c6" src="img/interface2_r2_c6.jpg" width="164" height="30" border="0" id="interface2_r2_c6" alt="" /></td>
			  </tr>
			</table></td>
		  </tr>
		  <tr>
		   <td><table align="left" border="0" cellpadding="0" cellspacing="0" width="558">
			  <tr>
			   <td><table width="529" height="439" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
                 <tr>
                   <td><table width="529" height="430" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
                     <tr>
                       <td height="430" valign="top"><table width="529" height="349" border="0" cellpadding="0" cellspacing="0">
                         <tr>
                           <td width="19">&nbsp;</td>
                           <td width="198"><img src="img/sede01.jpg" width="183" height="104" align="top"></td>
                           <td width="19" rowspan="6"><table width="20" height="429" border="0" cellpadding="0" cellspacing="0">
                             <tr>
                               <td height="321" background="img/bar_.jpg">&nbsp;</td>
                               </tr>
                             
                           </table></td>
                           <td width="293"><table width="309" border="0" cellspacing="0" cellpadding="0">
                             <tr>
                               <td width="309"><table width="251" border="0" cellspacing="0" cellpadding="0">
                                 <tr>
                                   <td width="21"><img src="img/c_.jpg" width="10" height="9"></td>
                                   <td width="230"><span class="style13">Oficina Principal, Isla de Margarita </span></td>
                                 </tr>
                               </table></td>
                             </tr>
                             <tr>
                               <td class="style14">Prolongación Avenida 4 de Mayo, Centro Empresarial Atrium, Piso 3, Oficina A 3-3. Porlamar, Estado Nueva Esparta.</td>
                             </tr>
                             <tr>
                               <td class="style14">Teléfax: <span class="style18">+ 58 0295 2638703 / 2647786 / 2644677 </span></td>
                             </tr>
                             <tr>
                               <td class="style14">Cel:  <span class="style16"> _ _ </span><span class="style18">+ 58 0414 797.68.37 (Dir. de Proyectos)</span></td>
                             </tr>
                             <tr>
                               <td class="style14">E-mail: <span class="style18">soluparts@gmail.com </span></td>
                             </tr>
                             <tr>
                               <td class="style14">&nbsp;</td>
                             </tr>
                           </table></td>
                         </tr>
                         <tr>
                           <td>&nbsp;</td>
                           <td>&nbsp;</td>
                           <td>&nbsp;</td>
                         </tr>
                         <tr>
                           <td>&nbsp;</td>
                           <td><img src="img/sede02.jpg" width="183" height="104"></td>
                           <td><table width="309" border="0" cellspacing="0" cellpadding="0">
                             <tr>
                               <td width="309"><table width="246" border="0" cellspacing="0" cellpadding="0">
                                   <tr>
                                     <td width="21"><img src="img/c_.jpg" width="10" height="9"></td>
                                     <td width="225"><span class="style13">Soluparts C. A. - Caracas: </span></td>
                                   </tr>
                               </table></td>
                             </tr>
                             <tr>
                               <td class="style14">Calle San Felipe, Centro Coinasa Piso 1, Ofic. 14-2, 
                                 La Castellana, Caracas 1060 - Venezuela</td>
                             </tr>
                             <tr>
                               <td class="style14">Teléfonos: <span class="style18">+ 58 0212 263.20.31 / 263.20.25 / 263.86.51</span> </td>
                             </tr>
                             <tr>
                               <td class="style14"><span class="style16">_________</span><span class="style18">+ 58 0212 263.86.47</span> </td>
                             </tr>
                             <tr>
                               <td class="style14">Cel:<span class="style16">_</span><span class="style18">+ 58 0412 224.62.43 /114.85.83 (Dir. de Ventas)</span></td>
                             </tr>
                             <tr>
                               <td class="style14">E-mail: <span class="style18">ventas@soluparts.com </span></td>
                             </tr>
                           </table></td>
                         </tr>
                         <tr>
                           <td>&nbsp;</td>
                           <td>&nbsp;</td>
                           <td>&nbsp;</td>
                         </tr>
                         <tr>
                           <td>&nbsp;</td>
                           <td><img src="img/sede03.jpg" width="183" height="104"></td>
                           <td><table width="285" border="0" cellspacing="0" cellpadding="0">
                             <tr>
                               <td width="285"><table width="283" border="0" cellspacing="0" cellpadding="0">
                                   <tr>
                                     <td width="21"><img src="img/c_.jpg" width="10" height="9"></td>
                                     <td width="262"><span class="style13">Representantes de Ventas Región Oriente </span></td>
                                   </tr>
                               </table></td>
                             </tr>
                             <tr>
                               <td class="style14">&nbsp;</td>
                             </tr>
                             <tr>
                               <td class="style20">Neptalí Marín</td>
                             </tr>
                             <tr>
                               <td class="style13">Barcelona, Edo. Anzoátegui</td>
                             </tr>
                             <tr>
                               <td class="style14">Cel: <span class="style18">+ 58 0414 093.14.75</span></td>
                             </tr>
                             <tr>
                               <td class="style14">E-mail: <span class="style18">soluparts.ca@cantv.net</span></td>
                             </tr>
                             <tr>
                               <td class="style14">&nbsp;</td>
                             </tr>
                           </table></td>
                         </tr>
                         <tr>
                           <td>&nbsp;</td>
                           <td>&nbsp;</td>
                           <td>&nbsp;</td>
                         </tr>
                         
                       </table>                       </td>
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
   <td><img src="img/img/index_r9_c1_f10.jpg" alt="" name="index_r9_c1" width="782" height="75" border="0" usemap="#index_r9_c1Map" id="index_r9_c1" /></td>
  </tr>
</table>

<map name="index_r9_c1Map"><area shape="rect" coords="528,51,758,70" href="http://scenografik.com" target="_blank">
</map></body>
</html>
<? mysql_close($linko8)?>