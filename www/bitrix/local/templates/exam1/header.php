<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html>
<html lang="ru">

<head>
	<title><?$APPLICATION->ShowTitle()?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<?$APPLICATION->ShowHead();?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/reset.css" />
	<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/style.css" />
	<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/owl.carousel.css" />
	<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.min.js"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/js/owl.carousel.min.js"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/js/scripts.js"></script>
	<link rel="icon" type="image/vnd.microsoft.icon"  href="<?=SITE_TEMPLATE_PATH?>/img/favicon.ico">
	<link rel="shortcut icon" href="<?=SITE_TEMPLATE_PATH?>/img/favicon.ico">
</head>


<body>
	<!-- wrap -->
	<div class="wrap">
		<div id="panel"><?$APPLICATION->ShowPanel();?></div>
		<!-- header -->
		<header class="header">
			<div class="inner-wrap">

				<div class="logo-block">
					<a class="logo" href="<?=SITE_DIR?>" title="<?=GetMessage('CFT_MAIN')?>">Мебельный магазин</a>
				</div>

				<div class="main-phone-block">
					<?
					$Now = date(H);
					$WorkDayStart = 9;
					$WorkDayEnd = 18;
					If ($WorkDayStart < $Now and $Now < $WorkDayEnd): ?>
					<?
					$APPLICATION->IncludeFile(
						SITE_DIR."include/telefon.php",
						Array(),
						Array("MODE"=>"html")
					);
					?>
					<?else:?>
					<?
					$APPLICATION->IncludeFile(
						SITE_DIR."include/email.php",
						Array(),
						Array("MODE"=>"html")
					);
					?>
					<?endif?>
					<!-- <a href="tel:84952128506" class="phone">8 (495) 212-85-06</a> -->
					<div class="shedule">время работы с 9-00 до 18-00</div>
				</div>
				<div class="actions-block">
					<!-- <form action="/" class="main-frm-search">
						<input type="text" placeholder="Поиск">
						<button type="submit"></button>
					</form> -->
					<?$APPLICATION->IncludeComponent(
						"bitrix:search.form",
						"flat",
						Array(
							"PAGE" => "#SITE_DIR#search/index.php",
							"USE_SUGGEST" => "N"
						)
					);?>
					<nav class="menu-block">
						<ul>
							<li class="att popup-wrap">
								<!-- <a id="hd_singin_but_open" href="" class="btn-toggle">Войти на сайт</a>
								<form action="/" class="frm-login popup-block">
									<div class="frm-title">Войти на сайт</div>
									<a href="" class="btn-close">Закрыть</a>
									<div class="frm-row"><input type="text" placeholder="Логин"></div>
									<div class="frm-row"><input type="password" placeholder="Пароль"></div>
									<div class="frm-row"><a href="" class="btn-forgot">Забыли пароль</a></div>
									<div class="frm-row">
										<div class="frm-chk">
											<input type="checkbox" id="login">
											<label for="login">Запомнить меня</label>
										</div>
									</div>
									<div class="frm-row"><input type="submit" value="Войти"></div>
								</form> -->
								<a href="/login">Войти на сайт</a>
							</li>
							<li>
								<?if ($USER->IsAuthorized()):?>

								<a href="<?echo $APPLICATION->GetCurPageParam("logout=yes", array(
								"login",
								"logout",
								"register",
								"forgot_password",
								"change_password"));?>">Закончить сеанс (logout)</a>

								<?else:?>

								<a href="/login">Регистрация</a>

								<?endif;?>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		<!-- /header -->
		<!-- nav -->
		<nav class="nav">
			<div class="inner-wrap">
				<div class="menu-block popup-wrap">
					<a href="" class="btn-menu btn-toggle"></a>
					<div class="menu popup-block">
						<ul class="">
							<li class="main-page"><a href="/">Главная</a>
							</li>
							<?$APPLICATION->IncludeComponent(
								"bitrix:menu", 
								"top", 
								array(
									"ROOT_MENU_TYPE" => "top",
									"MAX_LEVEL" => "3",
									"CHILD_MENU_TYPE" => "",
									"USE_EXT" => "Y",
									"MENU_CACHE_TYPE" => "A",
									"MENU_CACHE_TIME" => "36000000",
									"MENU_CACHE_USE_GROUPS" => "Y",
									"MENU_CACHE_GET_VARS" => array(
									),
									"COMPONENT_TEMPLATE" => "top",
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
						<a href="" class="btn-close"></a>
					</div>
					<div class="menu-overlay"></div>
				</div>
			</div>
		</nav>
		<!-- /nav -->


		<?if($APPLICATION->GetCurDir()==SITE_DIR):?>
		<!-- index.php -->
		<?else:?>
		<div class="breadcrumbs-box">
			<div class="inner-wrap">
				<?$APPLICATION->IncludeComponent(
					"bitrix:breadcrumb",
					"",
					Array(
						"PATH" => "",
						"SITE_ID" => "s1",
						"START_FROM" => "0"
					)
				);?>
			</div>
		</div>
		<?endif;?>

		

		<div class="page">
			<!-- content box -->
			<div class="content-box">
				<!-- content -->
				<div class="content">
					<div class="cnt">
						<div>
							<h1><?$APPLICATION->ShowTitle()?></h1>
						</div>