=== Windfyre Embed ===

Contributors: MartyniP
Tags: windfyre, irc, chat
Requires at least: 2.9.0
Tested up to: 3.0.0
Stable tag: 1.2

Creates a shortcode to easily embed a Windfyre channel (chatroom) into a post or page.

== Description ==

This plugin creates a shortcode to easily embed a Windfyre channel into a post or page on your blog. With options for channel's, set a default nick, and sizing of the chat.
Please feel free to connect and tell us of any of your suggestions or comments into #windfyre irc.windfyre.net

== Installation ==

1. Upload the `Windfyre-Embed` folder to the `/wp-content/plugins/` directory
1. Activate the plugin through the `Plugins` menu in WordPress
1. Create a new page or post, and use the shortcode. See `Other Notes` for examples.

== Examples ==
The shortcode currently supports three parameters: channel, width, and height. Any, none, or all can be used, in any combination.

**NOTE:** You may not have a width of less than 500, or a height of 375.


        You Type: [windfyre]
        You Get:  A 500 by 375 chat box that joins #windfyre

        You Enter: [windfyre channel=someChannel]
        You Get:   A 500 by 375 chat box that joins someChannel once connected and #windfyre.

        You Enter: [windfyre nick=someNickname]
        You Get:   A 500 by 375 chat box that joins #windfyre with the nick of someNickname once connected and #windfyre. A random                    number will be added on to the end of the nick

        You Enter: [windfyre height=XXX]
        You Get:   A chat box XXX pixels tall and 500 pixels wide. It will join #windfyre once connected.

        You Enter: [windfyre width=XXX]
        You Get:   A chat box XXX pixels wide and 375 pixels tall. It will join #windfyre once connected.

**Full Example**
[windfyre channel=#mirc nick=siteuser height=500 width=375]

== Frequently Asked Questions ==

= What are the shotcodes? =

The avalible shotcodes are [windfyre] [windfyre_embed] and [chat]

= I want to personalize the plugin, what happens if it goes wrong =

If you edit any of the source file you will not get any support from us, as it is your own doing. But if you would like something to be added, come over to irc.windfyre.net and join #windfyre or #dev and you can ask us to add it in a future version.

= How do i report a bug =

If you find a bug we would like it if you were to inform us of it so we can fix it in any future version. You can do so by emailing admin@martyni-productions.co.cc or connect to irc.windfyre.net and tell us in #windfyre or #dev

== Screenshots ==

1. http://wfstingray.ath.cx/plugin/screenshot1.png
2. http://wfstingray.ath.cx/plugin/screenshot2.png

== Changelog ==

= 1.0 =
* Initial idea by ComputerCoderGuy (www.ComputerCoderBlog.co.cc)
* Creation and local testing by MartyniP (www.MartyniP.co.uk)
* Initial public release.
= 1.1 =
* Development Only Version
= 1.2 =
* Oversized Random Nick Length
* More Short Codes (chat and windfyre_embed added)
* FAQ Added
* Screenshots Added
* 
