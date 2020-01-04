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
.style10 {font-size: 12px; font-family: Arial, Helvetica, sans-serif; }
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
 
function verifica()
 {
 if(document.form_envia.nombre.value=="" || document.form_envia.email.value=="" || document.form_envia.msg.value=="")
 alert("Faltan algunos datos necesarios en la planilla de envio...")
 document.form_envia.nombre.focus()
 }
//-->
</script>
<style type="text/css">
<!--
.style11 {color: #666666}
.style12 {color: #333333}
.style13 {
	color: #333333;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
}
-->
</style>
</head>
<body bgcolor="#e6e6e6" onLoad="MM_preloadImages('img/index_r2_c2_f2.jpg','img/index_r3_c2_f2.jpg','img/index_r4_c2_f2.jpg','img/index_r5_c2_f2.jpg');">
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
			   <td><img src="img/fcontac.jpg" width="394" height="30"></td>
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
                       <td height="430" valign="top"><?
				   if(!isset($_POST['nombre']) || !isset($_POST['msg']))
				    {
				   ?>
                           <br />
                           <table width="97%" border="0" align="center" cellspacing="0">
                             <tr>
                               <td width="43%"><form action="contacto.php" method="post" name="form_envia" id="form_envia">
                                   <table width="217" border="0" cellspacing="0" cellpadding="0">
                                     <tr>
                                       <td width="65"><span class="style10">Nombre:</span></td>
                                       <td width="182"><input name="nombre" type="text" class="caja" id="nombre" size="33" /></td>
                                     </tr>
                                     <tr>
                                       <td><span class="style10">Telefono:</span></td>
                                       <td><input name="telefono" type="text" class="caja" id="telefono" size="33" /></td>
                                     </tr>
                                     <tr>
                                       <td><span class="style10">Email:</span></td>
                                       <td><input name="email" type="text" class="caja" id="email" size="33" /></td>
                                     </tr>
                                     <tr>
                                       <td><p class="style10">Mensaje:</p>
                                         <p class="style10">&nbsp;</p>
                                         <p class="style10">&nbsp;</p>
                                         <p class="style10">&nbsp;</p></td>
                                       <td><span class="style10">
                                         <textarea name="msg" cols="35" rows="8" class="caja" id="msg"></textarea>
                                       </span></td>
                                     </tr>
                                     <tr>
                                       <td height="37" colspan="2"><div align="right"><span class="style10"><a href="javascript:document.form_envia.submit()"><br />
                                         <img src="img/enviar.jpg" width="73" height="18" border="0">                                       </a></span></div></td>
                                     </tr>
                                   </table>
                               </form></td>
                               <td width="4%"><div align="center"><img src="img/barrara.jpg" width="5" height="220" border="0"></div></td>
                               <td width="53%"><p class="style10 style12">&nbsp;</p>
                                 <table width="227" border="0" cellspacing="0" cellpadding="0">
                                   <tr>
                                     <td width="14">&nbsp;</td>
                                     <td width="213"><table width="242" border="0" align="center" cellpadding="0" cellspacing="0">
                                       <tr>
                                         <td width="242"><div align="justify">
                                             <p class="style10 style12">Solicite una visita de nuestros representantes a travéz de nuestros números telefónicos: </p>
                                         </div></td>
                                       </tr>
                                       <tr>
                                         <td>&nbsp;</td>
                                       </tr>
                                       <tr>
                                         <td><table width="222" border="0" cellspacing="0" cellpadding="0">
                                             <tr>
                                               <td width="28"><span class="style10 style12"><img src="img/telf.jpg" alt="Teléfonos" width="18" height="16" border="0"></span></td>
                                               <td width="194"><span class="style10 style12"><strong>+ 58 295- 264.4677 / 263.8703 </strong></span></td>
                                             </tr>
                                         </table></td>
                                       </tr>
                                       <tr>
                                         <td>&nbsp;</td>
                                       </tr>
                                       <tr>
                                         <td><table width="222" border="0" cellspacing="0" cellpadding="0">
                                             <tr>
                                               <td width="28"><img src="img/con_fax.png" alt="Fax" width="16" height="16"></td>
                                               <td width="194" class="style13">+ 58 295- 264.7786</td>
                                             </tr>
                                         </table></td>
                                       </tr>
                                       <tr>
                                         <td class="style10 style12">&nbsp;</td>
                                       </tr>
                                       <tr>
                                         <td><div align="justify" class="style10 style12">ó a través de este formulario, envianos tus comentarios y pronto le estaremos contactando!! </div></td>
                                       </tr>
                                       <tr>
                                         <td class="style12 style10">&nbsp;</td>
                                       </tr>
                                       <tr>
                                         <td height="20" class="style12 style10"><div align="right"><strong>www.soluparts.com</strong></div></td>
                                       </tr>
                                       <tr>
                                         <td class="style12 style10">&nbsp;</td>
                                       </tr>
                                     </table></td>
                                   </tr>
                                 </table>
                                 <p class="style10 style12">&nbsp;</p></td>
                             </tr>
                           </table>
                           <p>&nbsp;</p>
                           <p>
                             <?
				   }
				   else
				    {
					mail($geren,"Ha recibido un mensaje de su pagina web...", "<html><body><font face='arial' size='2'>Saludos,<p> Ha recibido un mensaje desde su pagina web:<p><b>Mensaje:</b><br>".$_POST['msg']."<p><b>Enviado por:</b>".$_POST['nombre']."<br><b>Telefono:</b> ".$_POST['telefono']."<br><b>Email:</b> ".$_POST['email']."</font></body></html>","Content-Type: text/html; charset=iso-8859-10");
					
				   ?>
                           </p>
                         <table width="482" border="0" align="center" cellpadding="0" cellspacing="0">
                             <tr>
                               <td width="35">&nbsp;</td>
                               <td width="384">&nbsp;</td>
                             </tr>
                             <tr>
                               <td><img src="img/emailButton.png" width="16" height="16"></td>
                               <td><span class="style10 style11">Mensaje enviado correctamente... </span></td>
                             </tr>
                             <tr>
                               <td>&nbsp;</td>
                               <td>&nbsp;</td>
                             </tr>
                             <tr>
                               <td>&nbsp;</td>
                               <td><a href="contacto.php" target="_self"><img src="img/volver.jpg" width="64" height="13" border="0"></a></td>
                             </tr>
                           </table>
                         <?
				   }
				   ?>
                       </td>
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
   <td><img src="img/footini3.jpg" alt="" name="index_r9_c1" width="782" height="75" border="0" usemap="#index_r9_c1Map" id="index_r9_c1" /></td>
  </tr>
</table>

<map name="index_r9_c1Map"><area shape="rect" coords="525,54,759,68" href="http://scenografik.com" target="_blank">
</map></body>
</html>
<? mysql_close($linko8)?>