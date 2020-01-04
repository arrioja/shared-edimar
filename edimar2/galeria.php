<?php
// #################################################################//
// #  script by WingNut                        www.wingnut.net.ms  #//
// #                                                               #//
// #  this script has been published under the gnu public license  #//
// #  you may edit the script but never delete this comment! thx.  #//
// #################################################################//
// --begin editable region

// language (english, german)
$language = "english";

// Start EasyGallery with Thumbnails or Single Picture (thumbnails, firstpic)
$firstpage = "Vista Previa";

// Root directory
$root_dir = "http://localhost:8888/N_Edimar/Galeria/";
		
// maximal width of images in pixel (512, 640, 800, 1024, 1280)
// (= width of the table containing the buttons + border)
$maxwidth = "524";

// Maximal thumbnail columns and rows
$MAXX=4;   //columns
$MAXY=6;   //rows

// Accepted file extensions (jpg, jpeg, gif, png)
$filetypes = array("jpg", "jpeg", "gif", "png");
		
// --end editable region
//##################################################################//
// Do not change anything by now unless you know what you are doing!

// --begin html header
echo '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">';
echo '<html>';
echo '<head>';
echo '<title>EasyGallery</title>';
echo '<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">';
echo '<meta name="author" content="Thomas Holtkötter">';
echo '<meta name="keywords" content="EasyGallery, WingNut, projects, wingnut.net.ms">';
// uncomment this line and delete the STYLES section if you want to use an external css file
//echo '<link href="style.css" rel="stylesheet" type="text/css">';
// --BEGIN STYLES
?>
<style type="text/css">
.infotable {
	background-color: #FFF;
	border: solid #BBB 1px;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
	vertical-align:middle;
	padding: 0px;
	margin: 0px;
}
.content {
	border-top: solid #BBB 1px;
}
.button {
	background-color: #5C7888;
	border: #405460 1px solid;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
	font-weight: bold;
	color: #FFF;
	margin-left: 0px;
	margin-right: 4px;
	margin-bottom: 4px;
	margin-top: 4px;
}
.select {
	margin-left: 4px;
	margin-right: 4px;
	margin-bottom: 4px;
	margin-top: 4px;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 11px;
	font-weight: bold;
}
.images{
	background-color: #FFF;
	margin: 4px;
	border: #BBB 1px solid;
}
.thumbnails{
	background-color: #FFFFFF;
	margin: 0px;
	border: #BBB 1px solid;
	vertical-align: middle;
}
.numbers {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 11px;
	font-weight: bold;
	margin-right: 4px;
	vertical-align: 20%;
}
.copyright a{
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
	text-decoration: none;
	text-align: center;
}
.copyright a:hover{
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
	text-decoration: underline;
	text-align: center;
}
</style>
<?php 
// --END STYLES
echo '</head>';
echo '<body>';
echo '<div align="center">';
if($_GET["permiso"]==1){
  echo "<table width=\"$maxwidth\" >";
  echo "<tr>\n";
  echo "<td align=\"right\">";//.$_GET["permiso"];
  echo "<A href='InstImagenG.php?".$UR."&Id=".$_GET["Id"]."&Usr=".$_GET["Usr"]."'>";
  echo"<img border='0' src='Imagenes/nuevo.jpg' 	width='21' height='23'>Añadir</A>";
  //echo " <A href=\"indtpersonal.php?".$UR."&Id=".$_GET["Id"]."&Usr=".$_GET["Usr"]."\"> <img border=\"0\" src=\"Imagenes/nuevo.jpg\""
  //echo "width=\"21\" height=\"23\"> A&ntilde;adir</A>";
  echo "</td></tr></table>";
   }
// --end html header

// --begin preprocessing
$phpself = $_SERVER['PHP_SELF'];
extract($_GET);
//error_reporting(E_ALL);
//foreach ($_GET as $key => $name) {
//  echo 'GET:'.$key.': '.$name."<br />\r\n";
//}
//foreach ($_POST as $key => $name) {
//  echo 'POST:'.$key.': '.$name."<br />\r\n";
//}
	
// add upper case to filetypes
$k = sizeof($filetypes);
for ($i=0; $i<$k; $i++)
{
  $filetypes[] = strtoupper($filetypes[$i]);
}
	
// language
$language = strtolower($language);
$addcomments = strtolower($addcomments);
	
