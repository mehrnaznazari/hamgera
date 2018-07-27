<?php get_header(); ?>

	<div id="inner-page" class="container-fluid">
	    <main role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
	        <div class="inner-content">

	            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		        	<section id="post-<?php the_ID(); ?>" class="post-content" role="article">
		                <div class="container">
		                    <div class="row">
		                    	<div class="column col-md-12">
		                    		<h3><?php echo get_the_title(); ?></h3>
		                    		<p><?php the_content(); ?></p>
		                    	</div>
		                    </div>
		                </div>
		            </section>

	        	<?php endwhile;
	        	endif ?>
	        </div>
	    </main>
	</div>

<?php get_footer(); ?>
