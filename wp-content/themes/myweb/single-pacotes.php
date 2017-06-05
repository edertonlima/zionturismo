<?php get_header(); ?>

<?php
  	$taxonomy_names = get_post_taxonomies( );

	$terms = get_the_terms( $post->ID, $taxonomy_names[0] );
	if ($terms) {
	    foreach($terms as $term) {
	      //echo $term->name;
	    } 
	}
?>

<div class="container">
	<ul class="nav-page">
		<li><a href="index.html">Home</a></li>
		<li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
		<li><a href="<?php echo get_home_url(); ?>?post_type=pacotes">Pacotes</a></li>
		<li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
		<li><span><?php echo $term->name; ?></span></li>
	</ul>

	<h2><?php the_title(); ?></h2>

</div>

<section class="section pacotes">
	<div class="container">

		<div class="row">
			<div class="col-12">

				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content-pacotes', get_post_format() ); ?>
				<?php endwhile; ?>
			
			</div>
		</div>

		<?php paginacao(); ?>

	</div>
</section>

<?php get_footer(); ?>