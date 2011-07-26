=== Facebook,Twitter,Google plus one Share Buttons ===
Contributors: Jeriff Cheng
Donate link: http://www.92app.com
Tags: facebook,twitter,google +1(plus one) button,google plus one,facebook share,facebook like,twitter share
Requires at least: 2.8+
Tested up to: 3.2.1
Stable tag: trunk

== Description ==
This simple yet easy-to-use plugin adds the most important social share buttons: facebook, twitter and google +1 (plus one) after post contents. New version V1.1 adds the facebook like button.

<strong>Support me by introducing this plugin to your friends, or give me a high rate on WordPress.org.Thanks !</strong>

<strong>Features:<strong>

1. The Javascript required is embedded in the footer of your webpage,thus, doesn't affect your PageSpeed(As pagespeed affects Google PageRank, this plugin is SEO-friendly).

2. Only show share buttons after post contents.(See FAQs for why don't show buttons on Page and HomePage)

For more information,refer to <a title="Facebook,Twitter,Google plus one Share Buttons by Jeriff Cheng" href="http://www.92app.com/wordpress-plugins/facebook-twitter-google-plus-one-share-buttons" target="_blank">Facebook,Twitter,Google plus one Share Buttons Doc </a>

Recommend another Plugin I made: <a href="http://wordpress.org/extend/plugins/author-box-after-posts/" target="_blank">Author Box After Posts</a>.Adds an author box after your post contents.The box contains author's avatar,name,post count,site link,personal description and Email.

== Installation ==
1.  Upload the full directory into your wp-content/plugins directory
2.  Activate the plugin at the plugin administration page
3.  That's it!
== Frequently Asked Questions ==
=<strong>1. Why doesn't show the share buttons after Page content(and Homepage)?</strong> =

The Javascript required is embedded in the footer of your webpage,even so,to download these JS can waste 1-2 seconds, so I srongly recommend displaying these kind of social share buttons only in posts. Never think about displaying theme on HomePage,that is very scaring...

=<strong>2. What if I really want to add the buttons after Page Contens?</strong> =
It is not recommended as explained above,but if you really want to do so, simply find <strong>if(is_single())</strong> in Facebook_Twitter_Google_plus-one_Share_Buttons.php file, there are two.

    1.To display buttons after posts and pages, change them to if(is_single()||is_page())
	
    2.To display buttons after posts and Homepage, change them to if(is_single()||is_home())
	
    3.To display buttons after posts, pages and Homepage, change them to if(is_single()||is_page()||is_home())
	
    4.To display buttons after posts and categories, change them to if(is_single()||is_category())

=<strong>3.Upon activating the plugin, it shows text links,not buttons</strong>=

Upon activating the plug I only see text links beneath each post saying "Share" and "Tweet". I don't see any settings page for this plugin. Am I missing something?

You must be from China. GWF has prevent the buttons from appearing normally. Maybe you should use a VPN or other proxy.

For more information,refer to <a title="Facebook,Twitter,Google plus one Share Buttons by Jeriff Cheng" href="http://www.92app.com/wordpress-plugins/facebook-twitter-google-plus-one-share-buttons">Facebook,Twitter,Google plus one Share Buttons Doc</a>

== Screenshots ==
1. Facebook,Twitter,Google plus one Share Buttons after post contents
2. Facebook share pop-up window
3. Twitter share pop-up window
4. Google plus one pop-up window
5. Add comment after you liked the post

== Changelog ==
<strong>V1.0 -16.07.2011</strong>

*First Version

<strong>V1.1 -26.07.2011</strong>
 <ul>
	<li>NEW : Add Facebook like button</li>
	<li>Changed : Change the horizontal style to vertical</li>
	<li>Bugfix : Facebook Share Button doesn't  always display count(fixed)</li>
</ul>

== Upgrade Notice ==
<strong>V1.1 -26.07.2011</strong>
This version fix a bug and add Facebook like button,recommend upgrading.