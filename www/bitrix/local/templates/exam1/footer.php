<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>

	</div>
</div>
<!-- /content -->

<?$APPLICATION->AddChainItem($APPLICATION->GetTitle());?>


<div class="side">
	<!-- side menu -->
	<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"left", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "left",
		"USE_EXT" => "Y",
		"COMPONENT_TEMPLATE" => "left"
	),
	false
);?>
	<!-- /side menu -->
	<!-- side anonse -->
	<div class="side-block side-anonse">
		<div class="title-block">
			<span class="i i-title01"></span>Полезная информация!
		</div>
		<div class="item">
			<p>
				Клиенты предпочитают все больше эко-материалов.
			</p>
		</div>
	</div>
	<!-- /side anonse --> <!-- side wrap -->
	<div class="side-wrap">
		<div class="item-wrap">
			<!-- side action -->
			<div class="side-block side-action">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/side-action-bg.jpg" alt="" class="bg">
				<div class="photo-block">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/side-action.jpg" alt="">
				</div>
				<div class="text-block">
					<div class="title">
						Акция!
					</div>
					<p>
						Мебельная полка всего за 560 <span class="r">a</span>
					</p>
				</div>
				<a href="" class="btn-more">подробнее</a>
			</div>
			<!-- /side action -->
		</div>
		<!-- footer rew slider box -->
		<div class="item-wrap">
			<div class="rew-footer-carousel">
				<div class="item">
					<div class="side-block side-opin">
						<div class="inner-block">
							<div class="title">
								<div class="photo-block">
									<img src="<?=SITE_TEMPLATE_PATH?>/img/side-opin.jpg" alt="">
								</div>
								<div class="name-block">
									<a href="">Дмитрий Иванов</a>
								</div>
								<div class="pos-block">
									Генеральный директор,"Офис+"
								</div>
							</div>
							<div class="text-block">
								“В магзине предоставили потрясающий выбор расцветок, а также, получил большую скидку по карте постоянного...
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="side-block side-opin">
						<div class="inner-block">
							<div class="title">
								<div class="photo-block">
									<img src="<?=SITE_TEMPLATE_PATH?>/img/side-opin.jpg" alt="">
								</div>
								<div class="name-block">
									<a href="">Дмитрий Иванов</a>
								</div>
								<div class="pos-block">
									Генеральный директор,"Офис+"
								</div>
							</div>
							<div class="text-block">
								“В магазине предоставили потрясающий выбор расцветок, а также, получил большую скидку по карте постоянного...
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- / footer rew slider box -->
	</div>
	<!-- /side wrap -->
</div>
<!-- /side -->
</div>
<!-- /content box -->
</div>

<footer class="footer">
	<div class="inner-wrap">
		<nav class="main-menu">
			<div class="item">
				<div class="title-block">О магазине</div>
				<ul>
					<?$APPLICATION->IncludeComponent(
						"bitrix:menu", 
						"bottom", 
						array(
							"ROOT_MENU_TYPE" => "bottom",
							"MAX_LEVEL" => "3",
							"CHILD_MENU_TYPE" => "",
							"USE_EXT" => "Y",
							"MENU_CACHE_TYPE" => "A",
							"MENU_CACHE_TIME" => "36000000",
							"MENU_CACHE_USE_GROUPS" => "Y",
							"MENU_CACHE_GET_VARS" => array(
							),
							"COMPONENT_TEMPLATE" => "bottom",
							"DELAY" => "N",
							"ALLOW_MULTI_SELECT" => "N",
							"MENU_THEME" => "site"
						),
						false,
						array(
							"ACTIVE_COMPONENT" => "Y"
						)
					);?>
				</ul>
			</div>
			<div class="item">
				<div class="title-block">Каталог товаров</div>
				<ul>
					<li><a href="">Кухни</a>
					</li>
					<li><a href="">Гарнитуры</a>
					</li>
					<li><a href="">Спальни и матрасы</a>
					</li>
					<li><a href="">Столы и стулья</a>
					</li>
					<li><a href="">Раскладные диваны</a>
					</li>
					<li><a href="">Кресла</a>
					</li>
					<li><a href="">Кровати и кушетки</a>
					</li>
					<li><a href="">Тумобчки и прихожие</a>
					</li>
					<li><a href="">Аксессуары</a>
					</li>
					<li><a href="">Каталоги мебели</a>
					</li>
				</ul>
			</div>
		</nav>
		<div class="contacts-block">
			<div class="title-block">Контактная информация</div>
			<div class="loc-block">
				<?
				$APPLICATION->IncludeFile(
					SITE_DIR."include/info_footer.php",
					Array(),
					Array("MODE"=>"html")
				);
				?>
			</div>
		</div>
		<div class="main-soc-block">
			<a href="" class="soc-item">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/icons/soc01.png" alt="">
			</a>
			<a href="" class="soc-item">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/icons/soc02.png" alt="">
			</a>
			<a href="" class="soc-item">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/icons/soc03.png" alt="">
			</a>
			<a href="" class="soc-item">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/icons/soc04.png" alt="">
			</a>
		</div>
		<div class="copy-block">© 2000 - 2012 "Мебельный магазин"</div>
	</div>
</footer>

</body>
</html>