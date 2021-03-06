<?php
  /*
  * Template Name: Page with Sidebar
  */
?>
<?php get_header(); ?>
    <p>
      <?php
        if(have_posts()) :
          while(have_posts()) :
            the_post();
      ?>
          <h1 class="page-heading max-width">
          <span>Infomación</span>
          <?php the_title(); ?>
            </h1>
              <div class="grid max-width">
                <div class="block grid--item-9">
                  <div class="block__body grid">
                    <p>
                      <?php the_content(); ?>
                    </p>
                  </div>
                </div>
                <?php get_sidebar(); ?>
              </div>
      <?php
        endwhile;
        else :
      ?>
        <h4>Huy, no encontramos posts</h4>
      <?php
        endif;
          wp_reset_postdata();
      ?>
    </p>
<?php get_footer(); ?>
