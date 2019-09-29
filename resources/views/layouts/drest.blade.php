<!doctype html>

        
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
 
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="format-detection" content="telephone=no">

<link rel="stylesheet" href="{{asset('css/app.css')}}">
<link rel="stylesheet" href="{{asset('css/frontello/css/frontello.css')}}">

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
<header>
<div class="top-panel-sticky-wrap"></div>
<div class="header">
  <!-- Logo -->
  <div id="logo"> <a href="index.php"><img src="images/logo colored.png" class="logo" alt=""></a> </div>
  <!-- /Logo -->
  <!-- Menu -->
  <div id="menu"> <a href="#" class="menu-main-mobil-button" data-title="Navigate to ..."></a>
    <div class="menu-main-area">
      <ul id="menu-main" class="menu-main-nav">
        <li class="menu-item current-menu-ancestor current-menu-parent"><a href="index.php">Home</a> </li>
        <li class="menu-item"><a href="sermons">Sermons</a> </li>
        <li class="menu-item"><a href="blog">Blog</a> </li>
        <li class="menu-item"><a href="gallery">Gallery</a> </li>
        <li class="menu-item"><a href="about">About</a> </li>
        <li class="menu-item"><a href="contact">Contact Us</a></li>
      </ul>
    </div>
  </div>
</header>

  <!-- /Menu -->
</div>
    <nav>



        <body class="home is-home menu-standard is-header-plain body-fullwide page-without-margin">

            
            <div class="container"> 
                 @yield('blog_content')
            </div>

          </body>

</html>