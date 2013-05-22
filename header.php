<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' ); ?>

        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/reset.css">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/960.css">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/style.css" />
        <script src="http://schr.fr/wp-content/themes/twentyten/jquery.min.js"></script>
        <script src="http://schr.fr/wp-content/themes/twentyten/jquery.placeheld.min.js"></script>   

        <script>
        $(document).ready(function(){
        
        twee = '.revjirhcscire@cire||ln';
        tweetjes = twee.split("||");
        var reverse = function (s) {
          var ret ='';
          for (var i=s.length-1;i>=0;i--)
            ret+=s.charAt(i);
          return ret;
        }
        twee = reverse(tweetjes[0])+reverse(tweetjes[1]);
        $('#dam').attr('href', 'mailto:' + twee)

        $("input[placeholder]").placeHeld();
        });
        </script>
<?php        
	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<body <?php body_class(); ?>>
        <div style="position:absolute; right:20px; top: 20px;"><a href="http://ericschrijver.nl">ericschrijver.nl</a></div>
        <div id="header" class="container_12">
                <div class="grid_8 ">
                  
            </div>
            </div>

