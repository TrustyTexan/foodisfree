<div id="container" class="clearfix">
  <header id="header" role="banner" class="clearfix">
	 <?php if ($logo): ?>
     <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" id="logo">
       <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
     </a>
   <?php endif; ?>

    <?php print render($page['header']); ?>
    <?php if ($breadcrumb): print $breadcrumb; endif;?>
  </header> <!-- /#header -->

  <section id="main" role="main" class="clearfix">
    <?php print $messages; ?>

    <?php print render($title_prefix); ?>
    <?php if (!$front_page): ?>
      <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
    <?php endif; ?>
    <?php print render($title_suffix); ?>

    <?php if (!empty($tabs['#primary'])): ?>
      <div class="tabs-wrapper clearfix">
        <?php print render($tabs); ?>
      </div>
    <?php endif; ?>

    <?php print render($page['help']); ?>

    <?php if ($page['pre_content']): ?>
      <section id="pre-content">
        <?php print render($page['pre_content']); ?>
      </section>
    <?php endif; ?>

    <?php print render($page['content']); ?>

    <?php if ($page['post_content']): ?>
      <section id="post-content">
        <?php print render($page['post_content']); ?>
      </section>
    <?php endif; ?>
  </section> <!-- /#main -->
  
  <footer id="footer" role="contentinfo" class="clearfix">
    <?php print render($page['footer']) ?>
    <?php print $feed_icons ?>
  </footer> <!-- /#footer -->

</div> <!-- /#container -->
