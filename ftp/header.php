<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Продажа и покупка групп в социальных сетях</title>
	<?php wp_head(); ?>
</head>
<body>
	<!-- MAIN-WRAP -->
	<div id="main-wrap">
		<!-- HEADER -->
		<header id="main-header">
			<!-- MAIN-PAGE -->
			<?php if (is_page('main')): ?>
				<div id="mainheader">
					<div class="container">
						<ul id="top-menu">
							<li class="current-menu-item"><a href="#">Главная</a></li>
							<li><a href="#">О сервисе</a></li>
							<li><a href="#">Гарант</a></li>
							<li><a href="#">Калькулятор</a></li>
							<li><a href="#">Статьи</a></li>
							<li><a href="#">Контакты</a></li>
						</ul>

						<span class="site-title">
							Exchange Groups
						</span>
						
						<span class="loginarea-top">
								Авторизация
						</span>
						<div class="loginarea">
							<form action="" name="login-form" method="post">
								<input type="text" class="loginarea-text" placeholder="Login">
								<input type="password" class="loginarea-text" placeholder="Password">
								<a class="loginarea-btn" onclick="alert('Привет')">Войти</a>
								<a id="btn-register" class="loginarea-btn">Регистрация</a>
							</form>
						</div>

						<button class="loginarea-btn administration-btn" onclick="alert('Привет, администрация!')">
							Связь с администрацией
						</button>
					</div>
				</div>
			<?php endif; ?>
			<!-- END OF MAIN-PAGE -->
		</header>
		<!-- END OF HEADER -->
