<!DOCTYPE html>
<html lang="ja">

<?php get_header(); ?>

<!-- ===============================
      Get in Touch with Me 
================================= -->

<section class="get-in-touch-with-me container fadeIn only-fadeIn">
  <h2 class="title left fadeIn from-bottom">Get in Touch with Me</h2>

  <div class="flex-container">
    <div class="left-box">
      <img src="<?php echo get_template_directory_uri(); ?>/images/img-height.png" alt="" class="contact-img" />
    </div>

    <div class="right-box">
      <form class="form">
        <?php the_content(); ?>
      </form>
    </div>
  </div>
</section>
</div>

<?php get_footer(); ?>
</body>

</html>