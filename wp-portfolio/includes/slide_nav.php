<?php
$menu_name = 'slide_nav';
$locations = get_nav_menu_locations();
$menu = wp_get_nav_menu_object($locations[$menu_name]);
$menu_items = wp_get_nav_menu_items($menu->term_id);
?>

<div class="slide-menu">
  <nav class="slide-nav">
    <?php foreach ($menu_items as $item) : ?>
      <li class="slide-item">
        <a href="<?php echo esc_attr($item->url); ?>" class="slide-link" >
          <?php echo esc_html($item->title); ?>
        </a>
      </li>
    <?php endforeach; ?>
  </nav>
</div>