<?php
/*
Plugin Name: Facebook,Twitter,Google plus one Share Buttons
Plugin URI: http://www.92app.com/wordpress-plugins/facebook-twitter-google-plus-one-share-buttons
Description: This simple yet easy-to-use plugin adds the most important social share buttons: facebook, twitter and google +1 (plus one) after post contents. For more information,refer to http://www.92app.com/wordpress-plugins/facebook-twitter-google-plus-one-share-buttons
Version: 1.0
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
<script type="text/javascript" src="http://static.ak.fbcdn.net/connect.php/js/FB.Share" ></script>
<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
<?php }
 }
add_action('wp_footer', 'socialbutton_integration');

function socialbutton($content) {
if(is_single()) {
$content.= '<div class="" style="padding-right:10px;float:right;"><g:plusone size="standard" count="true"></g:plusone></div>
<div class="" style="float:left;padding-right:10px;"><a name="fb_share" href="http://www.facebook.com/sharer.php">Share</a></div>
<div class="" style="padding-right:10px;"><a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal">Tweet</a></div>'; 
}
return $content;
}
add_filter ('the_content', 'socialbutton');
