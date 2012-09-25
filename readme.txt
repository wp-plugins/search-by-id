=== Search by ID ===
Contributors: wpkonsulent
Tags: search, posts, pages, custom post types, id, admin
Requires at least: 3.0.1
Tested up to: 3.4.2
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Enables the user to search by post ID using the built-in search within the control panel. Works for all kinds of posts.

== Description ==

Ever wanted to do a quick search for a post with a specific ID? The built-in search doesn't allow that. But now you can.

= Features: =
* Works for all kinds of posts (regular posts, pages, custom post types).
* No configuration needed.
* Doesn't add javascript or css.
* No front-end functionality, just back-end.
* Doesn't add any options or tables to the database.

Just a nice and easy, seamless extension of the built-in search.

= How to use it: =
Simply enter an ID into the search field. If a post with that ID is found, it will show up in the search result.

== Installation ==

1. Upload the `search-by-id` folder to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

That's right. There's no step three.

== Frequently Asked Questions ==

= What does it do? =

Whenever a search is executed, the plugin simply hooks into that query and checks if the query (the phrase you entered into the search field) is a numeric value. If it is, it modified the query so that it also searches for post ID's (default is to only search title and content).

== Screenshots ==

None.

== Changelog ==

= 1.0 =
* Initial release.