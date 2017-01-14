<div class="login-form">
<?php
	wp_head();
$args = array(
    'redirect' => home_url(), 
    'form_id' => 'loginform',
    'id_username' => 'user',
    'id_password' => 'pass',
    'label_username' => __( '' ),
    'label_password' => __( '' ),
	'label_remember' => __( 'Запомнить' ),
	'label_log_in' => __( 'Войти' ),
    'remember' => true
   ) 
;?>
<?php wp_login_form( $args ); ?>

<?php 
	// on login-fail:
	$failed = check_input($_GET['login']);
	if ($failed == "failed") {
		echo "<p class='login-failed'>"."Неверный логин или пароль."."</p>";
	}
 ?>
</div>