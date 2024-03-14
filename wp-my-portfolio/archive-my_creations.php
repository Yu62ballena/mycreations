<!DOCTYPE html>
<html lang="ja">

<?php get_header(); ?>

<!-- ===============================
      my creations 一覧 
    ================================= -->

<section class="all-of-my-creations container">
  <h2 class="title left fadeIn from-bottom">All of My Creatons</h2>

  <?php
  $args = array(
    'post_type' => 'my_creations',
    'posts_per_page' => 10,
    'orderby' => 'date',
    'order' => 'ASC',
    'taxonomy' => 'top',
  );

  query_posts($args);

  while (have_posts()) : the_post();
    setup_postdata($post);

    $language = get_post_meta(get_the_ID(), 'language', true);
    $url = get_post_meta(get_the_ID(), 'url', true);
  ?>

    <!-- 1つ目 -->
    <div class="my-creation fadeIn only-fadeIn">
      <div class="flex-container">
        <div class="left-box">
          <img src="<?php the_post_thumbnail_url(array(600, 400)); ?>" alt="" class="creation-img" />
        </div>
        <div class="right-box">
          <h3 class="creation-title"><?php the_title(); ?></h3>
          <p class="description"><?php the_content(); ?></p>
          <p class="language">使用技術：<?php echo $language ?></p>
          <div class="creation-btn-wrapper">
            <button class="each-creation-btn">
              <a href="<?php echo $url; ?>">view more</a>
              <span></span>
            </button>
          </div>
        </div>
      </div>
    </div>

  <?php
    wp_reset_postdata();
  endwhile;
  ?>

</section>
</div>

<?php get_footer(); ?>
</body>

</html>