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
 <div class="top-panel-sticky-wrap"></div>
 <div class="top-panel">
   <!-- Logo -->
   <div id="logo"> <a href="index.php"><img src="images/logo colored.png" class="logo" alt=""></a> </div>
   <!-- /Logo -->
   <!-- Menu -->
   <div id="menu"> <a href="#" class="menu-main-mobil-button" data-title="Navigate to ..."></a>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="menu-item current-menu-ancestor current-menu-parent"><a href="index.php">Home</a> </li>
         <li class="menu-item"><a href="sermons">Sermons</a> </li>
         <li class="menu-item"><a href="blog">Blog</a> </li>
         <li class="menu-item"><a href="gallery">Gallery</a> </li>
         <li class="menu-item"><a href="about">About</a> </li>
         <li class="menu-item"><a href="contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
     
   </div>
   <!-- /Menu -->
 </div>
 
 <title>{{config('app.name', 'HARVEST WORD ASSEMBLY')}}</title>


 <nav>
     <h1>Apostolic</h1>
 </nav>

 <body class="home sidebar-hide is-home menu-standard is-header-plain body-fullwide page-without-margin">
  
     @include('includes.navbar')
     
     <div class="container"> 
          @yield('blog_content')
     </div>

</body>

</html>