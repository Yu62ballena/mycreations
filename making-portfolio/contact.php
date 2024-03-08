<?php 
  $myname = 'Alphabet Name';
?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $myname; ?> Portfolio</title>
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <!-- <div class="all-background"></div> -->

    <!-- ===============================
        header
    ================================= -->
    <section class="first-view">
      <div class="container">
        <!-- header -->
        <header class="header">
          <a href="index.php" class="logo-link">
            <div class="site-title-group">
              <h1 class="site-title"><?php echo $myname; ?></h1>
              <span class="sub-title">Portfolio for Web Design</span>
            </div>
          </a>
          <div class="menu-btn">
            <span class="menu-bar">------</span><br />
            <span class="menu-bar">----</span><br />
            <span class="menu-bar">--</span>
          </div>
        </header>
      </div>
    </section>

    <!-- ===============================
      Get in Touch with Me  ※別ページに切り出し
    ================================= -->

    <section class="get-in-touch-with-me container">
      <h2 class="title left">Get in Touch with Me</h2>

      <div class="flex-container">
        <div class="left-box">
          <img src="images/img-height.png" alt="" class="contact-img" />
        </div>

        <div class="right-box">
          <form class="form">
            <div class="contact-heading">
              <label for="" class="contact-label">お名前<span class="contact-span">必須</span></label>
            </div>
            <div class="input-area">
              <input type="text" name="name" placeholder="お名前を入力してください" class="contact-textbox" />
            </div>

            <div class="contact-heading">
              <label for="" class="contact-label">メールアドレス<span class="contact-span">必須</span></label>
            </div>
            <div class="input-area">
              <input type="text" name="email" placeholder="メールアドレスを入力してください" class="contact-textbox" />
            </div>

            <div class="contact-heading">
              <label for="" class="contact-label">会社名・屋号</label>
            </div>
            <div class="input-area">
              <input type="text" name="company" placeholder="会社名・屋号を入力してください" class="contact-textbox" />
            </div>

            <div class="contact-heading">
              <label for="" class="contact-label">お問い合わせの詳細<span class="contact-span">必須</span></label>
            </div>
            <div class="input-area">
              <textarea type="text" name="message" placeholder="お問い合わせ内容を入力してください" class="contact-textarea"></textarea>
            </div>

            <button type="text" alt="送信する" class="contact-btn">送信</button>
          </form>
        </div>
      </div>
    </section>

    <!-- ===============================
      Footer
    ================================= -->
    <footer class="footer">
      <p class="description">© yusuke-higuchi.com 2024</p>
    </footer>
  </body>
</html>
