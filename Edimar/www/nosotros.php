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
.style11 {
	color: #333333;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style12 {
	color: #0001B3;
	font-weight: bold;
}
.style13 {
	color: #0201BF;
	font-weight: bold;
}
.style14 {
	color: #006600;
	font-weight: bold;
}
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
                   <td><a href="javascript:;" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('quiensedes_r1_c1','','img/quiensedes_r1_c1_f2.jpg',1);"><img name="quiensedes_r1_c1" src="img/quiensedes_r1_c1_f2.jpg" width="162" height="30" border="0" id="quiensedes_r1_c1" alt="" /></a></td>
                   <td><img name="quiensedes_r1_c2" src="img/quiensedes_r1_c2.jpg" width="13" height="30" border="0" id="quiensedes_r1_c2" alt="" /></td>
                   <td><a href="sedes.php" target="_self" onMouseOver="MM_swapImage('quiensedes_r1_c3','','img/quiensedes_r1_c3_f2.jpg',1);" onMouseOut="MM_swapImgRestore()"><img name="quiensedes_r1_c3" src="img/quiensedes_r1_c3.jpg" width="90" height="30" border="0" id="quiensedes_r1_c3" alt="" /></a></td>
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
                       <td height="430" valign="top"><table width="515" border="0" align="center" cellpadding="0" cellspacing="0">
                           <tr>
                             <td>&nbsp;</td>
                           </tr>
                           <tr>
                             <td><p align="justify" class="style11">En <span class="style12">Soluparts C.A.</span> somos una empresa distribuidora de equipos y  maquinarias de uso general y específico, de las mejores marcas a nivel mundial,  que estamos en el mercado venezolano para atender sus requerimientos en forma  personalizada y así venderle el mejor equipo para su necesidad específica, al  mejor precio y con las mejores condiciones. Estamos conformados por un excelente grupo de  Profesionales de diferentes ramas, dedicados a la tarea de facilitarle a Ud. la  obtención de las maquinarias y equipos que su empresa o institución requiera.</p>
                               <p align="justify" class="style11">En <span class="style12">Soluparts C.A.</span> nos dedicamos a atender sus  requerimientos de compra de equipos para diferentes propósitos tanto del sector  público como del privado, con las mejores condiciones y precios del mercado. Estamos  relacionados y mantenemos alianzas comerciales con las empresas distribuidoras  y fabricantes de equipos y maquinarias más importantes del mundo, por lo que  podemos atender sus requerimientos de una manera bastante precisa y ofrecer  soluciones a sus problemas de equipamiento. Estamos en proceso de negociación de otras  representaciones que nos permitan ofrecerle otras marcas reconocidas. </p>
                               <p align="justify" class="style11">Ofrecemos además un servicio de asistencia de ventas personalizado  capaz de identificar adecuadamente sus necesidades y canalizarlas de manera  óptima. Nuestro servicio es integral, y puede ir desde la completa elaboración  de un Proyecto de adquisición o de factibilidad (en caso de ser necesario) y su  correspondiente Asesoría, hasta la ejecución final del mismo, para que su  Empresa o Institución, pueda realizar la adecuada adquisición de esas  maquinarias y equipos, que Ud. necesita para satisfacer las necesidades de sus clientes  y comunidades. Atendemos desde Margarita a todo el Oriente del país, a través  de nuestros Ejecutivos Especializados de Ventas. Brindamos garantía, suministro  de repuestos y servicio de postventa a través de los talleres especializados, además de entrenamiento especializado en el  manejo de la maquinaria. También ofrecemos entrenamiento y asesoría  en el área gerencial, para aquellas empresas e instituciones que  deseen realizar un óptimo aprovechamiento de sus recursos tanto humanos, como  materiales y financieros.</p>
                               <p align="justify" class="style11">Solicite una visita de  nuestros representantes a través de nuestros números telefónicos o nuestro  correo electrónico: <span class="style13">soluparts@gmail.com</span>.</p>
                               <p align="center" class="style11"><strong>EN SOLUPARTS C. A., LO EQUIPAMOS PARA EL ÉXITO.</strong></p>
                               <p align="justify" class="style11">Prolongación Avenida 4 de Mayo, Centro Empresarial Atrium, Piso 3, Oficina A 3-3. Porlamar, Estado Nueva Esparta. <strong>Telefax: +58 0295 - 2638703 / 2647786 / 2644677</strong></p></td>
                           </tr>
                           <tr>
                             <td>&nbsp;</td>
                           </tr>
                         </table>                         </td>
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

<map name="index_r9_c1Map"><area shape="rect" coords="529,51,758,69" href="http://scenografik.com" target="_blank">
</map></body>
</html>
<? mysql_close($linko8)?>