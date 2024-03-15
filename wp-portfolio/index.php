<!DOCTYPE html>
<html lang="ja">

<?php get_header(); ?>
<?php $myname = my_name(); ?>


<!-- ===============================
        first-view
    ================================= -->
<section class="first-view">
  <div class="container">
    <div class="main-view">
      <!-- header -->

      <h2 class="catch-copy fadeIn only-fadeIn">キャッチコピー</h2>
      <div class="main-img1 fadeIn only-fadeIn">
        <img src="<?php echo get_template_directory_uri(); ?>/images/img-height.png" alt="" />
      </div>
      <div class="main-img2 fadeIn only-fadeIn">
        <img src="<?php echo get_template_directory_uri(); ?>/images/img-height.png" alt="" />
      </div>

      <!-- nav -->
      <?php get_template_part('includes/nav'); ?>
    </div>
    <!-- my-name -->
  </div>
  <div class="my-name">
    <span class="pc"><?php echo $myname['my_name']; ?></span>
    <span class="sp"><?php echo $myname['my_first_name']; ?><br /><?php echo $myname['my_family_name']; ?></span>
  </div>
</section>

<!-- ===============================
        what can i do?
    ================================= -->
<section id="what-can-i-do" class="what-can-i-do container">
  <h2 class="title left fadeIn from-bottom">What can I do?</h2>

  <!-- カード3枚 -->
  <div class="flex-container">
    <?php
    $args = array(
      'post_type' => 'what_can_i_do',
      'posts_per_page' => 3,
      'orderby' => 'date',
      'order' => 'ASC',
    );

    $counter = 1;

    query_posts($args);
    while (have_posts()) : the_post();
      setup_postdata($post);
    ?>

      <div class="work-card-wrapper">
        <span class="work-num fadeIn from-left"><?php echo $counter; ?></span>
        <div class="cover-slide sfrom-bottom">
          <div class="my-work-card slide-image">
            <div class="img-card">
              <img src="<?php the_post_thumbnail_url(array(600, 400)); ?>" alt="" class="work-img" />
            </div>
            <div class="char-box">
              <h3 class="work-title"><?php the_title(); ?></h3>
              <div class="description">
                <?php the_content(); ?>
              </div>
            </div>
          </div>
        </div>
      </div>

    <?php
      $counter++;
      wp_reset_postdata();
    endwhile;
    ?>
  </div>

  <!-- 強み -->
  <div class="strength cover-slide sfrom-upper">
    <div class="slide-image">
      <h3 class="s-title">This is "Tsuyomi"</h3>
      <div class="s-description">
        <p>テキスト</p>
        <p>テキスト</p>
        <p>テキスト</p>
      </div>
    </div>
  </div>
</section>

<!-- ===============================
        my creations
    ================================= -->
<section id="my-creations" class="my-creations container">
  <h2 class="title right fadeIn from-bottom">My Creations</h2>

  <!-- 成果物3つ -->

  <?php
  $args = array(
    'post_type' => 'my_creations',
    'posts_per_page' => 3,
    'orderby' => 'date',
    'order' => 'ASC',
    'taxonomy' => 'top',
    'term' => 'topon',
    // 'category_name' => 'topon',
  );

  query_posts($args);

  $counter2 = 1;
  while (have_posts()) : the_post();
    setup_postdata($post);

    $language = get_post_meta(get_the_ID(), 'language', true);
    $url = get_post_meta(get_the_ID(), 'url', true);
  ?>

    <div class="cover-slide sfrom-bottom">

      <?php if ($counter2 % 2 == 0) : ?>

        <!-- PC　左右の入れ替え処理 -->
        <div class="flex-container mb fd-reverse slide-image">
        <?php else : ?>
          <div class="flex-container mb slide-image">
          <?php endif; ?>

          <div class="left-box">
            <img src="<?php the_post_thumbnail_url(array(600, 400)); ?>" alt="" class="creation" />
          </div>

          <div class="right-box">
            <div class="description-box">
              <h3 class="sub-title fadeIn only-fadeIn"><?php the_title(); ?></h3>
              <p class="description"><?php the_content(); ?></p>
              <p class="language">使用技術：<?php echo $language ?></p>


              <!-- 成果物へのリンクボタン -->
              <div class="creation-btn-wrapper">
                <button class="each-creation-btn">
                  <a href="<?php echo $url; ?>">view more</a>
                  <span></span>
                </button>
              </div>
            </div>
          </div>
          </div>
        </div>

      <?php
      $counter2++;
      wp_reset_postdata();
    endwhile;

      ?>

      <!-- 成果物一覧へのリンク -->
      <div class="to-other-btn fadeIn only-fadeIn">
        <button class="btn-wrap">
          <a href="<?php echo get_post_type_archive_link('my_creations'); ?>" class="btn btn-svg">
            <svg>
              <rect x="2" y="2" rx="0" fill="none" width="200" height="50"></rect>
            </svg>
            <span>All Others</span>
          </a>
        </button>
      </div>
