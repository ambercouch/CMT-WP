<?php
/**
 * Template Name: AC - Simple
 *
 * @package WordPress
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <div id="content" class="site-content" role="main">
      <div class="main-content">
        <?php /* The loop */ ?>
        <?php while (have_posts()) : the_post(); ?>

          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <header class="entry-header">
<!--              --><?php //if (has_post_thumbnail() && !post_password_required()) : ?>
<!--                <div class="entry-banner">-->
<!--                  --><?php //the_post_thumbnail('full'); ?>
<!--                </div>-->
<!--              --><?php //endif; ?>

              <?php
              $image = get_field('banner_image');
              $link = get_field('banner_link');

              if( !empty($image) ): ?>
              <a <?php if( !empty($link) ): ?>href="<?php echo $link; ?>"<?php endif; ?>>
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
              </a>

              <?php endif; ?>
              <!--<h1 class="entry-title"><?php //the_title(); ?></h1>-->
            </header><!-- .entry-header -->

            <div class="entry-content">
              <?php the_content(); ?>
              <?php wp_link_pages(array('before' => '<div class="page-links"><span class="page-links-title">' . __('Pages:', 'twentythirteen') . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>')); ?>
            </div><!-- .entry-content -->
            <?php get_sidebar(); ?>

            <footer class="entry-meta">
              <?php edit_post_link(__('Edit', 'twentythirteen'), '<span class="edit-link">', '</span>'); ?>
            </footer><!-- .entry-meta -->
          </article><!-- #post -->


        <?php endwhile; ?>
      </div>
    </div><!-- #content -->
  </div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>