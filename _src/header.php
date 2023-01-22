<?php
\Bitrix\Main\UI\Extension::load("ui.vue3");
?>
<?
/**
 * @global $APPLICATION;
 * @var $arTemplateParams - included from .settings.php
 */

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
use Bitrix\Main\Localization\Loc as Loc;
use \Bitrix\Main\Page\Asset as Asset;
include $_SERVER["DOCUMENT_ROOT"] . SITE_TEMPLATE_PATH . "/.settings.php";
?>
<script crossorigin src="https://unpkg.com/react@18/umd/react.development.js"></script>
<script crossorigin src="https://unpkg.com/react-dom@18/umd/react-dom.development.js"></script>
<!DOCTYPE html>

<html lang="<?=$arTemplateParams["HTML_LANG"];?>">
	<head>
	
		<?Asset::getInstance()->addJs( SITE_TEMPLATE_PATH . '/js/init.js');?>

		<?Asset::getInstance()->addCss( SITE_TEMPLATE_PATH . '/css/main.css' );?>
		<link href="<?= SITE_TEMPLATE_PATH?>/css/style.css" type="text/css" rel="stylesheet" />
		<?$APPLICATION->ShowHead();?>

		<title><?$APPLICATION->ShowTitle()?></title>
	</head>
	<body>
		<div id="panel"><?$APPLICATION->ShowPanel();?></div>
		<section class="head">
			<div class="cont">
				<div class="shapka">
					<div class="logo"><a href="/"><img data-src="" src="<?= SITE_TEMPLATE_PATH?>/img/logo.svg" alt=""></a></div>
					<div class="socialHed"><div class="socialHed__text">Время ответа всего <span>15 секунд</span></div>
					<div class="socialHed__icon"></div></div>
					<div class="geo">г.Москва</div>
					<div class="phone">
						<div class="phone__num"><a href="tel:+74952360211">+7 (495) 236-02-11</a></div>
						<div class="phone__clock">Пн. – Пт.: с 10:00 до 18:00</div>
					</div>
					<div class="zak_zvon">
						<a href="">заказать звонок<br><span>перезвоним за 30 секунд</span></a>
					</div>
					<div class="menu">
						@@include('components/menu/view.html')ввв
					</div>
				</div>
			</div>
		</section>
