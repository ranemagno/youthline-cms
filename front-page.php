<?php get_header(); ?>
<!DOCTYPE html>

<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Youthline Project</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="style.css">

</head>

<body>

  <nav>
    <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
  </nav>

  <div class="c-landing">
    <h1 class="head-text">Changing Lives</h1>
  </div>

  <div class="c-feature-article">
    <div class="feature-image"></div>
    <div class="feature-text">
      <div class="text">
        <h1>Need Some Help?</h1>
        <p>We're here to help, and are here for you. Feel free to send us a text on 234.</p>
        <button type="button" name="button" id="featureBtn">Get Help</button>
      </div>
    </div>
  </div>

  <div class="c-feature-posts">
    <div class="sub-posts">
      <div class="post">
        <div class="post-image"></div>
        <div class="post-blurb">
          <h3>Counselling</h3>
          <p>Learn more about our counselling services across New Zealand. We provide counselling by phone, text, chat, Skype and in person. Most of our services are free, the rest are affordable.</p>
        </div>
      </div>
      <div class="post">
        <div class="post-image"></div>
        <div class="post-blurb">
          <h3>Counselling</h3>
          <p>Learn more about our counselling services across New Zealand. We provide counselling by phone, text, chat, Skype and in person. Most of our services are free, the rest are affordable.</p>
        </div>
      </div>
      <div class="post">
        <div class="post-image"></div>
        <div class="post-blurb">
          <h3>Counselling</h3>
          <p>Learn more about our counselling services across New Zealand. We provide counselling by phone, text, chat, Skype and in person. Most of our services are free, the rest are affordable.</p>
        </div>
      </div>
      <div class="post">
        <div class="post-image"></div>
        <div class="post-blurb">
          <h3>Counselling</h3>
          <p>Learn more about our counselling services across New Zealand. We provide counselling by phone, text, chat, Skype and in person. Most of our services are free, the rest are affordable.</p>
        </div>
      </div>
    </div>
    <div class="main-post">
      <div class="main-post-image"></div>
      <div class="main-post-blurb">
        <h3>Good2Great</h3>
        <p>Good2Great is about recognising your inner awesome and unleashing it on the world. We all encounter tricky situations, and this programme gives you simple tools to manage them.</p>
      </div>
      <button type="button" name="button" id="mainPostBtn">Learn More</button>
    </div>
  </div>
  
</body>

</html>
