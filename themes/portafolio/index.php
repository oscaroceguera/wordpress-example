<?php get_header(); ?>
    <h1 class="page-heading max-width"><?php bloginfo(name); ?></h1>
    <div class="grid max-width">
      <div class="block grid--item-9">
        <div class="block__title">
          Últimos Trabajos
        </div>
        <div class="block__body grid">
          <p>
            <?php
              $args = array('author' => 'oceguera');
              $filter_posts = new WP_Query($args);

              if($filter_posts->have_posts()) :
                while($filter_posts->have_posts()) :
                  $filter_posts->the_post();
            ?>
                    <article class="block grid--item-4">
                      <h2 class="block__title"><?php the_title(); ?></h2>
                      <?php
                        if(has_post_thumbnail()) {
                      ?>
                        <picture>
                          <source srcset="<?php the_post_thumbnail_url('full') ?>" media="(min-width: 600px)"/>
                          <img src="<?php the_post_thumbnail_url('thumbnail') ?>" />
                        </picture>
                      <?php
                        }
                      ?>
                      <div class="block__body">
                        <?php // the_post_thumbnail_url(); ?>
                        <p>
                          <?php the_excerpt(); ?>
                        </p>
                      <footer>
                        <div>
                          <small><?php the_tags(); ?></small>
                        </div>
                        <div>
                          <small><?php the_author(); ?></small>
                        </div>
                        <a href="<?php the_permalink(); ?>">Leer más</a>
                      </footer>
                    </article>
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
        </div>
      </div>
      <?php get_sidebar(); ?>
    </div>
    <?php get_footer(); ?>
