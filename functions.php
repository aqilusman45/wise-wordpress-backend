<?php

/**
 * Theme setup.
 */
function tailpress_setup() {
	add_theme_support( 'title-tag' );

	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'tailpress' ),
		)
	);

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);

    add_theme_support( 'custom-logo' );
	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'align-wide' );
	add_theme_support( 'wp-block-styles' );

	add_theme_support( 'editor-styles' );
	add_editor_style( 'css/editor-style.css' );
}

add_action( 'after_setup_theme', 'tailpress_setup' );

/**
 * Enqueue theme assets.
 */
function tailpress_enqueue_scripts() {
	$theme = wp_get_theme();

	wp_enqueue_style( 'tailpress', tailpress_asset( 'css/app.css' ), array(), $theme->get( 'Version' ) );
	wp_enqueue_script( 'tailpress', tailpress_asset( 'js/app.js' ), array(), $theme->get( 'Version' ) );
}

add_action( 'wp_enqueue_scripts', 'tailpress_enqueue_scripts' );

/**
 * Get asset path.
 *
 * @param string  $path Path to asset.
 *
 * @return string
 */
function tailpress_asset( $path ) {
	if ( wp_get_environment_type() === 'production' ) {
		return get_stylesheet_directory_uri() . '/' . $path;
	}

	return add_query_arg( 'time', time(),  get_stylesheet_directory_uri() . '/' . $path );
}

// register Acf blocks

add_action('acf/init', 'acf_init_block_types');
function acf_init_block_types()
{
    wp_enqueue_style(get_template_directory_uri());

    if (function_exists('register_block_type')) {
        $blocks_dir = get_template_directory() . '/template-parts/blocks';
    
        foreach (new DirectoryIterator($blocks_dir) as $fileInfo) {
            if ($fileInfo->isDot() || !$fileInfo->isDir()) {
                continue;
            }

            $block_json_file = $fileInfo->getPathname() . '/block.json';
            if (file_exists($block_json_file)) {
                register_block_type($block_json_file);
            }
        }
    }
}

function console_log($output, $with_script_tags = true)
{
    $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) .
        ');';
    if ($with_script_tags) {
        $js_code = '<script>' . $js_code . '</script>';
    }
    echo $js_code;
}

// if (function_exists( 'acf_add_options_page')){
//     acf_add_options_page(array(
// 		'page_title'=> 'Main Menu',
// 		'menu_title'=> 'Main Menu',
// 		'show_in_graphql'=>true,
// 		'icon_url'=> 'dashicons-menu'
// 	));
// } 

