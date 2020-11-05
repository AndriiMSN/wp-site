<footer>
    <div class="container">

      <div class="navigation">
        <h3>
          <?php the_field('footer_navigation_title'); ?>
        </h3>
        <?php wp_nav_menu(array(
          'theme_location'=>'bottom',
          'container'=> null,
          'menu_class'=> '',
          'menu_id'=>'footer-menu'
        ));?>
      </div>

      <div class="contacts">
        <h3><?php the_field('footer_contacts_title'); ?></h3>
        <ul>
          <li class="phone">
            <a href="tel:+7925678745">
             <?php the_field('footer_contacts_phone'); ?>
            </a> 
          </li>
          <li class="mail"><a href="mailto:contact@blueowlcreative.com"><?php the_field('footer_contacts_email'); ?></a> </li>
          <li class="address"><?php the_field('footer_contacts_address'); ?></li>
        </ul>

      </div>

      <div class="form">
      <?php  echo do_shortcode('[contact-form-7 id="100" title="Footer Contact Form"]');?>
      </div>
    </div>
  </footer>
  <?php wp_footer(); ?>
</body>

</html>