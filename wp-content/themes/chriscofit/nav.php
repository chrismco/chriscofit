<nav id="mobile">
  <div id="toggle-bar">
     <a href="<?php bloginfo('url'); ?>"><span class="icon-home"></span></li></a>
     <a class="mtoggle" href="#"><span class="icon-menu"></span></a>
  </div>
<ul id="mmenu">
   <?php wp_nav_menu( array( 'container' => false, 'theme_location' => 'primary-menu', 'fallback_cb' => 'display_home' ) ); ?>
</ul>
</nav>

<ul class="nav">
   <?php wp_nav_menu( array( 'container' => false, 'theme_location' => 'primary-menu', 'fallback_cb' => 'display_home' ) ); ?>
</ul>