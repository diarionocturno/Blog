<?php get_header(); ?>

	<div id="content" class="narrowcolumn">

	<?php if (have_posts()) : ?>

		<h2 class="pagetitle">Search Results</h2>


		<?php while (have_posts()) : the_post(); ?>

			<div class="post">
	<div class="comments"><?php comments_popup_link('NO COMMENTS', '<span> 1 </span> COMMENTS', '<span> % </span> COMMENTS'); ?></div>
				<div class="PostHead">

<div class="PostTime"><?php the_time('<b>j</b> <a>M Y</a>') ?> </div>
<h2><a title="Permanent Link to <?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
<small class="PostDet"><?php edit_post_link('Edit', '', ' | '); ?> Author: <?php the_author() ?> | Ver m&aacute;s: <?php the_category(', ') ?></small>

</div>

				<p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?>   </p>
			</div>

		<?php endwhile; ?>


	<?php else : ?>

		<h2 class="pagetitle">No encontrado. Intenta otra busqueda:</h2>
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>

	<?php endif; ?>

	</div>

<?php get_sidebar(); ?>
<div class="sidebar-right"> 
<p><img align="right" src="http://www.diarionocturno.com/blog/wp-content/themes/Imprezz/images/autor.jpg" width="67" height="80" />Est&aacute;s en el Diario Nocturno de <a href="http://www.diarionocturno.com/blog/el-autor/">Nicol&aacute;s Mart&iacute;nez Habibe</a>, as&iacute; es como quieren ser los blogs cuando grandes.</p><p></p>
<p><img src='http://diarionocturno.com/blog/wp-content/mail.png' alt='Ahora ya sabes como contactarme' /></p><p></p>
<div class="twitter">
<div class="twitter-content">
        <ul id="twitter_update_list"><li></li></ul></div>
		<script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>
        <script type="text/javascript" src="http://twitter.com/statuses/user_timeline/diarionocturno.json?callback=twitterCallback2&amp;count=1"></script>
<a class="followme" href="http://twitter.com/diarionocturno">S�gueme en twitter</a>
</div>


<a href="http://www.diarionocturno.com/blog/publicidad/"> <img src="<?php bloginfo('template_url'); ?>/images/pdlogo.gif" alt="paute aqu�" class="pdlogo"/></a>

</div>



<div class="google-ads">
<script type="text/javascript"><!--
google_ad_client = "pub-3717282600397593";
/* 160x600, creado 22/03/10 */
google_ad_slot = "4665822632";
google_ad_width = 160;
google_ad_height = 600;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</div>


</div>

<?php get_footer(); ?>