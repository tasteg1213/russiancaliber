<? $disableReferers = false;
if (!isset($_GET["referer1"]) || strlen($_GET["referer1"])<=0) $_GET["referer1"] = "yandext";
$strReferer1 = htmlspecialchars($_GET["referer1"]);
if (!isset($_GET["referer2"]) || strlen($_GET["referer2"]) <= 0) $_GET["referer2"] = "";
$strReferer2 = htmlspecialchars($_GET["referer2"]);
header("Content-Type: text/xml; charset=windows-1251");
echo "<"."?xml version=\"1.0\" encoding=\"windows-1251\"?".">"?>
<!DOCTYPE yml_catalog SYSTEM "shops.dtd">
<yml_catalog date="2019-11-19 14:44">
<shop>
<name>Русский Калибр</name>
<company>Русский Калибр</company>
<url>https://russiancaliber.ru</url>
<platform>1C-Bitrix</platform>
<currencies>
<currency id="RUB" rate="1" />
</currencies>
<categories>
<category id="71">Тепловизоры для охоты</category>
<category id="72" parentId="71">Тепловизионные прицелы</category>
<category id="74" parentId="71">Тепловизионные монокуляры</category>
<category id="73" parentId="71">Тепловизионные бинокли</category>
<category id="119" parentId="71">Тепловизионные очки</category>
<category id="75" parentId="71">Тепловизионные насадки</category>
<category id="76">Ночные приборы для охоты</category>
<category id="78" parentId="76">Ночные прицелы</category>
<category id="85" parentId="76">Ночные насадки</category>
<category id="92" parentId="76">ИК-осветители</category>
<category id="86" parentId="76">Ночные очки</category>
<category id="87" parentId="76">Ночные монокуляры</category>
<category id="88" parentId="76">Ночные бинокли</category>
<category id="79">Дневная оптика</category>
<category id="89" parentId="79">Цифровые прицелы</category>
<category id="116" parentId="79">Белая оптика</category>
<category id="133" parentId="116">Лазерные целеуказатели</category>
<category id="90" parentId="79">Цифровые приборы наблюдения</category>
<category id="131" parentId="79">Коллиматорные прицелы</category>
<category id="91" parentId="79">Зрительные трубы</category>
<category id="115" parentId="91">Окуляры</category>
<category id="81">Дальномеры</category>
<category id="80">Крепления</category>
<category id="82">Приборы для теплоаудита</category>
<category id="117">Аксессуары</category>
</categories>
<offers>
<offer id="578" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/fortuna_general_50l3.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>279900</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/ece/ece78411a59b96bd3af1ca4bc5ef5256.jpg</picture>
<vendor>FORTUNA</vendor>
<name>Тепловизионный прицел FORTUNA GENERAL 50L3</name>
<description></description>
</offer>
<offer id="597" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/dedal_t2_380_venator.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>330000</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/8e3/8e34fc3c17f1685916d75d9a387d2138.jpg</picture>
<vendor>Dedal</vendor>
<name>Тепловизионный прицел Dedal T2.380 Venator</name>
<description></description>
</offer>
<offer id="981" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_pritsely/atn_x_sight_4k_pro_5_20x.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>93500</price>
<currencyId>RUB</currencyId>
<categoryId>78</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/060/0602c2b8d08a2912625dac455adc6562.jpg</picture>
<vendor>ATN</vendor>
<name>Ночной прицел ATN X-Sight 4K Pro 5-20X</name>
<description></description>
</offer>
<offer id="982" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_pritsely/atn_x_sight_4k_pro_3_14x.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>84800</price>
<currencyId>RUB</currencyId>
<categoryId>78</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/d6c/d6c72a38ab52ce3ad6a2483bb7227aee.jpg</picture>
<vendor>ATN</vendor>
<name>Ночной прицел ATN X-Sight 4K Pro 3-14X</name>
<description></description>
</offer>
</offers>
</shop>
</yml_catalog>
