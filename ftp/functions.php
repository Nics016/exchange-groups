<?php
add_filter('show_admin_bar', '__return_false'); //скроем на время админ бар сверху

//подключаем стили
function _s_styles()
{
	// Header
	wp_register_style('header', get_template_directory_uri(). '/css/header.css');
	wp_enqueue_style('header', get_template_directory_uri(). '/css/header.css');

	// Общие стили
	wp_register_style('total', get_template_directory_uri(). '/css/style.css');
	wp_enqueue_style('total', get_template_directory_uri(). '/css/style.css');

	// Footer
	wp_register_style('footer', get_template_directory_uri(). '/css/footer.css');
	wp_enqueue_style('footer', get_template_directory_uri(). '/css/footer.css');

	// Главная
	if ( is_page("main") )
	{
		wp_register_style('main', get_template_directory_uri(). '/css/main.css');
		wp_enqueue_style('main', get_template_directory_uri(). '/css/main.css');
	}
}
add_action('wp_enqueue_scripts', '_s_styles');

//подключаем скрипты

function _s_scripts()
{
	// своя библиотека jquery, не вордпрессовская
	wp_deregister_script('jquery');
	wp_register_script('jquery',  get_template_directory_uri(). '/js/jquery.js');
	wp_enqueue_script('jquery');

	// Main 
	wp_register_script('main_script',  get_template_directory_uri(). '/js/main.js', array("jquery"));
	wp_enqueue_script('main_script');
}

add_action('wp_enqueue_scripts', '_s_scripts');



//регистрация меню
if ( function_exists( 'register_nav_menus' ) )
{
	register_nav_menus(
		array(
			'left-menu'=>__('Left Menu')
		)
	);
}

function custom_menu(){
	echo '<ul>';
	wp_list_pages('title_li=&');
	echo '</ul>';
}

// Добавляем кнопку добавления миниатюры поста
add_theme_support( 'post-thumbnails' );

// Добавляем страничку настроек темы
require_once("options_page.php");

// ----------------------
// -- CUSTOM-FUNCTIONS --
// ----------------------

// Function for stripping tags, etc from input value
function check_input($data){
	$data = trim($data);
	$data = stripcslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

// -----------------------------
// -- END OF CUSTOM-FUNCTIONS --
// -----------------------------

// -------------------------
// -- LOGIN-CUSTOMIZATION --
// -------------------------

/* Main redirection of the default login page */
function redirect_login_page() {
	$login_page  = home_url('/login/');
	$page_viewed = basename($_SERVER['REQUEST_URI']);

	if($page_viewed == "wp-login.php" && $_SERVER['REQUEST_METHOD'] == 'GET') {
		wp_redirect($login_page);
		exit;
	}
}
add_action('init','redirect_login_page');

/* Where to go if a login failed */
function custom_login_failed() {
	$login_page  = home_url('/login/');
	wp_redirect($login_page . '?login=failed');
	exit;
}
add_action('wp_login_failed', 'custom_login_failed');

/* Where to go if any of the fields were empty */
function verify_user_pass($user, $username, $password) {
	$login_page  = home_url('/login/');
	if($username == "" || $password == "") {
		wp_redirect($login_page . "?login=empty");
		exit;
	}
}
add_filter('authenticate', 'verify_user_pass', 1, 3);

/* What to do on logout */
function logout_redirect() {
	$login_page  = home_url('/login/');
	wp_redirect($login_page . "?login=false");
	exit;
}
add_action('wp_logout','logout_redirect');

// --------------------------------
// -- END OF LOGIN-CUSTOMIZATION --
// --------------------------------


?>