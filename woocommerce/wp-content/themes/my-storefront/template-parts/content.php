<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @subpackage My Storefront
 * @since 1.0.0
 */

$my_storefront_options = ecommerce_plus_get_theme_options();
$my_storefront_class = has_post_thumbnail() ? ' ' : 'no-post-thumbnail ';
$my_storefront_readmore = ! empty( $my_storefront_options['read_more_text'] ) ? $my_storefront_options['read_more_text'] : esc_html__( 'Read More', 'my-storefront' );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( $my_storefront_class ); ?> >
    <div class="post-item-wrapper">
        <?php if ( has_post_thumbnail() ) : ?>		
            <div class="featured-image" >
               <img src="<?php the_post_thumbnail_url( 'post-thumbnail' ); ?>" /> <a href="<?php the_permalink(); ?>" class="post-thumbnail-link"></a></img>
            </div><!-- .featured-image -->
        <?php endif; ?>

        <div class="entry-container">
            <div class="entry-meta">
                <?php if ( ! $my_storefront_options['hide_category'] ) : ?>
                    <span class="cat-links">
                        <?php the_category(); ?>
                    </span><!-- .cat-links -->
                <?php endif;

                if ( ! $my_storefront_options['hide_date'] ) :
                    ecommerce_plus_posted_on();
                endif; ?>
            </div><!-- .entry-meta -->

            <header class="entry-header">
                <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            </header>

            <div class="entry-content">
                <?php the_excerpt(); ?>
            </div><!-- .entry-content -->

            <div class="read-more">
                <a href="<?php the_permalink(); ?>" class="btn">
                    <span class="screen-reader-text"><?php the_title(); ?></span>
                    <?php echo esc_html( $my_storefront_readmore ); ?>
                </a>
            </div><!-- .read-more -->
        </div><!-- .entry-container -->
    </div><!-- .post-item-wrapper -->
</article><!-- #post-## -->