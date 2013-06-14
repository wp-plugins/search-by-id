<?php
/*
	Plugin Name: Search by ID
	Plugin URI: 
	Description: Enables the user to search by post ID using the built-in search within the administration area. Works for all kinds of posts (posts, pages, custom post types).
	Version: 1.1
	Author: Uffe Fey, WordPress consultant
	Author URI: http://wpkonsulent.dk
*/
	$wpkonsulent_searchbyid = new WPkonsulentSearchById();
	
	class WPkonsulentSearchById
	{
		function WPkonsulentSearchById()
		{
			$this->__construct();
		}

		function __construct()
		{
			add_filter('posts_where', array(&$this, 'posts_where'));
		}
		
		function posts_where($where)
		{
			if(is_admin() && is_search())
			{
				$s = $_GET['s'];
				
				if(!empty($s))
				{
					if(is_numeric($s))
					{
						global $wpdb;
						$where .= ' or ' . $wpdb->posts . '.ID = ' . $s;
					}
					elseif(preg_match("/^(\d+)(,\s*\d+)*\$/", $s)) // string of post IDs
					{
						global $wpdb;
						$where .= ' or ' . $wpdb->posts . '.ID in (' . $s . ')';
					}
				}
			}
			
			return $where;
		}
	}
?>