</section>


<!-- ===============================
        about me
      ================================= -->
<section id="about-me" class="about-me container">
  <h2 class="title left fadeIn from-bottom">About Me<span class="title-line"></span></h2>

  <div class="position-container">
    <h3 class="name-title fadeIn from-bottom"><?php echo $myname['my_name']; ?></h3>
    <span class="name-kanji fadeIn from-bottom"><?php echo $myname['kanji_name']; ?></span>

    <div class="flex-container">
      <div class="left-box">
        <img src="<?php echo get_template_directory_uri(); ?>/images/yu-chanrio.png" alt="" class="my-pic fadeIn only-fadeIn" />
      </div>
      <div class="right-box fadeIn only-fadeIn">
        <p>ダミーテキストダミーテキストダミーテキスト。</p>
        <p>ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト。</p>
        <p>ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト。ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト。</p>
        <p>ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト。</p>
      </div>
    </div>
  </div>
</section>

<!-- ===============================
        Inquiry Flow
      ================================= -->
<section id="inquiry-flow" class="inquiry-flow container">
  <h2 class="title right fadeIn from-bottom">Inquiry Flow</h2>

  <h3 class="flow-title fadeIn from-bottom">制作開始までの流れ</h3>

  <!-- 問い合わせ -->
  <div class="flow-box fadeIn from-bottom">
    <div class="flow-card">
      <div class="wrapper">
        <div class="flex-container">
          <span class="flow-num">1</span>
          <h4 class="card-title">問い合わせ</h4>
        </div>
        <p class="flow-description">下記リンクよりお問い合わせフォームに飛ぶことができます。<br />そちらからお問い合わせの内容をお送りください。</p>
      </div>
    </div>

    <!-- 返信 -->
    <div class="flow-card">
      <div class="wrapper">
        <div class="flex-container">
          <span class="flow-num">2</span>
          <h4 class="card-title">返信</h4>
        </div>
        <p class="flow-description">下記リンクよりお問い合わせフォームに飛ぶことができます。<br />そちらからお問い合わせの内容をお送りください。</p>
      </div>
    </div>

    <!-- 面談 -->
    <div class="flow-card">
      <div class="wrapper">
        <div class="flex-container">
          <span class="flow-num">3</span>
          <h4 class="card-title">打ち合わせ</h4>
        </div>
        <p class="flow-description">下記リンクよりお問い合わせフォームに飛ぶことができます。<br />そちらからお問い合わせの内容をお送りください。</p>
      </div>
    </div>

    <!-- 制作スタート -->
    <div class="flow-card">
      <div class="wrapper">
        <div class="flex-container">
          <span class="flow-num">4</span>
          <h4 class="card-title">制作開始</h4>
        </div>
        <p class="flow-description">下記リンクよりお問い合わせフォームに飛ぶことができます。<br />そちらからお問い合わせの内容をお送りください。</p>
      </div>
    </div>
  </div>

  <!-- コンタクトページへのボタン -->
  <div class="to-other-btn fadeIn from-bottom">
    <button class="btn-wrap">
      <a href="contact.html" class="btn btn-svg">
        <svg>
          <rect x="2" y="2" rx="0" fill="none" width="200" height="50"></rect>
        </svg>
        <span>Contact Me</span>
      </a>
    </button>
  </div>
</section>
</div>

<?php get_footer(); ?>

</body>

</html>