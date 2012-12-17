
<nav id="tabs">
 <ul><?php print render($tasks['tabs']['output']); ?></ul>
 <ul><?php print render($tasks['actions']['output']); ?></ul>
</nav>
<div id="header" class="main-region">
    <section class="centered">        
      <div id="main-menu" class="navigation">
        <?php print render($page['header']);?>
      </div>
    </section>
</div>
<div id="main" class="main-region">
    <div id="highlight">
      <div class="centered">
        <?php print render($page['highlight']); ?>
        <?php print $messages; ?>
      </div>
    </div>
    <div class="centered">
        <div id="main-content">
            <div id="left-sidebar" class="column"><?php print render($page['left']); ?></div>
            <div id="content" class="column"><?php print render($page['content']); ?></div>
            <div id="right-sidebar" class="column"><?php print render($page['right']); ?></div>
        </div>
    </div>
</div>
<div id="footer" class="main-region">
    <section class="centered"><?php print render($page['footer']); ?></section>
</div>
