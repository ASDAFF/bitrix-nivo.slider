<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
if(!CModule::IncludeModule("iblock")){
	echo GetMessage("IBLOCK_MODULE_MISSING"); 
	return false;
}

// $arParams - Массив параметров компонента
// $arResult - Массив значений для шаблона
global $APPLICATION;
$arResult["DIR"] = "";

// Подключаем Nivo slider
$APPLICATION->AddHeadScript($arResult["DIR"]."/js/nivo_slider.js");

// Подключаем jQuery если определено в вызове компонента
if($arParams["INCLUDE_JQUERY"]=="Y"){
	$APPLICATION->AddHeadScript($arResult["DIR"]."/js/jquery.js");
}

// Парсим параметры баннеров
foreach ($arParams as $key => $param){
	preg_match("/(\w+)_(\d+)/igu", $key, $res);
	$index = intval($res[2]) - 1;
	$arResult["ELEMENTS"][$index][$res[1]] = $param;
}
$this->IncludeComponentTemplate();
?>
