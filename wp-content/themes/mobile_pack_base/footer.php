<?php

/*
$Id: footer.php 195195 2010-01-19 04:11:37Z jamesgpearce $

$URL: http://plugins.svn.wordpress.org/wordpress-mobile-pack/trunk/themes/mobile_pack_base/footer.php $

Copyright (c) 2009 James Pearce & friends, portions mTLD Top Level Domain Limited, ribot, Forum Nokia

Online support: http://wordpress.org/extend/plugins/wordpress-mobile-pack/

This file is part of the WordPress Mobile Pack.

The WordPress Mobile Pack is Licensed under the Apache License, Version 2.0
(the "License"); you may not use this file except in compliance with the
License.

You may obtain a copy of the License at

    http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software distributed
under the License is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR
CONDITIONS OF ANY KIND, either express or implied. See the License for the
specific language governing permissions and limitations under the License.
*/

?>

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- diarionocturno - movil -->
<ins class="adsbygoogle"
     style="display:inline-block;width:320px;height:50px"
     data-ad-client="ca-pub-3717282600397593"
     data-ad-slot="7332322795"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
      <div id="footer">
        <?php
          if (file_exists($wpmp_include = wpmp_theme_group_file('footer.php'))) {
            include_once($wpmp_include);
          } else {
            ?>
              <p><a href="http://diarionocturno.com">DiarioNocturno.com</a></p>
            <?php
          }
        ?>
        <?php wp_footer(); ?>
      </div>
    </div>
  </body>
</html>