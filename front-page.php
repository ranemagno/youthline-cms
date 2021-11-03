<?php get_header(); ?>

  <div class="landing-cont">
    <h1><?php echo get_theme_mod('headline_setting');?></h1>
    <!-- <h1>We are <br> here  to listen.</h1> -->
    <button id="landingBtn">Need Help?</button>
  </div>

  <div class="service-cont">
    <div class="service-header">
      <h1>Quick Support</h1>
    </div>
    <div class="option-cont">

      <div class="option">
        <div class="icon">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/images/locationMarker.svg" alt="Location Icon">
        </div>
        <div class="label">
          <h2>Nearest Centers</h2>
        </div>
        <div class="description">
          Youthline has centres located around Auckland, in Palmerston North, Wellington, Central South Island, Otago and Southland.
        </div>
        <div class="search-btn">
          <button type="button" name="searchLocation" id="searchLocation">Search</button>
        </div>
      </div>

      <div class="option">
        <div class="icon">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/images/phone.svg" alt="Phone Icon">
        </div>
        <div class="label">
          <h2>Nearest Centers</h2>
        </div>
        <div class="description">
          Free text 2234 <br>
          Free call 0800 37 66 33 <br><br>
          No problem is too big or too small - we are here to listen and support you.
        </div>
      </div>

      <div class="option">
        <div class="icon">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/images/chatBoxes.svg" alt="Chat Icon">
        </div>
        <div class="label">
          <h2>Nearest Centers</h2>
        </div>
        <div class="description">
          This service is available for any young person or anyone who is supporting a young person. Click on the chat bubble bottom right to get some support.
        </div>
      </div>

    </div>
  </div>

  <div class="posts-cont">
    <div class="service-header service-2">

    </div>
    <h1>Recent Stories</h1>
    <div class="block-cont">
      <div class="blocks">

        <?php
          if (have_posts() ) :
            $counter = 0;
            while (have_posts() ) : the_post();
            $counter++;
            $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
            if ($counter > 4) {
              break;
            }
        ?>

          <div class="block block-<?php echo $counter; ?>"
            style="background-image: url('<?php echo $url; ?>');" >
            <div class="block-header">
              <h2><?php the_title(); ?></h2>
            </div>
            <div class="block-text">
              <p><?php the_excerpt(); ?></p>
            </div>
          </div>

        <?php
            endwhile;
          else : echo '<h2>There are no posts!</h2>';
        endif;
        ?>

      </div>
    </div>
  </div>

  <div class="service-cont">
    <div class="service-header h-2">
      <h1>Support Our Youth</h1>
    </div>
    <div class="option-cont">

      <div class="option">
        <div class="icon">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/images/dollarSign.svg" alt="Location Icon">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/images/chatBubble.svg" alt="Message Icon">
        </div>
        <div class="description">
          $30 can help respond to 6 text messages through the Helpline.
        </div>
      </div>

      <div class="option">
        <div class="icon">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/images/dollarSign.svg" alt="Location Icon">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/images/phoneCall.svg" alt="Phone Call Icon">
        </div>
        <div class="description">
          $60 can provide a young person with 24 minutes of phone support.
        </div>
      </div>

      <div class="option">
        <div class="icon">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/images/dollarSign.svg" alt="Location Icon">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/images/moreTime.svg" alt="More Time Icon">
        </div>
        <div class="description">
          $150 can help keep our Helpline running for one hour.
        </div>
      </div>

      <div class="donate-cont">
        <button type="button" name="donate" id="donateBtn">Donate</button>
      </div>

    </div>
  </div>

  <div class="newsletter-cont">
    <div class="newsletter-img">
    </div>
    <div class="newsletter-form">
      <div class="service-header h-3">
        <h1>Keep Posted</h1>
      </div>
      <div class="label l-2">
        <h2>Subscribe to our newsletter</h2>
      </div>
      <form class="home-form" action="" method="post">
        <label class="home-form-label" for="nameInput">Name</label>
        <input class="home-form-input" type="text" name="nameInput" placeholder="Your Name">
        <label fclass="home-form-label" or="emailInput">Email</label>
        <input class="home-form-input" type="email" name="emailInput" placeholder="emailexample@gmail.com">
        <label class="home-form-label" for="phoneInput">Phone Number</label>
        <input class="home-form-input" type="text" name="phoneInput" placeholder="021 234 5678">
        <button type="button" name="formBtn" id="formBtn">Subscribe</button>
      </form>

    </div>
  </div>
</body>

<?php get_footer(); ?>

</html>
