<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
{
	die();
}

return [
	"css" => "ui.cnt.css",
	'js' => 'dist/cnt.bundle.js',
	'rel' => [
		'ui.fonts.opensans',
		'main.core',
	],
	'skip_core' => false,
];
