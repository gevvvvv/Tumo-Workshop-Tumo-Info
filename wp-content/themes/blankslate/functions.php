<?php
add_action( 'after_setup_theme', 'blankslate_setup' );
function blankslate_setup()
{
load_theme_textdomain( 'blankslate', get_template_directory() . '/languages' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
global $content_width;
if ( ! isset( $content_width ) ) $content_width = 640;
register_nav_menus(
array( 'main-menu' => __( 'Main Menu', 'blankslate' ) )
);
}
add_action( 'wp_enqueue_scripts', 'blankslate_load_scripts' );
function blankslate_load_scripts()
{
wp_enqueue_script( 'jquery' );
}
add_action( 'comment_form_before', 'blankslate_enqueue_comment_reply_script' );
function blankslate_enqueue_comment_reply_script()
{
if ( get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); }
}
add_filter( 'the_title', 'blankslate_title' );
function blankslate_title( $title ) {
if ( $title == '' ) {
return '&rarr;';
} else {
return $title;
}
}
add_filter( 'wp_title', 'blankslate_filter_wp_title' );
function blankslate_filter_wp_title( $title )
{
return $title . esc_attr( get_bloginfo( 'name' ) );
}
add_action( 'widgets_init', 'blankslate_widgets_init' );
function blankslate_widgets_init()
{
register_sidebar( array (
'name' => __( 'Sidebar Widget Area', 'blankslate' ),
'id' => 'primary-widget-area',
'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
'after_widget' => "</li>",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
}
function blankslate_custom_pings( $comment )
{
$GLOBALS['comment'] = $comment;
?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
<?php 
}
add_filter( 'get_comments_number', 'blankslate_comments_number' );
function blankslate_comments_number( $count )
{
if ( !is_admin() ) {
global $id;
$comments_by_type = &separate_comments( get_comments( 'status=approve&post_id=' . $id ) );
return count( $comments_by_type['comment'] );
} else {
return $count;
}
}

function page_body_id() {
    global $wp_query;
    $page = '';
    if (is_front_page() ) {
        $page = 'home';
    } elseif (is_page()) {
        $page = $wp_query->query_vars["pagename"];
    } elseif (is_archive()){
        $page = $wp_query->query_vars["post_type"];
    }

    return $page;
}

add_action( 'init', 'post_type_coaches' );

function post_type_coaches() {
    $labels = array(
        'name'               => _x( 'coaches', 'post type general name' ),
        'singular_name'      => _x( 'coaches', 'post type singular name' ),
        'add_new'            => _x( 'Add New', 'coaches' ),
        'add_new_item'       => __( 'Add New coaches' ),
        'edit_item'          => __( 'Edit coaches' ),
        'new_item'           => __( 'New coaches' ),
        'all_items'          => __( 'All coaches' ),
        'view_item'          => __( 'View coaches' ),
        'search_items'       => __( 'Search coaches' ),
        'not_found'          => __( 'No coaches found' ),
        'not_found_in_trash' => __( 'No coaches found in the Trash' ),
        'parent_item_colon'  => '',
        'menu_name'          => 'coaches'
    );
    $args = array(
        'labels'        => $labels,
        'description'   => 'Holds our coaches and coaches specific data',
        'public'        => true,
        'menu_position' => 5,
        'supports'      => array( 'title', 'editor', 'thumbnail', ),
        'has_archive'   => true,
        'rewrite'       => array('slug' => 'coaches-list')
    );
    register_post_type( 'coaches', $args );
}