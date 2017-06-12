<header id="rosheader">
    <nav class="navbar navbar-toggleable-md">
        <div class="navbar-header">
            <div class="header-quick-contact">
               <a class="call-link qc-link" href="callto://+1<?php the_field('phone_number','option'); ?>">
                  <div class="phone-icon qc-icon">
                     <span class="fa fa-phone"></span>
                  </div>
               </a>
               <a class="mail-link qc-link" href="mailto:paul@regionalofficesolutions.com?Subject=Hello">
                  <div class="mail-icon qc-icon">
                     <span class="fa fa-envelope"></span>
                  </div>
               </a>
            </div>
            <button class="btn mobileToggle navbar-toggler-right collapsed" type="button" data-toggle="collapse" data-target="#sbContainer" aria-expanded="false" aria-controls="sbContainer">
                <span class="navbar-toggler-icon fa fa-bars"></span>
            </button>            
            <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>">
                <img class="header-brand-image" src="<?php the_field('header_logo',"option"); ?>" alt="<?php bloginfo('name');  ?>" title="<?php bloginfo('name');  ?>" >
                
            </a>
        </div>      
        <div id="sbContainer" class="collapse navbar-collapse">
            <div class="nav navbar-nav">
                <?php dynamic_sidebar('headersb'); ?>
            </div>    
        </div>
    </nav>   
</header>






<?php /*        SAGE DEFAULT:

<header class="banner">
  <div class="container">
    <a class="brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
    <nav class="nav-primary">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
    </nav>
  </div>
</header>

*/ ?>