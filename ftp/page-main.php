<?php 
get_header();
if (have_posts()):
	while(have_posts()):
		the_post();
?>
<!-- MAIN -->
<main>
	<?php 
		the_content();
	 ?>
	 <div class="container">
	 	<!-- TABS -->
		<div class="tabs clearfix">
		 	<a class="tabs-link" onclick="alert('Секция Вконтакте')">ВКонтакте</a>
		 	<a class="tabs-link">Одноклассники</a>
		 	<a class="tabs-link">Инстаграм</a>
		 	<a class="tabs-link">Facebook</a>
		</div>
		<!-- END OF TABS -->

		<!-- SEARCHING -->
		<form action="" method="GET" name="searching">
			<div class="searchfield">
		 		<input type="text" class="searchfield-text" placeholder="Введите ключевые слова" name="searching-request">
		 		<input type="submit" class="searchfield-submit" value="Найти">
			</div>
			<div class="searchparams">
				<div class="searchparams-line clearfix">
					<span class="searchparams-line-descr">Тематика</span>
					<select name="searching-topic" class="searching-line-select">
						<option value="Любая">Любая</option>
						<option value="Игры">Игры</option>
						<option value="Юмор">Юмор</option>
						<option value="Красота">Красота</option>
					</select>
				</div>
			 	<div class="searchparams-line clearfix">
			 		<span class="searchparams-line-descr">Подписчиков</span>
			 		<span class="searchparams-line-from">от</span>
			 		<input type="text" name="searching-subscribersFrom" class="searchparams-line-from-input">
			 		<span class="searchparams-line-to">до</span>
			 		<input type="text" name="searching-subscribersTo" class="searchparams-line-to-input">
			 	</div>
			 	<div class="searchparams-line clearfix">
			 		<span class="searchparams-line-descr">Цена</span>
			 		<span class="searchparams-line-from">от</span>
			 		<input type="text" name="searching-subscribersFrom" class="searchparams-line-from-input">
			 		<span class="searchparams-line-to">до</span>
			 		<input type="text" name="searching-subscribersTo" class="searchparams-line-to-input">
			 	</div>
			 	<div class="searchparams-line clearfix">
			 		<span class="searchparams-line-descr">Доход</span>
			 		<span class="searchparams-line-from">от</span>
			 		<input type="text" name="searching-subscribersFrom" class="searchparams-line-from-input">
			 		<span class="searchparams-line-to">до</span>
			 		<input type="text" name="searching-subscribersTo" class="searchparams-line-to-input">
			 	</div>
			 </div>
		 </form>
		 <!-- END OF SEARCHING -->

		 <!-- MAIN-LIST -->
		 <div class="main-list clearfix">
		 	<div class="main-list-element">
		 		<a href="#" class="main-list-element-title">Смешные котики</a>
		 		<a href="#"><img src="<?= get_template_directory_uri()."/img/main-list-pic1.jpg" ?>" alt="" class="main-list-element-pic"></a>
		 		<span class="main-list-element-topic">Юмор</span>
		 		<span class="main-list-element-subscribers">Подписчики:<br>58 900</span>
		 		<span class="main-list-element-income">Доход: 5 000 руб/мес</span>
		 		<span class="main-list-element-price">Цена: 15 000 руб</span>
		 		<a href="#" class="main-list-element-btn btn-buy">Купить</a>
		 		<a href="#" class="main-list-element-btn btn-more">Подробнее</a>
		 	</div>
		 	<div class="main-list-element">
		 		<a href="#" class="main-list-element-title">Смешные котики</a>
		 		<a href="#"><img src="<?= get_template_directory_uri()."/img/main-list-pic1.jpg" ?>" alt="" class="main-list-element-pic"></a>
		 		<span class="main-list-element-topic">Юмор</span>
		 		<span class="main-list-element-subscribers">Подписчики:<br>58 900</span>
		 		<span class="main-list-element-income">Доход: 5 000 руб/мес</span>
		 		<span class="main-list-element-price">Цена: 15 000 руб</span>
		 		<a href="#" class="main-list-element-btn btn-buy">Купить</a>
		 		<a href="#" class="main-list-element-btn btn-more">Подробнее</a>
		 	</div>
		 	<div class="main-list-element">
		 		<a href="#" class="main-list-element-title">Смешные котики</a>
		 		<a href="#"><img src="<?= get_template_directory_uri()."/img/main-list-pic1.jpg" ?>" alt="" class="main-list-element-pic"></a>
		 		<span class="main-list-element-topic">Юмор</span>
		 		<span class="main-list-element-subscribers">Подписчики:<br>58 900</span>
		 		<span class="main-list-element-income">Доход: 5 000 руб/мес</span>
		 		<span class="main-list-element-price">Цена: 15 000 руб</span>
		 		<a href="#" class="main-list-element-btn btn-buy">Купить</a>
		 		<a href="#" class="main-list-element-btn btn-more">Подробнее</a>
		 	</div>
		 	<div class="main-list-element">
		 		<a href="#" class="main-list-element-title">Смешные котики</a>
		 		<a href="#"><img src="<?= get_template_directory_uri()."/img/main-list-pic1.jpg" ?>" alt="" class="main-list-element-pic"></a>
		 		<span class="main-list-element-topic">Юмор</span>
		 		<span class="main-list-element-subscribers">Подписчики:<br>58 900</span>
		 		<span class="main-list-element-income">Доход: 5 000 руб/мес</span>
		 		<span class="main-list-element-price">Цена: 15 000 руб</span>
		 		<a href="#" class="main-list-element-btn btn-buy">Купить</a>
		 		<a href="#" class="main-list-element-btn btn-more">Подробнее</a>
		 	</div>
		 	<div class="main-list-element">
		 		<a href="#" class="main-list-element-title">Смешные котики</a>
		 		<a href="#"><img src="<?= get_template_directory_uri()."/img/main-list-pic1.jpg" ?>" alt="" class="main-list-element-pic"></a>
		 		<span class="main-list-element-topic">Юмор</span>
		 		<span class="main-list-element-subscribers">Подписчики:<br>58 900</span>
		 		<span class="main-list-element-income">Доход: 5 000 руб/мес</span>
		 		<span class="main-list-element-price">Цена: 15 000 руб</span>
		 		<a href="#" class="main-list-element-btn btn-buy">Купить</a>
		 		<a href="#" class="main-list-element-btn btn-more">Подробнее</a>
		 	</div>
		 	<div class="main-list-element">
		 		<a href="#" class="main-list-element-title">Смешные котики</a>
		 		<a href="#"><img src="<?= get_template_directory_uri()."/img/main-list-pic1.jpg" ?>" alt="" class="main-list-element-pic"></a>
		 		<span class="main-list-element-topic">Юмор</span>
		 		<span class="main-list-element-subscribers">Подписчики:<br>58 900</span>
		 		<span class="main-list-element-income">Доход: 5 000 руб/мес</span>
		 		<span class="main-list-element-price">Цена: 15 000 руб</span>
		 		<a href="#" class="main-list-element-btn btn-buy">Купить</a>
		 		<a href="#" class="main-list-element-btn btn-more">Подробнее</a>
		 	</div>
		 	<div class="main-list-element">
		 		<a href="#" class="main-list-element-title">Смешные котики</a>
		 		<a href="#"><img src="<?= get_template_directory_uri()."/img/main-list-pic1.jpg" ?>" alt="" class="main-list-element-pic"></a>
		 		<span class="main-list-element-topic">Юмор</span>
		 		<span class="main-list-element-subscribers">Подписчики:<br>58 900</span>
		 		<span class="main-list-element-income">Доход: 5 000 руб/мес</span>
		 		<span class="main-list-element-price">Цена: 15 000 руб</span>
		 		<a href="#" class="main-list-element-btn btn-buy">Купить</a>
		 		<a href="#" class="main-list-element-btn btn-more">Подробнее</a>
		 	</div>
		 	<div class="main-list-element">
		 		<a href="#" class="main-list-element-title">Смешные котики</a>
		 		<a href="#"><img src="<?= get_template_directory_uri()."/img/main-list-pic1.jpg" ?>" alt="" class="main-list-element-pic"></a>
		 		<span class="main-list-element-topic">Юмор</span>
		 		<span class="main-list-element-subscribers">Подписчики:<br>58 900</span>
		 		<span class="main-list-element-income">Доход: 5 000 руб/мес</span>
		 		<span class="main-list-element-price">Цена: 15 000 руб</span>
		 		<a href="#" class="main-list-element-btn btn-buy">Купить</a>
		 		<a href="#" class="main-list-element-btn btn-more">Подробнее</a>
		 	</div>
		 	<div class="main-list-element">
		 		<a href="#" class="main-list-element-title">Смешные котики</a>
		 		<a href="#"><img src="<?= get_template_directory_uri()."/img/main-list-pic1.jpg" ?>" alt="" class="main-list-element-pic"></a>
		 		<span class="main-list-element-topic">Юмор</span>
		 		<span class="main-list-element-subscribers">Подписчики:<br>58 900</span>
		 		<span class="main-list-element-income">Доход: 5 000 руб/мес</span>
		 		<span class="main-list-element-price">Цена: 15 000 руб</span>
		 		<a href="#" class="main-list-element-btn btn-buy">Купить</a>
		 		<a href="#" class="main-list-element-btn btn-more">Подробнее</a>
		 	</div>
		 </div>
		 <!-- END OF MAIN-LIST -->
	 </div>
</main>
<!-- END OF MAIN -->
<?php 
	endwhile;
endif;
get_footer(); 
?>