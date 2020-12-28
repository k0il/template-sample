
<nav class="navbar is-fixed-top container" role="navigation" aria-label="main navigation">
<div class="columns is-multiline is-mobile container" >
  <div class="column is-full  is-centered navlogo">
    
    <a class="brand" href="{{ home_url('/') }}">
    <?= App\site_brand(); ?>
    </a>
  </div>
  <div class="container">
    <div class="column is-one-fifth">Left</div>
    <div class="column headmenu">
    <?php 
      wp_nav_menu( array(
              'container'   => 'ul',
              'menu_id'    => 'topmenus',
              'menu_class' => 'topnav',
              )); ?>
    </div>
    <div class="column is-one-fifth">Right</div>
  </div>

</div>

</nav>
