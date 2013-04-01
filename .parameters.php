<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

// Подключение модуля
/*if(!CModule::IncludeModule("iblock"))
	return;*/

$banner_count = $arCurrentValues["BANNER_COUNT"];
for ($i = 1; $i <= $banner_count; $i++){
		// Заголовок баннера
		$arComponentParameters["PARAMETERS"]["TITLE_".$i] = Array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("TITLE"),
			"TYPE" => "STRING"			
		);
		// Ссылка
		$arComponentParameters["PARAMETERS"]["URL_".$i] = Array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("URL"),
			"TYPE" => "STRING"			
		);  
		// Изображение
		$arComponentParameters["PARAMETERS"]["IMAGE_".$i] = Array(
			"NAME"=> GetMessage("IMAGE"), 
			"PARENT" => "BASE",
			"TYPE" => "FILE",
			"FD_TARGET" => "F",
			"FD_EXT" => 'png,jpg,jpeg,gif,swf',
			"FD_UPLOAD" => true,
			"FD_USE_MEDIALIB" => true,
			"FD_MEDIALIB_TYPES" => Array(),		
			"DEFAULT" => "", 
			"VALUES"=> ""		
		);	
}


$arComponentParameters = array(
	// Список гупп параметров
	"GROUPS" => array(
		"BANNER_LIST" => array(
			"SORT" => 100,						// Индекс сортировки
			"NAME" => GetMessage("BANNER_LIST")	// Имя группы параметров
		)
	),
	// Список параметров
	"PARAMETERS" => array(
		// Колличество баннеров	
		"BANNER_COUNT" => array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("BANNER_COUNT"),
			"TYPE" => "STRING",	
			"REFRESH" => "Y",
		),
		// Автопрокрутка
		"AUTO_SCROLL" => array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("AUTO_SCROLL"),
			"TYPE" => "CHECKBOX",
			"DEFAULT" => "Y"
		),
		// Подключение jQuery
		"INCLUDE_JQUERY" => array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("INCLUDE_JQUERY"),
			"TYPE" => "CHECKBOX",
			"DEFAULT" => "N"
		),
		"CACHE_TIME"  =>  Array("DEFAULT"=>36000000),
	),
);
?>
