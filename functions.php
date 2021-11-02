<?php

add_theme_support('post-thumbnails');

function youthline_theme_assets() {
  wp_enqueue_style('youthline-style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'youthline_theme_assets');

register_nav_menus(['primary'=> 'Primary Menu']);


// Customizable Navigation
function nav_opt($wp_customize) {

  $wp_customize->add_section("nav_section", array(
    "title" => "Navigation Elements", "custom_setting",
    "priority" => 149
  ));

}


// Customizable Landing Page
function landing_page_opt($wp_customize) {

  $wp_customize->add_section("landing_page_section", array(
    "title" => "Landing Page Elements", "custom_setting",
    "priority" => 150
  ));

  // Headline
  $wp_customize->add_setting("headline_setting", array(
    "default" => "Impact Text"
  ));
  $wp_customize->add_control("headline_control", array(
    "label" => "Enter a custom header",
    "section" => "landing_page_section",
    "settings" => "headline_setting",
    "type" => "text"
  ));

  // Hero Img
  $wp_customize->add_setting("hero_img_setting", array(
    "default" => "https://via.placeholder.com/1920x1080"
  ));
  $wp_customize->add_control( new WP_Customize_Image_Control(
    $wp_customize, 'hero_img_setting', array(
      "label" => "Upload a hero image",
      "section" => "landing_page_section",
      "settings" => "hero_img_setting"
    ))
  );

  // Button
  $wp_customize->add_setting("btn_color_setting", array(
    "default" => "white"
  ));

  $wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize, 'btn_color_setting', array(
      "label" => "Button color",
      "section" => "landing_page_section",
      "settings" => "btn_color_setting"
  )));

  // Button Text
  $wp_customize->add_setting("btn_text_color_setting", array(
    "default" => "#171B4B"
  ));

  $wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize, 'btn_text_color_setting', array(
      "label" => "Button text color",
      "section" => "landing_page_section",
      "settings" => "btn_text_color_setting"
  )));

  // Button Hover
  $wp_customize->add_setting("btn_hover_color_setting", array(
    "default" => "#171B4B"
  ));

  $wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize, 'btn_hover_color_setting', array(
      "label" => "Button hover color",
      "section" => "landing_page_section",
      "settings" => "btn_hover_color_setting"
  )));

  // Button Text Hover
  $wp_customize->add_setting("btn_text_hover_color_setting", array(
    "default" => "white"
  ));

  $wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize, 'btn_text_hover_color_setting', array(
      "label" => "Button text hover color",
      "section" => "landing_page_section",
      "settings" => "btn_text_hover_color_setting"
  )));

}

function landing_page_styles() {
  $hero_img = get_theme_mod("hero_img_setting");
  $btn_color = get_theme_mod("btn_color_setting");
  $btn_hover_color = get_theme_mod("btn_hover_color_setting");
  $btn_text_color = get_theme_mod("btn_text_color_setting");
  $btn_text_hover_color = get_theme_mod("btn_text_hover_color_setting");



  ?>
  <style type="text/css">
    .landing-cont {
      background-image: url("<?php echo $hero_img; ?>");
    }
    #landingBtn {
      background-color: <?php echo $btn_color; ?>;
      color: <?php echo $btn_text_color; ?>
    }
    #landingBtn:hover {
      background-color: <?php echo $btn_hover_color; ?>;
      color: <?php echo $btn_text_hover_color; ?>
    }
  </style>
  <?php
}

add_action('wp_head', 'landing_page_styles');
add_action("customize_register", "landing_page_opt");

?>
