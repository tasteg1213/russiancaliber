<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
{
	die();
}

return [
	"css" => "/bitrix/js/ui/viewer/css/style.css",
	"js" => [
		"/bitrix/js/ui/viewer/ui.viewer.item.js",
		"/bitrix/js/ui/viewer/ui.viewer.js",
		"/bitrix/js/ui/viewer/dist/viewer.bundle.js",
	],
	'rel' => [
		'ajax',
		'loader',
		'main.polyfill.find',
		'ui.actionpanel',
		'ui.buttons',
		'ui.buttons.icons',
		'ui.design-tokens',
		'ui.fonts.opensans',
	],
];