if (($language == "german")||($language == "deutsch"))
{
  $label_all = "Alle Bilder";
  $label_thumbs = "Vorschau";
  $label_nothumb = "Für diesen Ordner gibt es keine Vorschau.";
  $label_start = "Starte Fotoalbum";
  if ($addcomments == "yes")
  {
    $label_author = "Autor";
    $label_msg = "Nachricht";
    $label_send = "Abschicken";
	$error_noauthor = "Fehler: Das Feld $label_author ist leer!";
	$error_nomsg = "Fehler: Das Feld $label_msg ist leer!";
  }
}
else
{
  $label_all = "Todas las Imagenes";
  $label_thumbs = "Vistas Miniatura";
  $label_nothumb = "Disculpe! no hay Vists previas";
  $label_start = "Mostrar Galería";
  if ($addcomments == "yes")
  {
    $label_author = "author";
    $label_msg = "message";
    $label_send = "send";
	$error_noauthor = "error: field $label_author is empty!";
	$error_nomsg = "error: field $label_msg is empty!";
  }
}

// extract local image folders
if (strpos($root_dir,'www')===0)
  $root_dir = 'http://'.$root_dir;
$local = parse_url($root_dir);
if (strpos($root_dir,'http://')===0)
{
  foreach (count_chars($phpself,1) as $i=>$val)
  {
    if (chr($i)=='/')
    {
	  $root_dir = substr($local['path'],1);
      for ($j=1;$j<$val;$j++)
        $root_dir='../'.$root_dir;
    }
  }
  if (strpos($root_dir,$local['path'])===0)
  {
    $root_dir = ".";
  }
}

// scanning directory for folders and check if they contain image files
if (!is_dir($root_dir))
{
  echo "<table width=\"$maxwidth\" class=\"infotable\">";
  echo "<tr>\n";
  echo "<td align=\"center\">";
  echo "<p class=numbers>Couldn't open folder $root_dir !</p>";
  echo "</td></tr></table>";
  exit();
}	
$root_handle = opendir($root_dir);
while ($dirname = readdir($root_handle))
{
  $var1 = strcmp($dirname,'.');
  $var2 = strcmp($dirname,'..');
  $var3 = is_dir($root_dir.'/'.$dirname);	  
  if (($var1!=0) && ($var2!=0) && ($var3==1))
  {
	$dir_handle = opendir($root_dir.'/'.$dirname);
	$postmp = 0;
	while ($filename = readdir($dir_handle))
	{
  	  for ($i=0;$i<sizeof($filetypes);$i++)
  	  {
    	$postmp = strpos($filename, $filetypes[$i]);
		if ($postmp>0)
		{
		  $folders[] = $root_dir.'/'.$dirname;
		  break 2;
		}
  	  }
   	}
	closedir($dir_handle);
  }	
}		
if (!$folders)
{
  echo "<table width=\"$maxwidth\" class=\"infotable\">";
  echo "<tr>\n";
  echo "<td align=\"center\">";
  echo "<p class=numbers>Searched folders don't contain any image! Please change the \$root_dir.</p>";
  echo "</td></tr></table>";
  exit();
}
	
// !!! if you dont want your folders in reverse order change rsort() to sort() 	
rsort($folders);
		
// set initial variables
$thumbwidth = "106";
if (!isset($_GET['ordner']))
  $ordner = $folders[0];
else
  $ordner = $_GET['ordner'];
if (!isset($tminus)&&!isset($tplus)&&!isset($tminus_x)&&!isset($tplus_x)&&!isset($minus)&&!isset($plus)&&!isset($minus_x)&&!isset($plus_x)&&!isset($thumbnails)&&!isset($all))
  $one="set";
if (strcmp($firstpage, 'thumbnails')==0)
{
  if (!isset($single)&&!isset($plus)&&!isset($minus)&&!isset($minus_x)&&!isset($plus_x))
    $single = 0;
  if ((isset($one)&&($single==0))||isset($OK)||isset($OK_x))
    $thumbnails = "thumbnails";
  if (isset($page)&&(isset($OK)||isset($OK_x)))
  	$page = 0;
}
if (!isset($bild))
  $bild = 1;
if (!isset($tminus)&&!isset($tplus)&&!isset($tminus_x)&&!isset($tplus_x))
  $thumbs = 0;

