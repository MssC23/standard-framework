<?php get_header(); ?>

		<div class="container">

			<div id="content" class="clearfix row">

				<div id="main" class="col-md-8 clearfix" role="main">

					<?php if ( is_category() ) { ?>
						<h1 class="page-title" itemprop="headline">
							<small><?php _e("Posts Categorized:", "ig2d"); ?></small> <?php single_cat_title(); ?>
						</h1>
					<?php } elseif ( is_tag() ) { ?>
						<h1 class="page-title" itemprop="headline">
							<small><?php _e("Posts Tagged:", "ig2d"); ?></small> <?php single_tag_title(); ?>
						</h1>
					<?php } elseif ( is_author() ) { ?>
						<h1 class="page-title" itemprop="headline">
							<small><?php _e("Posts By:", "ig2d"); ?></small> <?php get_the_author_meta('display_name'); ?>
						</h1>
					<?php } elseif ( is_day() ) { ?>
						<h1 class="page-title" itemprop="headline">
							<small><?php _e("Daily Archives:", "ig2d"); ?></small> <?php the_time('l, F j, Y'); ?>
						</h1>
					<?php } elseif ( is_month() ) { ?>
						<h1 class="page-title" itemprop="headline">
							<small><?php _e("Monthly Archives:", "ig2d"); ?></small> <?php the_time('F Y'); ?>
						</h1>
					<?php } elseif ( is_year() ) { ?>
						<h1 class="page-title" itemprop="headline">
							<small><?php _e("Yearly Archives:", "ig2d"); ?></small> <?php the_time('Y'); ?>
						</h1>
					<?php } ?>

					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="blogPost">

							<header>
								<h1 class="h3"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>

								<p class="meta"><?php _e("Posted on", "ig2d"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" itemprop="datePublished" pubdate><?php the_time('F j, Y'); ?></time> <?php _e("by", "ig2d"); ?> <?php the_author_posts_link(); ?> &amp; <?php _e("filed under", "ig2d"); ?> <?php the_category(', '); ?>.</p>
							</header>

							<section>
								<?php the_excerpt(); ?>
							</section>

						</article>

					<?php endwhile; ?>

						<?php if (function_exists('page_navi')) { // if expirimental feature is active ?>
							<?php page_navi(); // use the page navi function ?>
						<?php } else { // if it is disabled, display regular wp prev & next links ?>
							<nav class="wp-prev-next">
								<ul class="pager">
									<li class="previous"><?php next_posts_link(_e('&laquo; Older Entries', "ig2d")) ?></li>
									<li class="next"><?php previous_posts_link(_e('Newer Entries &raquo;', "ig2d")) ?></li>
								</ul>
							</nav>
						<?php } ?>

					<?php else : ?>

						<article id="post-not-found">
							<header>
								<h1><?php _e("No Posts Yet", "ig2d"); ?></h1>
							</header>
							<section class="post_content">
								<p><?php _e("Sorry, What you were looking for is not here.", "ig2d"); ?></p>
							</section>
						</article>

					<?php endif; ?>

				</div>

				<?php get_sidebar(); // sidebar 1 ?>

			</div>

		</div>

<?php get_footer(); ?>
