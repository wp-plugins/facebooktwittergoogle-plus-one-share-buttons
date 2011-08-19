<?php
/*
Plugin Name: Facebook,Twitter,Google plus one Share Buttons
Plugin URI: http://www.92app.com/wordpress-plugins/facebook-twitter-google-plus-one-share-buttons
Description: This simple yet easy-to-use plugin adds facebook,twitter,google +1(plus one) and many other popular social sharing buttons after post contents,such as:Stumbleupon,Linkedin,Digg and Google Buzz.
Version: 1.2.1
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
//load the javascript
function socialbutton_integration() {
if (is_single()) { ?> 
<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
<script type="text/javascript" src="http://www.google.com/buzz/api/button.js"></script>
<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
<script src="http://platform.linkedin.com/in.js" type="text/javascript"></script>
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
add_action('wp_footer', 'socialbutton_integration');

//insert the buttons after post contents
function socialbutton($content) {
if(is_single()) {
$content.= '
<style>
*{margin:0; padding:0;}
ul{ list-style:none;}
#socialbuttonnav {width:90%; overflow:hidden;margin:0 auto;}
#socialbuttonnav li{background:none;overflow:hidden;width:65px; height:80px; line-height:30px; margin-right:2px; float:left; text-align:center;}
#fb { text-align:center;border:none; }
#fb iframe {text-align: center;float:left; }
</style>
<ul id="socialbuttonnav">
<li><!-- Twitter--><div><a name="twitter_share" data-count="vertical" href="http://twitter.com/share" class="twitter-share-button" >Tweet</a></div></li>
<li><!-- Google plus one--><div><g:plusone size="tall" count="true"></g:plusone></div></li>
<li><!-- stumbleupon--><div><script src="http://www.stumbleupon.com/hostedbadge.php?s=5"></script></div></li>
<li><!-- linkedin--><div><script type="in/share" data-counter="top"></script></div></li>
<li><!-- digg--><div><a class="DiggThisButton DiggMedium" href="http://digg.com/submit?url="<?php the_permalink(); ?>"&amp;title="<?php the_title(); ?>""></a></div></li>
<li><!-- Buzz--><div><a title="Post to Google Buzz" class="google-buzz-button" href="http://www.google.com/buzz/post" data-button-style="normal-count"></a></div></li>
<li><!-- Facebook like--><iframe src="http://www.facebook.com/plugins/like.php?href&amp;send=false&amp;layout=box_count&amp;width=64&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:64px; height:90px;" allowTransparency="true"></iframe></li>
</ul>';
}
return $content;
}
add_filter ('the_content', 'socialbutton');