<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="description" content="Designo web site" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" integrity="sha384-ejwKkLla8gPP8t2u0eQyL0Q/4ItcnyveF505U0NIobD/SMsNyXrLti6CWaD0L52l" crossorigin="anonymous" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri(); ?>/dist/style.min.css" />
  <title>Designo - Home</title>
</head>

<body>
  <!--Made with love by Arthur Lefevre / Duc Luu / Louis Collard-->
  <header class="bloc_header">
    <a title="designo Home page" href="index.html"><img class="header_img_logo" src="./src/img/logo_header.png" alt="logo designo" /></a>


    <?php wp_nav_menu(array('container' => false)); ?>



    <nav class="header_nav_mobile">
      <div class="toggle">
        <img src="./src/img/logo_header.png" alt="logo designo" class="header_logo_mobile" />
        <img src="./src/img/menu_burger_open.png" alt="menu-burger-open" class="menu-burger-open" />
        <img src="./src/img/menu_burger_close.png" alt="menu-burger-close" class="menu-burger-close" />
      </div>
      <ul class="header_nav_mobile_ul">
        <li class="header_nav_mobile_ul_li"><a class="header_nav_mobile_ul_li_a" href="about.html" title="designo about page">OUR COMPANY</a></li>
        <li class="header_nav_mobile_ul_li"><a class="header_nav_mobile_ul_li_a" href="locations.html" title="designo locations page">LOCATIONS</a></li>
        <li class="header_nav_mobile_ul_li"><a class="header_nav_mobile_ul_li_a" href="contact.html" title="designo contact page">CONTACT</a></li>
      </ul>
    </nav>
  </header>

  <?php wp_head(); ?>