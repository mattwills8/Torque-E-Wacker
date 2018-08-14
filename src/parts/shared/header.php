<header id="header">

  <div class="header-content-wrapper">

    <div class="row header-main">

      <?php get_template_part( 'parts/shared/header', 'mega-menu' ); ?>

      <div class="col2 col3-tablet header-logo-wrapper">
        <?php get_template_part( 'parts/shared/logo', 'dark'); ?>
      </div>

      <div class="col1 col3-tablet header-search-wrapper">
        <?php get_search_form(true); ?>
      </div>
    </div>

    <div class="row header-quick-links">
      <?php get_template_part( 'parts/shared/header', 'quick-links' ); ?>
    </div>

  </div>

</header>
