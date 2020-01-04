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
//obtencion de los datos
$ssqlo9="select * from productos where idpro='".$_GET['idpro']."'";
$resulto9=mysql_query($ssqlo9);
$nums9=mysql_num_rows($resulto9);
$ro9=mysql_fetch_array($resulto9);

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
 

function verifica_amigo()
 {
 if(document.form_amigo.envia.value=="" || document.form_amigo.correo.value=="")
 alert("Para enviar este producto a un amigo debes indicar quien envia el producto y el correo de la persona a la cual le va a enviar el producto...")
 document.form_amigo.envia.focus()
 }

function enviar_amigo()
{
window.open ('envia_amigo.php?id=<? echo $_GET["idpro"]?>&envia='+document.form_amigo.envia.value+'&correo='+document.form_amigo.correo.value, 'enviado', 'width=250,height=100,top=300,left=300,toolbar=no,directories=no,menubar=no,status=yes,scrollbars=yes,resizable=yes')
}

function imprimir()
  {
   window.open ('ver_imprimir.php?idpro=<? echo $_GET["idpro"]?>', 'enviado_imrpimir', 'width=640,height=480,top=100,left=200,toolbar=no,directories=no,menubar=no,status=no,scrollbars=yes,resizable=yes')
  }

//-->
</script>
<link rel="stylesheet" href="stylos.css" type="text/css">
<style type="text/css">
<!--
.style2 {font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style6 {font-family: Arial, Helvetica, sans-serif; font-size: 10px; }
.style7 {
	font-size: 12px;
	font-weight: bold;
}
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
	   <td valign="top"><table width="199" height="469" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
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
		   <td height="441" valign="top" background="img22/PXL.jpg"><table align="left" border="0" cellpadding="0" cellspacing="0" width="558">
			  <tr>
			   <td height="357"><table width="529" height="438" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
                 <tr>
                   <td height="438" valign="top"><table width="529" height="478" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
                     <tr>
                       <td height="440" valign="top"><table width="527" height="73" border="0" cellpadding="0" cellspacing="0">
                           <tr>
                             <td width="32" height="176" rowspan="2" valign="top"><img src="thumb.php?i=<? echo $ro9['foto1']?>&w=300&h=200&adjust=w" border="0" alt="Ver producto..."></td>
                             <td width="495" height="19" valign="top" class="noticias2 style7"><? echo $ro9['nombre']?></td>
                           </tr>
                           <tr>
                             <td height="54" valign="top"><form name="form_amigo">
                               <table width="192" border="0" cellspacing="0" cellpadding="0">
                                   <tr>
                                     <td height="31" colspan="3" valign="top"><img src="img/enviaramigo.jpg" width="145" height="19"></td>
                                   </tr>
                                   <tr>
                                     <td width="37" valign="middle"><span class="style6">Envia: </span></td>
                                     <td colspan="2" valign="top"><span class="style6">
                                       <input name="envia" type="text" class="caja" id="envia">
                                     </span></td>
                                   </tr>
                                   <tr>
                                     <td height="17" valign="middle"><span class="style6">Correo: </span></td>
                                     <td width="123" valign="top"><span class="style6">
                                       <input name="correo" type="text" class="caja" id="correo">
                                     </span></td>
                                     <td width="32" valign="top"><img src="img/icon_.jpg" alt="Enviar..." width="18" height="18" border="0" onClick="enviar_amigo()" onMouseOver="verifica_amigo()"></td>
                                   </tr>
                                 </table>
                               <br>
                               <a href="javascript:imprimir()"></a>
                               <a href="javascript:imprimir()"><img src="img/imprimirpag.jpg" width="145" height="27" border="0"></a>
                             </form></td>
                           </tr>
                         </table>
                           <span class="style2"><strong>Descripcion:</strong></span><br>
                           <iframe src="mostrar_descripcion.php?idpro=<? echo $_GET['idpro']?>" width="526" height="300" frameborder="0" name="mostrar"></iframe></td>
                     </tr>
                   </table>                   </td>
                 </tr>
               </table></td>
			   <td background="img22/index_r3_c6.jpg"><table width="29" height="297" border="0" cellpadding="0" cellspacing="0">
                 <tr>
                   <td height="297" background="img22/index_r3_c6.jpg">&nbsp;</td>
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

<map name="index_r9_c1Map"><area shape="rect" coords="530,50,761,71" href="http://scenografik.com" target="_blank">
</map></body>
</html>
<? mysql_close($linko8)?>