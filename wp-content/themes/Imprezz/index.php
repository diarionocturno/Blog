<?php get_header(); ?>



	<div id="content" class="narrowcolumn">



<link rel="image_src" href="http://www.diarionocturno.com/blog/wp-content/themes/Imprezz/images/logo.gif" />



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



		<?php while (have_posts()) : the_post(); ?>



			<div class="post" id="post-<?php the_ID(); ?>">

			

								<div class="PostHead">



	<div class="PostTime"><?php the_time('<b>j</b> <a>M Y</a>') ?> </div>

	<h2><a title="Permanent Link to <?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>

	<small class="PostDet"><?php edit_post_link('Edit', '', ' | '); ?> Autor: <?php the_author_posts_link(); ?> | Ver m&aacute;s <?php the_category(', ') ?>

	</small>



	</div>



			<div class="entry">



<?php the_content('Lee el resto &raquo;'); ?>

<br/><br/>



			</div>

			</div>	

			

			<p class="postmetadata">

			<span class="tags"><?php the_tags('Tags: ', ', '); ?> </span>

			</p>

			

			<div class="comments"><?php comments_popup_link('NO COMMENTS', '<span> 1 </span> COMMENTS', '<span> % </span> COMMENTS'); ?></div>



<br/><br/>

        

		<?php endwhile; ?>



	



	<?php else : ?>



		<h2 class="center">No encontrado</h2>

		<p class="center">Lo lamentamos, pero no encontramos lo que buscas.</p>

		<?php include (TEMPLATEPATH . "/searchform.php"); ?>



	<?php endif; ?>

<div id="fb-root"></div><script src="http://connect.facebook.net/en_US/all.js#appId=213069835410492&amp;xfbml=1"></script><script type="text/javascript">_ga.trackFacebook();</script><fb:like href="http://www.facebook.com/pages/DiarioNocturnocom/28558710568" send="true" layout="button_count" width="450" show_faces="true" font=""></fb:like><br/><br/>

    <center><?php previous_posts_link('&laquo; Anteriores') ?> | <?php next_posts_link('Siguientes &raquo;') ?></center>

<br/><br/>

	</div>



<?php get_sidebar(); ?>

<div class="sidebar-right">



<ul>

<?php 	/* Widgetized sidebar, if you have the plugin installed. */

					if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('bar 1') ) : ?>

	<?php endif; ?>

</ul>



</div>





</div>





<?php get_footer(); ?>