/**
 * Adds option 'li_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The current item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function tailpress_nav_menu_add_li_class( $classes, $item, $args, $depth ) {
	if ( isset( $args->li_class ) ) {
		$classes[] = $args->li_class;
	}

	if ( isset( $args->{"li_class_$depth"} ) ) {
		$classes[] = $args->{"li_class_$depth"};
	}

	return $classes;
}

add_filter( 'nav_menu_css_class', 'tailpress_nav_menu_add_li_class', 10, 4 );

/**
 * Adds option 'submenu_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The current item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function tailpress_nav_menu_add_submenu_class( $classes, $args, $depth ) {
	if ( isset( $args->submenu_class ) ) {
		$classes[] = $args->submenu_class;
	}

	if ( isset( $args->{"submenu_class_$depth"} ) ) {
		$classes[] = $args->{"submenu_class_$depth"};
	}

	return $classes;
}

add_filter( 'nav_menu_submenu_css_class', 'tailpress_nav_menu_add_submenu_class', 10, 3 );

// add act post

function disable_gutenberg_editor($is_enabled, $post_type)
{
  if ('blog' === $post_type) {
    return false;
  }
  if ('reviews' === $post_type) {
    return false;
  }
  return $is_enabled;
}

add_filter('use_block_editor_for_post_type', 'disable_gutenberg_editor', 10, 2);

// acf -> post -> blog fields or external feild query

if (!function_exists('add_query_meta')) {
	function add_query_meta($wp_query = "")
	{
  
	  //return In case if wp_query is empty or postmeta already exist
	  if ((empty($wp_query)) || (!empty($wp_query) && !empty($wp_query->posts) && isset($wp_query->posts[0]->postmeta))) {
		return $wp_query;
	  }
  
	  $sql = $postmeta = '';
	  $post_ids = array();
	  $post_ids = wp_list_pluck($wp_query->posts, 'ID');
	  if (!empty($post_ids)) {
		global $wpdb;
		$post_ids = implode(',', $post_ids);
		$sql = "SELECT meta_key, meta_value, post_id FROM $wpdb->postmeta WHERE post_id IN ($post_ids)";
		$postmeta = $wpdb->get_results($sql, OBJECT);
		if (!empty($postmeta)) {
		  foreach ($wp_query->posts as $pKey => $pVal) {
			$wp_query->posts[$pKey]->postmeta = new StdClass();
			foreach ($postmeta as $mKey => $mVal) {
			  if ($postmeta[$mKey]->post_id == $wp_query->posts[$pKey]->ID) {
				$newmeta[$mKey] = new stdClass();
				$newmeta[$mKey]->meta_key = $postmeta[$mKey]->meta_key;
				$newmeta[$mKey]->meta_value = maybe_unserialize($postmeta[$mKey]->meta_value);
				$wp_query->posts[$pKey]->postmeta = (object) array_merge((array) $wp_query->posts[$pKey]->postmeta, (array) $newmeta);
				unset($newmeta);
			  }
			}
		  }
		}
		unset($post_ids);
		unset($sql);
		unset($postmeta);
	  }
	  return $wp_query;
	}
  }
  
  
  $args = array(
	'post_type' => 'page',
	'meta_key' => 'someMetaKeyName',
  );
  
  // The Query
  $query = new WP_Query($args);
  if ($wp_query->have_posts()) {
	$wp_query = add_query_meta($wp_query);
	$i = 0;
	while ($wp_query->have_posts()) {
	  $wp_query->the_post();
	  $post_id = get_the_id();
  
	  //Get $someMetaKeyName in current post
	  foreach ($wp_query->posts[$i]->postmeta as $k => $v) {
		switch ($v->meta_key) {
		  case ('someMetaKeyName'): {
			  $someMetaKeyName = $v->meta_value;
			  break;
			}
		}
	  }
  
	  //Your Code here
	  //Example 
	  echo isset($someMetaKeyName) ? '<h3>' . $someMetaKeyName . '</h3>' : '';
  
  
	  $i++;
	}
  }
  
  add_filter(
	'graphql_jwt_auth_secret_key',
	function () {
	  return 'u!TkI9bqdqgXVWZ#zK';
	}
  );
  
  
  add_filter('wp_graphql_blocks_process_attributes', function ($attributes, $data, $post_id) {
	// if it's an ACF block
	if (isset($attributes['data'])) {
	  $attributesData = $attributes['data'];
	  foreach ($attributesData as $key => $value) {
		// attributes that start with an underscore _ are set to the field keys
		if (substr($key, 0, 1) == '_' && function_exists('get_field_object')) {
		  $fieldObject = get_field_object($value);
  
		  // handle post object
		  if ($fieldObject && $fieldObject['type'] == 'post_object') {
			if ($fieldObject['return_format'] == 'object') {
			  $linkedPostIds = $attributes['data'][substr($key, 1)];
			  if (gettype($linkedPostIds) == 'array') {
				// loop over each id
				$posts = [];
				foreach ($linkedPostIds as $linkedPostId) {
				  $linkedPost = get_post($linkedPostId);
				  $featured_img_url = get_the_post_thumbnail_url($linkedPost, 'full');
				  $pageUri = get_page_uri($linkedPostId);
				  $linkedPost->uri = "/$pageUri";
				  $linkedPost->featured_img_url = $featured_img_url ? $featured_img_url : '';
				  if ('blog' == $linkedPost->post_type) {
					$linkedPost->author_image = get_field('authorimage', $linkedPost, false);
					$linkedPost->author_url = wp_get_attachment_image_url($linkedPost->author_image, 'full');
					$linkedPost->category = get_the_terms($linkedPost, 'blog-category');
				  }
				  if ('reviews' == $linkedPost->post_type) {
					$linkedPost->social_logo = get_field('logo', $linkedPost, false);
					$linkedPost->logo = wp_get_attachment_image_url($linkedPost->social_logo, 'full');
				  }
				  array_push($posts, $linkedPost);
				}
				$attributes['data'][substr($key, 1)] = $posts;
			  } else {
				$linkedPost = get_post($linkedPostIds);
				$featured_img_url = get_the_post_thumbnail_url($linkedPost, 'full');
				$pageUri = get_page_uri($linkedPostIds);
				$linkedPost->uri = "/$pageUri";
				$linkedPost->featured_img_url = $featured_img_url ? $featured_img_url : '';
				if ('blog' == $linkedPost->post_type) {
					$linkedPost->author_image = get_field('authorimage', $linkedPost, false);
					$linkedPost->author_url = wp_get_attachment_image_url($linkedPost->author_image, 'full');
					$linkedPost->category = get_the_terms($linkedPost, 'blog-category');
				}
				if ('reviews' == $linkedPost->post_type) {
					$linkedPost->social_logo = get_field('logo', $linkedPost, false);
					$linkedPost->logo = wp_get_attachment_image_url($linkedPost->social_logo, 'full');
				  }
				$attributes['data'][substr($key, 1)] = $linkedPost;
			  }
			}
		  }
		}
	  }
	}
	return $attributes;
  }, 1, 3);
  