// scanning directories for image files
if (is_dir($ordner)){
  $dir_handle = opendir($ordner);
  while ($filename = readdir($dir_handle))
  {
    for ($i=0; $i<sizeof($filetypes); $i++)
    {
      $pos = strpos($filename, $filetypes[$i]);
	  $var1 = strcmp($filename,'.');
      $var2 = strcmp($filename,'..');
      $var3 = is_file($ordner.'/'.$filename);
      if (($var1 != 0) && ($var2 != 0) && ($var3 == 1) && ($pos > 0))
   	  {
  	    $files[] = $filename;
   	  }
	  if ($filename=="thumbnails")
	  {
	    $thumbs = 1;
	  }
    }
  }			
  sort($files);
  $size = sizeof($files);
  closedir($dir_handle);
  closedir($root_handle);
}
else
{
  echo "<table width=\"$maxwidth\" class=\"infotable\">";
  echo "<tr>\n";
  echo "<td align=\"center\">";
  echo "<p class=numbers>folder not found.</p>";
  echo "</td></tr></table>";
  exit();
}
// --end preprocessing	
					
// --begin form
echo "<form name=\"fotoalbum\" method=\"get\" action=\"$phpself?ordner=$ordner\">";  		
echo "<table width=\"$maxwidth\" class=\"infotable\" cellspacing=\"0\" cellpadding=\"0\">";
echo "<tr>\n";
echo "<td align=\"left\">";
if ((strcmp($firstpage, 'thumbnails')==0)&&isset($single))
{
  if (isset($page)&&!isset($all))
    echo "<select name=\"ordner\" onchange=\"document.fotoalbum.page.value=0;document.fotoalbum.single.value=0;document.fotoalbum.bild.value=1;document.fotoalbum.submit();\" class=\"select\">";
  else
    echo "<select name=\"ordner\" onchange=\"document.fotoalbum.single.value=0;document.fotoalbum.bild.value=1;document.fotoalbum.submit();\" class=\"select\">";
} 
else
{
  echo "<select name=\"ordner\" onchange=\"document.fotoalbum.bild.value=1;document.fotoalbum.submit();\" class=\"select\">";
}
	  
while ($folder = each($folders))
{
  if ($ordner == $folder["value"])
  {	
  	echo "<option selected value=\"$ordner\">";
  }
  else
  {
    echo "<option value=\"";
	echo $folder["value"];
	echo "\">";
  }				  
  $text = $folder["value"]; 
  while (strrpos($text,"/"))
  {
    $text = substr($text, strrpos($text,"/")+1);
  }
	  
  // !!! if you want to add special chars to your folders uncomment or add the lines you need
	
  // GERMAN
  //$text = str_replace("ae", "ä", $text); // Replace all ae with ä
  //$text = str_replace("oe", "ö", $text); // Replace all oe with ö
  //$text = str_replace("ue", "ü", $text); // Replace all ue with ü
  //$text = str_replace("sz", "ß", $text); // Replace all sz with ß
  //$text = str_replace("AE", "Ä", $text); // Replace all AE with Ä
  //$text = str_replace("OE", "Ö", $text); // Replace all OE with Ö
  //$text = str_replace("UE", "Ü", $text); // Replace all UE with Ü

  // SCANDINAVIAN
  //$text = str_replace("ae", "æ", $text); // Replace all ae with æ
  //$text = str_replace("oe", "ø", $text); // Replace all oe with ø
  //$text = str_replace("aa", "å", $text); // Replace all aa with å
  //$text = str_replace("AE", "Æ", $text); // Replace all AE with Æ
  //$text = str_replace("OE", "Ø", $text); // Replace all OE with Ø
  //$text = str_replace("AA", "Å", $text); // Replace all AA with Å
          
  $text = str_replace("_", " ", $text); // Replace all _ with SPACE
  echo $text;	  
  echo "</option>";
}
echo "</select>";	
echo "<input type=\"submit\" name=\"OK\" value=\"OK\" class=\"button\"/>";
// !!! uncomment if you want to use an image button instead of OK
//echo "<input type=\"image\" src=\"\" name=\"OK\" value=\"&lt;&lt;\" class=\"button\">";

// !!! uncomment these line if you want the button shown below the select field. additionally add "colspan=2" in the <td> tag above
//echo "</tr><tr>";
	  
