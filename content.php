<?php
/**
 * @package BRB
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div ID="post-top">
			<div class="post-image">
				<?php if ( 'post' == get_post_type() ) : ?>
				<?php if ( has_post_thumbnail() ) {
					the_post_thumbnail();
					}
				?>
			</div>
			<div class="post-title">
				<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
			</div>
			<div class="article-excerpt">
				<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_excerpt(); ?></a>
			</div>
		</div>

		<div class="entry-meta">
			<?php brb_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<footer class="entry-meta">
		<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
			<?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( __( ', ', 'brb' ) );
				if ( $categories_list && brb_categorized_blog() ) :
			?>
			<span class="cat-links">
				<?php printf( __( 'Posted in %1$s', 'brb' ), $categories_list ); ?>
			</span>
			<?php endif; // End if categories ?>

			<?php
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', __( ', ', 'brb' ) );
				if ( $tags_list ) :
			?>
			<span class="tags-links">
				<?php printf( __( 'Tagged %1$s', 'brb' ), $tags_list ); ?>
			</span>
			<?php endif; // End if $tags_list ?>
		<?php endif; // End if 'post' == get_post_type() ?>

		<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
		<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'brb' ), __( '1 Comment', 'brb' ), __( '% Comments', 'brb' ) ); ?></span>
		<?php endif; ?>

		<?php edit_post_link( __( 'Edit', 'brb' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-## -->
