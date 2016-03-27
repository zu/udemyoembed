# udemyoembed
WordPress plugin to oEmbed udemy course descriptions

This is just an experiment to try to add support for udemy course pages - https://codex.wordpress.org/Embeds.

It should become a proof of concept and if possibe a usable plugin.

According to the [WordPress Codex Embeds](https://codex.wordpress.org/Embeds) it should be possible to use a shortcode like this:

	[embed width="123" height="456"]http://www.youtube.com/watch?v=dQw4w9WgXcQ[/embed]

The callback function wp_embed_handler_udemy for the wp_embed_register_handler then should generate the HTML.

If I get help for the regex and the callback function to do something real, I can go on from there.