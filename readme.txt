=== Facebook,Twitter,Google plus one Share Buttons ===
Contributors: Jeriff Cheng
Donate link: http://www.92app.com
Tags: facebook,twitter,google +1(plus one) button,google plus one,facebook share,twitter share
Requires at least: 2.8+
Tested up to: 3.2.1
Stable tag: trunk

== Description ==
This simple yet easy-to-use plugin adds the most important social share buttons: facebook, twitter and google +1 (plus one) after post contents.

Support me by introducing this plugin to your friends, or give me a high rate on WordPress.org .Thanks !

Features:

1. The Javascript required is embedded in the footer of your webpage,thus, doesn't affect your PageSpeed(As pagespeed affects Google PageRank, this plugin is SEO-friendly).

2. Only show share buttons after post contents.(See FAQs for why don't show buttons on Page and HomePage)

For more information,refer to <strong>http://www.92app.com/wordpress-plugins/facebook-twitter-google-plus-one-share-buttons</strong>

== Installation ==
1.  Upload the full directory into your wp-content/plugins directory
2.  Activate the plugin at the plugin administration page
3.  That's it!

== Frequently Asked Questions ==
=Why doesn't show the share buttons after Page content(and Homepage)? =

The Javascript required is embedded in the footer of your webpage,even so,to download these JS can waste 1-2 seconds, so I srongly recommend displaying these kind of social share buttons only in posts. Never think about displaying theme on HomePage,that is very scaring...


=What if I really want to add the buttons after Page Contens? =
It is not recommended as explained above,but if you really want to do so, simply find <strong>if(is_single())</strong> in Facebook_Twitter_Google_plus-one_Share_Buttons.php file, there are two.

1. To display buttons after page contentd,change them to <strong>if(is_single()||is_page())</strong>

2. To display buttons on Homepage, change them to <strong>if(is_single()||is_home())</strong>

3. To display buttons on Posts, pages and Homepage,change them to <strong>if(is_single()||is_page()||is_home())</strong>

Learn more about <a href="http://codex.wordpress.org/Conditional_Tags" target="_blank">Wordpress Conditional Tags</a>.

=Why don't you add more buttons, three is not enough =

Well,haven't you seen the plugin's name? Simple is good.

For more information,refer to http://www.92app.com/wordpress-plugins/facebook-twitter-google-plus-one-share-buttons

== Screenshots ==
1. Facebook,Twitter,Google plus one Share Buttons after post contents
2. Facebook share pop-up window
3. Twitter share pop-up window
4. Google plus one pop-up window

== Changelog ==
= 1.0 =
*First Version

== Upgrade Notice ==
soon...