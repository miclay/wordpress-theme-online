<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package Poseidon
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="error-404 not-found type-page">
			
				<header class="entry-header">
		
					<h1 class="page-title">该页面不存在</h1>
					
				</header><!-- .entry-header -->
				
				<div class="entry-content clearfix">
					<p>可以尝试搜索其他关键词：</p>
					
					<?php get_search_form(); ?>

				</div>
				
			</div>

		</main><!-- #main -->
	</section><!-- #primary -->
	
	<?php get_sidebar(); ?>

<?php get_footer(); ?>
