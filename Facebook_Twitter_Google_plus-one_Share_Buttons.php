<?php
/*
Plugin Name: Facebook,Twitter,Google plus one Share Buttons
Plugin URI: http://www.92app.com/wordpress-plugins/facebook-twitter-google-plus-one-share-buttons
Description: Facebook Like & Share,Twitter,Google +,Pinterest,Digg Buttons after post contents.
Version: 1.3.0
Author: Jeriff Cheng
Author URI: http://www.92app.com/
*/
/*  Copyright 2011-2012 Jeriff Cheng (email: hschengyongtao@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.
*/

		/*
		Contents:
		1.Head js: Pinterest,Google + ,Digg
		2.Footer js: Twitter,Facebook Share
		3.Get the Image for Pinterest
		4.Display the Social Share Buttons
		*/

################################################################
##### 1. Head js: Pinterest,Google +, Digg#####################
################################################################
function FTGSB_head() {
if (is_single()) { ?> 
<script type="text/javascript">
(function() {
    window.PinIt = window.PinIt || { loaded:false };
    if (window.PinIt.loaded) return;
    window.PinIt.loaded = true;
    function async_load(){
        var s = document.createElement("script");
        s.type = "text/javascript";
        s.async = true;
        if (window.location.protocol == "https:")
            s.src = "https://assets.pinterest.com/js/pinit.js";
        else
            s.src = "http://assets.pinterest.com/js/pinit.js";
        var x = document.getElementsByTagName("script")[0];
        x.parentNode.insertBefore(s, x);
    }
    if (window.attachEvent)
        window.attachEvent("onload", async_load);
    else
        window.addEventListener("load", async_load, false);
})();
</script>
<script type="text/javascript">
(function() {
var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
po.src = 'https://apis.google.com/js/plusone.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
})();
</script>
<script type="text/javascript">
(function() {
var s = document.createElement('SCRIPT'), s1 = document.getElementsByTagName('SCRIPT')[0];
s.type = 'text/javascript';
s.async = true;
s.src = 'http://widgets.digg.com/buttons.js';
s1.parentNode.insertBefore(s, s1);
})();
</script>
<?php }
 }
add_action('wp_head', 'FTGSB_head',20);

################################################################
############2.Footer js: Twitter,Facebook Share#################
################################################################
function FTGSB_footer() {
	if (is_single()) { ?> 
		<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
		<script type="text/javascript" src="<?php echo get_option('siteurl') . '/' . PLUGINDIR . '/' . dirname(plugin_basename (__FILE__))?>/FB.Share" ></script>
	<?php }
 }
add_action('wp_footer', 'FTGSB_footer');


################################################################
###############3.Get the Image for Pinterest#####################
################################################################
function pinterest_image() {
  global $post, $posts;
  //if you set p-img custom field, then set it as pinterest_image
  $pinterest_image = get_post_meta($post->ID, 'p-img', true);  
  
  //if not,get the first image in the post as pinterest_image
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches [1] [0];

  //return pinterest_image URL
  if(empty($pinterest_image)){    
    $pinterest_image = $first_img;
  }
  return $pinterest_image;
}


################################################################
###############4.Display the Social Share Buttons################
################################################################
add_filter ('the_content', 'FTGSB');
function FTGSB($content) {
if(is_single()) {
global $post, $posts;
$content.= '
<style>#socialbuttonnav li{list-style:none;overflow:hidden;margin:0 auto;background:none;overflow:hidden;width:62px; height:80px; line-height:10px; margin-right:1px; float:left; text-align:center;}</style>
<ul id="socialbuttonnav">
<li><!-- Pinterest like--> <a href="http://pinterest.com/pin/create/button/?url='.urlencode(get_permalink($post->ID)).
'&media='.pinterest_image().'" class="pin-it-button" count-layout="vertical">Pin It</a></li>
<li><!-- Google plus one--><g:plusone size="tall" count="true"></g:plusone></li>
<li><!-- Facebook like--><iframe src="//www.facebook.com/plugins/like.php?href='.urlencode(get_permalink($post->ID)).
'&amp;send=false&amp;layout=box_count&amp;width=65&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=90&amp;appId=220231561331594" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:65px; height:90px;" allowTransparency="true"></iframe></li>
<li><!-- Facebook share--><a name="fb_share" type="box_count" href="http://www.facebook.com/sharer.php">Share</a></li>
<li><!-- Twitter--><a name="twitter_share" data-count="vertical" href="http://twitter.com/share" class="twitter-share-button" >Tweet</a></li>
<li><!-- Digg--><a class="DiggThisButton DiggMedium" href='.urlencode(get_permalink($post->ID)).'&amp;title='.urlencode(get_the_title()).'></a></li>
</ul>';
}
return $content;
}