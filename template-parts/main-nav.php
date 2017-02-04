<div class="container">

  <div class="header-logo-wrapper">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
      <img class="" src="<?php //echo get_template_directory_uri(); ?>/imgs/site/logo-header.png" />
    </a>
  </div>

  <div class="header-hamburger">
    <a href="#menu" class="close-menu">
        <div class="nav-icon">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
    </a>
  </div>

  <div class="header-menu-wrapper">
    <nav id="menu">
      <ul class="menu">
        <li class="menu-item"><a class="menu-item-link" href="<?php echo esc_url( site_url() ); ?>/books">Books</a></li>
        <li class="menu-item"><a class="menu-item-link" href="<?php echo esc_url( site_url() ); ?>/games">Games</a></li>
      </ul>
    </nav>
  </div>

  <div class="clear"></div>

</div>
