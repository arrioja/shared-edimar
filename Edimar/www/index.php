<?
include("config.php");
include("inc.php");

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
//doing a random
$ss_random="select * from productos";
$re_random=mysql_query($ss_random);
$nums_random=mysql_num_rows($re_random);

$ver_1=rand(0,($nums_random-1));//primer producto aleatorio a mostrar
$ver_2=rand(0,($nums_random-1));//2do producto aleatorio a mostrar

while($ver_1==$ver_2)
 {
  $ver_2=rand(0,($nums_random-1));//2do producto aleatorio a mostrar
 }
				    $ss_random2="select * from productos";
					$re_random2=mysql_query($ss_random2);
					mysql_data_seek($re_random2,$ver_2);
					$ro_random2=mysql_fetch_array($re_random2);
				  
				    $ss_random1="select * from productos";
					$re_random1=mysql_query($ss_random1);
					mysql_data_seek($re_random1,$ver_1);
					$ro_random1=mysql_fetch_array($re_random1);
				    
//crea las imsg para ser pegadas en el fondo de las ofertas especiales
imgno($ro_random1['foto1'],"151","87","1");
imgno($ro_random2['foto1'],"151","87","2");
?>
<html>
<head>
<title><? echo $titulo?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
td img {display: block;}.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
</style>
</head>
<body bgcolor="#e6e6e6">
<table width="778" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
   <td><flashobject classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="778" height="322">
     <param name="movie" value="moviesp.swf">
     <param name="quality" value="high">
     <embed src="moviesp.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="778" height="322"></embed>
   </object></td>
  </tr>
  <tr>
   <td><img name="sitesp_r2_c1" src="img2/sitesp_r2_c1.jpg" width="778" height="33" border="0" id="sitesp_r2_c1" alt="" /></td>
  </tr>
  <tr>
   <td><table align="left" border="0" cellpadding="0" cellspacing="0" width="778">
	  <tr>
	   <td><img name="sitesp_r3_c1" src="img2/sitesp_r3_c1.jpg" width="201" height="26" border="0" id="sitesp_r3_c1" alt="" /></td>
	   <td><img name="sitesp_r3_c2" src="img2/sitesp_r3_c2.jpg" width="273" height="26" border="0" id="sitesp_r3_c2" alt="" /></td>
	   <td><img name="sitesp_r3_c3" src="img2/sitesp_r3_c3.jpg" width="304" height="26" border="0" id="sitesp_r3_c3" alt="" /></td>
	  </tr>
	</table></td>
  </tr>
  <tr>
   <td><table width="778" border="0" align="left" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
	  <tr>
	   <td height="248" valign="top" bgcolor="#FFFFFF">
	     <table width="201" border="0" align="center" cellpadding="0" cellspacing="0">
           <tr>
             <td width="201">&nbsp;&nbsp;&nbsp;<iframe src="noticias.php" width="180" height="142" frameborder="0" scrolling="no"></iframe></td>
           </tr>
           <tr>
             <td height="103">&nbsp;</td>
           </tr>
         </table></td>
	   <td valign="top" bgcolor="#FFFFFF"><table width="273" border="0" align="left" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
		  <tr>
		   <td bgcolor="#FFFFFF"><a href="info_producto.php?idpro=<? echo $ro_random1['idpro']?>"><img name="sitesp_r4_c2" src="crea_img.php?im1=img2/sitesp_r4_c2.jpg&im2=mini_int1.jpg" width="273" height="131" border="0" id="sitesp_r4_c2" alt="" /></a></td>
		  </tr>
		  <tr>
		   <td height="118" valign="top" background="img2/f1.jpg">
             <table width="234" border="0" align="center" cellpadding="0" cellspacing="0">
               <tr>
                 <td width="9">&nbsp;</td>
                 <td width="9" valign="top"><table width="10" border="0" cellspacing="0" cellpadding="0">
                   <tr>
                     <td height="17"><img src="img/icon.jpg" width="4" height="9"></td>
                   </tr>
                 </table></td>
                 <td width="221"><span class="style1"><strong>Nombre:</strong> <? echo $ro_random2['nombre']?>.</span></td>
               </tr>
               <tr>
                 <td>&nbsp;</td>
                 <td valign="top"><table width="10" border="0" cellspacing="0" cellpadding="0">
                     <tr>
                       <td height="16"><img src="img/icon.jpg" width="4" height="9"></td>
                     </tr>
                   </table></td>
                 <td valign="top"><span class="style1"><? echo substr(strip_tags($ro_random2['descripcion']),0,100)?>...</span></td>
               </tr>
             </table></td>
		  </tr>
		</table></td>
	   <td><table align="left" border="0" cellpadding="0" cellspacing="0" width="304">
		  <tr>
		   <td><img name="sitesp_r4_c3" src="img2/sitesp_r4_c3.jpg" width="304" height="35" border="0" id="sitesp_r4_c3" alt=""></td>
		  </tr>
		  <tr>
		   <td height="214"><table align="left" border="0" cellpadding="0" cellspacing="0" width="304">
			  <tr>
			   <td height="214" bgcolor="#FFFFFF"><table align="left" border="0" cellpadding="0" cellspacing="0" width="255">
				  <tr>
				   <td height="93" valign="top" background="img2/f2.jpg" bgcolor="#FFFFFF">
				   
				   
				   <table width="234" border="0" align="center" cellpadding="0" cellspacing="0">
                     <tr>
                       <td width="10">&nbsp;</td>
                       <td width="9" valign="top"><table width="10" height="18" border="0" cellpadding="0" cellspacing="0">
                         <tr>
                           <td height="18"><img src="img/icon.jpg" width="4" height="9"></td>
                         </tr>
                       </table></td>
                       <td width="212"><span class="style1"><strong>Nombre:</strong> <? echo $ro_random1['nombre']?>.</span></td>
                     </tr>
                     <tr>
                       <td height="19">&nbsp;</td>
                       <td valign="top"><table width="10" border="0" cellspacing="0" cellpadding="0">
                         <tr>
                           <td height="16"><img src="img/icon.jpg" width="4" height="9"></td>
                         </tr>
                       </table></td>
                       <td valign="top"><span class="style1"><? echo substr(strip_tags($ro_random1['descripcion']),0,100)?>...</span></td>
                     </tr>
                   </table></td>
				  </tr>
				  <tr>
				   <td height="121" valign="top"><a href="info_producto.php?idpro=<? echo $ro_random2['idpro']?>"><img name="sitesp_r6_c3" src="crea_img.php?im1=img2/sitesp_r6_c3.jpg&im2=mini_int2.jpg" width="255" height="121" border="0" id="sitesp_r6_c3" alt="" /></a></td>
				  </tr>
				</table></td>
			   <td background="img2/sitesp_r5_c4.jpg"><img name="sitesp_r5_c4" src="img2/sitesp_r5_c4.jpg" width="49" height="202" border="0" id="sitesp_r5_c4" alt="" /></td>
			  </tr>
			</table></td>
		  </tr>
		</table></td>
	  </tr>
	</table></td>
  </tr>
  <tr>
   <td><table align="left" border="0" cellpadding="0" cellspacing="0" width="778">
	  <tr>
	   <td><img name="sitesp_r8_c1" src="img/footini4.jpg" width="729" height="67" border="0" id="sitesp_r8_c1" alt="" /></td>
	   <td><img name="sitesp_r8_c4" src="img2/sitesp_r8_c4.jpg" width="49" height="67" border="0" id="sitesp_r8_c4" alt=""></td>
	  </tr>
	</table></td>
  </tr>
  <tr>
   <td><img src="img/footini2.jpg" alt="" name="sitesp_r9_c1" width="778" height="26" border="0" usemap="#sitesp_r9_c1Map" id="sitesp_r9_c1" /></td>
  </tr>
</table>
 
<map name="sitesp_r9_c1Map"><area shape="rect" coords="529,-1,757,21" href="http://scenografik.com" target="_blank">
</map></body>
</html>
<script type="text/javascript" src="activateActiveX.js"></script>
<? mysql_close($linko8)?>