
<?php
// Page title display function
function display_head ($page_title = null) {
	echo <<<EOD
	<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="format-detection" content="telephone=no">
<link rel="icon" type="image/x-icon" href="images/favicon.ico" />
<link rel='stylesheet' href='css/instagram/instagram.min.css' type='text/css' media='all' />
<link rel='stylesheet' href='css/mt-base/widgets.min.css' type='text/css' media='all' />
<link rel='stylesheet' href='css/unyson/frontend-grid.min.css' type='text/css' media='all' />
<link rel='stylesheet' href='css/unyson.min.css' type='text/css' media='all' />
<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Crimson+Text%3A400%2C400i%2C600%2C600i%2C700%2C700i%7CPlayfair+Display%3A400%2C400i%2C700%2C700i%7CSource+Sans+Pro%3A200%2C200i%2C300%2C300i%2C400%2C400i%2C600%2C600i%2C700%2C700i&amp;' type='text/css' media='all' />
<link rel='stylesheet' href='css/fontello/css/fontello.css' type='text/css' media='all' />
<link rel='stylesheet' href='css/style.min.css' type='text/css' media='all' />
<link rel='stylesheet' href='css/skin.min.css' type='text/css' media='all' />
<link rel='stylesheet' href='css/responsive.min.css' type='text/css' media='all' />
<link rel='stylesheet' href='js/additionally/magnific/magnific-popup.css' type='text/css' media='all' />
</head>
EOD;
};

// Header section
function display_header($page_title = null) {

if ($page_title == "") {
echo <<<EOD
    <header id="header" class="style-plain over">
      <div class="top-panel-sticky-wrap"></div>
      <div class="top-panel">
        <!-- Logo -->
        <div id="logo"> <a href="index.php"><img src="images/logo colored.png" class="logo" alt=""></a> </div>
        <!-- /Logo -->
        <!-- Menu -->
        <div id="menu"> <a href="#" class="menu-main-mobil-button" data-title="Navigate to ..."></a>
          <nav class="menu-main-area">
            <ul id="menu-main" class="menu-main-nav">
              <li class="menu-item current-menu-ancestor current-menu-parent"><a href="index.php">Home</a> </li>
              <li class="menu-item"><a href="sermons.php">Sermons</a> </li>
              <li class="menu-item"><a href="blog.php">Blog</a> </li>
              <li class="menu-item"><a href="gallery.php">Gallery</a> </li>
              <li class="menu-item"><a href="about.php">About</a> </li>
              <li class="menu-item"><a href="contact.php">Contact</a></li>
            </ul>
          </nav>
        </div>
        <!-- /Menu -->
      </div>
    </header>
	
EOD;
} //end of home header

else {
echo <<<EOD
    <header id="header" class="style-standard with-bg-image">
      <div class="top-panel-sticky-wrap"></div>
      <div class="top-panel">
        <!-- Logo -->
        <div id="logo"> <a href="index.php"><img src="images/logo colored.png" class="logo" alt=""></a> </div>
        <!-- /Logo -->
        <!-- Menu -->
        <div id="menu"> <a href="#" class="menu-main-mobil-button" data-title="Navigate to ..."></a>
          <nav class="menu-main-area">
            <ul id="menu-main" class="menu-main-nav">
              <li class="menu-item"><a href="index.php">Home</a></li>
EOD;
if ($page_title == "sermons") {
echo <<<EOD
              <li class="menu-item current-menu-ancestor current-menu-parent"><a href="sermons.php">Sermons</a></li>
              <li class="menu-item"><a href="blog.php">Blog</a></li>
              <li class="menu-item"><a href="gallery.php">Gallery</a></li>
              <li class="menu-item"><a href="about.php">About</a></li>
              <li class="menu-item"><a href="contact.php">Contact</a></li>
			              </ul>
          </nav>
        </div>
        <!-- /Menu -->
      </div>
      <!-- Header Title Top -->
      <div id="header-title-top">
        <div class="page-title">
          <h1>Sermons</h1>

EOD;
} else if ($page_title == "blog") {
echo <<<EOD
              <li class="menu-item"><a href="sermons.php">Sermons</a></li>
              <li class="menu-item current-menu-ancestor current-menu-parent"><a href="blog.php">Blog</a></li>
              <li class="menu-item"><a href="gallery.php">Gallery</a></li>
              <li class="menu-item"><a href="about.php">About</a></li>
              <li class="menu-item"><a href="contact.php">Contact</a></li>
            </ul>
          </nav>
        </div>
        <!-- /Menu -->
      </div>
      <!-- Header Title Top -->
      <div id="header-title-top">
        <div class="page-title">
          <h1>Blog</h1>
EOD;

} else if ($page_title == "gallery") {
echo <<<EOD
              <li class="menu-item"><a href="sermons.php">Sermons</a></li>
              <li class="menu-item"><a href="blog.php">Blog</a></li>
              <li class="menu-item current-menu-ancestor current-menu-parent"><a href="gallery.php">Gallery</a></li>
              <li class="menu-item"><a href="about.php">About</a></li>
              <li class="menu-item"><a href="contact.php">Contact</a></li>
            </ul>
          </nav>
        </div>
        <!-- /Menu -->
      </div>
      <!-- Header Title Top -->
      <div id="header-title-top">
        <div class="page-title">
          <h1>Gallery</h1>
EOD;

} else if ($page_title == "about") {
echo <<<EOD
              <li class="menu-item"><a href="sermons.php">Sermons</a></li>
              <li class="menu-item"><a href="blog.php">Blog</a></li>
              <li class="menu-item"><a href="gallery.php">Gallery</a></li>
              <li class="menu-item current-menu-ancestor current-menu-parent"><a href="about.php">About</a></li>
              <li class="menu-item"><a href="contact.php">Contact</a></li>
            </ul>
          </nav>
        </div>
        <!-- /Menu -->
      </div>
      <!-- Header Title Top -->
      <div id="header-title-top">
        <div class="page-title">
          <h1>About</h1>
EOD;
} else if ($page_title == "contact") {
echo <<<EOD
              <li class="menu-item"><a href="sermons.php">Sermons</a></li>
              <li class="menu-item"><a href="blog.php">Blog</a></li>
              <li class="menu-item"><a href="gallery.php">Gallery</a></li>
              <li class="menu-item"><a href="about.php">About</a></li>
              <li class="menu-item current-menu-ancestor current-menu-parent"><a href="contact.php">Contact</a></li>
            </ul>
          </nav>
        </div>
        <!-- /Menu -->
      </div>
      <!-- Header Title Top -->
      <div id="header-title-top">
        <div class="page-title">
          <h1>Contact</h1>
EOD;
}
echo <<<EOD
        </div>
      </div>
      <!-- /Header Title Top -->
    </header>
EOD;
};
};


