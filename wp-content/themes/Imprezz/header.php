<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Archivo del blog <?php } ?> <?php wp_title(); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?>" href="http://feeds.feedburner.com/Diarionocturnocom" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />



<style type="text/css">
.recomendados .rec a img {
	height: 60px;
	width: 60px;
	margin-right: 5px;
	float: left;
	border: 1px solid rgba(255,255,255,1);
}
.recomendados {
	width: 1000px;
	clear: both;
	height: 70px;
	text-align: left;
	background-color: rgba(204,0,0,1);
	margin-top: 10px;
	margin-bottom: 5px;
}
.recomendados .rec {
	height: 60px;
	width: 155px;
	display: block;
	float: left;
	padding: 5px;
	overflow: hidden;
	border-left-width: 1px;
	border-left-style: solid;
	border-left-color: rgba(51,51,51,1);
}
.recomendados .rec a {
	color: rgba(255,255,255,1);
	text-decoration: none;
	font-size: 12px;
}
.recomendados .rec .rec-texto {
	display: block;
	height: 50px;
	padding-top: 5px;
	padding-bottom: 5px;
}
</style>











<?php wp_head(); ?>




<!-- Google Analytics Social Button Tracking -->



<script type="text/javascript" src="http://www.tabpress.com/_js/ga_social_tracking.js"></script>











<!-- codigo sharethis -->



<script type="text/javascript">var switchTo5x=true;</script>



<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>



<script type="text/javascript" src="http://s.sharethis.com/loader.js"></script>



<!-- hay otro codigo antes de cerrar la etiqueta body -->







</head>



<body>




<div id="fb-root"></div>



<script>(function(d, s, id) {



  var js, fjs = d.getElementsByTagName(s)[0];



  if (d.getElementById(id)) {return;}



  js = d.createElement(s); js.id = id;



  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";



  fjs.parentNode.insertBefore(js, fjs);



}(document, 'script', 'facebook-jssdk'));</script>







<center>







<br />







<table width="728" border="0" cellpadding="0" cellspacing="5" style="background-color:#000;">

  <tr>

    <td align="center"><a href="http://industriamovil.com" target="_blank"><img src="http://www.diarionocturno.com/blog/wp-content/uploads/industriamovil1.jpg" width="90" height="25" /></a></td>

    <td align="center"><a href="http://teek.co" target="_blank"><img src="http://www.diarionocturno.com/blog/wp-content/uploads/teek.png" width="90" height="25" /></a></td>

    <td align="center"><a href="http://malhermano.com" target="_blank"><img src="http://www.diarionocturno.com/blog/wp-content/uploads/malhermano.jpg" width="90" height="25" /></a><a href="http://elgatoenlacaja.com" target="_blank"></a></td>

    <td align="center"><a href="http://elgatoenlacaja.com" target="_blank"><img src="http://www.diarionocturno.com/blog/wp-content/uploads/elgatoenlacaja.jpg" width="90" height="25" /></a></td>

    <td align="center"><a href="http://finanzaspersonal.es" target="_blank"><img src="http://www.diarionocturno.com/blog/wp-content/uploads/finanzas.png" width="90" height="25" /></a></td>

    <td align="center"><a href="http://cienciayasombro.blogspot.com" target="_blank"><img src="http://www.diarionocturno.com/blog/wp-content/uploads/cienciayasombro.jpg" width="90" height="25" /></a></td>

  </tr>

</table>



<div class="recomendados">

<?php
$catquery = new WP_Query( 'cat=1134&posts_per_page=6&offset=1' );
while($catquery->have_posts()) : $catquery->the_post();
?>
<div class="rec">
<a style="margin-left:-10px;" href="<?php the_permalink() ?>" rel="bookmark"><?php the_post_thumbnail( array(100,100) ); ?></a>

<a class="rec-texto" href="<?php the_permalink(); ?>"><?php the_title();?></a>
</div>
<?php endwhile; ?>

</div>


<!--<div class="recomendados">
<div class="rec"><a href="#"><img src="http://www.diarionocturno.com/blog/wp-content/uploads/47-oveja-250x250.jpg" /></a> <a class="rec-texto" href="#">Un toro con piel de oveja</a> </div>
<div class="rec"><a href="#"><img src="http://www.diarionocturno.com/blog/wp-content/uploads/47-oveja-250x250.jpg" /></a> <a class="rec-texto" href="#">Un toro con piel de oveja</a> </div>
<div class="rec"><a href="#"><img src="http://www.diarionocturno.com/blog/wp-content/uploads/47-oveja-250x250.jpg" /></a> <a class="rec-texto" href="#">Un toro con piel de oveja</a> </div>
<div class="rec"><a href="#"><img src="http://www.diarionocturno.com/blog/wp-content/uploads/47-oveja-250x250.jpg" /></a> <a class="rec-texto" href="#">Un toro con piel de oveja</a> </div>
<div class="rec"><a href="#"><img src="http://www.diarionocturno.com/blog/wp-content/uploads/47-oveja-250x250.jpg" /></a> <a class="rec-texto" href="#">Un toro con piel de oveja</a> </div>
<div class="rec"><a href="#"><img src="http://www.diarionocturno.com/blog/wp-content/uploads/47-oveja-250x250.jpg" /></a> <a class="rec-texto" href="#">Un toro con piel de oveja</a> </div>


</div>-->


<div style="width: 1000px; background-color: #333; padding: 2px 0;">

<table width="1000" border="0" cellpadding="0">
  <tr>
    <td width="880"><script type="text/javascript"><!--
google_ad_client = "ca-pub-3717282600397593";
/* Arriba del cabezote */
google_ad_slot = "6875917171";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></td>
    <td></td>
  </tr>
</table>





</div>



</center>







<div class="panico" style="bottom:40px; position:fixed;



text-align:center; right:5px; font-size:9px;



font-family:Arial, Helvetica, sans-serif">



<a href="http://bit.ly/cgGhJV">



<img src="http://diarionocturno.com/blog/wp-content/themes/Imprezz/images/panico.png"



alt="Bot&oacute;n de p&aacute;nico. Presione en caso de emergencia o presencia del jefe"



width="40" height="40" border="0" /></a><br />



  <a style="color:#999;" href="http://www.diarionocturno.com/blog/boton-de-panico-para-tu-blog/"



  target="_blank">Pon el tuyo</a></div>







    <div class="primarynav">



<ul>    



    <li class="first">



  <a class="<? echo (is_home())?'current_page_item':'off'; ?>" href="<?php echo get_option('home'); ?>/">Home</a></li>



   <li><a href="http://www.diarionocturno.com/blog/category/videos/" title="Los videos mas chistosos del internet">Videos</a>



</li>



	<li><a href="http://www.diarionocturno.com/blog/category/textos/" title="Textos de humor seleccionados">Textos</a>



</li>



	<li><a href="http://www.diarionocturno.com/blog/category/fotos/" title="Fotos divertidas">Fotos</a>



</li>



	<li><a href="http://www.diarionocturno.com/blog/category/concursos-en-colombia/" title="Concursos">Concursos</a>



</li>







   <!-- <?php $pages = wp_list_pages('title_li=0'); ?> -->



   	



    </ul>



    <a href="http://feeds.feedburner.com/Diarionocturnocom" class="topnav_rss">RSS</a>



	



    



    </div>







<div class="bgimage">



<div id="page">