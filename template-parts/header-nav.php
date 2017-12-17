<header class="header">
  <div class="header-border">
    <div class="header-content">
      <div class="header-logo-wrapper">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <!-- <img class="nav-logo img-responsive" src="<?php //echo get_template_directory_uri(); ?>/imgs/site/zimmy-books-logo.svg" /> -->
          <img class="nav-logo img-responsive" src="<?php echo get_template_directory_uri(); ?>/imgs/site/logo-temp.svg" />
        </a>
      </div>
      <div class="header-hamburger">
        <a href="#menu" class="header-hamburger-toggle">
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
            <li class="menu-item"><a class="menu-item-link menu-item-link-books" href="<?php echo esc_url( site_url() ); ?>/books"><i class="fa fa-book" aria-hidden="true"></i> <span>Books</span></a></li>
            <li class="menu-item"><a class="menu-item-link menu-item-link-games" href="<?php echo esc_url( site_url() ); ?>/games"><i class="fa fa-gamepad" aria-hidden="true"></i> <span>Games</span></a></li>
            <!-- <li class="menu-item"><a class="menu-item-link menu-item-link-printables" href="<?php //echo esc_url( site_url() ); ?>/printables"><i class="fa fa-picture-o" aria-hidden="true"></i> <span>Printables</span></a></li> -->
            <!-- <li class="menu-item"><a class="menu-item-link" href="<?php //echo esc_url( site_url() ); ?>/learning">Learning</a></li> -->
            <!-- <li class="menu-item"><a class="menu-item-link" href="<?php //echo esc_url( site_url() ); ?>/coloring">Coloring</a></li> -->
            <!-- <li class="menu-item"><a class="menu-item-link" href="<?php //echo esc_url( site_url() ); ?>/blog">Blog</a></li>
            <li class="menu-item"><a class="menu-item-link" href="<?php //echo esc_url( site_url() ); ?>/news">News</a></li> -->
          </ul>
        </nav>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</header>
