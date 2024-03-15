<?php

// 機能追加
add_theme_support('post-thumbnails');

add_action('init', function () {
  register_nav_menus([
    'global_nav' => 'グローバルナビ',
    'slide_nav' => 'スライドナビ',
  ]);

  register_post_type('what_can_i_do', [
    'label' => 'What can I do?',
    'public' => true,
    'menu_position' => 4,
    'menu_icon' => 'dashicons-welcome-learn-more',
    'supports' => [
      'thumbnail',
      'title',
      'editor',
      'excerpt',
      'show_in_rest',
    ],
  ]);

  register_post_type('my_creations', [
    'label' => 'My Creations',
    'public' => true,
    'menu_position' => 4,
    'menu_icon' => 'dashicons-nametag',
    'supports' => [
      'thumbnail',
      'title',
      'editor',
      'excerpt',
      'custom-fields',
    ],
    'has_archive' => true,
    'show_in_rest' => true,
  ]);

  register_taxonomy('top', 'my_creations', [
    'label' => 'トップページ表示',
    'public' => true,
  ]);
});


// 変数
function my_name() {
  return array(
    'my_name' => 'Alphabet Name',
    'kanji_name' => '漢字名前',
    'my_first_name' => 'Alphab',
    'my_family_name' => 'Name',
  );
}
