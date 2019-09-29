<!doctype html>
<html lang="{{ app()->getLocale() }}">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/frontello/css/frontello.css')}}">
    </head>
<header id="header" class="style-plain over">
  <div></div>
  <div class="header">
    <!-- Logo -->
    <div id="logo"> <a href="index.php"><img src="images/logo colored.png" class="logo" alt=""></a> </div>
    <!-- /Logo -->
    <!-- Menu -->
    <div id="menu"> <a href="#" class="menu-main-mobil-button" data-title="Navigate to ..."></a>
      <nav class="menu-main-area">
        <ul id="menu-main" class="menu-main-nav">
          <li class="menu-item "><a href="index">Home</a> </li>
          <li class="menu-item"><a href="welcome">Blog</a> </li>
          <li class="menu-item"><a href="gallery">Gallery</a> </li>
          <li class="menu-item"><a href="about">About Us</a> </li>
          <li class="menu-item"><a href="contact_Us">Contact Us</a></li>
          <li class="menu-item"><a href="download">Download</a></li>
          
        </ul>
      </nav>



        <title>{{config('app.name', 'HARVEST WORD ASSEMBLY')}}</title>


        <nav>
            <h1>Apostolic</h1>
        </nav>

        <body class="home sidebar-hide is-home menu-standard is-header-plain body-fullwide page-without-margin">
         
            @include('includes.navbar')
            
            <div class="container"> 
                 @yield('content')
            </div>

</body>

</html>