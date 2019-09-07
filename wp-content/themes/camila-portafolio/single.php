<?php get_header() ?>

<?php if ( have_posts() ) { ?>
	<?php while ( have_posts() ) { ?>
		<?php the_post(); ?>
		
		<section class="single">
			<div class="single__rightside">
				<?php the_post_thumbnail('', array('class' => 'single__rightside__image')); ?>
				
			</div>
			<div class="single__leftside">
				<div class="single__rightside-title">
					<h2><?php the_title(); ?></h2>	
					<?php the_content(); ?>
				</div>
			</div>
		
		</section>

	<?php } ?>
<?php } else { ?>
	<!-- Content -->
<?php } wp_reset_query(); ?>

<?php get_footer() ?>