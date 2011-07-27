<?php
/*
Plugin Name: Facebook,Twitter,Google plus one Share Buttons
Plugin URI: http://www.92app.com/wordpress-plugins/facebook-twitter-google-plus-one-share-buttons
Description: This simple yet easy-to-use plugin adds the most important social share buttons: facebook, twitter and google +1 (plus one) after post contents. 
Version: 1.1
Author: Jeriff Cheng
Author URI: http://www.92app.com/
*/

/*
Copyright 2011  Jeriff Cheng(Email : hschengyongtao@gmail.com)

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
    
*/
function socialbutton_integration() {
if (is_single()) { ?> 
<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
<script type="text/javascript" src="<?php echo get_option('siteurl') . '/' . PLUGINDIR . '/' . dirname(plugin_basename (__FILE__))?>/FB.Share" ></script>
<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
<?php }
 }
add_action('wp_footer', 'socialbutton_integration');

function socialbutton($content) {
if(is_single()) {
$content.= '
<style type="text/css">
*{margin:0; padding:0;}
ul{margin:0;padding:0;list-style:none;} #socialbuttonnav{overflow:hidden;margin:0 auto;list-style:none;}#socialbuttonnav li{width:70px;line-height:20px; border:none; margin-right:1px; float:left; text-align:center;}
</style>
<ul id="socialbuttonnav">
<li><!-- Twitter--><div><a name="twitter_share" data-count="vertical" href="http://twitter.com/share" class="twitter-share-button" >Tweet</a></div></li>
<li><!-- Google plus one--><div><g:plusone size="tall" count="true"></g:plusone></div></li>
<li><!-- Facebook share--><div><a name="fb_share" type="box_count" href="http://www.facebook.com/sharer.php">Share</a></div></li>
<li><!-- Facebook like--><div id="fb-root"></div><script src="http://connect.facebook.net/en_US/all.js#appId=220231561331594&amp;xfbml=1"></script><fb:like href="" send="false" layout="box_count" width="450" show_faces="false" font=""></fb:like></li>
</ul>';
}
return $content;
}
add_filter ('the_content', 'socialbutton');