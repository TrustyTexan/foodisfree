<div id="top-bg">
  <div id="top-container" class="clearfix">
    <header id="header" role="banner" class="clearfix">
  	 <?php if ($logo): ?>
       <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" id="logo">
         <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
       </a>
     <?php endif; ?>

      <?php print render($page['header']); ?>
    </header> <!-- /#header -->

    <?php if (!$is_front): ?>
      <aside id="sidebar">
        <?php print theme('links__system_main_menu', array(
            'links' => $main_menu,
            'attributes' => array(
              'id' => 'main-menu',
              'class' => array('links', 'clearfix'),
            ),
            'heading' => array(
              'text' => t('Main menu'),
              'level' => 'h2',
              'class' => array('element-invisible'),
            ),
          )); ?>
        <?php print render($page['sidebar']); ?>
      </aside>
    <?php endif; ?>

    <section id="main" role="main" class="clearfix">
      <?php print $messages; ?>

      <?php print render($title_prefix); ?>
      <?php if (!$is_front): ?>
        <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
      <?php endif; ?>
      <?php print render($title_suffix); ?>

      <?php if ((!empty($tabs['#primary'])) && (!$is_front)): ?>
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
    </section> <!-- /#main -->
  </div> <!-- /#top-container -->
</div><!-- /#top-bg -->

<div id="bottom-bg">
  <div id="bottom-container" class="clearfix">

    <?php if ($page['post_content']): ?>
      <section id="post-content">
        <?php print render($page['post_content']); ?>
      </section>
    <?php endif; ?>
  
    <footer id="footer" role="contentinfo" class="clearfix">
      <?php print render($page['footer']) ?>
      <?php print $feed_icons ?>
      <p class="copy-info">The Food is Free Project was born in Austin, Texas &copy; <?php print date("Y"); ?> www.foodisfreeproject.org, all rights reserved.</p>
<p id="credit"><a href="http://www.nickcomito.me" target="_blank">website designed by Nick Comito</a></p>
    </footer> <!-- /#footer -->
  </div><!-- /#bottom-container -->
</div><!-- /#bottom-bg -->