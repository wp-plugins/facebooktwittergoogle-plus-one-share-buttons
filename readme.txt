=== Facebook,Twitter,Google plus one Share Buttons ===
Contributors: Jeriff Cheng
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=FUYPGH626DA34
Tags: facebook,twitter,google +1(plus one) button,google plus one,facebook share,facebook like,twitter share,stumbleupon,linkedin,digg,Google Buzz
Requires at least: 2.8+
Tested up to: 3.2.1
Stable tag: trunk

== Description ==
This simple yet easy-to-use plugin adds facebook,twitter,google +1(plus one) and many other popular social sharing buttons after post contents,such as:Stumbleupon,Linkedin,Digg and Google Buzz.

<strong>Support me by introducing this plugin to your friends, or give me a high rate on WordPress.org.Thanks !</strong>

<strong>Features:<strong>

1. All buttons can show counts.(If you want to remove some buttons in V1.2, refer to <a title="Remove Button in Facebook,Twitter,Google plus one Share Buttons V1.2" href="http://www.92app.com/remove-button-in-facebooktwittergoogle-plus-one-share-buttons-v1-2.html" target="_blank">Remove Button in Facebook,Twitter,Google plus one Share Buttons V1.2</a> )

2. The Javascript required is embedded in the footer of your webpage,thus, doesn't affect your PageSpeed(As pagespeed affects Google PageRank, this plugin is SEO-friendly).

3. Only show share buttons after post contents by default.(See FAQs-2 for how to show buttons on Page or HomePage)

For more information,refer to <a title="Facebook,Twitter,Google plus one Share Buttons by Jeriff Cheng" href="http://www.92app.com/wordpress-plugins/facebook-twitter-google-plus-one-share-buttons" target="_blank">Facebook,Twitter,Google plus one Share Buttons Doc </a>

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

=<strong>4.I get some problem with the plugin after updating, I can¡¯t click on the buttons</strong>=

1. Your WordPress theme is too old and doesn't support the new version .( Use the old version(V1.0) or find a similar plugin)

2. There are some conflict between this plugin and other plugins you use .(Deactivating other plugins on by one to check which one is the cause).

=<strong>5.Remove Button in Facebook,Twitter,Google plus one Share Buttons V1.2</strong>=

V1.2 got four extra buttons and you might want to remove them. As V1.2 hasn't got a <strong>Dashboard Option Page</strong>,so you have to edit the plugin and deal with the code.(I am now working on <strong>V1.3</strong>, this version will get a&nbsp;Dashboard Option Page).

See Tutorials :<a title="Remove Button in Facebook,Twitter,Google plus one Share Buttons V1.2" href="http://www.92app.com/remove-button-in-facebooktwittergoogle-plus-one-share-buttons-v1-2.html" target="_blank">Remove Button in Facebook,Twitter,Google plus one Share Buttons V1.2</a>

For more information,refer to <a title="Facebook,Twitter,Google plus one Share Buttons by Jeriff Cheng" href="http://www.92app.com/wordpress-plugins/facebook-twitter-google-plus-one-share-buttons">Facebook,Twitter,Google plus one Share Buttons Doc</a>

== Screenshots ==
1. Facebook,Twitter,Google plus one and many other popular social sharing buttons after post contents


== Changelog ==
=V1.0 -16.07.2011=

*First Version

=V1.1 -26.07.2011=
 <ul>
	<li>NEW : Add Facebook like button</li>
	<li>Changed : Change the horizontal style to vertical</li>
	<li>Bugfix : Facebook Share Button doesn't  always display count(fixed)</li>
</ul>

=V1.2 -27.07.2011=
 <ul>
	<li>NEW : Add Stumbleupon,Linkedin,Digg,Google Buzz share buttons</li>
	<li>Changed : Remove the Facebook share buttons(Facebook will soon give up supporting the share buttons, they recommend the Like button)</li>
</ul>

== Upgrade Notice ==

=1.1=
This version fix a bug and add Facebook like button,recommend upgrading.

=1.2=
Add Stumbleupon,Linkedin,Digg,Google Buzz share buttons.Remove the facebook share buttons(Facebook will soon give up supporting the share buttons, they recommend the Like button)