<?php get_header(); ?>





	<div id="content" class="narrowcolumn">







	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>




<!-- 111125 usar thumbnail como imagen para fb -->



<?php if(has_post_thumbnail()):   //si hay thumbnail definido



	$pimagen =  wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumbnail' , false );  // arreglo que contiene url, width , height



?>



<link rel="image_src" href="<?php echo $pimagen[0] ?>" />







<?php endif; ?>



<!-- fin imagen para fb -->




<link rel="image_src" href="http://www.diarionocturno.com/blog/wp-content/themes/Imprezz/images/logo.gif" />



		<div class="post" id="post-<?php the_ID(); ?>">



			



				<div class="PostHead">







<div class="PostTime"><?php the_time('<b>j</b> <a>M Y</a>') ?> </div>



<h2><?php the_title(); ?></h2>



<small class="PostDet"><?php edit_post_link('Edit', '', ' | '); ?> Autor: <?php the_author_posts_link(); ?> | Ver m&aacute;s <?php the_category(', ') ?> </small>



</div>







<?php 



$attachment_id = 8; // attachment ID







$image_attributes = wp_get_attachment_image_src( $attachment_id ); // returns an array



?> 



 



			<div class="entry">



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

<br /><br />
<script type="text/javascript" src="http://www.reddit.com/static/button/button1.js"></script>


<?php the_content('<p class="serif">Leer el resto...</p>'); ?>



			  <?php wp_link_pages(array('before' => '<p><strong>Paginas:</strong> ', 'sigue' => '</p>', 'next_or_number' => 'numero')); ?>

<div class="fb-like" data-href="https://www.facebook.com/diarionocturno.blog" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>

<br/><br/>





<table width="460" border="0" cellpadding="10" cellspacing="10">

  <tr>

    <td width="50%" align="right"><span style="font-size: 10px; margin-top:10px;"><strong>Anterior:</strong>

      <?php next_post_link('%link') ?>

    </span></td>

    <td width="50%" align="left"><span style="font-size: 10px; margin-top:10px;"> <strong>Siguiente:</strong>

      <?php previous_post_link('%link') ?>

    </span></td>

  </tr>

</table>

<br/><br/>



				<?php the_tags( '<p style="font-size:11px;">Ver más: ', ', ', '</p>'); ?>











<a name="comentar" /><div class="fb-comments" data-href="<?php echo get_permalink(); ?>" data-num-posts="5" data-width="460"></div>







				<p class="postmetadata alt">



					<small>



						Publicado



					<?php /* This is commented, because it requires a little adjusting sometimes.



							You'll need to download this plugin, and follow the instructions:



							http://binarybonsai.com/archives/2004/08/17/time-since-plugin/ */



							/* $entry_datetime = abs(strtotime($post->post_date) - (60*120)); echo time_since($entry_datetime); echo ' ago'; */ ?>



						en <?php the_time('l, F jS, Y') ?> a las <?php the_time() ?>



						archivado como <?php the_category(', ') ?>.



						Puedes seguir las respuestas suscribi�ndote al <?php post_comments_feed_link('RSS 2.0'); ?> canal RSS.







			<?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {



							// Both Comments and Pings are open ?>



							You can <a href="#respond">Deja un comentario</a>, or <a href="<?php trackback_url(); ?>" rel="trackback">trackback</a> from your own site.







						<?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) {



							// Only Pings are Open ?>



							Los comentarios est�n cerrados, pero puedes hacer <a href="<?php trackback_url(); ?> " rel="trackback">trackback</a> desde tu propio sitio web.







					<?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) {



							// Comments are open, Pings are not ?>



							No ping.







						<?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) {



							// Neither Comments, nor Pings are open ?>



							Comentarios y pings cerrados.







					<?php } edit_post_link('Edit this entry','','.'); ?>







					</small>



				</p>







			</div>



            	<div class="CommWidth"><?php comments_template(); ?></div>



		</div>















	<?php endwhile; else: ?>







		<p>No encontramos lo que buscas. Siempre hay algo bueno en los archivos.</p>







<?php endif; ?>



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







<div class="google-ads">







</div>







</div>







<?php get_footer(); ?>







<script type="text/javascript">




</script>
