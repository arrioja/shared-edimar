<? 

//includes las functions**************************************************************************
///-**************************-*-*-*-*-*-------------------------------------------------------------

function imgno($i_entrada,$w_entrada,$h_entrada,$cual_img)
 {
 /*
    
        This script will create a thumbnail from $_GET[i] (image url), using $_GET[w] (width), $_GET[h] 

(height), and $_GET[adjust] (The last one only if both width and height are specified).
    
    */
    
    //Check it's only used for local images
    
	$_GET['i']=$i_entrada;
	$_GET['w']=$w_entrada;
	$_GET['h']=$h_entrada;
	$_GET['adjust']="w";
	
	if(strstr($_GET['i'], "http://")) {
        die;
    }
    
    //Setup header
   // header("Content-Type: image/jpeg");

    //Open Image according to file extension

    $ext = substr($_GET['i'], -3); //get extension
    
    /* Check image is in an allowed format and load it */
    
    if(strtolower($ext) == "gif") {
        if (!$src = imagecreatefromgif($_GET['i'])) {
            echo "Error opening $_GET[i]!"; exit;
        }
    } else if(strtolower($ext) == "jpg") {
        if (!$src = imagecreatefromjpeg($_GET['i'])) {
            echo "Error opening $_GET[i]!"; exit;
        }
    } else if(strtolower($ext) == "png") {
        if (!$src = imagecreatefrompng($_GET['i'])) {
            echo "Error opening $_GET[i]!"; exit;
        }
    } else {
        die;
    }
    
    $h = $_GET['h'];
    $w = $_GET['w'];        
    
    /* getimagesize returns
        array {
            [0] => "width - pixeles"
            [1] => "height - pixeles"
            [2] => "image type (1=GIF; 2=JPG; 3=PNG)"
            [3] => "width=xxx height=yyy"
        }
    */
    
    $size = getimagesize($_GET['i']);
    
    //Transform image as needed
    if($_GET[w] && !$_GET[h]) {
        
        //Setup image height
        $h = $size[1]/($size[0]/$w);
        
        //Create new image
        $image = imagecreatetruecolor($w, $h);
        
        //Resize image
        imagecopyresampled($image, $src, 0, 0, 0, 0, $w, $h, $size[0], $size[1]);
        
    } else if($_GET[h] && !$_GET[w]) {
        
        //Setup image width
        $w = $size[0]/($size[1]/$h);
        
        //Create new image
        $image = imagecreatetruecolor($w, $h);
        
        //Resize image
        imagecopyresampled($image, $src, 0, 0, 0, 0, $w, $h, $size[0], $size[1]);
        
    } else if($_GET['w'] && $_GET['h']) {
    
        //Create new image using desired values
        $image = imagecreatetruecolor($w, $h);
        //Set white background
        $white = imagecolorallocate($image, 255, 255, 255);
        imagefill($image, 0, 0, $white);
    
        if($_GET['adjust']=="h") {
            
            //Setup image height
            $newh = $size[1]/($size[0]/$w);
            
            //Setup $y
            $y = ($h-$newh)/2;
            
            //Resize image
            imagecopyresampled($image, $src, 0, $y, 0, 0, $w, $newh, $size[0], $size[1]);
            
                        
        } else {
        
            //Setup image width
            $neww = $size[0]/($size[1]/$h);
            
            //Setup $x
            $x = ($w-$neww)/2;
            
            //Resize image
            imagecopyresampled($image, $src, $x, 0, 0, 0, $neww, $h, $size[0], $size[1]);
                    
        }
    
    }
    
    //Output resampled image
	imagejpeg($image, "mini_int".$cual_img.".jpg", 90);
    /*imagedestroy($image);
    imagedestroy($src);*/
 
 }

?> 