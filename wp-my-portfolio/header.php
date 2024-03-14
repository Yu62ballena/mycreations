<?php $myname = my_name(); ?>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo $myname['my_name']; ?> Portfolio</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/cover-slide.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fadeIn-animation.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" />
  <?php wp_head(); ?>
</head>

<body class="body <?php body_class(); ?>">
  <?php wp_body_open(); ?>

  <div class="whole-container">
    <!-- <div class="all-background"></div> -->

    <!-- ===============================
        ヘッダー
      ================================= -->
    <div class="container slide-container">
      <!-- <div class="main-view"> -->
      <header class="header fadeIn only-fadeIn">
        <a href="<?php echo home_url(); ?>" class="logo-link">
          <div class="site-title-group">
            <h1 class="site-title"><?php bloginfo('name'); ?></h1>
            <span class="sub-title"><?php bloginfo('description'); ?></span>
          </div>
        </a>
      </header>

      <!-- ハンバーガーメニュー -->
      <div class="menu-btn fadeIn only-fadeIn">
        <div class="hamburger-btn">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>

      <!-- スライドインメニュー -->
      <?php get_template_part('includes/slide_nav'); ?>

    </div>