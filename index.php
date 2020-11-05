<?php get_header() ?>



<main>
  <section class="general">
    <!-- Slider main container -->
    <div class="swiper-container">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <?php

        $posts = get_posts(array(
          'numberposts' => -1,
          'post_type'   => 'General slider',
          'suppress_filters' => true,
        ));

        foreach ($posts as $post) {

          setup_postdata($post);
        ?>
        <div class="swiper-slide" style="background-image: url(
                     <?php echo get_the_post_thumbnail_url(); ?>); background-repeat: no-repeat;
                      background-size: cover;">
          <div class="container">
            <!-- If we need navigation buttons -->

            <div class="content">
              <h1><?php the_title(); ?></h1>
              <?php the_excerpt(); ?>
            </div>
          </div>
        </div>
        <?php
        }

        wp_reset_postdata();
        ?>

      </div>
      <!-- If we need pagination -->
      <div class="swiper-pagination"></div>

      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>

      <!-- If we need scrollbar
        <div class="swiper-scrollbar"></div> -->
    </div>

  </section>

  <section class="about">
    <div class="container">

      <?php

      $posts = get_posts(array(
        'numberposts' => -1,
        'post_type'   => 'About',
        'order' => 'ASC',
        'suppress_filters' => true,
      ));

      foreach ($posts as $post) {

        setup_postdata($post);
      ?>
      <div class="about_item">
        <div class="about_item_img">
          <?php the_post_thumbnail('full'); ?>
        </div>
        <h2><?php the_title(); ?></h2>
        <?php the_excerpt(); ?>
      </div>
      <?php
      }

      wp_reset_postdata();
      ?>


    </div>
  </section>

  <section class="portfolio">
    <div class="container">
      <!-- If we need navigation buttons -->
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
      <h2>PORTFOLIO</h2>
      <div class="swiper-container">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">

          <?php

          $posts = get_posts(array(
            'numberposts' => -1,
            'post_type'   => 'Portfolio',
            'order' => 'ASC',
            'suppress_filters' => true,
          ));

          foreach ($posts as $post) {

            setup_postdata($post);
          ?>
          <div class="swiper-slide">
            <div class="overlay">
              <?php the_post_thumbnail('full'); ?>
            </div>
            <p><?php the_title(); ?></p>
          </div>
          <?php
          }

          wp_reset_postdata();
          ?>


        </div>



      </div>
    </div>
  </section>

  <section class="latest_news">
    <div class="container">
      <h2>WHAT IS LOREM IPSUM?</h2>
      <?php
      $posts = get_posts(array(
        'numberposts' => -1,
        'post_type'   => 'News',
        'order' => 'ASC',
        'suppress_filters' => true,
      ));

      foreach ($posts as $post) {

        setup_postdata($post);
      ?>
      <div class="latest_news_item">

        <div class="latest_news_item_img">

          <?php the_post_thumbnail('full'); ?>

        </div>

        <div class="latest_news_item_description">

          <h3>
            <?php the_title(); ?>
          </h3>

          <?php the_content(); ?>

        </div>

      </div>
      <?php
      }

      wp_reset_postdata();
      ?>

    </div>
  </section>
</main>



<?php get_footer() ?>