//Footer display function
function display_footer() {
echo <<<EOD
    
    <div class="widgets_below_page widget-area">
      <div class="wrap">
        <aside class="widget widget_text">
          <div class="textwidget">
            <div id="sb_instagram" class="sbi sbi_disable_mobile sbi_col_6"  data-num="12">
              <div id="sbi_images">
                <div class="sbi_item">
                  <div class="sbi_photo_wrap"><a class="sbi_photo" href="#"><img src="images/instagram/image_1.jpg" alt=""></a></div>
                </div>
                <div class="sbi_item">
                  <div class="sbi_photo_wrap"><a class="sbi_photo" href="#"><img src="images/instagram/image_2.jpg" alt=""></a></div>
                </div>
                <div class="sbi_item">
                  <div class="sbi_photo_wrap"><a class="sbi_photo" href="#"><img src="images/instagram/image_3.jpg" alt=""></a> </div>
                </div>
                <div class="sbi_item">
                  <div class="sbi_photo_wrap"><a class="sbi_photo" href="#"><img src="images/instagram/image_4.jpg" alt=""></a> </div>
                </div>
                <div class="sbi_item">
                  <div class="sbi_photo_wrap"><a class="sbi_photo" href="#"><img src="images/instagram/image_5.jpg" alt=""></a> </div>
                </div>
                <div class="sbi_item">
                  <div class="sbi_photo_wrap"><a class="sbi_photo" href="#"><img src="images/instagram/image_6.jpg" alt=""></a> </div>
                </div>
                <div class="sbi_item">
                  <div class="sbi_photo_wrap"><a class="sbi_photo" href="#"><img src="images/instagram/image_7.jpg" alt=""></a> </div>
                </div>
                <div class="sbi_item">
                  <div class="sbi_photo_wrap"><a class="sbi_photo" href="#"><img src="images/instagram/image_8.jpg" alt=""></a> </div>
                </div>
                <div class="sbi_item">
                  <div class="sbi_photo_wrap"><a class="sbi_photo" href="#"><img src="images/instagram/image_9.jpg" alt=""></a> </div>
                </div>
              </div>
              <div id="sbi_load">
                <div class="sbi_follow_btn"><a href="#">Follow Us</a> </div>
              </div>
            </div>
          </div>
        </aside>
        <aside class="widget mt-base-widget mt-base-widget-google-map">
          <div class="mt-googlemap style-normal">
            <div class="mt-header">
              <h5 class="mt-subtitle">Are You Free This Sunday?</h5>
              <h3 class="mt-title">COME AND JOIN US</h3>
            </div>
            <div class="mt-map" id="mt-googlemap-1" data-zoom="16" data-point="images/point.png" data-address="Castello Piccolomini, Celano, AQ"></div>
          </div>
        </aside>
        <aside class="widget mt-base-widget mt-base-widget-about">
          <div class="about-logo"> <a href="index.html"><img src="images/logo-light.png" alt="logo"></a> </div>
          <div class="about-description">
            <form class="mc4wp-form" method="post">
              <div class="mc4wp-form-fields">
                <p>
                  <input type="email" name="EMAIL" placeholder="Your E-mail" required />
                </p>
                <p>
                  <input type="submit" value="Subscribe" />
                </p>
              </div>
            </form>
          </div>
        </aside>
      </div>
    </div>
    <!-- /Widgets Below Page -->
    <!-- Copyright -->
    <div id="copyright">
      <div class="content-container">
        <div class="copyright-text">Harvest word Assembly &copy; 2018. All Rights Reserved.</div>
      </div>
    </div>
  </div>
EOD;
}



