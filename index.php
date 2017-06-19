<?php get_header(); ?>

		<div class="container">

			<div id="content" class="clearfix row">

				<div id="main" class="col-md-8 clearfix" role="main">

					<?php while ( have_posts() ) : the_post(); ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="blogPost">

							<header>
								<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( 'ig2d-featured' ); ?></a>

								<h1 class="h3"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>

								<p class="meta"><?php _e("Posted on", "ig2d"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" itemprop="datePublished" pubdate><?php the_time('F j, Y'); ?></time> <?php _e("by", "ig2d"); ?> <?php the_author_posts_link(); ?> &amp; <?php _e("filed under", "ig2d"); ?> <?php the_category(', '); ?>.</p>
							</header>

							<section class="post_content clearfix">
								<?php the_excerpt(); ?>
							</section>

							<footer>
								<p class="tags"><?php the_tags( '<span class="tags-title">' . __("Tags","ig2d") . ':</span> ', ' ', '' ); ?></p>
							</footer>

						</article>

					<?php endwhile; ?>

					<?php if ( function_exists('page_navi') ) { ?>
						<?php page_navi(); ?>
					<?php } else { ?>
						<nav class="wp-prev-next">
							<ul class="pager">
								<li class="previous"><?php next_posts_link(_e('&laquo; Older Entries', "ig2d")) ?></li>
								<li class="next"><?php previous_posts_link(_e('Newer Entries &raquo;', "ig2d")) ?></li>
							</ul>
						</nav>
					<?php } ?>

				</div>

				<?php get_sidebar(); // sidebar 1 ?>

			</div>

		</div>

<?php get_footer(); ?>
