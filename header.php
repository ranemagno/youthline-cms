<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php bloginfo('Youthline Project');?></title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">

</head>

<body <?php body_class(); ?>>
<nav id="navigation">
  <ul id="headerUl">
    <li>
      <img src="<?php bloginfo('stylesheet_directory'); ?>/images/youthlineLogo.png" alt="Youthline Logo" id="logo">
    </li>
    <?php $menu_args = ['theme_location' => 'primary', 'menu_class' => "navbar-nav"]; ?>
    <?php wp_nav_menu($menu_args); ?>
    <li>
      <button type="button" name="donateNavBtn" id="donateNavBtn">Donate</button>
    </li>
  </ul>

</nav>

<script type="text/javascript">
var prevScrollpos = window.pageYOffset;window.onscroll =
  function() {  var currentScrollPos = window.pageYOffset;  if
  (prevScrollpos > currentScrollPos) {   
    document.querySelector("#navigation").style.top = "0";
  } else {   
    document.querySelector("#navigation").style.top = "-10vh"; 
  } 
  prevScrollpos = currentScrollPos;}

</script>
<?php wp_head(); ?>