// text truncate function
function truncate_text($text = NULL, $max = NULL) {
	$temp = substr($text, 0, $max);
	$last = strrpos($temp, " ");
	$temp = substr($temp, 0, $last);
	$temp = preg_replace("/([^\w])$/", "", $temp);
	return ("{$temp}...");
}

// This function makes a square thumb
function makeSquareThumbs ($image = NULL, $upload_dir = NULL) {
	$metaData = getimagesize($upload_dir.$image);
	$oldw = $metaData[0];
	$oldh = $metaData[1];
	
	// The image extention
	switch($metaData['mime']){
		case 'image/jpeg':
		$src_img = imagecreatefromjpeg($upload_dir.$image);
		break;
		case 'image/png':
		$src_img = imagecreatefrompng($upload_dir.$image);
		break;
		case 'image/gif':
		$src_img = imagecreatefromgif($upload_dir.$image);
		break;
		case 'image/wbmp':
		$src_img = imagecreatefromwbmp($upload_dir.$image);
		break;
		default:
		$src_img = imagecreatefromjpeg($upload_dir.$image);
		break;
	}
	// The centre of the image
	if ($oldw > $oldh) {
		$centre_x = ($oldw - $oldh) / 2;
		$centre_x = ceil($centre_x);
		$centre_y = 0;
		$thumbw = $oldh;
		$thumbh = $oldh;
	} else if ($oldw < $oldh) {
		$centre_x = 0;
		$centre_y = ($oldh - $oldw) / 2;
		$centre_y = ceil($centre_y);
		$thumbw = $oldw;
		$thumbh = $oldw;
	} else {
		$centre_x = 0;
		$centre_y = 0;
		$thumbw = $oldw;
		$thumbh = $oldh;
	}
	$dest_img = imagecreatetruecolor($thumbw, $thumbh);
	imagecopy($dest_img, $src_img, 0, 0, $centre_x, $centre_y, $oldw, $oldh);
	imagejpeg($dest_img, $upload_dir."t_".$image, 100);

	// Make small thumbnails
	$metaData = getimagesize($upload_dir."t_".$image);
	$thumbPrefix = '';
	$dimensions = array(165, 130, 50);
	foreach ($dimensions as $wh) {
		if ($wh == 165) {
			$thumbPrefix = "b";
		} else if ($wh == 130) {
			$thumbPrefix = "m";
		} else if ($wh == 50) {
			$thumbPrefix = "s";
		}
		$src_img = '';
		switch($metaData['mime']){
			case 'image/jpeg':
			$src_img = imagecreatefromjpeg($upload_dir."t_".$image);
			break;
			case 'image/png':
			$src_img = imagecreatefrompng($upload_dir."t_".$image);
			break;
			case 'image/gif':
			$src_img = imagecreatefromgif($upload_dir."t_".$image);
			break;
			case 'image/wbmp':
			$src_img = imagecreatefromwbmp($upload_dir."t_".$image);
			break;
			default:
			$src_img = imagecreatefromjpeg($upload_dir."t_".$image);
			break;
		}
		if($src_img){
			$dest_img = imagecreatetruecolor($wh,$wh);
			imagecopyresampled($dest_img, $src_img,0,0,0,0,$wh,$wh,$metaData[0],$metaData[1]);
			imagejpeg($dest_img, $upload_dir.$thumbPrefix."t_".$image);
			imagedestroy($dest_img);
		}
	}
}



// function that redirects to another page
function redirect($link = NULL) {
	header ("location: {$link}");
	exit();
}
?>