// plus and minus buttons
if (isset($plus)||isset($plus_x))
{
  if($bild<$size)
    $bild = $bild+1;
  else
  	$bild = 1;
}
if (isset($minus)||isset($minus_x))
{
  if ($bild>1)
    $bild = $bild-1;
  else
  	$bild = $size;
}		

echo "<input type=\"hidden\" name=\"one\" value=\"single pic\" class=\"button\">";
if(isset($bild))
  echo "<input type=\"hidden\" name=\"bild\" value=\"".$bild."\" class=\"button\">";
if (strcmp($firstpage, 'thumbnails')==0)
{
  echo "<input type=\"hidden\" name=\"single\" value=".$single." class=\"button\">";
}
echo "<input type=\"submit\" name=\"all\" value=\"$label_all\" class=\"button\">";
echo "<input type=\"submit\" name=\"thumbnails\" value=\"$label_thumbs\" class=\"button\">";
echo "</td>";
			
// only if $one selected show plus and minus buttons (for single pic view)
if (!isset($all)&&!isset($thumbnails)&&!isset($tplus)&&!isset($tminus)&&!isset($tminus_x)&&!isset($tplus_x))
{
  echo "<td align=\"right\">";
  echo "<input type=\"submit\" name=\"minus\" value=\"&lt;&lt;\" class=\"button\">";
  // !!! uncomment if you want to use an image button instead of <<
  //echo "<input type=\"image\" src=\"\" name=\"minus\" value=\"&lt;&lt;\" class=\"button\">";
  echo "<span class=\"numbers\">$bild / $size</span>";
  echo "<input type=\"submit\" name=\"plus\" value=\"&gt;&gt;\" class=\"button\">";
  // !!! uncomment if you want to use an image button instead of >>
  //echo "<input type=\"image\" src=\"\" name=\"plus\" value=\"&gt;&gt;\" class=\"button\">";
  echo "</td>";
}
	
// only if $thumbnail selected show tplus and tminus buttons (for thumbnails view)
if ($thumbs)
{
  if ((isset($thumbnails)||isset($tplus)||isset($tminus)||isset($tminus_x)||isset($tplus_x))&&!isset($all))
  {
    if (!isset($page)||$page=="")
	  $page=0;
    if (isset($tplus)||isset($tplus_x))
      $page++;
    if (isset($tminus)||isset($tminus_x))
      $page--;
    $psize = intval($size/($MAXX*$MAXY));
    if ($size%($MAXX*$MAXY)==0)
      $j = 1;
    else
      $j = 0;
    $count=$page*($MAXX*$MAXY);
    if ($count>=$size)
    {
      $page=0;
      $count=0;
    }
    if ($count<0)
    {
      $page=$psize-$j;
      $count=$page*($MAXX*$MAXY);
    }
    echo "<td align=\"right\">";
    echo "<input type=\"submit\" name=\"tminus\" value=\"&lt;&lt;\" class=\"button\">";
	// !!! uncomment if you want to use an image button instead of <<
	//echo "<input type=\"image\" src=\"\" name=\"tminus\" value=\"&gt;&gt;\" class=\"button\">";
    echo "<span class=\"numbers\">".($page+1)." / ".($psize+1-$j)."</span>";
    echo "<input type=\"submit\" name=\"tplus\" value=\"&gt;&gt;\" class=\"button\">";
	// !!! uncomment if you want to use an image button instead of >>
	//echo "<input type=\"image\" src=\"\" name=\"tplus\" value=\"&gt;&gt;\" class=\"button\">";
    echo "<input type=\"hidden\" name=\"page\" value=".$page.">";
    echo "</td>";
  }
}
else
{
  if(isset($page)){
    echo "<td align=\"right\">";
    echo "<input type=\"hidden\" name=\"page\" value=".$page.">";
    echo "</td>";
  }
}	
echo "</tr>";
echo "</form>\n";		
// --end form
			
