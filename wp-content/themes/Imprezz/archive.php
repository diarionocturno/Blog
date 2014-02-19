<?php get_header(); ?>



	<div id="content" class="narrowcolumn">

<script type="text/javascript"><!--

google_ad_client = "ca-pub-3717282600397593";

/* Debajo del menú */

google_ad_slot = "9095080630";

google_ad_width = 468;

google_ad_height = 60;

//-->

</script>

<script type="text/javascript"

src="http://pagead2.googlesyndication.com/pagead/show_ads.js">

</script>

		<?php if (have_posts()) : ?>



 	  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

 	  <?php /* If this is a category archive */ if (is_category()) { ?>

		<h2 class="pagetitle">Archivo de &#8216;<?php single_cat_title(); ?>&#8217;</h2>

 	  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>

		<h2 class="pagetitle"><?php single_tag_title(); ?></h2><p>Posts con la etiqueta &#8216;<?php single_tag_title(); ?>&#8217;</p>

 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>

		<h2 class="pagetitle">Archivo de <?php the_time('F jS, Y'); ?></h2>

 	  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>

		<h2 class="pagetitle">Archivo de <?php the_time('F, Y'); ?></h2>

 	  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>

		<h2 class="pagetitle">Archivo de <?php the_time('Y'); ?></h2>

	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>

		<h2 class="pagetitle">Archivo del autor </h2>

 	  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>

		<h2 class="pagetitle">Archivo del blog</h2>

 	  <?php } ?>





	



		<?php while (have_posts()) : the_post(); ?>


<div class="post">


				<div class="PostHead">



<div class="PostTime"><?php the_time('<b>j</b> <a>M Y</a>') ?> </div>

<h2><a title="Permanent Link to <?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>

<small class="PostDet"><?php edit_post_link('Edit', '', ' | '); ?> Autor: <?php the_author() ?> | Ver m&aacute;s <?php the_category(', ') ?></small>



</div>

		<div class="post">

		

						<div class="entry"><?php the_content('Leer el resto &raquo;'); ?>

<br/><br/>



</div> 
	<div class="comments"><?php comments_popup_link('NO COMMENTS', '<i> 1 </i> COMMENTS', '<span> % </span> COMMENTS'); ?></div>
  
			</div>

	<p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?></p>
</div>
		<?php endwhile; ?>



	

	<?php else : ?>



		<h2 class="center">No encontrado</h2>

		<?php include (TEMPLATEPATH . '/searchform.php'); ?>



	<?php endif; ?>

    <br/><br/>

    <center><?php previous_posts_link('&laquo; Anteriores') ?> | <?php next_posts_link('Siguientes &raquo;') ?></center>

<br/><br/>

	</div>



<?php get_sidebar(); ?>

<div class="sidebar-right"> 

<ul>

<?php 	/* Widgetized sidebar, if you have the plugin installed. */

					if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>

	<?php endif; ?>

</ul>



</div>









</div>



<?php get_footer(); ?>