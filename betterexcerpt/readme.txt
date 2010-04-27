=== Better Excerpt ===
Contributors: blogmum
Donate link: http://blogmum.com/donate/
Tags: excerpt, the_excerpt
Requires at least: 2.5
Tested up to: 2.8.2
Stable tag: 0.1

Gives you full control over the WordPress excerpt: change the length, the ellipsis [...] and surrounding markup.

== Description ==

By default, the WordPress excerpt is fixed at 55 words, wrapped in &lt;p&gt; tags and with [...] as an unlinked 
ellipsis at the end. This plugin allows you to specify the length of the excerpt you want, text or HTML before the excerpt,
text or HTML after the excerpt, and whether you want to automatically append a link to the full post. 

Example uses: 

* set the excerpt at a length that works with your magazine-style theme
* automatically wrap every excerpt in div tags
* automatically add a "read more" link after your excerpt, linking to the full post
* get rid of that super-annoying [...] thing!

== Installation ==

1. Upload `plugin-name.php` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Set your own preferences in Settings > Better Excerpt


== Frequently Asked Questions == 

= Does it remove HTML tags? =
Yes, it does.

= Does it leave half-words at the end of my excerpt? =
No, it doesn't: half-words are trimmed back to the end of the previous word.

= I set length to 55 but it's only giving me about 10 words =
Length is set in characters - that is, letters, numbers, spaces and bits of punctuation. We do it like this because some people use lots of long words, and some people don't, so a ten word excerpt for some would be the same length as a twenty word excerpt for others. As a general rule of thumb, assume 5 letters in the average English word.

= I installed it but now I get a fatal error for strrpos... =
This plugin requires PHP5. Most likely, you're still running PHP4. It's time to upgrade.

== Changelog == 

v. 0.1 original release

== Screenshots ==

`screenshot.png`