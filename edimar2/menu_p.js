sortitems = 1; 
function chequear(fbox){
for(var i=0; i<fbox.options.length; i++) {
  if(fbox.options[i].selected && fbox.options[i].value != "") {
    fbox.options[i].selected = true;
   }
 }
}
function move(fbox,tbox) {
for(var i=0; i<fbox.options.length; i++) {
if(fbox.options[i].selected && fbox.options[i].value != "") {
var no = new Option();
no.value = fbox.options[i].value;
no.text = fbox.options[i].text;
no.selected=true;
tbox.options[tbox.options.length] = no;
fbox.options[i].value = "";
fbox.options[i].text = "";
   }
}
BumpUp(fbox);
if (sortitems) SortD(tbox);
}
function BumpUp(box)  {
for(var i=0; i<box.options.length; i++) {
if(box.options[i].value == "")  {
for(var j=i; j<box.options.length-1; j++)  {
box.options[j].value = box.options[j+1].value;
box.options[j].text = box.options[j+1].text;
}
var ln = i;
break;
   }
}
if(ln < box.options.length)  {
box.options.length -= 1;
BumpUp(box);
   }
}

function SortD(box)  {
var temp_opts = new Array();
var temp = new Object();
for(var i=0; i<box.options.length; i++)  {
temp_opts[i] = box.options[i];
}
for(var x=0; x<temp_opts.length-1; x++)  {
for(var y=(x+1); y<temp_opts.length; y++)  {
if(temp_opts[x].text > temp_opts[y].text)  {
temp = temp_opts[x].text;
temp_opts[x].text = temp_opts[y].text;
temp_opts[y].text = temp;
temp = temp_opts[x].value;
temp_opts[x].value = temp_opts[y].value;
temp_opts[y].value = temp;
      }
   }
}
for(var i=0; i<box.options.length; i++)  {
box.options[i].value = temp_opts[i].value;
box.options[i].text = temp_opts[i].text;
   }
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

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
function mmLoadMenus(id, usr) {
	var UR="fti=yes&curmbox=00000000%2d0000%2d0000%2d0000%2d000000000001&a=c49ada04efe4dbbebabf65088e7c412b19e55dc687b349189bd90b9e41231034&";
	var quienes= 'Quienes Somos';var objetivo='Objetivos y Facilidades';var llegar ='Como LLegar';
	var orga='Organigrama'; var marina='Biología Marina'; var oceano='Oceanografía'; var Cult='Cultivos';
	var pesquera='Biología Pesquera'; var calidad='Control de Calidad'; var estudios='Estudios Especiales';
	var linea='Lineas de Investigación'; var proyectos='Proyectos de Investigación'; var ejecucion='Proyectos en Ejecución';
	var culminados='Proyectos Culminados'; var selectas='Selectas'; var contrib='Contribuciones'; var noticias='Últimas Noticias';
	var eventos='Eventos'; var trabajo ='Ofertas de trabajo'; var pasan='Pasantías Disponibles'; var tesis='Propuestas de Tesis';
	var alimento='Calidad de Alimentos'; var agua='Calidad de Aguas'; var intro='Introducción a MOBR'; var organi='Organización Colecciones';
	var consult='Consultas y Prestamos';var fico='Ficoteca y Herbario'; var sigam ='SIGAM ';
	
  if (id=='_Ing'){
	  quienes='Who we are';  objetivo='Objectives and Facilities';llegar='Where we are'; orga='Flowchart';
	  marina='Marine Biology'; oceano='Oceanography'; Cult='Cultivos'; pesquera='Fishing Biology'; calidad='Control of Quality';
	  estudios='Special Studies'; linea='Line of Investigation'; proyectos='Projects of Investigation'; ejecucion='Projects in Execution';
	  culminados='Culminated Projects'; selectas='Selections'; contrib='Contributions'; noticias='The last News'; eventos='Events';
	  trabajo ='Supplies of Work';  pasan='Pasantías available'; tesis='Thesis proposals'; alimento='Quality of Foods'; agua='Quality of Waters'; sigam ='SIGAM ';
	  intro='Introduction to MOBR'; organi='Organization Collections'; consult='Consultations and Loans'; fico='Ficoteca and Herbario';
  }
  if (window.mm_menu_0715190740_0) return;
              window.mm_menu_0715190740_0 = new Menu("root",164,17,"Verdana",11,"#000000","#FFFFFF","#E2F7FC","#3385B5","left","middle",3,0,1000,-5,7,true,true,true,0,true,true);
  mm_menu_0715190740_0.addMenuItem(quienes,"window.open('acekd.php?"+UR+"Id="+id+"&Usr="+usr+"', '_self');");
  mm_menu_0715190740_0.addMenuItem(objetivo,"window.open('objetivos.php?"+UR+"Id="+id+"&Usr="+usr+"', '_self');");
  mm_menu_0715190740_0.addMenuItem(llegar,"location='como_llegar.php?"+UR+"Id="+id+"&Usr="+usr+"'");
  mm_menu_0715190740_0.addMenuItem(orga,"location='organigrama.php?"+UR+"Id="+id+"&Usr="+usr+"'");
  mm_menu_0715190740_0.addMenuItem("Edimar&nbsp;360º","location='Edimar360.php?"+UR+"Id="+id+"&Usr="+usr+"'");
   mm_menu_0715190740_0.hideOnMouseOut=true;
   mm_menu_0715190740_0.bgColor='#555555';
   mm_menu_0715190740_0.menuBorder=1;
   mm_menu_0715190740_0.menuLiteBgColor='#FFFFFF';
   mm_menu_0715190740_0.menuBorderBgColor='#3385B5';
window.mm_menu_0715191822_0 = new Menu("root",140,17,"Verdana",11,"#000000","#FFFFFF","#E2F7FC","#3385B5","left","middle",3,0,1000,-5,7,true,true,true,0,true,true);
  mm_menu_0715191822_0.addMenuItem(marina,"location='departamento.php?"+UR+"Id="+id+"&Usr="+usr+"&Cod=1' ");
  mm_menu_0715191822_0.addMenuItem(oceano,"location='departamento.php?"+UR+"Id="+id+"&Usr="+usr+"&Cod=2'");
  mm_menu_0715191822_0.addMenuItem(Cult,"location='departamento.php?"+UR+"Id="+id+"&Usr="+usr+"&Cod=3'");
  mm_menu_0715191822_0.addMenuItem(pesquera,"location='departamento.php?"+UR+"Id="+id+"&Usr="+usr+"&Cod=4'");
  mm_menu_0715191822_0.addMenuItem(calidad,"location='departamento.php?"+UR+"Id="+id+"&Usr="+usr+"&Cod=5'");
  mm_menu_0715191822_0.addMenuItem(estudios,"location='departamento.php?"+UR+"Id="+id+"&Usr="+usr+"&Cod=6'");
  mm_menu_0715191822_0.addMenuItem(sigam ,"location='departamento.php?"+UR+"Id="+id+"&Usr="+usr+"&Cod=7'");  
   mm_menu_0715191822_0.hideOnMouseOut=true;
   mm_menu_0715191822_0.bgColor='#555555';
   mm_menu_0715191822_0.menuBorder=1;
   mm_menu_0715191822_0.menuLiteBgColor='#FFFFFF';
   mm_menu_0715191822_0.menuBorderBgColor='#3385B5';
window.mm_menu_0715192553_0_1 = new Menu(proyectos,164,17,"Verdana",11,"#000000","#FFFFFF","#E2F7FC","#3385B5","left","middle",3,0,1000,-5,7,true,true,true,0,true,true);
    mm_menu_0715192553_0_1.addMenuItem(ejecucion,"location='proyectosE.php?"+UR+"T=E&Id="+id+"&Usr="+usr+"'");
    mm_menu_0715192553_0_1.addMenuItem(culminados,"location='proyectosE.php?"+UR+"T=C&Id="+id+"&Usr="+usr+"'");
     mm_menu_0715192553_0_1.hideOnMouseOut=true;
     mm_menu_0715192553_0_1.bgColor='#555555';
     mm_menu_0715192553_0_1.menuBorder=1;
     mm_menu_0715192553_0_1.menuLiteBgColor='#FFFFFF';
     mm_menu_0715192553_0_1.menuBorderBgColor='#3385B5';
  window.mm_menu_0715192553_0 = new Menu("root",184,17,"Verdana",11,"#000000","#FFFFFF","#E2F7FC","#3385B5","left","middle",3,0,1000,-5,7,true,true,true,0,true,true);
  mm_menu_0715192553_0.addMenuItem(linea,"location='lineas.php?"+UR+"Id="+id+"&Usr="+usr+"'");
  mm_menu_0715192553_0.addMenuItem(mm_menu_0715192553_0_1,"window.open('index.php?"+UR+"Id="+id+"&Usr="+usr+"', '_self');");
   mm_menu_0715192553_0.hideOnMouseOut=true;
   mm_menu_0715192553_0.childMenuIcon="arrows.gif";
   mm_menu_0715192553_0.bgColor='#555555';
   mm_menu_0715192553_0.menuBorder=1;
   mm_menu_0715192553_0.menuLiteBgColor='#FFFFFF';
   mm_menu_0715192553_0.menuBorderBgColor='#3385B5';

      window.mm_menu_0715193247_0 = new Menu("root",113,17,"Verdana",11,"#000000","#FFFFFF","#E2F7FC","#3385B5","left","middle",3,0,1000,-5,7,true,true,true,0,true,true);
  mm_menu_0715193247_0.addMenuItem(selectas,"location='publicaciones.php?"+UR+"T=S&Id="+id+"&Usr="+usr+"'");
  mm_menu_0715193247_0.addMenuItem(contrib,"location='publicaciones.php?"+UR+"T=C&Id="+id+"&Usr="+usr+"'");
   mm_menu_0715193247_0.hideOnMouseOut=true;
   mm_menu_0715193247_0.bgColor='#555555';
   mm_menu_0715193247_0.menuBorder=1;
   mm_menu_0715193247_0.menuLiteBgColor='#FFFFFF';
   mm_menu_0715193247_0.menuBorderBgColor='#3385B5';
window.mm_menu_0715193427_0 = new Menu("root",121,17,"Verdana",11,"#000000","#FFFFFF","#E2F7FC","#3385B5","left","middle",3,0,1000,-5,7,true,true,true,0,true,true);
  mm_menu_0715193427_0.addMenuItem(noticias,"window.open('noticias.php?"+UR+"Id="+id+"&T=N&Usr="+usr+"', '_self');");
  mm_menu_0715193427_0.addMenuItem(eventos,"location='noticias.php?"+UR+"Id="+id+"&T=E&Usr="+usr+"'");
   mm_menu_0715193427_0.hideOnMouseOut=true;
   mm_menu_0715193427_0.bgColor='#555555';
   mm_menu_0715193427_0.menuBorder=1;
   mm_menu_0715193427_0.menuLiteBgColor='#FFFFFF';
   mm_menu_0715193427_0.menuBorderBgColor='#3385B5';

  window.mm_menu_0715193533_0 = new Menu("root",152,17,"Verdana",11,"#000000","#FFFFFF","#E2F7FC","#3385B5","left","middle",3,0,1000,-5,7,true,true,true,0,true,true);
  mm_menu_0715193533_0.addMenuItem(trabajo,"window.open('trabajo.php?"+UR+"Id="+id+"&T=N&Usr="+usr+"', '_self');");
  mm_menu_0715193533_0.addMenuItem(tesis,"window.open('tesis.php?"+UR+"Id="+id+"&T=N&Usr="+usr+"', '_self');");
  mm_menu_0715193533_0.addMenuItem(pasan,"window.open('pasantias.php?"+UR+"Id="+id+"&T=N&Usr="+usr+"', '_self');");
   mm_menu_0715193533_0.hideOnMouseOut=true;
   mm_menu_0715193533_0.bgColor='#555555';
   mm_menu_0715193533_0.menuBorder=1;
   mm_menu_0715193533_0.menuLiteBgColor='#FFFFFF';
   mm_menu_0715193533_0.menuBorderBgColor='#3385B5';


  window.mm_menu_0715202127_0 = new Menu("root",152,17,"Verdana",11,"#000000","#FFFFFF","#D7E3DC","#85AB94","left","middle",3,0,1000,-5,7,true,true,true,0,true,true);
  mm_menu_0715202127_0.addMenuItem(alimento,"window.open('laboratorio.php?"+UR+"Id="+id+"&Cod=2&Usr="+usr+"', '_self');");
  mm_menu_0715202127_0.addMenuItem(agua,"window.open('laboratorio.php?"+UR+"Id="+id+"&Cod=1&Usr="+usr+"', '_self');");
   mm_menu_0715202127_0.hideOnMouseOut=true;
   mm_menu_0715202127_0.bgColor='#555555';
   mm_menu_0715202127_0.menuBorder=1;
   mm_menu_0715202127_0.menuLiteBgColor='#FFFFFF';
   mm_menu_0715202127_0.menuBorderBgColor='#85AD95';

    window.mm_menu_0715202233_0 = new Menu("root",179,17,"Verdana",11,"#000000","#FFFFFF","#D7E3DC","#85AB94","left","middle",3,0,1000,-5,7,true,true,true,0,true,true);
  mm_menu_0715202233_0.addMenuItem(intro,"window.open('museo.php?"+UR+"Id="+id+"&T=N&Usr="+usr+"', '_self');");
 <!-- mm_menu_0715202233_0.addMenuItem(organi);
  mm_menu_0715202233_0.addMenuItem(consult,"window.open('consultas.php?"+UR+"Id="+id+"&T=N&Usr="+usr+"', '_self');");
  mm_menu_0715202233_0.addMenuItem(fico,"window.open('ficoteca.php?"+UR+"Id="+id+"&T=N&Usr="+usr+"', '_self');");
   mm_menu_0715202233_0.hideOnMouseOut=true;
   mm_menu_0715202233_0.bgColor='#555555';
   mm_menu_0715202233_0.menuBorder=1;
   mm_menu_0715202233_0.menuLiteBgColor='#FFFFFF';
   mm_menu_0715202233_0.menuBorderBgColor='#85AD95';

mm_menu_0715202233_0.writeMenus();
} // mmLoadMenus()

function menuP(id,usr){
    var UR="fti=yes&curmbox=00000000%2d0000%2d0000%2d0000%2d000000000001&a=c49ada04efe4dbbebabf65088e7c412b19e55dc687b349189bd90b9e41231034&";
	document.write('<table width="100%"  border="0" cellspacing="0" cellpadding="0">');
    document.write('<tr><td valign="top"><img src="Imagenes/Menu_lateral_Izq.jpg" width="8" height="439"></td>');
    document.write('<td valign="top"><table width="95%"  border="0" cellspacing="0" cellpadding="0">');
    document.write('<tr><td><img src="Imagenes/Menu_lateral_I.jpg" width="118" height="27"></td></tr>');
    document.write('<tr><td bgcolor="#3385B5">');
    document.write('<table width="104"  border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#3385B5" bgcolor="#FFFFFF">');
    document.write('<tr><td align="center" height="21"><a href="#" onMouseOut="MM_swapImgRestore();MM_startTimeout();" onMouseOver="MM_swapImage(');
    document.write("'acerkD','','Imagenes/acekD_II"+id+".jpg',1);MM_showMenu(window.mm_menu_0715190740_0,104,0,null,'acerkD')");
    document.write('"><img src="Imagenes/acekD_I'+id+'.jpg" name="acerkD" width="104" height="21" border="0"></a></td>');
    document.write('</tr><tr><td><a href="investigadores.php?'+UR+'Id='+id+"&Usr="+usr+'" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage(');
    document.write("'Invest','','Imagenes/Invest_II"+id+".jpg',1)");
    document.write('"><img src="Imagenes/Invest_I'+id+'.jpg" name="Invest" width="104" height="21" border="0"></a></td></tr>');
    document.write('<tr><td><a href="#" onMouseOut="MM_swapImgRestore();MM_startTimeout();" onMouseOver="MM_swapImage(');
    document.write("'Dpto','','Imagenes/Dpto_II"+id+".jpg',1);MM_showMenu(window.mm_menu_0715191822_0,104,0,null,'Dpto')");
    document.write('"><img src="Imagenes/Dpto_I'+id+'.jpg" name="Dpto" width="104" height="21" border="0"></a></td></tr>');
    document.write('<tr><td><a href="#" onMouseOut="MM_swapImgRestore();MM_startTimeout();" onMouseOver="MM_swapImage(')
    document.write("'invst','','Imagenes/Invst_II"+id+".jpg',1);MM_showMenu(window.mm_menu_0715192553_0,104,0,null,'invst')");
    document.write('"><img src="Imagenes/Invst_I'+id+'.jpg" name="invst" width="104" height="21" border="0"></a></td></tr>');
    document.write('<tr><td><a href="educacion.php?'+UR+'Id='+id+"&Usr="+usr+'" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage(');
    document.write("'Educ','','Imagenes/Educ_II"+id+".jpg',1)");
    document.write('"><img src="Imagenes/Educ_I'+id+'.jpg" name="Educ" width="104" height="21" border="0"></a></td></tr>');
    document.write('<tr><td><a href="extension.php?'+UR+'Id='+id+"&Usr="+usr+'" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage(');
    document.write("'ext','','Imagenes/ext_II"+id+".jpg',1)");
    document.write('"><img src="Imagenes/ext_I'+id+'.jpg" name="ext" width="104" height="21" border="0"></a></td></tr>');
    document.write('<tr><td><a href="#" onMouseOut="MM_swapImgRestore();MM_startTimeout();" onMouseOver="MM_swapImage(');
    document.write("'Image22','','Imagenes/public_II"+id+".jpg',1);MM_showMenu(window.mm_menu_0715193247_0,104,0,null,'Image22')");
    document.write('"><img src="Imagenes/public_I'+id+'.jpg" name="Image22" width="104" height="21" border="0"></a></td></tr>');
    document.write('<tr><td><a href="metadatos.php?'+UR+'Id='+id+"&Usr="+usr+'" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage(');
    document.write("'Image23','','Imagenes/datos_II"+id+".jpg',1)");
    document.write('"><img src="Imagenes/datos_I'+id+'.jpg" name="Image23" width="104" height="21" border="0"></a></td></tr>');
    document.write('<tr><td><a href="#" onMouseOut="MM_swapImgRestore();MM_startTimeout();" onMouseOver="MM_swapImage(');
    document.write("'noti','','Imagenes/not_II"+id+".jpg',1);MM_showMenu(window.mm_menu_0715193427_0,104,0,null,'noti')");
    document.write('"><img src="Imagenes/not_I'+id+'.jpg" name="noti" width="104" height="21" border="0"></a></td></tr>');
    document.write('<tr><td><a href="#" onMouseOut="MM_swapImgRestore();MM_startTimeout();" onMouseOver="MM_swapImage(');
    document.write("'Image25','','Imagenes/empl_II"+id+".jpg',1);MM_showMenu(window.mm_menu_0715193533_0,104,0,null,'Image25')");
    document.write('"><img src="Imagenes/empl_I'+id+'.jpg" name="Image25" width="104" height="21" border="0"></a></td></tr>');
    document.write('<tr><td><a href="contactenos.php?'+UR+'Id='+id+"&Usr="+usr+'" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage(');
    document.write("'contc','','Imagenes/contac_II"+id+".jpg',1)");
    document.write('"><img src="Imagenes/contac_I'+id+'.jpg" name="contc" width="104" height="21" border="0"></a></td></tr>');
    document.write('<tr><td><a href="http://www.edimar.org/webmail/src/login.php" target="_blank" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage(');
    document.write("'correo','','Imagenes/correo_II"+id+".jpg',1)");
    document.write('"><img src="Imagenes/correo_I'+id+'.jpg" name="correo" width="104" height="21" border="0"></a></td></tr></table>');
    document.write('</td></tr><tr><td width="118" height="40" align="center" valign="top" background="Imagenes/Menu_lateral_I_Inf.jpg">');
    document.write('<a href="links.php?'+UR+'Id='+id+"&Usr="+usr+'" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage(');
    document.write("'Links','','Imagenes/Link_II"+id+".jpg',1)");
    document.write('"><img src="Imagenes/Link_I'+id+'.jpg" alt="Links" name="Links" width="104" height="21" border="0"></a></td></tr>');
    document.write('</table><br><table width="100%"  border="0" cellspacing="0" cellpadding="0">');
    document.write('<tr><td><img src="Imagenes/Servicios.jpg" width="118" height="34"></td></tr>');
    document.write('<tr><td align="center" bgcolor="#85AD95">');
    document.write('<table width="104"  border="1" cellpadding="0" cellspacing="0" bordercolor="#85AD95" bgcolor="#FFFFFF">');
    document.write('<tr><td><a href="#" onMouseOut="MM_swapImgRestore();MM_startTimeout()" onMouseOver="MM_swapImage(');
    document.write("'labt','','Imagenes/lab_II"+id+".jpg',1);MM_showMenu(window.mm_menu_0715202127_0,104,0,null,'labt')");
    document.write('"><img src="Imagenes/lab_I'+id+'.jpg" name="labt" width="104" height="21" border="0"></a></td></tr>');
    document.write('<tr><td><a href="Consultoria.php?'+UR+'Id='+id+"&Usr="+usr+'" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage(');
    document.write("'const','','Imagenes/Consult_II"+id+".jpg',1)");
    document.write('"><img src="Imagenes/Consult_I'+id+'.jpg" name="const" width="104" height="21" border="0"></a></td></tr>');
	document.write('<tr><td  align="center" bgcolor="#85AD95">');
    document.write('<a href="#" onMouseOut="MM_swapImgRestore();MM_startTimeout()" onMouseOver="MM_swapImage(');
    document.write("'museo','','Imagenes/museo_II.jpg',1);MM_showMenu(window.mm_menu_0715202233_0,104,0,null,'museo')");
    document.write('"><img src="Imagenes/museo_I.jpg" name="museo" width="104" height="33" border="0"></a></td></tr>');
    document.write('<tr><td><a href="sistema.php" target="_blank" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage(');
    document.write("'sist','','Imagenes/Sist_II.jpg',1)");
    document.write('"><img src="Imagenes/Sist_I.jpg" name="sist" width="104" height="33" border="0"></a></td></tr>');
    document.write('</table></td></tr><tr>');
    document.write('<td width="118" height="40" align="center" valign="top" background="Imagenes/Serv_inf.jpg">');
    document.write('<a href="buque.php?'+UR+'Id='+id+"&Usr="+usr+'" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage(');
    document.write("'buque','','Imagenes/Buq_II.jpg',1)");
    document.write('"><img src="Imagenes/Buq_I.jpg" name="buque" width="104" height="33" border="0"></a></td></tr>');
    document.write('</table><br><table width="100%"  border="0" cellspacing="0" cellpadding="0">');
    document.write('<tr><td><img src="Imagenes/Collec.jpg" width="118" height="33"></td></tr>');
    document.write('<tr><td height="40" align="center" bgcolor="#E96072">');
    document.write('<a href="colecciones.php" onMouseOut="MM_swapImgRestore();MM_startTimeout()" onMouseOver="MM_swapImage(');
    document.write("'Colec','','Imagenes/colec_II"+id+".jpg',1)");
    document.write('"><img src="Imagenes/colec_I'+id+'.jpg" name="Colec" width="104" height="33" border="0"></a></td></tr>');
	if (usr=='0'){
    document.write('<tr><td height="30" bgcolor="#E96072"><img src="Imagenes/sesion.jpg" width="118" height="20"></td></tr>'); 
    document.write('<tr><td bgcolor="#E96072"><table width="100%"  border="0" cellspacing="0" cellpadding="0">');
    document.write('<form name="form2" method="post" action=""><tr><td><table width="100%"  border="0" cellspacing="0" cellpadding="0">');
    document.write('<tr><td width="53%" align="left" class="Letra_Sesion">&nbsp;Nombre:</td><td width="47%">');
    document.write('<input name="nick" type="text" size="4"></td></tr><tr><td align="left" class="Letra_Sesion">&nbsp;Clave:</td>');
    document.write('<td><input name="pass" type="password" size="4"></td></tr></table></td></tr><tr>');
    document.write('<td width="118" height="31" align="right" ><input type="submit" name="Submit2" value="Entrar">');
    document.write('&nbsp;&nbsp;</td></tr></form></table></td></tr>');
	}
	if (usr=='1'){
	 document.write('<tr><td width="118" height="10" align="right" bgcolor="#E96072"><img src="Imagenes/Admin.jpg" name="Ad" width="116" height="27" border="0" ></td></tr>');
	 document.write('<tr><td  bgcolor="#E96072" align="center"><table width="104"  border="1" cellpadding="0" cellspacing="0" bordercolor="#E96072" bgcolor="#FFFFFF">');	
	 document.write('<tr><td align="center" bgcolor="#E96072"><a href="Instusr.php?'+UR+'Id='+id+"&Usr="+usr+'" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage(');
     document.write("'reg','','Imagenes/reg_II.jpg',1)");
     document.write('"><img src="Imagenes/reg.jpg" name="reg" width="104" height="33" border="0"></a></td></tr>');
	 document.write('<tr><td align="center" bgcolor="#E96072"><a href="permisos.php?'+UR+'Id='+id+"&Usr="+usr+'" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage(');
     document.write("'AdPer','','Imagenes/AdPer_II.jpg',1)");
     document.write('"><img src="Imagenes/AdPer.jpg" name="AdPer" width="104" height="33" border="0"></a></td></tr>');
	 document.write('</table></td></tr>');
	
	}
	if (usr!='0'){
		if (usr!='1')
		document.write('<tr><td width="118" height="10" align="right" bgcolor="#E96072"><img src="Imagenes/Admin.jpg" name="Ad" width="116" height="27" border="0" ></td></tr>');
	 document.write('<tr><td align="center" bgcolor="#E96072"><a href="datosP.php?'+UR+'Id='+id+"&Op=M&Usr="+usr+'" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage(');
     document.write("'Contra','','Imagenes/CambPass_II.jpg',1)");
     document.write('"><img src="Imagenes/CambPass.jpg" name="Contra" width="104" height="33" border="0"></a></td></tr>');
	 document.write('<tr><td align="center"  height="40" bgcolor="#E96072"><a href="index.php?'+UR+'" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage(');
     document.write("'sesion','','Imagenes/cerrarsesion2.jpg',1)");
     document.write('"><img src="Imagenes/cerrarsesion1.jpg" name="sesion" width="104" height="33" border="0"></a></td></tr>');
	}
	 document.write('<tr><td width="118" height="31" align="right" background="Imagenes/Collec_Inf.jpg" >&nbsp;</td></tr>');
	document.write('</table><p>&nbsp;</p><p>&nbsp;</p></td>');
    document.write('<td valign="top"><img src="Imagenes/Menu_lateral_I_Der.jpg" width="19" height="194"></td></tr></table>'); 

}