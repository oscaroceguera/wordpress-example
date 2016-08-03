<footer>
  <div class="max-width">
    <div class="block max-width">
      <?php
        wp_nav_menu(
          array(
            'theme_localtion' => bottom-menu,
          )
        )
      ?>
      <div class="block__title">
        Footer
      </div>
      <div class="block__body">
        <small>Footer Content</small>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