// --begin print images
// thumbnails
if ((isset($thumbnails)||isset($tplus)||isset($tminus)||isset($tplus_x)||isset($tminus_x))&&!isset($all))
{
  echo "<tr>\n";
  echo "<td colspan=\"2\" align=\"center\" class=\"content\">";
  if ($thumbs)
  {
	$thumbheight = floor($thumbwidth*3/4);
    echo "<table cellspacing=\"4\" cellpadding=\"0\">";
    for ($y=0;$y<$MAXY;$y++)
    {
  	  echo "<tr>";
	  for ($x=0;$x<$MAXX;$x++)
	  {
	    $tn_src = $ordner."/thumbnails/tn_".$files[$count];
	    echo "<td align=\"center\">";
		if (strcmp($firstpage, 'thumbnails')==0)
		{
	      if (file_exists($tn_src))
		  { 
		    $image = GetImageSize($tn_src); 
	        echo "<a href='$phpself?ordner=".$ordner."&amp;one=set&amp;single=1&amp;bild=".($count+1)."'>";
			echo "<img src=\"$tn_src\" border=\"0\" class=\"thumbnails\" alt=\"$files[$count]\" width=\"$image[0]\" height=\"$image[1]\"></a>";
		  }
	      else
		  {
	        echo "<table width=\"$thumbwidth\" height=\"$thumbheight\" class=\"thumbnails\"><tr>";
			echo "<td align=\"center\" class=\"numbers\"><a href='$phpself?ordner=".$ordner."&amp;one=set&amp;single=1&amp;bild=".($count+1)."'>$files[$count]</a></td></tr></table>";
		  }
		}
		else
		{
		  if (file_exists($tn_src))
		  {
		    $image = GetImageSize($tn_src);
	        echo "<a href='$phpself?ordner=".$ordner."&amp;one=set&amp;bild=".($count+1)."'>";
			echo "<img src=\"$tn_src\" border=\"0\" class=\"thumbnails\" alt=\"$files[$count]\" width=\"$image[0]\" height=\"$image[1]\"></a>";
		  }
	      else
		  {
	        echo "<table width=\"$thumbwidth\" height=\"$thumbheight\" class=\"thumbnails\"><tr>";
			echo "<td align=\"center\" class=\"numbers\"><a href='$phpself?ordner=".$ordner."&amp;one=set&amp;bild=".($count+1)."'>$files[$count]</a></td></tr></table>";
		  }
		}
	    echo "</td>";
   	    $count++;				
	    if ($count==$size)
		  break;
  	  }
	  echo "</tr>";
	  if ($count==$size)
	    break;
    }		
    echo "</table>\n";
  }
  else
  {
    if (strcmp($firstpage, 'thumbnails')==0)
	{
      echo "<p class=\"numbers\"><br>$label_nothumb &nbsp; \n";
	  echo "<a href='$phpself?ordner=".$ordner."&amp;one=set&amp;single=1&amp;bild=1'>$label_start</a><br><br></p>";
	}
	else
	{
	  echo "<p class=\"numbers\"><br>$label_nothumb &nbsp; \n";
	  echo "<a href='$phpself?ordner=".$ordner."&amp;one=set&amp;bild=1'>$label_start</a><br><br></p>";
	}
  }
  echo "</td></tr>\n";
}

// all pictures
if (isset($all))
{	
  echo "<tr>\n";
  echo "<td colspan=\"2\" align=\"center\" class=\"content\">";
  $count = 0;	
  while ($file = each($files))
  {
    if (strcmp($firstpage, 'thumbnails')==0)
   	  echo "<a href='$phpself?ordner=".$ordner."&one=set&amp;single=1&amp;bild=".($count+1)."'><img src=\"";
	else
	  echo "<a href='$phpself?ordner=".$ordner."&one=set&amp;bild=".($count+1)."'><img src=\"";  
	echo $ordner."/".$file["value"];
	echo "\" class=\"images\" alt=\" \"></a>";
	$count++;
	if ($count<sizeof($files))
	  echo "<br>";
  }
  echo "</td></tr>";
}
			
// single picture
if (!isset($all)&&!isset($thumbnails)&&!isset($tplus)&&!isset($tminus)&&!isset($tminus_x)&&!isset($tplus_x))
{
  echo "<tr>\n";
  echo "<td colspan=\"2\" align=\"center\" class=\"content\">";
  echo "<img src=\"";
  echo $ordner."/".$files[$bild-1];
  echo "\" class=\"images\" alt=\" \">";
  echo "</td></tr>";
  // --end print images
}
echo "<tr><td colspan=\"2\" align=\"center\" class=\"content\">";
echo "<span class=\"copyright\"><a href=\"http://wingnut.net.ms/\">EasyGallery &copy; WingNut</a></span></td></tr></table>\n";
// please do not delete the copyright link. You may edit the color and size in the style.css.
echo '</div>';
?>
</body>
</html>