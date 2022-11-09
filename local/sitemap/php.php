<?php

$default_domen = 'russiancaliber.ru';
$file_url = '/local/sitemap'.$_SERVER['REQUEST_URI'];
$str = file_get_contents($_SERVER["DOCUMENT_ROOT"].$file_url);

if($_SERVER['HTTP_HOST'] != $default_domen){
    $str = str_replace($default_domen, $_SERVER['HTTP_HOST'], $str);
}

$str = str_replace('/local/sitemap', '', $str);

if ($_SERVER['REQUEST_URI'] == '/sitemap.xml'){
    $str = '<?xml version="1.0" encoding="UTF-8"?>
<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <sitemapindex>
        <sitemap>
            <loc>https://russiancaliber.ru/sitemap_files.xml</loc>
            <lastmod>2019-12-17T19:47:05+03:00</lastmod>
        </sitemap>
        <sitemap>
            <loc>https://russiancaliber.ru/sitemap_iblock_8.xml</loc>
            <lastmod>2020-01-06T17:50:11+03:00</lastmod>
        </sitemap>
        <sitemap>
            <loc>https://russiancaliber.ru/sitemap_iblock_10.xml</loc>
            <lastmod>2020-01-09T22:11:37+03:00</lastmod>
        </sitemap>
    </sitemapindex>

</sitemapindex>';
}


header('Content-type: text/xml');
echo $str;