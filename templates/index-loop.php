<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">

		<header class="article-header">

			<?php get_template_part( 'templates/header', 'title'); ?>
			
			<?php get_template_part( 'templates/byline'); ?>

		</header>

		<section class="entry-content cf">
									
			<?php the_content(); ?>

		</section>

		<footer class="article-footer">

			<?php get_template_part( 'templates/comment', 'count'); ?>

            <?php get_template_part( 'templates/category-tags'); ?>

		</footer>

	</article>

<?php endwhile; ?>

    <?php plate_page_navi( $wp_query ); ?>

<?php else : ?>

    <?php get_template_part( 'templates/404'); ?>

<?php endif; ?>