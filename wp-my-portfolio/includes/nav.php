<?php
$menu_name = 'global_nav';
$locations = get_nav_menu_locations();
$menu = wp_get_nav_menu_object($locations[$menu_name]);
$menu_items = wp_get_nav_menu_items($menu->term_id);
?>

<nav class="main-nav">
  <ul class="menu-list">
    <?php foreach ($menu_items as $item) : ?>
      <li class="list-item fadeIn from-bottom">
        <a href="<?php echo esc_attr($item->url); ?>">
          <?php echo esc_html($item->title); ?>
        </a>
      </li>
    <?php endforeach; ?>
  </ul>
</nav>