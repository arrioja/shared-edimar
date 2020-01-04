<html>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #FFFFFF;
}
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
	color: #002A5C;
}

.style2 {
	color: #000000;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	font-style: normal;
}
a:link {
	color: #002A5C;
}
a:visited {
	color: #002A5C;
}
a:hover {
	color: #002A5C;
}
-->
</style>
<script>
<!-- Beginning of JavaScript -
col = new Array()
col[0]="003366"
col[1]="111111"
col[2]="222222"
col[3]="333333"
col[4]="444444"
col[5]="555555"
col[6]="666666"
col[7]="777777"
col[8]="888888"
col[9]="999999"
col[10]="AAAAAA"
col[11]="BBBBBB"
col[12]="CCCCCC"
col[13]="DDDDDD"
col[14]="EEEEEE"
col[15]="FFFFFF"
col[16]="FFFFFF"
col[17]="DDDDDD"
col[18]="CCCCCC"
col[19]="BBBBBB"
col[20]="AAAAAA"
col[21]="999999"
col[22]="888888"
col[23]="777777"
col[24]="666666"
col[25]="555555"
col[26]="444444"
col[27]="333333"
col[28]="222222"
col[29]="111111"
col[30]="003366"

i_col=0
doani=1
var timer
var thislink

function animatelink() {
	if (document.all) {
		if (doani==1) {
			if (i_col<=col.length-1) {
				thislink.color=col[i_col]
				i_col++
				timer=setTimeout("animatelink()",50)
    		}
			else {
				i_col=0
				timer=setTimeout("animatelink()",50)
			}
		}
		else {
			clearTimeout(timer)
		}
	}
}

function stopanimation() {
	clearTimeout(timer)
	thislink.color="003366"
	doani=0
}	

function startanimation(mylink) {
	clearTimeout(timer)
	thislink=eval("document.all."+mylink+".style")
	doani=1
	animatelink()
}	

// - End of JavaScript - -->
</script>
<body>
<div id="datacontainer" style="position:absolute;left:1px;top:10px;width:100%" onMouseover="scrollspeed=0" onMouseout="scrollspeed=cache">
<?
	include("config.php");
	$linko8=mysql_connect($dbhost,$dbuser,$dbpass);
	mysql_select_db($db);
    
	$ss7="select * from noticias order by id desc";
    $re7=mysql_query($ss7);
	$nums7=mysql_num_rows($re7);
	
	for($i=0;$i<$nums7;$i++)
	 {
	 mysql_data_seek($re7,$i);
	 $ro7=mysql_fetch_array($re7);
	 
	 print('<span class="style2"><a href="ver_noticia.php?id='.$ro7['id'].'" target="_parent" id="link'.$i.'" onMouseOver="startanimation(\'link'.$i.'\')" onMouseOut="stopanimation()">'.$ro7['titular'].'</a></span><br><br>');
	 } 
?>
</div>
<script type="text/javascript">
var scrollspeed=cache=1

var initialdelay=500

function initializeScroller(){
dataobj=document.all? document.all.datacontainer : document.getElementById("datacontainer")
dataobj.style.top="160px"
setTimeout("getdataheight()", initialdelay)
}

function getdataheight(){
thelength=dataobj.offsetHeight
if (thelength==0)
setTimeout("getdataheight()",10)
else
scrollDiv()
}

function scrollDiv(){
dataobj.style.top=parseInt(dataobj.style.top)-scrollspeed+"px"
if (parseInt(dataobj.style.top)<thelength*(-1))
dataobj.style.top="160px"
setTimeout("scrollDiv()",40)
}
if (window.addEventListener)
window.addEventListener("load", initializeScroller, false)
else if (window.attachEvent)
window.attachEvent("onload", initializeScroller)
else
window.onload=initializeScroller
</script>
</body>
</html>