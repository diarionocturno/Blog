<div id="sidebar">
  <h1 class="logo"><a href="http://diarionocturno.com/blog"><img width="250px" height="120" src="http://www.diarionocturno.com/blog/wp-content/themes/Imprezz/images/logo.gif" alt="DiarioNocturno.com" /></a></h1>
  <h2>Buscar:</h2>
  <div class="searchfield"><span>SEARCH</span>
    <?php include (TEMPLATEPATH . '/searchform.php'); ?>
  </div>
  <ul>
    <li>
    <center>
      <ul>
        <li> <a href="http://diarionocturno.com/" style="font-size:12px;"><strong>
          <?php



$count_pages = wp_count_posts();



echo $count_pages->publish;



?>
          </strong> artículos publicados desde 1997 </a> </li>
        <li>
          <div style="margin-left:-10px;"> <a href="http://twitter.com/diarionocturno" class="twitter-follow-button" data-lang="en">@diarionocturno</a> 
            <script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script></div>
        </li>
        <li>
          <?php previous_posts_link('&laquo; Anteriores | ') ?>
          <?php next_posts_link('Siguientes &raquo;') ?>
        </li>
      </ul>
      <li style="margin-left:-6px; margin-top:5px; margin-bottom:5px;">
        <div style="width: 300px; height: 250px; background-color: #ccc; padding: 1px;"> 


<script type="text/javascript"><!--

google_ad_client = "ca-pub-3717282600397593";

/* Segunda columna a 300 */

google_ad_slot = "7427498395";

google_ad_width = 300;

google_ad_height = 250;

//-->

</script> 
          <script type="text/javascript"

src="http://pagead2.googlesyndication.com/pagead/show_ads.js">

</script> 


        </div>
      </li>
    </center>
    <h2>Recomendado</h2>
    <center>
      <ul style="margin-top:-10px;">
        <li>
          <?php

$catquery = new WP_Query( 'cat=1134&posts_per_page=1' );

while($catquery->have_posts()) : $catquery->the_post();

?>
          <a style="margin-left:-10px;" href="<?php the_permalink() ?>" rel="bookmark">
          <?php the_post_thumbnail('thumbnail'); ?>
          </a> <br />
          <br />
          <a href="<?php the_permalink(); ?>">
          <?php the_title();?>
          </a>
          <?php endwhile; ?>
        </li>
      </ul>
    </center>
    </li>
  </ul>
  <ul>
    <?php if ( is_404() || is_category() || is_day() || is_month() ||



						is_year() || is_search() || is_paged() ) {



			?>
    <?php }?>
    
    <!-- Aca iba el anuncio gris -->
    
    <li>
      <h2>Lo nuevo:</h2>
      <ul>
        <?php wp_get_archives('type=postbypost&limit=20'); ?>
      </ul>
    </li>
    <li>
      <h2>Suscripciones</h2>
      <ul>
        <li> <a href="http://www.diarionocturno.com/blog/suscripciones">Escribe tu correo para recibir mensajes de humor:</a></li>
        <li>
          <form action="http://mx.groups.yahoo.com/subscribe/diarionocturno" method="GET">
            <table border="0" cellspacing="0" align="center">
              <tbody>
                <tr>
                  <td align="center"><span style="font-family: Verdana,Arial,Helvetica,sans-serif;">
                    <input name="user" size="20/" type="text" />
                    <input name="Submit" type="submit" value="Suscribir a DiarioNocturno" />
                    </span></td>
                </tr>
              </tbody>
            </table>
          </form>
        <li><a href="http://www.diarionocturno.com/blog/suscripciones">Otras formas de suscribirse</a></li>
      </ul>
    </li>
  </ul>
</div>