<? $disableReferers = false;
if (!isset($_GET["referer1"]) || $_GET["referer1"] == "") $_GET["referer1"] = "yandext";
$strReferer1 = htmlspecialchars($_GET["referer1"]);
if (!isset($_GET["referer2"]) || $_GET["referer2"] == "") $_GET["referer2"] = "";
$strReferer2 = htmlspecialchars($_GET["referer2"]);
header("Content-Type: text/xml; charset=windows-1251");
echo "<"."?xml version=\"1.0\" encoding=\"windows-1251\"?".">"?>
<!DOCTYPE yml_catalog SYSTEM "shops.dtd">
<yml_catalog date="2022-11-09 13:32">
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
<category id="139" parentId="71">Тепловизионные коллиматоры</category>
<category id="75" parentId="71">Тепловизионные насадки</category>
<category id="119" parentId="71">Тепловизионные очки</category>
<category id="76">Ночные приборы для охоты</category>
<category id="78" parentId="76">Ночные прицелы</category>
<category id="85" parentId="76">Ночные насадки</category>
<category id="92" parentId="76">ИК-осветители</category>
<category id="86" parentId="76">Ночные очки</category>
<category id="87" parentId="76">Ночные монокуляры</category>
<category id="88" parentId="76">Ночные бинокли</category>
<category id="81">Дальномеры</category>
<category id="82">Приборы для теплоаудита и тепловизионные системы</category>
<category id="141" parentId="82">Системы измерения температуры тела</category>
<category id="142" parentId="82">Пирометры</category>
<category id="150" parentId="82">Мобильные тепловизоры</category>
<category id="149" parentId="82">Стационарные тепловизоры</category>
<category id="151" parentId="82">Тепловизионные терминалы на турникет для контроля температуры людей на входе</category>
<category id="143">Бактерицидные лампы и рециркуляторы</category>
<category id="144" parentId="143">Рециркуляторы</category>
<category id="145" parentId="143">Очистители</category>
<category id="147" parentId="143">Автомобильные рециркуляторы</category>
<category id="146" parentId="143">Облучатели</category>
<category id="148" parentId="143">Лампы бактерицидные</category>
<category id="159">Квадрокоптеры</category>
<category id="158">Металлоискатели</category>
<category id="157">Метеостаннции</category>
<category id="156">Портативные рации</category>
</categories>
<offers>
<offer id="29" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/veber_night_eagle_r50_384.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>393642</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/66d/66d3ea3132969fc5ccb31edfd5a72bea.jpg</picture>
<vendor>Veber</vendor>
<name>Тепловизионный прицел Veber Night Eagle R50/384</name>
<description></description>
</offer>
<offer id="50" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/veber_night_eagle_m19_384.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>138500</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/621/6212c586884c537209d2470a938c40f6.jpg</picture>
<vendor>Veber</vendor>
<name>Тепловизионный монокуляр Veber Night Eagle M19/384</name>
<description></description>
</offer>
<offer id="98" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/flir_scout_ts24.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>279085</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/d84/d843ff956e55ff24df1d81d1b5cd47f9.png</picture>
<vendor>FLIR</vendor>
<name>Тепловизионный монокуляр FLIR Scout TS24</name>
<description></description>
</offer>
<offer id="99" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_binokli/general_binoculars_6b_bez_obektiva.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>389900</price>
<currencyId>RUB</currencyId>
<categoryId>119</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/f8b/f8bb6c55995d953b7057c835c4007dd9.jpg</picture>
<vendor>FORTUNA</vendor>
<name>Тепловизионный бинокль FORTUNA GENERAL BINOCULARS 6B (без объектива)</name>
<description></description>
</offer>
<offer id="100" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_binokli/fortuna_general_binoculars_25s3.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>336900</price>
<currencyId>RUB</currencyId>
<categoryId>73</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/d48/d4807b3a578b6047429d8d80f74d9f56.jpg</picture>
<vendor>FORTUNA</vendor>
<name>Тепловизионный бинокль FORTUNA GENERAL BINOCULARS 25S3</name>
<description></description>
</offer>
<offer id="101" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_binokli/general_binoculars_40s3.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>351500</price>
<currencyId>RUB</currencyId>
<categoryId>119</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/c15/c15fcec47e0db2991dda208139fbbbe4.jpg</picture>
<vendor>FORTUNA</vendor>
<name>Тепловизионный бинокль FORTUNA GENERAL BINOCULARS 40S3</name>
<description></description>
</offer>
<offer id="102" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_binokli/fortuna_general_binoculars_40s6.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>409900</price>
<currencyId>RUB</currencyId>
<categoryId>119</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/972/97213bbbd90830d78da98586eba9e0f1.jpg</picture>
<vendor>FORTUNA</vendor>
<name>Тепловизионный бинокль FORTUNA GENERAL BINOCULARS 40S6</name>
<description></description>
</offer>
<offer id="103" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_binokli/general_binoculars_50s3.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>388900</price>
<currencyId>RUB</currencyId>
<categoryId>119</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/d86/d86e6ad9a0c0fbdee71b01b9d2f8671e.jpg</picture>
<vendor>FORTUNA</vendor>
<name>Тепловизионный бинокль FORTUNA GENERAL BINOCULARS 50S3</name>
<description></description>
</offer>
<offer id="104" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_binokli/fortuna_general_binoculars_50s6.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>464900</price>
<currencyId>RUB</currencyId>
<categoryId>119</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/bc3/bc302025be667a966e8def8881e19308.jpg</picture>
<vendor>FORTUNA</vendor>
<name>Тепловизионный бинокль FORTUNA GENERAL BINOCULARS 50S6</name>
<description></description>
</offer>
<offer id="105" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_binokli/fortuna_binoculars_75s3.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>419900</price>
<currencyId>RUB</currencyId>
<categoryId>119</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/a95/a95d7cd019b5709f63777301c6d3d6db.jpg</picture>
<vendor>FORTUNA</vendor>
<name>Тепловизионный бинокль FORTUNA GENERAL BINOCULARS 75S3</name>
<description></description>
</offer>
<offer id="106" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_binokli/general_binoculars_75s6.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>497900</price>
<currencyId>RUB</currencyId>
<categoryId>119</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/ddb/ddbb0b955998e04d0092f801c4375415.jpg</picture>
<vendor>FORTUNA</vendor>
<name>Тепловизионный бинокль FORTUNA GENERAL BINOCULARS 75S6</name>
<description></description>
</offer>
<offer id="107" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_binokli/general_binoculars_100s3.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>519900</price>
<currencyId>RUB</currencyId>
<categoryId>119</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/32c/32c4166b72d9d0c4e640f5c551fb869b.jpg</picture>
<vendor>FORTUNA</vendor>
<name>Тепловизионный бинокль FORTUNA GENERAL BINOCULARS 100S3</name>
<description></description>
</offer>
<offer id="108" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_binokli/fortuna_general_binoculars_100s6.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>597900</price>
<currencyId>RUB</currencyId>
<categoryId>119</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/f31/f31674a4561865bd12737d20c24a5853.jpg</picture>
<vendor>FORTUNA</vendor>
<name>Тепловизионный бинокль FORTUNA GENERAL BINOCULARS 100S6</name>
<description></description>
</offer>
<offer id="109" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_binokli/general_goggles_13s3.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>299900</price>
<currencyId>RUB</currencyId>
<categoryId>119</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/106/10651a6900628009ead369a24943728b.jpg</picture>
<vendor>FORTUNA</vendor>
<name>Тепловизионные очки FORTUNA GENERAL GOGGLES 13S3</name>
<description></description>
</offer>
<offer id="110" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_binokli/general_goggles_19s3.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>329900</price>
<currencyId>RUB</currencyId>
<categoryId>119</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/62f/62ff15012f11790a181dcd41d654d0d0.jpg</picture>
<vendor>FORTUNA</vendor>
<name>Тепловизионные очки FORTUNA GENERAL GOGGLES 19S3</name>
<description></description>
</offer>
<offer id="111" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_binokli/fortuna_general_goggles_19s6.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>407900</price>
<currencyId>RUB</currencyId>
<categoryId>119</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/983/9830f3d7abbd359e4b4ac0190e8ade68.jpg</picture>
<vendor>FORTUNA</vendor>
<name>Тепловизионные очки FORTUNA GENERAL GOGGLES 19S6</name>
<description></description>
</offer>
<offer id="112" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_binokli/fortuna_general_goggles_25s6.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>412900</price>
<currencyId>RUB</currencyId>
<categoryId>119</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/544/54416112173856026ec4d4349a7b3e34.jpg</picture>
<vendor>FORTUNA</vendor>
<name>Тепловизионные очки FORTUNA GENERAL GOGGLES 25S6</name>
<description></description>
</offer>
<offer id="113" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/guide_ir510x_s_ekstenderom_2x.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>139900</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/b4d/b4d4e8c83b4d67054a63e2103450179d.png</picture>
<vendor>GUIDE</vendor>
<name>Тепловизионный монокуляр GUIDE IR510X с экстендером 2X</name>
<description></description>
</offer>
<offer id="114" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/guide_ir510_c_25gts_384kh288.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>100000</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/e58/e58a9300559b5b6899dbde6240747746.png</picture>
<vendor>GUIDE</vendor>
<name>Тепловизионный монокуляр GUIDE IR510-C</name>
<description></description>
</offer>
<offer id="115" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/guide_ir517v_80mm.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>459000</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/fda/fda1c906cab232d70dac0eb6111c8824.jpg</picture>
<vendor>GUIDE</vendor>
<name>Тепловизионный монокуляр GUIDE IR517V(80mm)</name>
<description></description>
</offer>
<offer id="116" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/guide_ir517v_35mm.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>359900</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/eca/eca105c4b29c8cdcc25d5377d591698c.jpg</picture>
<vendor>GUIDE</vendor>
<name>Тепловизионный монокуляр GUIDE IR517V(35mm)</name>
<description></description>
</offer>
<offer id="117" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/guide_ir517v_bez_linzy.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>295000</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/e68/e68b695fc29ddc8b0c4c48fbcee06c4b.jpg</picture>
<vendor>GUIDE</vendor>
<name>Тепловизионный монокуляр GUIDE IR517V (без линзы)</name>
<description></description>
</offer>
<offer id="118" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_binokli/guide_ir516a.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>680000</price>
<currencyId>RUB</currencyId>
<categoryId>73</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/86c/86cf73b15b0f8d5920213e766da6df83.jpg</picture>
<vendor>GUIDE</vendor>
<name>Тепловизионный бинокуляр GUIDE IR516A</name>
<description></description>
</offer>
<offer id="119" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_binokli/guide_ir516b.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1000000</price>
<currencyId>RUB</currencyId>
<categoryId>73</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/add/addb890dbafe4601ce88288ede2c93c1.jpg</picture>
<vendor>GUIDE</vendor>
<name>Тепловизионный бинокуляр GUIDE IR516B</name>
<description></description>
</offer>
<offer id="120" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/guide_ir510x.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>99000</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/b02/b0243b0a91752e1836683521430acc8e.png</picture>
<vendor>GUIDE</vendor>
<name>Тепловизионный монокуляр GUIDE IR510x</name>
<description></description>
</offer>
<offer id="121" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/flir_scout_ts24_pro.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>328950</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/e7f/e7fcbb0fe64584b7bbb8f7c67bbb41fa.png</picture>
<vendor>FLIR</vendor>
<name>Тепловизионный монокуляр FLIR Scout TS24 PRO</name>
<description></description>
</offer>
<offer id="122" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/flir_scout_ts32_c_2kh_ekstenderom.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>406880</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/bc8/bc88e1cafda9b764c60876ecf4250f18.jpg</picture>
<vendor>FLIR</vendor>
<name>Тепловизионный монокуляр FLIR Scout TS32 c 2х экстендером</name>
<description></description>
</offer>
<offer id="123" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/flir_scout_ts32_pro.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>483600</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/150/15010d3eedab541b9abc6e216a84142c.jpg</picture>
<vendor>FLIR</vendor>
<name>Тепловизионный монокуляр FLIR Scout TS32 PRO</name>
<description></description>
</offer>
<offer id="124" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/flir_scout_ts32r.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>577660</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/072/0724dd8fb7f5d7147e32f32e2fb5a8e7.JPG</picture>
<vendor>FLIR</vendor>
<name>Тепловизионный монокуляр FLIR Scout TS32r</name>
<description></description>
</offer>
<offer id="125" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/flir_scout_ts32r_pro.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>649240</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/fd1/fd113c57b15091dfac31ca1df32bec4d.jpg</picture>
<vendor>FLIR</vendor>
<name>Тепловизионный монокуляр FLIR Scout TS32r PRO</name>
<description></description>
</offer>
<offer id="126" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/flir_hs324.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>399900</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/0e1/0e12e100f2cff6f2dd9b6437ce1a2043.png</picture>
<vendor>FLIR</vendor>
<name>Тепловизионный монокуляр FLIR HS324</name>
<description></description>
</offer>
<offer id="127" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_binokli/atn_binox_thd_640_2_5_25x.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>475200</price>
<currencyId>RUB</currencyId>
<categoryId>73</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/eaa/eaa7b64109a03cd02d957108a996ac93.jpg</picture>
<vendor>ATN</vendor>
<name>Тепловизионный бинокль ATN BinoX-THD 640 2.5-25x</name>
<description></description>
</offer>
<offer id="128" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_binokli/atn_binox_thd_384_4_5_18x.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>359700</price>
<currencyId>RUB</currencyId>
<categoryId>73</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/c2b/c2b3073d3865d043edfc22e53c742a3b.jpg</picture>
<vendor>ATN</vendor>
<name>Тепловизионный бинокль ATN BINOX-THD 384 4.5-18x</name>
<description></description>
</offer>
<offer id="129" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_binokli/dali_s750m.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1320000</price>
<currencyId>RUB</currencyId>
<categoryId>73</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/fc5/fc56bdc8a3632bb48ae51232168cad61.jpg</picture>
<vendor>DALI</vendor>
<name>Тепловизионный бинокль DALI S750М</name>
<description></description>
</offer>
<offer id="130" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_binokli/dali_s930h.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1640800</price>
<currencyId>RUB</currencyId>
<categoryId>73</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/51e/51e709ca8978f122b14bce4a4e8932d9.png</picture>
<vendor>DALI</vendor>
<name>Тепловизионный бинокль DALI S930H</name>
<description></description>
</offer>
<offer id="131" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_binokli/dedal_tracker_t2_380.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>427200</price>
<currencyId>RUB</currencyId>
<categoryId>73</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/1b3/1b386ae2272e7f1c9f8fac4f1c3f1f7c.jpg</picture>
<vendor>Dedal</vendor>
<name>Тепловизионный бинокль Dedal Tracker-T2.380</name>
<description></description>
</offer>
<offer id="134" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/tsiklon_sych_3ps.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>680000</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/59b/59b354edacc7071f276bc8687291eeee.jpg</picture>
<vendor>ЦИКЛОН</vendor>
<name>Тепловизионный монокуляр ЦИКЛОН Сыч-3ПС</name>
<description></description>
</offer>
<offer id="135" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/sych_5.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>980000</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/523/523e40d4822e7b91e37a88f1ed2521dd.gif</picture>
<vendor>ЦИКЛОН</vendor>
<name>Тепловизионный монокуляр ЦИКЛОН Сыч-5(51)</name>
<description></description>
</offer>
<offer id="136" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/sych_5_68mm.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1020000</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/96b/96b1181fa29872899a442867867c445c.gif</picture>
<vendor>ЦИКЛОН</vendor>
<name>Тепловизионный монокуляр ЦИКЛОН Сыч-5(68)</name>
<description>    </description>
</offer>
<offer id="137" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/sych_5_85mm.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1320000</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/46d/46da912d4b0c937b973e3d79c30e7e49.gif</picture>
<vendor>ЦИКЛОН</vendor>
<name>Тепловизионный монокуляр ЦИКЛОН Сыч-5(85)</name>
<description></description>
</offer>
<offer id="138" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/dipol_d50ts1200_50mm.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>310000</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/9a4/9a49184cfb60dbfb3b28b1123f3a7eef.jpg</picture>
<vendor>Диполь</vendor>
<name>Тепловизионный прицел Dipol D50TS1200 (50mm)</name>
<description></description>
</offer>
<offer id="139" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/dipol_d50ts1200r_50mm.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>340000</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/ad2/ad243aa78d51ba14756e12ee2ec1eb1d.jpg</picture>
<vendor>Диполь</vendor>
<name>Тепловизионный прицел Dipol D50TS1200R (50mm)</name>
<description></description>
</offer>
<offer id="140" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/dipol_d75ts1700_75mm.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>425000</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/63f/63fb231b08aa077b25d7f1b8e715d7fb.jpg</picture>
<vendor>Диполь</vendor>
<name>Тепловизионный прицел Dipol D75TS1700 (75mm)</name>
<description></description>
</offer>
<offer id="141" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/dipol_d75ts1700r_75mm.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>430000</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/b1e/b1e38bab0a3e526b09f2a4adcf83fab2.jpg</picture>
<vendor>Диполь</vendor>
<name>Тепловизионный прицел Dipol D75TS1700R (75mm)</name>
<description></description>
</offer>
<offer id="142" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/apex_lrf_xd38.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>229000</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/87f/87fd225e15fe96f265af4a6e2492006e.JPG</picture>
<vendor>Pulsar</vendor>
<name>Тепловизионный прицел Pulsar Apex LRF XD38</name>
<description></description>
</offer>
<offer id="143" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/apex_lrf_xd50.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>259000</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/f92/f9269ab9363f43fc9fbdc85406287e37.JPG</picture>
<vendor>Pulsar</vendor>
<name>Тепловизионный прицел Pulsar Apex LRF XD50</name>
<description></description>
</offer>
<offer id="144" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/apex_lrf_xd75.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>300000</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/8c2/8c27ed4802982474dd424f5644a447de.JPG</picture>
<vendor>Pulsar</vendor>
<name>Тепловизионный прицел Pulsar Apex LRF XD75</name>
<description></description>
</offer>
<offer id="145" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/apex_xd38_ttkh.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>199000</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/6b8/6b8d84f43d7a7f038829891822889909.JPG</picture>
<vendor>Pulsar</vendor>
<name>Тепловизионный прицел Pulsar Apex XD38 ТТХ</name>
<description></description>
</offer>
<offer id="146" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/apex_xd50.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>229000</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/5e6/5e6ecc9e66d224d458ec9648d13563d0.jpg</picture>
<vendor>Pulsar</vendor>
<name>Тепловизионный прицел Pulsar Apex XD50</name>
<description></description>
</offer>
<offer id="147" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/apex_xd75_.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>259000</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/39f/39f3cf8c0731c14620ae0968a787b69e.jpg</picture>
<vendor>Pulsar</vendor>
<name>Тепловизионный прицел Pulsar Apex XD75</name>
<description></description>
</offer>
<offer id="148" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/pulsar_helion_xq28f_.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>129900</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/cd1/cd1afb4366616ac4413dacd6b4c6b105.JPG</picture>
<vendor>Pulsar</vendor>
<name>Тепловизионный монокуляр Pulsar Helion XQ28F</name>
<description></description>
</offer>
<offer id="149" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/pulsar_helion_xq38f_.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>159000</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/8ce/8cea93ac8c5e8e9a357a62dbd2fc03c6.JPG</picture>
<vendor>Pulsar</vendor>
<name>Тепловизионный монокуляр Pulsar Helion XQ38F</name>
<description></description>
</offer>
<offer id="150" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/pulsar_helion_xq50f.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>179900</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/14d/14dc9eec4bf7d24e4ea0b892de3f30d8.JPG</picture>
<vendor>Pulsar</vendor>
<name>Тепловизионный монокуляр Pulsar Helion XQ50F</name>
<description></description>
</offer>
<offer id="151" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_nasadki/dedal_ta2_380_quest.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>457400</price>
<currencyId>RUB</currencyId>
<categoryId>75</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/5e4/5e494111d3af08ed42c0c3182d56d7b9.jpg</picture>
<vendor>Dedal</vendor>
<name>Тепловизионная насадка Dedal TA2.380 Quest</name>
<description></description>
</offer>
<offer id="152" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_nasadki/dedal_ta2_382_ranger.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>400000</price>
<currencyId>RUB</currencyId>
<categoryId>75</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/647/6471c4ef85ac11893e44584b70e52789.jpg</picture>
<vendor>Dedal</vendor>
<name>Тепловизионная насадка Dedal TA2.382 Ranger</name>
<description></description>
</offer>
<offer id="153" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_nasadki/dedal_ta2_642_pro.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1213100</price>
<currencyId>RUB</currencyId>
<categoryId>75</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/28b/28b6a94c9c27b670d52086e37242f982.jpg</picture>
<vendor>Dedal</vendor>
<name>Тепловизионная насадка Dedal TA2.642 Pro</name>
<description></description>
</offer>
<offer id="154" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_nasadki/dedal_ta3_642_pro.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1200000</price>
<currencyId>RUB</currencyId>
<categoryId>75</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/900/900d3cdca597f0d3d46ffbf7eb6bbc33.jpg</picture>
<vendor>Dedal</vendor>
<name>Тепловизионная насадка Dedal TA3.642 Pro</name>
<description></description>
</offer>
<offer id="155" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_nasadki/pulsar_core_fxq38.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>270000</price>
<currencyId>RUB</currencyId>
<categoryId>75</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/915/915e68236ec9a00e0128829e4297aa5e.jpg</picture>
<vendor>Pulsar</vendor>
<name>Тепловизионная насадка Pulsar Core FXQ38</name>
<description></description>
</offer>
<offer id="156" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_nasadki/pulsar_core_fxq50.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>314900</price>
<currencyId>RUB</currencyId>
<categoryId>75</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/a73/a73e471876bff20360aaeabf8458ae93.jpg</picture>
<vendor>Pulsar</vendor>
<name>Тепловизионная насадка Pulsar Core FXQ50</name>
<description></description>
</offer>
<offer id="157" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_nasadki/skanda_tnp_35.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>690000</price>
<currencyId>RUB</currencyId>
<categoryId>75</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/a8c/a8c2971755b40cd7320b2443f6d5a2a0.jpg</picture>
<vendor>Сканда</vendor>
<name>Тепловизионная насадка Сканда ТНП-35</name>
<description></description>
</offer>
<offer id="158" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_nasadki/skanda_tnp_60.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1330000</price>
<currencyId>RUB</currencyId>
<categoryId>75</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/96f/96fbbd77fb6c942efc2af1ecd1d7ca78.jpg</picture>
<vendor>Сканда</vendor>
<name>Тепловизионная насадка Сканда ТНП-60</name>
<description></description>
</offer>
<offer id="159" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_nasadki/skanda_tnp_100.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1350000</price>
<currencyId>RUB</currencyId>
<categoryId>75</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/4a9/4a94e04717155cf7236d99e1d8b7497f.png</picture>
<vendor>Сканда</vendor>
<name>Тепловизионная насадка Сканда ТНП-100</name>
<description></description>
</offer>
<offer id="160" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/atn_auxiliary_ballistic_laser_1000.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>39760</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/0f1/0f10619d32b5e4565ef3621d73400bab.png</picture>
<vendor>ATN</vendor>
<name>Дальномер ATN Auxiliary Ballistic Laser 1000</name>
<description></description>
</offer>
<offer id="161" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/atn_auxiliary_ballistic_laser_1500.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>47740</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/684/684f6460085583c206e5fe807d73c302.jpg</picture>
<vendor>ATN</vendor>
<name>Дальномер ATN Auxiliary Ballistic Laser 1500</name>
<description></description>
</offer>
<offer id="162" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/atn_laserballistic_1000.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>28400</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/792/792c555cdcf5022bb6e1879af727004a.jpg</picture>
<vendor>ATN</vendor>
<name>Дальномер ATN LaserBallistic 1000</name>
<description></description>
</offer>
<offer id="163" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/atn_laserballistic_1500.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>32300</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/b6f/b6f4bd7d20168e8f345884bd869b4423.jpg</picture>
<vendor>ATN</vendor>
<name>Дальномер ATN LaserBallistic 1500</name>
<description></description>
</offer>
<offer id="164" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/carl_zeiss_victory_prf_8x26.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>54900</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/09b/09b6c72a810b5135c2d9dcba43f433b7.jpg</picture>
<vendor>Carl Zeiss</vendor>
<name>Дальномер Carl Zeiss Victory PRF 8x26</name>
<description></description>
</offer>
<offer id="165" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/carl_zeiss_victory_rf_8x42.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>239990</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/c40/c408da5b8dd18774b65a9345cab78cfa.jpg</picture>
<vendor>Carl Zeiss</vendor>
<name>Дальномер Carl Zeiss Victory RF 8x42</name>
<description></description>
</offer>
<offer id="166" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/carl_zeiss_victory_rf_8x54.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>264990</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/1c0/1c08f600964c587c2969ca32f440295d.jpg</picture>
<vendor>Carl Zeiss</vendor>
<name>Дальномер Carl Zeiss Victory RF 8x54</name>
<description></description>
</offer>
<offer id="167" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/carl_zeiss_victory_rf_10x42.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>334466</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/f82/f82910a1141c8b8fad4ab726a5fbb71b.jpg</picture>
<vendor>Carl Zeiss</vendor>
<name>Дальномер Carl Zeiss Victory RF 10x42</name>
<description></description>
</offer>
<offer id="168" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/carl_zeiss_victory_rf_10x54.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>270800</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/94b/94bf20cb381fb1898e118dce51069312.jpg</picture>
<vendor>Carl Zeiss</vendor>
<name>Дальномер Carl Zeiss Victory RF 10x54</name>
<description></description>
</offer>
<offer id="169" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_monokulyary/pulsar_challenger_gs_1x20.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>24300</price>
<currencyId>RUB</currencyId>
<categoryId>87</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/e24/e24c93ff8747902a6b18b73b5b5c0fe9.png</picture>
<vendor>Pulsar</vendor>
<name>Ночной монокуляр Pulsar Challenger GS 1X20</name>
<description></description>
</offer>
<offer id="170" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_monokulyary/pulsar_challenger_gs_1x20_hmk.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>24300</price>
<currencyId>RUB</currencyId>
<categoryId>87</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/d42/d42f17879b78cdda1d8d6e5ff61bd08a.png</picture>
<vendor>Pulsar</vendor>
<name>Ночной монокуляр Pulsar Challenger GS 1X20 HMK</name>
<description></description>
</offer>
<offer id="171" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_ochki/pulsar_edge_gs_1x20.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>33500</price>
<currencyId>RUB</currencyId>
<categoryId>86</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/271/271127ba9d4cdaa8e31a01520bc8172b.png</picture>
<vendor>Pulsar</vendor>
<name>Ночные очки Pulsar EDGE GS 1X20 75096</name>
<description></description>
</offer>
<offer id="172" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_binokli/pulsar_edge_gs_3_5x50_l.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>38200</price>
<currencyId>RUB</currencyId>
<categoryId>88</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/db0/db0ed24514b69b126584999d3ad9c666.png</picture>
<vendor>Pulsar</vendor>
<name>Ночной бинокль Pulsar EDGE GS 3.5X50 L</name>
<description></description>
</offer>
<offer id="173" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/ik_osvetiteli/pulsar_805.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9500</price>
<currencyId>RUB</currencyId>
<categoryId>92</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/536/5361b941a88aec8a5bcf122b16155a08.jpg</picture>
<vendor>Pulsar</vendor>
<name>ИК-осветитель Pulsar-805</name>
<description></description>
</offer>
<offer id="174" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/ik_osvetiteli/pulsar_850.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7900</price>
<currencyId>RUB</currencyId>
<categoryId>92</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/19a/19a26fd82954adf2cce5a18997e3ba03.jpg</picture>
<vendor>Pulsar</vendor>
<name>ИК-осветитель Pulsar-850</name>
<description></description>
</offer>
<offer id="176" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/ik_osvetiteli/pulsar_al_915.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>11900</price>
<currencyId>RUB</currencyId>
<categoryId>92</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/e9d/e9dfc4652792f72cd49ad6957515054c.png</picture>
<vendor>Pulsar</vendor>
<name>ИК-осветитель Pulsar AL-915</name>
<description></description>
</offer>
<offer id="177" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/ik_osvetiteli/pulsar_al_915t.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>11900</price>
<currencyId>RUB</currencyId>
<categoryId>92</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/81f/81f8f27676d76a3c361360facee1cf46.jpg</picture>
<vendor>Pulsar</vendor>
<name>ИК-осветитель Pulsar AL-915T</name>
<description></description>
</offer>
<offer id="178" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/ik_osvetiteli/pulsar_ultra_x850.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>8900</price>
<currencyId>RUB</currencyId>
<categoryId>92</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/124/124c7415c247579556997ae62b722603.jpg</picture>
<vendor>Pulsar</vendor>
<name>ИК-осветитель Pulsar Ultra-X850</name>
<description></description>
</offer>
<offer id="179" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/ik_osvetiteli/pulsar_ultra_x940.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>8900</price>
<currencyId>RUB</currencyId>
<categoryId>92</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/c53/c538e6fc13884d6456c609966293364f.jpg</picture>
<vendor>Pulsar</vendor>
<name>ИК-осветитель Pulsar Ultra-X940</name>
<description></description>
</offer>
<offer id="180" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/ik_osvetiteli/pulsar_ultra_850.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>8900</price>
<currencyId>RUB</currencyId>
<categoryId>92</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/b30/b30cc4015f9009318a7706b4dcc4ad7a.jpg</picture>
<vendor>Pulsar</vendor>
<name>ИК-осветитель Pulsar Ultra-850</name>
<description></description>
</offer>
<offer id="181" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/ik_osvetiteli/pulsar_ultra_al_915.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9190</price>
<currencyId>RUB</currencyId>
<categoryId>92</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/4e5/4e525a34ab3218da6df5f2b3bc22e2b8.jpg</picture>
<vendor>Pulsar</vendor>
<name>ИК-осветитель Pulsar Ultra AL-915</name>
<description></description>
</offer>
<offer id="182" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/ik_osvetiteli/pulsar_ultra_940.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>8100</price>
<currencyId>RUB</currencyId>
<categoryId>92</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/229/229357f7967a5084a9fc9fa32cca34d1.jpg</picture>
<vendor>Pulsar</vendor>
<name>ИК-осветитель Pulsar Ultra-940</name>
<description></description>
</offer>
<offer id="184" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_ochki/dipol_d206pro.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>154000</price>
<currencyId>RUB</currencyId>
<categoryId>86</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/96a/96a258b029eaa8ced5b629abb8672467.jpg</picture>
<vendor>Диполь</vendor>
<name>Ночные очки Dipol D206PRO</name>
<description></description>
</offer>
<offer id="187" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_ochki/dipol_d209.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>144000</price>
<currencyId>RUB</currencyId>
<categoryId>86</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/74b/74bd786efd16e952aaeb044041e6dd00.jpg</picture>
<vendor>Диполь</vendor>
<name>Ночные очки Dipol D209</name>
<description></description>
</offer>
<offer id="188" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_ochki/dipol_d221h_pro.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>95000</price>
<currencyId>RUB</currencyId>
<categoryId>86</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/0a4/0a498cea83a133a50f5f8f50dccd668a.jpg</picture>
<vendor>Диполь</vendor>
<name>Ночные очки Dipol D221H PRO</name>
<description></description>
</offer>
<offer id="189" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_pritsely/dipol_d241h.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>117732</price>
<currencyId>RUB</currencyId>
<categoryId>78</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/0f9/0f9b61a3deb57e156120df4271336869.jpg</picture>
<vendor>Диполь</vendor>
<name>Ночной прицел Dipol D241H</name>
<description></description>
</offer>
<offer id="190" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_pritsely/dipol_d753.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>109700</price>
<currencyId>RUB</currencyId>
<categoryId>78</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/0c3/0c39c83c48901bbe7e180cf2e952a36d.jpg</picture>
<vendor>Диполь</vendor>
<name>Ночной прицел Dipol D753</name>
<description></description>
</offer>
<offer id="191" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_pritsely/dipol_d761.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>120000</price>
<currencyId>RUB</currencyId>
<categoryId>78</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/dc6/dc6cdd7e0a19486fb7e82b3ead9431b5.jpg</picture>
<vendor>Диполь</vendor>
<name>Ночной прицел Dipol 761М(2+)</name>
<description></description>
</offer>
<offer id="193" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_binokli/dipol_d206_pro.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>155000</price>
<currencyId>RUB</currencyId>
<categoryId>88</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/38b/38bf09671ab0951c54eaee7ef5172a0c.jpg</picture>
<vendor>Диполь</vendor>
<name>Ночной бинокль Dipol D206 PRO (100)</name>
<description></description>
</offer>
<offer id="194" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_binokli/dipol_d209b.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>159000</price>
<currencyId>RUB</currencyId>
<categoryId>88</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/15d/15d118dabd73ad9a9acbde48a599f798.gif</picture>
<vendor>Диполь</vendor>
<name>Ночной бинокль Dipol D209B (100)</name>
<description></description>
</offer>
<offer id="196" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_binokli/dipol_d221b.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>96000</price>
<currencyId>RUB</currencyId>
<categoryId>88</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/3cc/3ccd27905564cb2c61ff5c51f6cc077c.jpg</picture>
<vendor>Диполь</vendor>
<name>Ночной бинокль Dipol D221B (80)</name>
<description></description>
</offer>
<offer id="197" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_binokli/dipol_d521r.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>245000</price>
<currencyId>RUB</currencyId>
<categoryId>88</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/7ba/7ba006d5815ddcb3d01fbfb515701be1.jpg</picture>
<vendor>Диполь</vendor>
<name>Ночной бинокль Dipol D521R</name>
<description></description>
</offer>
<offer id="198" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_monokulyary/dipol_dn37.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>148350</price>
<currencyId>RUB</currencyId>
<categoryId>87</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/114/114b0a9ed4aa030e7c8921a9e0cb7fbe.png</picture>
<vendor>Диполь</vendor>
<name>Ночной монокуляр Dipol DN37</name>
<description></description>
</offer>
<offer id="201" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_monokulyary/dipol_dn34.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>155538</price>
<currencyId>RUB</currencyId>
<categoryId>87</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/e5b/e5b2b398914b9cf906987a26887aca75.jpg</picture>
<vendor>Диполь</vendor>
<name>Ночной монокуляр Dipol DN34</name>
<description></description>
</offer>
<offer id="202" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_monokulyary/dipol_d128.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>88920</price>
<currencyId>RUB</currencyId>
<categoryId>87</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/10a/10aa30179dc8dea546cfb20ad177aeaf.jpg</picture>
<vendor>Диполь</vendor>
<name>Ночной монокуляр Dipol D128</name>
<description></description>
</offer>
<offer id="203" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_pritsely/dedal_180hr.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>60000</price>
<currencyId>RUB</currencyId>
<categoryId>78</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/d9c/d9c3905c95c1e9aa6996d6a880fb3613.png</picture>
<vendor>Dedal</vendor>
<name>Ночной прицел Dedal 180HR</name>
<description></description>
</offer>
<offer id="204" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_pritsely/dedal_445_a_bw.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>131600</price>
<currencyId>RUB</currencyId>
<categoryId>78</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/719/7190e358f30abb360d467f6487495eb5.png</picture>
<vendor>Dedal</vendor>
<name>Ночной прицел Dedal 445-А/bw</name>
<description></description>
</offer>
<offer id="209" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nonye_nasadki/dedal_552_dk3.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>331800</price>
<currencyId>RUB</currencyId>
<categoryId>85</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/1ce/1ce3b4067a907497bcb0ff988df4ebb0.png</picture>
<vendor>Dedal</vendor>
<name>Ночная насадка Dedal-552-DK3</name>
<description></description>
</offer>
<offer id="211" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_binokli/nochnoy_binokl_dipol_d206_pro_165.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>164000</price>
<currencyId>RUB</currencyId>
<categoryId>88</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/53a/53a6118da6cb60c346c287d2521ce37c.jpg</picture>
<vendor>Диполь</vendor>
<name>Ночной бинокль Dipol D206 PRO (165)</name>
<description></description>
</offer>
<offer id="212" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_binokli/nochnoy_binokl_dipol_d209b_165.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>138643</price>
<currencyId>RUB</currencyId>
<categoryId>88</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/2d5/2d5f5c270479b22b6028eedb00cc62b0.gif</picture>
<vendor>Диполь</vendor>
<name>Ночной бинокль Dipol D209B (165)</name>
<description></description>
</offer>
<offer id="213" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_binokli/nochnoy_binokl_dipol_d221b_120.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>95000</price>
<currencyId>RUB</currencyId>
<categoryId>88</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/623/6235cea32e94d526722ae40d82723863.jpg</picture>
<vendor>Диполь</vendor>
<name>Ночной бинокль Dipol D221B (120)</name>
<description></description>
</offer>
<offer id="214" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_pritsely/nochnoy_pritsel_dipol_d761_160.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>211505</price>
<currencyId>RUB</currencyId>
<categoryId>78</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/d52/d524feecaeebdfb88c261c2f4a9ed2e4.jpg</picture>
<vendor>Диполь</vendor>
<name>Ночной прицел Dipol D761(160)</name>
<description></description>
</offer>
<offer id="215" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_pritsely/dedal_450_dk3.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>279000</price>
<currencyId>RUB</currencyId>
<categoryId>78</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/e76/e767d7a631af63cf72f9d2b4adb498f3.png</picture>
<vendor>Dedal</vendor>
<name>Ночной прицел Dedal 450-DK3</name>
<description></description>
</offer>
<offer id="216" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_pritsely/dedal_480_dk3_.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>333800</price>
<currencyId>RUB</currencyId>
<categoryId>78</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/7bb/7bb73eeb8b57fedbeebe1422ff31f40c.jpg</picture>
<vendor>Dedal</vendor>
<name>Ночной прицел Dedal 480-DK3(110)</name>
<description></description>
</offer>
<offer id="217" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_pritsely/dedal_480_dk3_165.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>284000</price>
<currencyId>RUB</currencyId>
<categoryId>78</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/8ea/8ea919422a14674bf23715c5989f9110.jpg</picture>
<vendor>Dedal</vendor>
<name>Ночной прицел Dedal 480-DK3(165)</name>
<description></description>
</offer>
<offer id="218" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nonye_nasadki/dedal_552_dk3_bw.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>345700</price>
<currencyId>RUB</currencyId>
<categoryId>85</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/50b/50b9d57bac602bd2609cc473bf0a3962.png</picture>
<vendor>Dedal</vendor>
<name>Ночная насадка Dedal-552-DK3/bw</name>
<description></description>
</offer>
<offer id="219" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_ochki/dedal_dvs_8_a_bw.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>149700</price>
<currencyId>RUB</currencyId>
<categoryId>86</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/6b2/6b22d498804cb1083165bb34a689752a.jpg</picture>
<vendor>Dedal</vendor>
<name>Ночные очки Dedal DVS-8-A/bw</name>
<description></description>
</offer>
<offer id="220" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_ochki/dedal_dvs_8_c.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>171600</price>
<currencyId>RUB</currencyId>
<categoryId>86</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/4ce/4ceb80eb9b246cc465566f2c16d00fc2.jpg</picture>
<vendor>Dedal</vendor>
<name>Ночные очки Dedal DVS-8-C</name>
<description></description>
</offer>
<offer id="221" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_ochki/dedal_dvs_8_dk3_f.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>267200</price>
<currencyId>RUB</currencyId>
<categoryId>86</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/a04/a044c707717c399051873518a28b1ab3.jpg</picture>
<vendor>Dedal</vendor>
<name>Ночные очки Dedal DVS-8-DK3/f</name>
<description></description>
</offer>
<offer id="222" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/dipol_tfa1200.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>325000</price>
<currencyId>RUB</currencyId>
<categoryId>75</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/dc7/dc7b5ee15e4a715632c60e6c512db4c6.jpg</picture>
<vendor>Диполь</vendor>
<name>Тепловизионная насадка Dipol TFA1200</name>
<description></description>
</offer>
<offer id="223" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/dipol_tfa1000.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>340000</price>
<currencyId>RUB</currencyId>
<categoryId>75</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/346/346b111adaeeebd95ffc6dd04aded076.jpg</picture>
<vendor>Диполь</vendor>
<name>Тепловизионная насадка Dipol TFA1000</name>
<description></description>
</offer>
<offer id="224" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/shvabe_pt2m_1kh.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>522900</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/1b3/1b32f9602a5716abbb96ba642b3d1d8c.jpg</picture>
<vendor>Швабе</vendor>
<name>Тепловизионный монокуляр Швабе ПТ2М (1х)</name>
<description></description>
</offer>
<offer id="225" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/shvabe_pt2m_3_8.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>522900</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/38e/38eff9c28cbd42844732a7a6f3e71918.jpg</picture>
<vendor>Швабе</vendor>
<name>Тепловизионный монокуляр Швабе ПТ2М(3.8)</name>
<description></description>
</offer>
<offer id="226" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/shvabe_pt_2_3_8.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>605900</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/83c/83c4bad5d12762be2e511f57bcc0a85a.png</picture>
<vendor>Швабе</vendor>
<name>Тепловизионный монокуляр Швабе ПТ-2(3.8)</name>
<description></description>
</offer>
<offer id="227" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/atn_ots_hd_384_1_25_5x.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>201300</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/58e/58e6757285c82190e5f21d96449eebcc.png</picture>
<vendor>ATN</vendor>
<name>Тепловизионный монокуляр ATN OTS-HD 384 1,25-5X</name>
<description></description>
</offer>
<offer id="228" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/atn_ots_hd_384_2_8x.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>264000</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/282/28218b399ce843e51d7791d2b411e405.png</picture>
<vendor>ATN</vendor>
<name>Тепловизионный монокуляр ATN OTS-HD 384 2-8X</name>
<description></description>
</offer>
<offer id="229" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/atn_ots_hd_384_4_5_18x50.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>330000</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/185/185a2ea30db0a1bd5ccd73abbb2173d4.png</picture>
<vendor>ATN</vendor>
<name>Тепловизионный монокуляр ATN OTS-HD 384 4.5-18x50</name>
<description></description>
</offer>
<offer id="230" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/atni_ots_hd_384_9_36x.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>429000</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/28e/28e41ed141c7657c7d8ad464860f5c7a.png</picture>
<vendor>ATN</vendor>
<name>Тепловизионный монокуляр ATN OTS-HD 384 9-36x</name>
<description></description>
</offer>
<offer id="231" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/atni_ots_hd_640_1_10x.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>382800</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/941/941e801e71d6f822e7d9559625cf5e56.png</picture>
<vendor>ATN</vendor>
<name>Тепловизионный монокуляр ATN OTS-HD 640 1-10x</name>
<description></description>
</offer>
<offer id="232" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/atni_ots_hd_640_1_5_15x.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>422400</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/c74/c7488e4dcf0ef78c4e29bc0ebdcc7cec.png</picture>
<vendor>ATN</vendor>
<name>Тепловизионный монокуляр ATN OTS-HD 640 1.5-15x</name>
<description></description>
</offer>
<offer id="233" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/atni_ots_hd_640_2_5_25x.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>481800</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/367/3679ac93f17fba4d2e73377f1ea79c76.png</picture>
<vendor>ATN</vendor>
<name>Тепловизионный монокуляр ATN OTS-HD 640 2.5-25x</name>
<description></description>
</offer>
<offer id="234" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/atni_ots_hd_640_5_50x.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>567600</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/98b/98b770bf0de39c33d83ccb8e48e5a819.png</picture>
<vendor>ATN</vendor>
<name>Тепловизионный монокуляр ATN OTS-HD 640 5-50x</name>
<description></description>
</offer>
<offer id="235" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/dali_s240.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>79900</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/ff8/ff8fc507ebe1fbcc4a704af086517295.jpg</picture>
<vendor>DALI</vendor>
<name>Тепловизионный монокуляр DALI S240</name>
<description></description>
</offer>
<offer id="236" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/dali_s240_19.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>79900</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/e71/e712c2488e34cc6601403bd784992746.jpg</picture>
<vendor>DALI</vendor>
<name>Тепловизионный монокуляр DALI S240-19</name>
<description></description>
</offer>
<offer id="237" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/dali_s246l.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>150000</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/a40/a407b514f7c0f993152f2ea6c7471b86.jpg</picture>
<vendor>DALI</vendor>
<name>Тепловизионный монокуляр DALI S246L</name>
<description></description>
</offer>
<offer id="238" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/leupold_lto.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>78500</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/3a3/3a3562e77539635ad7364a70ac94b8b4.jpg</picture>
<vendor>Leupold</vendor>
<name>Тепловизионный монокуляр Leupold LTO</name>
<description></description>
</offer>
<offer id="239" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/pulsar_helion_xp50.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>239900</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/800/80059ebf4ea27574b589bf782b7a1fa0.png</picture>
<vendor>Pulsar</vendor>
<name>Тепловизионный монокуляр Pulsar HELION XP50</name>
<description></description>
</offer>
<offer id="240" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/pulsar_helion_xp38.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>209900</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/d63/d6365561093760491fdca665f05de01e.png</picture>
<vendor>Pulsar</vendor>
<name>Тепловизионный монокуляр Pulsar HELION XP38</name>
<description></description>
</offer>
<offer id="245" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/pulsar_quantum_lite_xq30v.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>79900</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/b24/b2418b8bc7c0042cbc6abe4d3195534d.png</picture>
<vendor>Pulsar</vendor>
<name>Тепловизионный монокуляр Pulsar Quantum Lite XQ30V</name>
<description></description>
</offer>
<offer id="246" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/pulsar_quantum_lite_xq23v.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>88900</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/150/150bb9e57d42506592ad4073aeed6b00.png</picture>
<vendor>Pulsar</vendor>
<name>Тепловизионный монокуляр Pulsar Quantum Lite XQ23V</name>
<description></description>
</offer>
<offer id="247" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_binokli/dipol_tg1r_75.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>399900</price>
<currencyId>RUB</currencyId>
<categoryId>73</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/7f0/7f0d05af1bf38a34bf435be47b9cd961.jpg</picture>
<vendor>Диполь</vendor>
<name>Тепловизионный бинокль Dipol TG1R(75)</name>
<description></description>
</offer>
<offer id="248" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_binokli/dipol_dipol_tg_1r_50.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>399000</price>
<currencyId>RUB</currencyId>
<categoryId>73</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/4db/4db40fef340f2d7c27af4623fb8c5fb2.jpg</picture>
<vendor>Диполь</vendor>
<name>Тепловизионный бинокль Dipol TG-1R(50)</name>
<description></description>
</offer>
<offer id="249" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_binokli/dipol_dipol_tg_1_50.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>386000</price>
<currencyId>RUB</currencyId>
<categoryId>73</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/7d6/7d6408d0a9027a6f4777609e6d82c699.jpg</picture>
<vendor>Диполь</vendor>
<name>Тепловизионный бинокль Dipol TG-1(50)</name>
<description></description>
</offer>
<offer id="250" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_binokli/dipol_dipol_tg_1_75.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>429000</price>
<currencyId>RUB</currencyId>
<categoryId>73</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/66a/66abd35904456ff2c01633a49287a87d.jpg</picture>
<vendor>Диполь</vendor>
<name>Тепловизионный бинокль Dipol TG-1(75)</name>
<description></description>
</offer>
<offer id="251" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/tsiklon_sarmat_1_51.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>320000</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/87f/87f49b4daa13c374d12454b175d003e1.jpg</picture>
<vendor>ЦИКЛОН</vendor>
<name>Тепловизионный прицел ЦИКЛОН Сармат-1(51)</name>
<description></description>
</offer>
<offer id="252" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/tsiklon_sarmat_2_68.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>350000</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/3b4/3b4d0352e1df597b6eec8d163a1f3ab2.jpg</picture>
<vendor>ЦИКЛОН</vendor>
<name>Тепловизионный прицел ЦИКЛОН Сармат-2(68)</name>
<description></description>
</offer>
<offer id="253" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/tsiklon_sarmat_3_85.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>400000</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/67c/67ceef2cf7d8410b0ba6cf5a34eebd8d.jpg</picture>
<vendor>ЦИКЛОН</vendor>
<name>Тепловизионный прицел ЦИКЛОН Сармат-3(85)</name>
<description></description>
</offer>
<offer id="254" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_binokli/dedal_tracker_t4_642.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>574000</price>
<currencyId>RUB</currencyId>
<categoryId>73</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/897/897af41c96a9a7a7bbc06f76e75470d3.jpg</picture>
<vendor>Dedal</vendor>
<name>Тепловизионный бинокль Dedal Tracker-T4.642</name>
<description></description>
</offer>
<offer id="255" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/iwt_lf640_pro_2_mutant.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2270000</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/6e6/6e6c33281d7ff9fe1e79e1869cf2ed21.jpg</picture>
<vendor>IWT</vendor>
<name>Тепловизионный прицел IWT LF640 PRO 2 MUTANT</name>
<description></description>
</offer>
<offer id="256" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/iwt_sheitan_mk2_100.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2211800</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/b00/b0037391f7113dc8d634f90d3ecdee6f.jpg</picture>
<vendor>IWT</vendor>
<name>Тепловизионный прицел IWT SHEITAN MK2 100</name>
<description></description>
</offer>
<offer id="257" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/iwt_demon.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1170000</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/bbf/bbf522dd148cafe146252f90a6850586.jpg</picture>
<vendor>IWT</vendor>
<name>Тепловизионный прицел IWT DEMON</name>
<description></description>
</offer>
<offer id="259" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_binokli/pulsar_accolade_xp50.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>245000</price>
<currencyId>RUB</currencyId>
<categoryId>73</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/dd0/dd096a3b77b33ebf6e4751b997da82a6.png</picture>
<vendor>Pulsar</vendor>
<name>Тепловизионный бинокль Pulsar Accolade XP50</name>
<description></description>
</offer>
<offer id="260" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/eotech_model_x320.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>240000</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/c84/c841ccf281b8c476586a39e9a683f487.jpg</picture>
<vendor>EOTech</vendor>
<name>Тепловизионный монокуляр EOTech Model X320</name>
<description></description>
</offer>
<offer id="261" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/eotech_model_x640.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>385000</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/a2b/a2b2492a00195940ecc7f3b732530acb.png</picture>
<vendor>EOTech</vendor>
<name>Тепловизионный монокуляр EOTech Model X640</name>
<description></description>
</offer>
<offer id="262" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/infratech_it_m313.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1200000</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/28d/28d4f01be21255f50e47e4538a37f335.jpg</picture>
<vendor>INFRATECH</vendor>
<name>Тепловизионный монокуляр INFRATECH ИТ-М313</name>
<description></description>
</offer>
<offer id="263" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/infratech_it_615.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>543200</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/632/632c984f5b7f287630007b198745c4c4.jpg</picture>
<vendor>INFRATECH</vendor>
<name>Тепловизионный прицел INFRATECH ИТ-615</name>
<description></description>
</offer>
<offer id="264" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_nasadki/infratekh_it_310_tpn.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1276500</price>
<currencyId>RUB</currencyId>
<categoryId>75</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/4f2/4f22a2332d50f4867e398afb44919a04.jpg</picture>
<vendor>INFRATECH</vendor>
<name>Тепловизионная насадка INFRATECH ИТ-310 ТПН</name>
<description></description>
</offer>
<offer id="265" available="true">
<url>https://russiancaliber.ru/catalog/pribory_dlya_teploaudita/seek_thermal_compactpro.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>49900</price>
<currencyId>RUB</currencyId>
<categoryId>82</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/56f/56fd301edd5d0933293f6c88e1daafb4.jpg</picture>
<vendor>Seek Thermal</vendor>
<name>Тепловизор Seek Thermal CompactPRO</name>
<description></description>
</offer>
<offer id="266" available="true">
<url>https://russiancaliber.ru/catalog/pribory_dlya_teploaudita/seek_thermal_revealpro.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>59900</price>
<currencyId>RUB</currencyId>
<categoryId>82</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/004/0044ec67b5948b7556eae462e96298ec.jpg</picture>
<vendor>Seek Thermal</vendor>
<name>Тепловизор Seek Thermal RevealPRO</name>
<description></description>
</offer>
<offer id="267" available="true">
<url>https://russiancaliber.ru/catalog/pribory_dlya_teploaudita/teplovizor_seek_thermal_revealxr.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>35900</price>
<currencyId>RUB</currencyId>
<categoryId>82</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/47d/47d142e5a1366975509466980045dcbe.png</picture>
<vendor>Seek Thermal</vendor>
<name>Тепловизор Seek Thermal RevealXR</name>
<description></description>
</offer>
<offer id="268" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/flir_ls_x.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>260000</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/a27/a27847bb994602f2c0648f1c7a55ac60.png</picture>
<vendor>FLIR</vendor>
<name>Тепловизионный монокуляр FLIR LS-X</name>
<description></description>
</offer>
<offer id="269" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/flir_scout_ii_320.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>174900</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/72e/72e34cef3e5a0ef4f8985986c56e45eb.jpg</picture>
<vendor>FLIR</vendor>
<name>Тепловизионный монокуляр FLIR Scout II 320</name>
<description></description>
</offer>
<offer id="270" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_binokli/flir_scout_bts_xr_.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>890000</price>
<currencyId>RUB</currencyId>
<categoryId>73</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/7c3/7c3e71a11ddd46620d8958c64351ba3e.JPG</picture>
<vendor>FLIR</vendor>
<name>Тепловизионный бинокль FLIR Scout BTS-XR</name>
<description></description>
</offer>
<offer id="271" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_binokli/flir_scout_bts_xr_pro_qd_100.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>789990</price>
<currencyId>RUB</currencyId>
<categoryId>73</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/28f/28f8cd5393b70219b764aff1e2cafa69.jpg</picture>
<vendor>FLIR</vendor>
<name>Тепловизионный бинокль FLIR Scout BTS-XR PRO QD(100)</name>
<description></description>
</offer>
<offer id="272" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_binokli/flir_scout_bts_x_qd35_pro.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>650000</price>
<currencyId>RUB</currencyId>
<categoryId>73</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/7f5/7f590aae794050cc014f4d7e165b0c90.jpg</picture>
<vendor>FLIR</vendor>
<name>Тепловизионный бинокль FLIR Scout BTS-X QD35 PRO</name>
<description></description>
</offer>
<offer id="273" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_binokli/flir_scout_bts_x_qd65_pro.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>700000</price>
<currencyId>RUB</currencyId>
<categoryId>73</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/a1f/a1f9e1758e92f598551045c9474ffd72.jpg</picture>
<vendor>FLIR</vendor>
<name>Тепловизионный бинокль FLIR Scout BTS-X QD65 PRO</name>
<description></description>
</offer>
<offer id="274" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/flir_scout_tk.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>49900</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/5fb/5fb2b1d37a54389f57fa3fddf2a71779.jpg</picture>
<vendor>FLIR</vendor>
<name>Тепловизионный монокуляр FLIR Scout TK</name>
<description></description>
</offer>
<offer id="275" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/flir_scout_scout_ll_640.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>299730</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/518/51839f73048795be3d5fe50608144244.jpg</picture>
<vendor>FLIR</vendor>
<name>Тепловизионный монокуляр FLIR Scout ll 640</name>
<description></description>
</offer>
<offer id="276" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/flir_scout_ll_240.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>118000</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/2bc/2bc157fde6bb150c84d5ff8193817c39.jpg</picture>
<vendor>FLIR</vendor>
<name>Тепловизионный монокуляр FLIR Scout ll 240</name>
<description></description>
</offer>
<offer id="277" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_binokli/flir_scout_bts_xr_qd65_pro.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>806550</price>
<currencyId>RUB</currencyId>
<categoryId>73</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/1a6/1a61027580628502f657d8a63696a16e.jpg</picture>
<vendor>FLIR</vendor>
<name>Тепловизионный бинокль FLIR Scout BTS-XR QD65 PRO</name>
<description></description>
</offer>
<offer id="278" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/flir_hs307.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>629000</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/21e/21ec50dd1c8571a3cbcafa2a803a860c.jpg</picture>
<vendor>FLIR</vendor>
<name>Тепловизионный монокуляр FLIR HS307</name>
<description></description>
</offer>
<offer id="279" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/skanda_25.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>680000</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/c0c/c0c4e85673343c96e086f48569df9c9d.jpg</picture>
<vendor>Сканда</vendor>
<name>Тепловизионный прицел Сканда 25</name>
<description></description>
</offer>
<offer id="280" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/skanda_50.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>780000</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/92d/92d057f1b22d26e0db478fc9b58a2e91.jpg</picture>
<vendor>Сканда</vendor>
<name>Тепловизионный прицел Сканда 50</name>
<description></description>
</offer>
<offer id="281" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/skanda_60.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1300000</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/bd4/bd40404963de035db9fca5f857f851c5.jpg</picture>
<vendor>Сканда</vendor>
<name>Тепловизионный прицел Сканда 60</name>
<description></description>
</offer>
<offer id="282" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/skanda_60_m.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1300000</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/166/166d217d2356111d0ffffb2cab71c9c8.jpg</picture>
<vendor>Сканда</vendor>
<name>Тепловизионный прицел Сканда 60 М</name>
<description></description>
</offer>
<offer id="283" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/skanda_100_m.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1350000</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/d28/d28587f9b8690da3f4abee4e54bf3bae.jpg</picture>
<vendor>Сканда</vendor>
<name>Тепловизионный прицел Сканда 100 М</name>
<description></description>
</offer>
<offer id="284" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/teplovizionnyy_pritsel_shvabe_ptz.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>848000</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/606/6068d6b09f76d15e6ae11d97980f5486.jpg</picture>
<vendor>Швабе</vendor>
<name>Тепловизионный прицел Швабе ПТЗ</name>
<description></description>
</offer>
<offer id="286" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/atn_mars_hd_640_5_50x.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>501800</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/39b/39be6f84610167bb2397ff94405b4b6f.jpg</picture>
<vendor>ATN</vendor>
<name>Тепловизионный прицел ATN MARS HD 640 5-50x</name>
<description></description>
</offer>
<offer id="287" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/atn_mars_hd_640_2_5_25x.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>429900</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/d50/d50a9e0bedf436770c083eb5e5432ce3.jpg</picture>
<vendor>ATN</vendor>
<name>Тепловизионный прицел ATN MARS HD 640 2.5-25x</name>
<description></description>
</offer>
<offer id="288" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/atn_mars_hd_640_1_10x.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>256900</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/29f/29f5b10e7ab431b24c6d111c386f43d4.png</picture>
<vendor>ATN</vendor>
<name>Тепловизионный прицел ATN MARS HD 640 1-10x</name>
<description></description>
</offer>
<offer id="289" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/atn_mars_hd_640_1_5_15x.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>299000</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/788/78826ac30b1b7fdcd5e526e3c38faa43.png</picture>
<vendor>ATN</vendor>
<name>Тепловизионный прицел ATN MARS HD 640 1.5-15x</name>
<description></description>
</offer>
<offer id="290" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/atn_mars_hd_384_9_36x.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>310500</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/740/740b72161bc76e53aee3231fdef401a9.jpg</picture>
<vendor>ATN</vendor>
<name>Тепловизионный прицел ATN MARS HD 384 9-36x</name>
<description></description>
</offer>
<offer id="291" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/atn_mars_hd_384_4_5_18x.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>224950</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/b1b/b1b1883f8b684521635032dce9c22856.jpg</picture>
<vendor>ATN</vendor>
<name>Тепловизионный прицел ATN MARS HD 384 4.5-18x</name>
<description></description>
</offer>
<offer id="292" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/atn_mars_hd_384_2_8x.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>186900</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/9a9/9a9198d0e1758ab942ccc1edb3276627.png</picture>
<vendor>ATN</vendor>
<name>Тепловизионный прицел ATN MARS HD 384 2-8x</name>
<description></description>
</offer>
<offer id="293" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/atn_thor_4_640_4_40x.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>630000</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/0c2/0c29a7b00de5d14679478ad0990ea0bb.jpg</picture>
<vendor>ATN</vendor>
<name>Тепловизионный прицел ATN ThOR 4 640 4-40x</name>
<description></description>
</offer>
<offer id="294" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/atn_thor_4_640_2_5_25x.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>590000</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/d53/d535b338bf0f679995fbbebf0fdafe8b.jpg</picture>
<vendor>ATN</vendor>
<name>Тепловизионный прицел ATN ThOR 4 640 2.5-25x</name>
<description></description>
</offer>
<offer id="295" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/atn_thor_4_640_1_10x.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>550000</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/bab/bab75dd00da2d92eeedb8a3f874f8004.jpg</picture>
<vendor>ATN</vendor>
<name>Тепловизионный прицел ATN ThOR 4 640 1-10x</name>
<description></description>
</offer>
<offer id="296" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/atn_thor_4_640_1_5_15x.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>560000</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/d05/d05ed475947067262faf1c190b963490.jpg</picture>
<vendor>ATN</vendor>
<name>Тепловизионный прицел ATN ThOR 4 640 1.5-15x</name>
<description></description>
</offer>
<offer id="297" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/atn_thor_4_384_7_28x.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>540000</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/2d2/2d2a18bb585a8e0d12a12341f4efd922.jpg</picture>
<vendor>ATN</vendor>
<name>Тепловизионный прицел ATN ThOR 4 384 7-28x</name>
<description></description>
</offer>
<offer id="298" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/atn_thor_4_384_4_5_18x.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>530000</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/3be/3be9deab0fa00575d67e170ad9d40dd0.jpg</picture>
<vendor>ATN</vendor>
<name>Тепловизионный прицел ATN ThOR 4 384 4.5-18x</name>
<description></description>
</offer>
<offer id="299" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/atn_thor_4_384_2_8x.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>450000</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/8e4/8e4055fcaa6c8d4d96bf5d99a09c42fb.jpg</picture>
<vendor>ATN</vendor>
<name>Тепловизионный прицел ATN ThOR 4 384 2-8x</name>
<description></description>
</offer>
<offer id="300" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/atn_thor_4_384_1_25_5x.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>389880</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/e16/e16655ec76b92486dc4333f26ca09053.jpg</picture>
<vendor>ATN</vendor>
<name>Тепловизионный прицел ATN ThOR 4 384 1.25-5x</name>
<description></description>
</offer>
<offer id="301" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/dedal_tx_xx2_pro.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>703500</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/716/7168cfc9201fc43564cba9f66efef212.jpg</picture>
<vendor>Dedal</vendor>
<name>Тепловизионный прицел Dedal T1.332 Pro</name>
<description></description>
</offer>
<offer id="302" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/dedal_t1_642_pro.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1162700</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/930/93047ffcfd171a14c26b5f9c4a9b362d.jpg</picture>
<vendor>Dedal</vendor>
<name>Тепловизионный прицел Dedal T1.642 Pro</name>
<description></description>
</offer>
<offer id="303" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/dedal_t2_380_hunter.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>383801</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/345/3457c43ff00ed92d7e8343bed8fe0607.jpg</picture>
<vendor>Dedal</vendor>
<name>Тепловизионный прицел Dedal T2.380 Hunter</name>
<description></description>
</offer>
<offer id="304" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/dedal_t4_642_hunter.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>689110</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/45c/45cbb729dd9564f3d219a83bc5fb0027.jpg</picture>
<vendor>Dedal</vendor>
<name>Тепловизионный прицел Dedal T4.642 Hunter</name>
<description></description>
</offer>
<offer id="305" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/teplovizionnyy_pritsel_flir_thermosight_rs24_1x.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>240000</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/6fe/6fe37c7f25de34547db424d790105210.jpg</picture>
<vendor>FLIR</vendor>
<name>Тепловизионный прицел FLIR THERMOSIGHT RS24-1x</name>
<description></description>
</offer>
<offer id="306" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/teplovizionnyy_pritsel_flir_thermosight_rs32_1_25_5x_60hz.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>280000</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/2c4/2c48357a7c44c32594edfe2352d9c55d.jpg</picture>
<vendor>FLIR</vendor>
<name>Тепловизионный прицел FLIR THERMOSIGHT RS32-1.25-5x (60Hz)</name>
<description></description>
</offer>
<offer id="307" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/flir_thermosight_rs32_2_25_9x_60hz.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>300000</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/b4f/b4fdc011dbd3859097792888ba75bf35.jpg</picture>
<vendor>FLIR</vendor>
<name>Тепловизионный прицел FLIR THERMOSIGHT RS32-2.25-9x (60Hz)</name>
<description></description>
</offer>
<offer id="308" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/teplovizionnyy_pritsel_flir_thermosight_rs32_4_16x_60hz.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>330000</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/74b/74bba66f827fdecc82af2dfc60610110.jpg</picture>
<vendor>FLIR</vendor>
<name>Тепловизионный прицел FLIR THERMOSIGHT RS32-4-16x (60Hz)</name>
<description></description>
</offer>
<offer id="309" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/flir_thermosight_rs64_1_1_9x_30hz.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>320000</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/af6/af687b52aa10ae7db94dfeb4d7331cfe.jpg</picture>
<vendor>FLIR</vendor>
<name>Тепловизионный прицел FLIR THERMOSIGHT RS64-1.1-9x (30Hz)</name>
<description></description>
</offer>
<offer id="310" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/teplovizionnyy_pritsel_flir_thermosight_rs64_2_16x_30hz.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>340000</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/3e0/3e0947ec1b29626fdd744b872ccc2908.jpg</picture>
<vendor>FLIR</vendor>
<name>Тепловизионный прицел FLIR THERMOSIGHT RS64-2-16x (30Hz)</name>
<description></description>
</offer>
<offer id="311" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/infratech_it_310.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1276500</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/6db/6dbf05b29d3a0e8a6ad4e7c7b9263519.JPG</picture>
<vendor>INFRATECH</vendor>
<name>Тепловизионный прицел INFRATECH ИТ-310</name>
<description></description>
</offer>
<offer id="312" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/infratech_it_315.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>586040</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/1b0/1b012b53dd28c19e2bdf767cf94ea152.jpg</picture>
<vendor>INFRATECH</vendor>
<name>Тепловизионный прицел INFRATECH ИТ-315</name>
<description></description>
</offer>
<offer id="313" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/infratech_it_610.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>586040</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/7a5/7a540a45194840a4d782ef2d36d81073.JPG</picture>
<vendor>INFRATECH</vendor>
<name>Тепловизионный прицел INFRATECH ИТ-610</name>
<description></description>
</offer>
<offer id="314" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_nasadki/teplovizionnaya_nasadka_eotech_ltws.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>906000</price>
<currencyId>RUB</currencyId>
<categoryId>75</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/4a5/4a5f614c866ff4f83dc0ff19a89ab5a0.png</picture>
<vendor>EOTech</vendor>
<name>Тепловизионная насадка EOTech LTWS</name>
<description></description>
</offer>
<offer id="358" available="true">
<url>https://russiancaliber.ru/catalog/pribory_dlya_teploaudita/seek_thermal_compact.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>22900</price>
<currencyId>RUB</currencyId>
<categoryId>82</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/82b/82bcfd294b3149d06166609637014549.jpg</picture>
<vendor>Seek Thermal</vendor>
<name>Тепловизор Seek Thermal Compact</name>
<description></description>
</offer>
<offer id="361" available="true">
<url>https://russiancaliber.ru/catalog/pribory_dlya_teploaudita/seek_thermal_compactxr.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>27950</price>
<currencyId>RUB</currencyId>
<categoryId>82</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/b41/b41e5d6c7cc42fd90e2ec1fd053de2c3.jpg</picture>
<vendor>Seek Thermal</vendor>
<name>Тепловизор Seek Thermal CompactXR</name>
<description></description>
</offer>
<offer id="362" available="true">
<url>https://russiancaliber.ru/catalog/pribory_dlya_teploaudita/seek_thermal_reveal.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>29900</price>
<currencyId>RUB</currencyId>
<categoryId>82</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/982/9821307acf44d2722cfccea77780dbac.jpg</picture>
<vendor>Seek Thermal</vendor>
<name>Тепловизор Seek Thermal Reveal</name>
<description></description>
</offer>
<offer id="363" available="true">
<url>https://russiancaliber.ru/catalog/pribory_dlya_teploaudita/seek_thermal_shot.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>49900</price>
<currencyId>RUB</currencyId>
<categoryId>82</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/5a3/5a3b46a0879386e05aafbf78b1217d91.jpg</picture>
<vendor>Seek Thermal</vendor>
<name>Тепловизор Seek Thermal Shot</name>
<description></description>
</offer>
<offer id="364" available="true">
<url>https://russiancaliber.ru/catalog/pribory_dlya_teploaudita/seek_thermal_shotpro.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>69900</price>
<currencyId>RUB</currencyId>
<categoryId>82</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/57b/57bdc30821c01bd088256f5ea2e357f2.jpg</picture>
<vendor>Seek Thermal</vendor>
<name>Тепловизор Seek Thermal ShotPRO</name>
<description></description>
</offer>
<offer id="365" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/nikon_coolshot_20_gii.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>17090</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/5c2/5c2d0bb2b51c2d0d9cbf7afa867a8bf1.jpg</picture>
<vendor>Nikon</vendor>
<name>Дальномер Nikon COOLSHOT 20 GII</name>
<description></description>
</offer>
<offer id="366" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/nikon_prostaff_1000.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>32000</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/480/4806491abae57c52b2d9ecb34c3ca2ff.jpg</picture>
<vendor>Nikon</vendor>
<name>Дальномер Nikon PROSTAFF 1000</name>
<description></description>
</offer>
<offer id="367" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/nikon_monarch_2000.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>33990</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/7e3/7e30c2ffd4fbf33299bf3a8dfbb8ce1e.png</picture>
<vendor>Nikon</vendor>
<name>Дальномер Nikon MONARCH 2000</name>
<description></description>
</offer>
<offer id="368" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/nikon_coolshot_pro_stabilized.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>37990</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/f2c/f2c771babc6d5fc31f915451b6a9e64d.jpg</picture>
<vendor>Nikon</vendor>
<name>Дальномер Nikon COOLSHOT PRO STABILIZED</name>
<description></description>
</offer>
<offer id="369" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/nikon_monarch_3000_stabilized.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>36900</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/ef3/ef350529ebea5ec42d40f56db50b0080.jpg</picture>
<vendor>Nikon</vendor>
<name>Дальномер Nikon MONARCH 3000 STABILIZED</name>
<description></description>
</offer>
<offer id="370" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/dalnomer_nikon_coolshot_40.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>25890</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/dca/dca2fd4ba1459b7b2d4a54a7bfb9efa5.jpg</picture>
<vendor>Nikon</vendor>
<name>Дальномер Nikon COOLSHOT 40</name>
<description></description>
</offer>
<offer id="371" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/nikon_coolshot_40i.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>26990</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/aa9/aa9f5ac05723e069639fcfac2f5f3942.jpg</picture>
<vendor>Nikon</vendor>
<name>Дальномер Nikon COOLSHOT 40i</name>
<description></description>
</offer>
<offer id="372" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/nikon_forestry_pro.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>34290</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/7fc/7fcbdea35236855d8b531083fc7eee8f.jpg</picture>
<vendor>Nikon</vendor>
<name>Дальномер Nikon Forestry Pro</name>
<description></description>
</offer>
<offer id="402" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_pritsely/yukon_photon_rt_4_5kh42s.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>37900</price>
<currencyId>RUB</currencyId>
<categoryId>78</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/cfa/cfa6e60387afffef3128a46e438d2e74.jpg</picture>
<vendor>Yukon</vendor>
<name>Ночной прицел Yukon Photon RT 4.5х42S</name>
<description></description>
</offer>
<offer id="403" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_pritsely/yukon_photon_rt_4_5kh42.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>37900</price>
<currencyId>RUB</currencyId>
<categoryId>78</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/ea5/ea5f604037d71eebff277fb22c9a593c.jpg</picture>
<vendor>Yukon</vendor>
<name>Ночной прицел Yukon Photon RT 4.5х42</name>
<description></description>
</offer>
<offer id="404" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_pritsely/yukon_photon_rt_6kh50s.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>39900</price>
<currencyId>RUB</currencyId>
<categoryId>78</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/39d/39d7341693b98f54ae1338ad36d74ed6.jpg</picture>
<vendor>Yukon</vendor>
<name>Ночной прицел Yukon Photon RT 6х50S</name>
<description></description>
</offer>
<offer id="405" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_pritsely/yukon_photon_rt_6kh50.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>41900</price>
<currencyId>RUB</currencyId>
<categoryId>78</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/bee/bee1e0d127db72c31615925f8d64ffc1.jpg</picture>
<vendor>Yukon</vendor>
<name>Ночной прицел Yukon Photon RT 6х50</name>
<description></description>
</offer>
<offer id="406" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_pritsely/yukon_sentinel_2_5x50.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>33900</price>
<currencyId>RUB</currencyId>
<categoryId>78</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/50f/50f465303c2d5d1605d942e2bd2e4d52.jpg</picture>
<vendor>Yukon</vendor>
<name>Ночной прицел Yukon Sentinel 2.5x50</name>
<description></description>
</offer>
<offer id="407" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_pritsely/yukon_sentinel_3x60.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>34900</price>
<currencyId>RUB</currencyId>
<categoryId>78</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/77b/77bd74420cd4658d0248d955d03fbcea.jpg</picture>
<vendor>Yukon</vendor>
<name>Ночной прицел Yukon Sentinel 3x60</name>
<description></description>
</offer>
<offer id="408" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_pritsely/yukon_sentinel_2_5x50_l.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>38500</price>
<currencyId>RUB</currencyId>
<categoryId>78</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/e4f/e4f2fb632d74761b3f8d0af628f258c8.jpg</picture>
<vendor>Yukon</vendor>
<name>Ночной прицел Yukon Sentinel 2.5x50 L</name>
<description></description>
</offer>
<offer id="409" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_pritsely/yukon_sentinel_3x60_l.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>39900</price>
<currencyId>RUB</currencyId>
<categoryId>78</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/eeb/eeb02741e2fe7c3a5efdd206df914cd6.jpg</picture>
<vendor>Yukon</vendor>
<name>Ночной прицел Yukon Sentinel 3x60 L</name>
<description></description>
</offer>
<offer id="410" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_pritsely/yukon_photon_xt_4_6x42l.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>33900</price>
<currencyId>RUB</currencyId>
<categoryId>78</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/ada/adaa516349a1b4d0e2b5ad37492c06b7.jpg</picture>
<vendor>Yukon</vendor>
<name>Ночной прицел Yukon Photon XT 4.6x42L</name>
<description></description>
</offer>
<offer id="411" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_pritsely/yukon_photon_xt_6_5x50l.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>36900</price>
<currencyId>RUB</currencyId>
<categoryId>78</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/24b/24b0ad423c1bc67fcad332849278a841.jpg</picture>
<vendor>Yukon</vendor>
<name>Ночной прицел Yukon Photon XT 6.5x50L</name>
<description></description>
</offer>
<offer id="412" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_pritsely/yukon_photon_xt_4_6x42s.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>30900</price>
<currencyId>RUB</currencyId>
<categoryId>78</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/8b9/8b96969dbb945690c602c8b90aaa766e.jpg</picture>
<vendor>Yukon</vendor>
<name>Ночной прицел Yukon Photon XT 4.6x42S</name>
<description></description>
</offer>
<offer id="413" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_pritsely/yukon_photon_xt_6_5x50s.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>33900</price>
<currencyId>RUB</currencyId>
<categoryId>78</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/569/56993fde881df03195661204731c3bd1.jpg</picture>
<vendor>Yukon</vendor>
<name>Ночной прицел Yukon Photon XT 6.5x50S</name>
<description></description>
</offer>
<offer id="414" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/electrooptic_strix_3f40.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>280000</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/da5/da50ab1a18457c1e120248b9970643f0.jpg</picture>
<vendor>Electrooptic</vendor>
<name>Тепловизионный монокуляр Electrooptic STRIX-3F40</name>
<description></description>
</offer>
<offer id="415" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/electrooptic_strix_3f40_st.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>255068</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/8cd/8cdc51079a05319ad11d765399d7f3ca.jpg</picture>
<vendor>Electrooptic</vendor>
<name>Тепловизионный монокуляр Electrooptic STRIX-3F40 ST</name>
<description></description>
</offer>
<offer id="416" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/electrooptic_strix_3f40_sv.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>255068</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/116/116c40fb86eb36349ae672f707a87106.jpg</picture>
<vendor>Electrooptic</vendor>
<name>Тепловизионный монокуляр Electrooptic STRIX-3F40 SV</name>
<description></description>
</offer>
<offer id="417" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/electrooptic_strix_3f54.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>294000</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/08d/08d40966a3826ad6c9974f8c135e04e7.jpg</picture>
<vendor>Electrooptic</vendor>
<name>Тепловизионный монокуляр Electrooptic STRIX-3F54</name>
<description></description>
</offer>
<offer id="418" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/electrooptic_strix_3f54_st.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>268148</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/54a/54adfc243b4e749e731ae665679907e2.jpg</picture>
<vendor>Electrooptic</vendor>
<name>Тепловизионный монокуляр Electrooptic STRIX-3F54 ST</name>
<description></description>
</offer>
<offer id="419" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/electrooptic_strix_3f54_sv.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>268148</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/601/6016ac5d85be06eb1c22ee1c486d56f9.jpg</picture>
<vendor>Electrooptic</vendor>
<name>Тепловизионный монокуляр Electrooptic STRIX-3F54 SV</name>
<description></description>
</offer>
<offer id="420" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/electrooptic_strix_3f75.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>322000</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/198/198de90a61727b7315f4b0916245731d.jpg</picture>
<vendor>Electrooptic</vendor>
<name>Тепловизионный монокуляр Electrooptic STRIX-3F75</name>
<description></description>
</offer>
<offer id="421" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/electrooptic_strix_3f75_st.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>287848</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/a60/a60c656e47500e367a040aa98f096c88.jpg</picture>
<vendor>Electrooptic</vendor>
<name>Тепловизионный монокуляр Electrooptic STRIX-3F75 ST</name>
<description></description>
</offer>
<offer id="422" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/electrooptic_strix_3f75_sv.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>287848</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/ca0/ca02eb001b44368cb127fcf00ee46e85.jpg</picture>
<vendor>Electrooptic</vendor>
<name>Тепловизионный монокуляр Electrooptic STRIX-3F75 SV</name>
<description></description>
</offer>
<offer id="423" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/electrooptic_strix_6f54.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>420000</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/461/461b1513dab91cb17141904411837f23.jpg</picture>
<vendor>Electrooptic</vendor>
<name>Тепловизионный монокуляр Electrooptic STRIX-6F54</name>
<description></description>
</offer>
<offer id="424" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/electrooptic_strix_6f54_st.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>379436</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/415/41562ba813d32aa7b2981decfef12673.jpg</picture>
<vendor>Electrooptic</vendor>
<name>Тепловизионный монокуляр Electrooptic STRIX-6F54 ST</name>
<description></description>
</offer>
<offer id="425" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/electrooptic_strix_6f54_sv.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>379436</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/6bd/6bd425871545eba0af2db9092190179b.jpg</picture>
<vendor>Electrooptic</vendor>
<name>Тепловизионный монокуляр Electrooptic STRIX-6F54 SV</name>
<description></description>
</offer>
<offer id="426" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/electrooptic_strix_6f75.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>462000</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/74d/74db740c94fbf8cbfd0447d8cc175ca2.jpg</picture>
<vendor>Electrooptic</vendor>
<name>Тепловизионный монокуляр Electrooptic STRIX-6F75</name>
<description></description>
</offer>
<offer id="427" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/electrooptic_strix_6f75_st.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>418688</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/552/552ed55343917e2e5a13421085c378bd.jpg</picture>
<vendor>Electrooptic</vendor>
<name>Тепловизионный монокуляр Electrooptic STRIX-6F75 ST</name>
<description></description>
</offer>
<offer id="428" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/electrooptic_strix_6f75_sv.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>418688</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/2d7/2d78053de884b7fb9d92e0c17f913ccf.jpg</picture>
<vendor>Electrooptic</vendor>
<name>Тепловизионный монокуляр Electrooptic STRIX-6F75 SV</name>
<description></description>
</offer>
<offer id="434" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/bushnell_trophy.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>16500</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/845/8454eb6320c862df45558ac8ed8ea9cc.jpg</picture>
<vendor>Bushnell</vendor>
<name>Дальномер Bushnell Trophy</name>
<description></description>
</offer>
<offer id="435" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/bushnell_trophy_xtreme.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>18500</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/a63/a63f5a1b2d6b8d25c5d7835a3a8894b0.jpg</picture>
<vendor>Bushnell</vendor>
<name>Дальномер Bushnell Trophy Xtreme</name>
<description></description>
</offer>
<offer id="436" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/bushnell_the_truth.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>23100</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/375/375240720cea8b3cbc785d300396a6f8.jpg</picture>
<vendor>Bushnell</vendor>
<name>Дальномер Bushnell The Truth</name>
<description></description>
</offer>
<offer id="437" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/bushnell_scout_dx_1000_arc.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>29330</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/bc3/bc38abfd1d98ebd444cdf6da8ef1c15a.jpg</picture>
<vendor>Bushnell</vendor>
<name>Дальномер Bushnell Scout DX 1000 ARC</name>
<description></description>
</offer>
<offer id="438" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/bushnell_g_force_dx.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>29700</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/efb/efb2b7bb356f90649473a4914d79aa68.jpg</picture>
<vendor>Bushnell</vendor>
<name>Дальномер Bushnell G-Force DX</name>
<description></description>
</offer>
<offer id="439" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/bushnell_elite_1_mile_arc.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>48800</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/5da/5da97d229b5e14969d1d7193be27cb7f.jpg</picture>
<vendor>Bushnell</vendor>
<name>Дальномер Bushnell Elite 1 Mile ARC</name>
<description></description>
</offer>
<offer id="440" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/bushnell_elite_1_mile_conx.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>50200</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/3aa/3aa28a4e855200d3b2a92579573f10ef.jpg</picture>
<vendor>Bushnell</vendor>
<name>Дальномер Bushnell Elite 1 Mile CONX</name>
<description></description>
</offer>
<offer id="441" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/bushnell_fusion_10x42.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>89900</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/100/100bcb904d56ac98bf18e91e267d0d0e.jpg</picture>
<vendor>Bushnell</vendor>
<name>Бинокль-дальномер Bushnell Fusion 10X42</name>
<description></description>
</offer>
<offer id="442" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/binokl_dalnomer_bushnell_fusion_12kh50.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>107250</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/584/584fbd1e2484aeff89a2a9e33a054e2d.jpg</picture>
<vendor>Bushnell</vendor>
<name>Бинокль-дальномер Bushnell Fusion 12х50</name>
<description></description>
</offer>
<offer id="443" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/hawke_lrf_400_hunter.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>15638</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/58d/58d5038de45108fc213e8b134f153e0d.jpg</picture>
<vendor>Hawke</vendor>
<name>Дальномер Hawke LRF 400 HUNTER</name>
<description></description>
</offer>
<offer id="444" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/hawke_lrf_600_hunter.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>16810</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/dfd/dfdc05aad436e7286905a95425343ba9.jpg</picture>
<vendor>Hawke</vendor>
<name>Дальномер Hawke LRF 600 HUNTER</name>
<description></description>
</offer>
<offer id="445" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/hawke_lrf_400_professional.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>15473</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/1bf/1bfa0a990eba455f8556f9c4468f1371.jpg</picture>
<vendor>Hawke</vendor>
<name>Дальномер Hawke LRF 400 Professional</name>
<description></description>
</offer>
<offer id="446" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/hawke_lrf_600_professional.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>16146</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/892/8920b7dc6650af521da171556af5c65f.jpg</picture>
<vendor>Hawke</vendor>
<name>Дальномер Hawke LRF 600 Professional</name>
<description></description>
</offer>
<offer id="447" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/hawke_lrf_900_professional.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>18154</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/24e/24eaa27958342c8631883454a076119e.jpg</picture>
<vendor>Hawke</vendor>
<name>Дальномер Hawke LRF 900 Professional</name>
<description></description>
</offer>
<offer id="488" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/laser_technology_trupulse_200.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>80800</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/f05/f05addf425f406e0c08c4b93767e2482.jpg</picture>
<vendor>Laser Technology</vendor>
<name>Дальномер Laser Technology TruPulse 200</name>
<description></description>
</offer>
<offer id="489" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/laser_technology_trupulse_200l.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>39000</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/188/188c58e80016cac2b39488d5978d47e4.jpg</picture>
<vendor>Laser Technology</vendor>
<name>Дальномер Laser Technology TruPulse 200L</name>
<description></description>
</offer>
<offer id="490" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/technology_trupulse_200x.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>183700</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/0b4/0b48ce5a4b92999d1f769431d100adec.jpg</picture>
<vendor>Laser Technology</vendor>
<name>Дальномер Laser Technology TruPulse 200X</name>
<description></description>
</offer>
<offer id="491" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/laser_technology_trupulse_360_b.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>173500</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/253/253570d433b09d3f08e0f35e3f7d9e0a.jpg</picture>
<vendor>Laser Technology</vendor>
<name>Дальномер Laser Technology TruPulse 360 B</name>
<description></description>
</offer>
<offer id="492" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/technology_trupulse_360_r.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>183700</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/621/621cdd8e142c89334c3c55042c72ce6e.jpg</picture>
<vendor>Laser Technology</vendor>
<name>Дальномер Laser Technology TruPulse 360 R</name>
<description></description>
</offer>
<offer id="493" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/leica_geovid_8_x_42_r.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>112000</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/f34/f34ae4e894df7c2dad62086a7aaa058a.jpg</picture>
<vendor>Leica</vendor>
<name>Дальномер Leica Geovid 8 x 42 R</name>
<description></description>
</offer>
<offer id="494" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/leica_geovid_8_x_42_hd_b_3000.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>228000</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/4ec/4ec7f9ad3c35a515c9908d2cc3294d03.jpg</picture>
<vendor>Leica</vendor>
<name>Дальномер Leica Geovid 8 x 42 HD-B 3000</name>
<description></description>
</offer>
<offer id="495" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/leica_geovid_8_x_42_hd_r_2700.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>196500</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/ec0/ec09f2e80da279c9346d365819edac1c.jpg</picture>
<vendor>Leica</vendor>
<name>Дальномер Leica Geovid 8 x 42 HD-R 2700</name>
<description></description>
</offer>
<offer id="496" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/leica_geovid_8_x_56_hd_b_3000.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>274400</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/a68/a686248c6091b252f31f3e8af2013ca4.jpg</picture>
<vendor>Leica</vendor>
<name>Дальномер Leica Geovid 8 x 56 HD-B 3000</name>
<description></description>
</offer>
<offer id="497" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/leica_geovid_8_x_56_hd_r_2700.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>190000</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/f0a/f0a508557a8efa67b475370078ca0777.jpg</picture>
<vendor>Leica</vendor>
<name>Дальномер Leica Geovid 8 x 56 HD-R 2700</name>
<description></description>
</offer>
<offer id="498" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/leica_geovid_10_x_42_hd_b_3000.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>232000</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/93a/93af458c9f5b5e06a6356ccd44334fd2.jpg</picture>
<vendor>Leica</vendor>
<name>Дальномер Leica Geovid 10 x 42 HD-B 3000</name>
<description></description>
</offer>
<offer id="499" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/leica_geovid_10_x_42_hd_r_2700.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>221160</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/d19/d19c811a612163f34bd5b53be68da73e.jpg</picture>
<vendor>Leica</vendor>
<name>Дальномер Leica Geovid 10 x 42 HD-R 2700</name>
<description></description>
</offer>
<offer id="500" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/leica_geovid_15_x_56_r.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>195000</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/c74/c746c7f2256d96d2c9a994c00969407c.JPG</picture>
<vendor>Leica</vendor>
<name>Дальномер Leica Geovid 15 x 56 R</name>
<description></description>
</offer>
<offer id="501" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/leica_geovid_edition_2017_8_x_42_hd_b.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>145000</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/b96/b962d9297fa0a11284e78f4a9c422573.jpg</picture>
<vendor>Leica</vendor>
<name>Дальномер Leica Geovid Edition 2017 8 x 42 HD-B</name>
<description></description>
</offer>
<offer id="502" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/leica_geovid_edition_2017_10_x_42_hd_b.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>207990</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/3a1/3a130b8663740104845f20e51c306d3f.jpg</picture>
<vendor>Leica</vendor>
<name>Дальномер Leica Geovid Edition 2017 10 x 42 HD-B</name>
<description></description>
</offer>
<offer id="503" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/leica_pinmaster_ii.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>41000</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/98a/98a47e2ed1fa88f996231454ac93ae42.jpg</picture>
<vendor>Leica</vendor>
<name>Дальномер Leica Pinmaster II</name>
<description></description>
</offer>
<offer id="504" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/leica_pinmaster_ii_pro.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>52400</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/6da/6dab9f57edb9c197aa18996a7d940e19.jpg</picture>
<vendor>Leica</vendor>
<name>Дальномер Leica Pinmaster II Pro</name>
<description></description>
</offer>
<offer id="505" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/leica_rangemaster_crf_1600_r.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>35000</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/809/80905c79cd9658980bad46d5f25a1864.png</picture>
<vendor>Leica</vendor>
<name>Дальномер Leica Rangemaster CRF 1600-R</name>
<description></description>
</offer>
<offer id="506" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/leica_rangemaster_crf_2000_b.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>52990</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/77b/77b8354dda64133e8159d3537dcf38f4.jpg</picture>
<vendor>Leica</vendor>
<name>Дальномер Leica Rangemaster CRF 2000-B</name>
<description></description>
</offer>
<offer id="507" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/leica_rangemaster_crf_2700_b.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>61490</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/056/056de2ca912aa5e73fdf805c9dc6e3ce.jpg</picture>
<vendor>Leica</vendor>
<name>Дальномер Leica Rangemaster CRF 2700-B</name>
<description></description>
</offer>
<offer id="508" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/leica_rangemaster_edition_2017_crf_2000_b.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>46000</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/c88/c8838653837ddd7d214e1b33c401a5fa.jpg</picture>
<vendor>Leica</vendor>
<name>Дальномер Leica Rangemaster Edition 2017 CRF 2000-B</name>
<description></description>
</offer>
<offer id="509" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/leica_geovid_8_x_42_hd_r_type_402.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>195000</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/308/308ab29d09faa3cf059782e7af5d74b9.jpg</picture>
<vendor>Leica</vendor>
<name>Дальномер Leica Geovid 8 x 42 HD-R Type 402</name>
<description></description>
</offer>
<offer id="510" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/leica_geovid_8_x_56_type_500.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>230000</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/0eb/0ebcc09e57d2868d57db33371fa407e1.jpg</picture>
<vendor>Leica</vendor>
<name>Дальномер Leica Geovid 8 x 56 Type 500</name>
<description></description>
</offer>
<offer id="511" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/leica_geovid_8_x_56_hd_b.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>247500</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/313/31355e5897cb1e2fa08408dc38d19dd1.jpg</picture>
<vendor>Leica</vendor>
<name>Дальномер Leica Geovid 8 x 56 HD-B</name>
<description></description>
</offer>
<offer id="512" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/dalnomer_leica_geovid_10_x_42_hd_b.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>230500</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/8c9/8c9bb80fb36f22be14b59d48c51afc26.jpg</picture>
<vendor>Leica</vendor>
<name>Дальномер Leica Geovid 10 x 42 HD-B</name>
<description></description>
</offer>
<offer id="513" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/leica_geovid_10_x_42_hd_r_type_403.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>124990</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/963/9634f7c38c1b6f2aef8f0b72c6ce9ee4.jpg</picture>
<vendor>Leica</vendor>
<name>Дальномер Leica Geovid 10 x 42 HD-R Type 403</name>
<description></description>
</offer>
<offer id="514" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/leupold_rx_600i_dna.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>18710</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/25c/25c0814884e47b2820143264c833ff7d.jpg</picture>
<vendor>Leupold</vendor>
<name>Дальномер Leupold RX-600i DNA</name>
<description></description>
</offer>
<offer id="515" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/leupold_rx_800i_dna.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>29040</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/604/6044fee7a2149cddd309c6e8fe992c01.jpg</picture>
<vendor>Leupold</vendor>
<name>Дальномер Leupold RX-800i DNA</name>
<description></description>
</offer>
<offer id="516" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/leupold_rx_800i_tbr_dna.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>36400</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/19e/19e24ed152a401e3ab990464706b669c.jpg</picture>
<vendor>Leupold</vendor>
<name>Дальномер Leupold RX-800i TBR DNA</name>
<description></description>
</offer>
<offer id="517" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/leupold_rx_850i_tbr_dna.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>28390</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/2d0/2d04b0138e42be5c7d4e9c27e34767f6.jpg</picture>
<vendor>Leupold</vendor>
<name>Дальномер Leupold RX-850i TBR DNA</name>
<description></description>
</offer>
<offer id="518" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/leupold_rx_850i_tbr_dna_olive.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>30940</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/e43/e4394a9655e5a5382bd58265231604d4.jpg</picture>
<vendor>Leupold</vendor>
<name>Дальномер Leupold RX-850i TBR DNA Olive</name>
<description></description>
</offer>
<offer id="519" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/leupold_rx_1000i_dna.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>23900</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/b4b/b4b0edb215c1e2e6cbeb85875f6fcd9e.jpg</picture>
<vendor>Leupold</vendor>
<name>Дальномер Leupold RX-1000i DNA</name>
<description></description>
</offer>
<offer id="520" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/leupold_rx_1200i_tbr_w_dna_mossy_oak_infinity.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>45680</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/e96/e96eef76edf6b4784dc1ce92fcee0cb5.jpg</picture>
<vendor>Leupold</vendor>
<name>Дальномер Leupold RX-1200i TBR W DNA Mossy Oak infinity</name>
<description></description>
</offer>
<offer id="521" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/leupold_rx_1200i_dna.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>31900</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/11b/11ba0870d1e11614c13fafab11ac801d.jpg</picture>
<vendor>Leupold</vendor>
<name>Дальномер Leupold RX-1200i DNA</name>
<description></description>
</offer>
<offer id="522" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/leupold_rx_1200i_tbr_dna.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>36600</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/d33/d332b70028323521c73f4ba4dc38e546.jpg</picture>
<vendor>Leupold</vendor>
<name>Дальномер Leupold RX-1200i TBR DNA</name>
<description></description>
</offer>
<offer id="523" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/leupold_rx_1200i_tbr_w_dna.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>40900</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/010/010700d93c617f618c88a565929eb4db.jpg</picture>
<vendor>Leupold</vendor>
<name>Дальномер Leupold RX-1200i TBR W DNA</name>
<description></description>
</offer>
<offer id="524" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/dalnomer_luepold_rx_1000i_tbr_dna_mossy_oak.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>41900</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/854/854c9e3eff17519bb1ccbd016ff0210f.jpg</picture>
<vendor>Leupold</vendor>
<name>Дальномер Luepold RX-1000i TBR DNA Mossy Oak</name>
<description></description>
</offer>
<offer id="525" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/newcon_lrb_6k.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>790000</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/340/3407e5cd99a3c97f17ca12e1c1d61754.jpg</picture>
<vendor>Newcon</vendor>
<name>Дальномер Newcon LRB 6K</name>
<description></description>
</offer>
<offer id="526" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/newcon_lrb_12k.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1290000</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/a97/a977d6e49aeede302f296e6d72720d0e.jpg</picture>
<vendor>Newcon</vendor>
<name>Дальномер Newcon LRB 12K</name>
<description></description>
</offer>
<offer id="527" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/dalnomer_newcon_lrb_12knight.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1360688</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/440/440e9f5e6c9a63823144905854788208.jpg</picture>
<vendor>Newcon</vendor>
<name>Дальномер Newcon LRB 12KNight</name>
<description></description>
</offer>
<offer id="528" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/newcon_lrb_3000pro.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>199000</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/6b5/6b5d28ec6a65ff088edaee6d4597699e.jpg</picture>
<vendor>Newcon</vendor>
<name>Дальномер Newcon LRB 3000PRO</name>
<description></description>
</offer>
<offer id="529" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_nasadki/trijicon_irco_35.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>600000</price>
<currencyId>RUB</currencyId>
<categoryId>75</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/829/8294c358f8f0aa3da59ee16e3003e512.jpg</picture>
<vendor>Trijicon</vendor>
<name>Тепловизионная насадка Trijicon IRCO-35</name>
<description></description>
</offer>
<offer id="530" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_nasadki/sig_sauer_echo1.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>144000</price>
<currencyId>RUB</currencyId>
<categoryId>75</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/feb/feb0e10b70e229f830242438a7342df9.jpg</picture>
<vendor>Sig Sauer</vendor>
<name>Тепловизионная насадка Sig Sauer ECHO1</name>
<description></description>
</offer>
<offer id="531" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_nasadki/infratekh_it_615_tn.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>543200</price>
<currencyId>RUB</currencyId>
<categoryId>75</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/0e7/0e76db24ced09a93ca23e3079918c7a8.jpg</picture>
<vendor>INFRATECH</vendor>
<name>Тепловизионная насадка INFRATECH ИТ-615 ТН</name>
<description></description>
</offer>
<offer id="546" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/pulsar_axion_xm30.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>119900</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/eb2/eb282a0bb8b9a7a5af9eb5f8daa03c1c.png</picture>
<vendor>Pulsar</vendor>
<name>Тепловизионный монокуляр Pulsar Axion XM30</name>
<description></description>
</offer>
<offer id="547" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/pulsar_axion_xm38.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>139900</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/1e4/1e488b5c5d2ec421d7346f792515e204.png</picture>
<vendor>Pulsar</vendor>
<name>Тепловизионный монокуляр Pulsar Axion XM38</name>
<description></description>
</offer>
<offer id="548" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/pulsar_axion_key_xm30.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>99900</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/8c4/8c4a07dc109f88b1f08d393c58f0c91f.png</picture>
<vendor>Pulsar</vendor>
<name>Тепловизионный монокуляр Pulsar Axion Key XM30</name>
<description></description>
</offer>
<offer id="561" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/fortuna_general_19m3.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>288300</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/2b6/2b6b16559e30a5dd0cd9742bf3d77b10.jpg</picture>
<vendor>FORTUNA</vendor>
<name>Тепловизионный прицел FORTUNA GENERAL 19M3</name>
<description></description>
</offer>
<offer id="562" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/fortuna_general_one_3m.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>329900</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/66f/66f0d79c2de4c8006366052fa6adece4.jpg</picture>
<vendor>FORTUNA</vendor>
<name>Тепловизионный прицел FORTUNA GENERAL ONE LRF 3M</name>
<description></description>
</offer>
<offer id="563" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/fortuna_general_one_3l.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>359900</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/450/450371d0491c6276e7cec54c62607f34.jpg</picture>
<vendor>FORTUNA</vendor>
<name>Тепловизионный прицел FORTUNA GENERAL ONE LRF 3L</name>
<description></description>
</offer>
<offer id="564" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/fortuna_general_one_3xl.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>599900</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/0d3/0d3c2e88cf9836d789d645d0ab8c43ff.jpg</picture>
<vendor>FORTUNA</vendor>
<name>Тепловизионный прицел FORTUNA GENERAL ONE LRF 3XL</name>
<description></description>
</offer>
<offer id="565" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/fortuna_general_one_6m.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>329900</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/139/13900aced14d5b6eea53840b8c16f5b9.jpg</picture>
<vendor>FORTUNA</vendor>
<name>Тепловизионный прицел FORTUNA GENERAL ONE LRF 6M</name>
<description></description>
</offer>
<offer id="566" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/fortuna_general_one_6l.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>569900</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/e72/e72a62250660fc92b323482d4fc2d9f2.jpg</picture>
<vendor>FORTUNA</vendor>
<name>Тепловизионный прицел FORTUNA GENERAL ONE LRF 6L</name>
<description></description>
</offer>
<offer id="567" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/fortuna_general_one_6xl.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>679900</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/546/546f8ef6c319159f3f56f7ee2c65e9ff.jpg</picture>
<vendor>FORTUNA</vendor>
<name>Тепловизионный прицел FORTUNA GENERAL ONE LRF 6XL</name>
<description></description>
</offer>
<offer id="569" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/fortuna_general_25m3.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>293400</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/136/1364a8a3cf425f7846d78b1672aaa3ed.jpg</picture>
<vendor>FORTUNA</vendor>
<name>Тепловизионный прицел FORTUNA GENERAL 25M3</name>
<description></description>
</offer>
<offer id="570" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/fortuna_general_40m3.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>299900</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/bc9/bc9ad66d23010b6bcf8527a4725220a5.jpg</picture>
<vendor>FORTUNA</vendor>
<name>Тепловизионный прицел FORTUNA GENERAL 40M3</name>
<description></description>
</offer>
<offer id="571" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/fortuna_general_50m3.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>299900</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/182/182d408fa3919592600040a03e569c53.jpg</picture>
<vendor>FORTUNA</vendor>
<name>Тепловизионный прицел FORTUNA GENERAL 50M3</name>
<description></description>
</offer>
<offer id="572" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/fortuna_general_19m6.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>421000</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/656/656edaa8abc33a3a50ad31c6b3ee29ac.jpg</picture>
<vendor>FORTUNA</vendor>
<name>Тепловизионный прицел FORTUNA GENERAL 19M6</name>
<description></description>
</offer>
<offer id="573" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/fortuna_general_25m6.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>433800</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/59a/59a0b2c351792080792c3318618b4f45.jpg</picture>
<vendor>FORTUNA</vendor>
<name>Тепловизионный прицел FORTUNA GENERAL 25M6</name>
<description></description>
</offer>
<offer id="574" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/fortuna_general_40m6.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>459900</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/13c/13cd7803afb84e003a4d3598e159762c.jpg</picture>
<vendor>FORTUNA</vendor>
<name>Тепловизионный прицел FORTUNA GENERAL 40M6</name>
<description></description>
</offer>
<offer id="575" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/fortuna_general_50m6.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>459900</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/7cd/7cd9d7fc05b052ccfa4cedf59d5e84ab.jpg</picture>
<vendor>FORTUNA</vendor>
<name>Тепловизионный прицел FORTUNA GENERAL 50M6</name>
<description></description>
</offer>
<offer id="576" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/fortuna_general_25l3.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>293400</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/7ce/7cee8e227007d86c5ed59d317a41072b.jpg</picture>
<vendor>FORTUNA</vendor>
<name>Тепловизионный прицел FORTUNA GENERAL 25L3</name>
<description></description>
</offer>
<offer id="577" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/fortuna_general_40l3.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>269900</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/0e2/0e24861bd1bd548f329530ebd7f777a9.jpg</picture>
<vendor>FORTUNA</vendor>
<name>Тепловизионный прицел FORTUNA GENERAL 40L3</name>
<description></description>
</offer>
<offer id="578" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/fortuna_general_50l3.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>299900</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/ece/ece78411a59b96bd3af1ca4bc5ef5256.jpg</picture>
<vendor>FORTUNA</vendor>
<name>Тепловизионный прицел FORTUNA GENERAL 50L3</name>
<description></description>
</offer>
<offer id="579" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/fortuna_general_25l6.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>428700</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/803/803a9a49da2b67674c2887acedb55711.jpg</picture>
<vendor>FORTUNA</vendor>
<name>Тепловизионный прицел FORTUNA GENERAL 25L6</name>
<description></description>
</offer>
<offer id="580" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/fortuna_general_40l6.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>459900</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/3ae/3ae2e46fb2963a69ede946beb5526cce.jpg</picture>
<vendor>FORTUNA</vendor>
<name>Тепловизионный прицел FORTUNA GENERAL 40L6</name>
<description></description>
</offer>
<offer id="581" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/fortuna_general_50l6.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>459900</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/8c6/8c61745faf9bb088766c9ac1728e746f.jpg</picture>
<vendor>FORTUNA</vendor>
<name>Тепловизионный прицел FORTUNA GENERAL 50L6</name>
<description></description>
</offer>
<offer id="582" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/fortuna_general_mlx.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>612400</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/e1d/e1d5f625c9187e93b1924afc202953dc.jpg</picture>
<vendor>FORTUNA</vendor>
<name>Тепловизионный прицел FORTUNA GENERAL MLX</name>
<description></description>
</offer>
<offer id="584" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_nasadki/fortuna_general_next.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>599900</price>
<currencyId>RUB</currencyId>
<categoryId>75</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/6c5/6c58a2bf80042196616f4f3c306e467e.jpg</picture>
<vendor>FORTUNA</vendor>
<name>Тепловизионная насадка FORTUNA GENERAL NEXT</name>
<description></description>
</offer>
<offer id="585" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_nasadki/fortuna_40a6_.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>419900</price>
<currencyId>RUB</currencyId>
<categoryId>75</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/a88/a8864d158cb971cb175ab1472cd27b09.jpg</picture>
<vendor>FORTUNA</vendor>
<name>Тепловизионная насадка FORTUNA GENERAL 40A6</name>
<description></description>
</offer>
<offer id="586" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_nasadki/fortuna_general_25a3.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>259900</price>
<currencyId>RUB</currencyId>
<categoryId>75</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/1d4/1d4537334be5b7873b48e19ee32906f5.jpg</picture>
<vendor>FORTUNA</vendor>
<name>Тепловизионная насадка FORTUNA GENERAL 25A3</name>
<description></description>
</offer>
<offer id="597" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/dedal_t2_380_venator.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>367000</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/8e3/8e34fc3c17f1685916d75d9a387d2138.jpg</picture>
<vendor>Dedal</vendor>
<name>Тепловизионный прицел Dedal T2.380 Venator</name>
<description></description>
</offer>
<offer id="662" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/flir_scout_ts32.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>423150</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/a44/a4462de045fb4df562eb98cc05990ae7.jpg</picture>
<vendor>FLIR</vendor>
<name>Тепловизионный монокуляр FLIR Scout TS32</name>
<description></description>
</offer>
<offer id="663" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/pulsar_helion_xp28.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>215000</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/a99/a9920e40b3e12a5fab65d53d865496f3.png</picture>
<vendor>Pulsar</vendor>
<name>Тепловизионный монокуляр Pulsar Helion XP28</name>
<description></description>
</offer>
<offer id="665" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_binokli/pulsar_accolade_lrf_xq38_.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>199900</price>
<currencyId>RUB</currencyId>
<categoryId>73</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/b35/b35fd77cf86dfdfbffc79da2ab70c413.jpg</picture>
<vendor>Pulsar</vendor>
<name>Тепловизионный бинокль Pulsar Accolade LRF XQ38</name>
<description></description>
</offer>
<offer id="666" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_binokli/pulsar_accolade_lrf_xp50.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>329900</price>
<currencyId>RUB</currencyId>
<categoryId>73</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/b4e/b4eddd0aad1f93ada305b246b81d738e.png</picture>
<vendor>Pulsar</vendor>
<name>Тепловизионный бинокль Pulsar Accolade LRF XP50</name>
<description></description>
</offer>
<offer id="670" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/dedal_t4_642_pro.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1311768</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/7da/7da89def7b71b26af4eb1612b19b14bc.jpg</picture>
<vendor>Dedal</vendor>
<name>Тепловизионный прицел Dedal T4.642 Pro</name>
<description></description>
</offer>
<offer id="671" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_monokulyary/yukon_nvmt_spartan_1x24.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>16000</price>
<currencyId>RUB</currencyId>
<categoryId>87</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/2a5/2a5e4df267eb85b00e4e23504b6fbf93.png</picture>
<vendor>Yukon</vendor>
<name>Ночной монокуляр Yukon NVMT Spartan 1x24</name>
<description></description>
</offer>
<offer id="672" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_monokulyary/yukon_nvmt_spartan_4x50.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>13700</price>
<currencyId>RUB</currencyId>
<categoryId>87</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/1d2/1d2e138c493f6b6a64460c97b21313a9.png</picture>
<vendor>Yukon</vendor>
<name>Ночной монокуляр Yukon NVMT Spartan 4x50</name>
<description></description>
</offer>
<offer id="673" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_monokulyary/nochnoy_monokulyar_yukon_exelon_3x50.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>16200</price>
<currencyId>RUB</currencyId>
<categoryId>87</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/8fc/8fc3e6069d9df1c0816aa893ff13c340.png</picture>
<vendor>Yukon</vendor>
<name>Ночной монокуляр Yukon Exelon 3x50</name>
<description></description>
</offer>
<offer id="674" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_monokulyary/yukon_exelon_4x50.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>17300</price>
<currencyId>RUB</currencyId>
<categoryId>87</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/51a/51a70d527d3432de937be2b3ea98f4fb.png</picture>
<vendor>Yukon</vendor>
<name>Ночной монокуляр Yukon Exelon 4x50</name>
<description></description>
</offer>
<offer id="677" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_monokulyary/yukon_nv_5x60.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>14750</price>
<currencyId>RUB</currencyId>
<categoryId>87</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/93a/93a5eca11720c08873e663f6e0c128d0.png</picture>
<vendor>Yukon</vendor>
<name>Ночной монокуляр Yukon NV 5x60</name>
<description></description>
</offer>
<offer id="678" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_monokulyary/yukon_signal_n320_rt.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>17790</price>
<currencyId>RUB</currencyId>
<categoryId>87</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/267/267db9f4fe1f7b0e0a78056553c305f5.png</picture>
<vendor>Yukon</vendor>
<name>Ночной монокуляр Yukon Signal N320 RT</name>
<description></description>
</offer>
<offer id="679" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_monokulyary/yukon_signal_n340_rt.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>19200</price>
<currencyId>RUB</currencyId>
<categoryId>87</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/c78/c78bdac1d78441c33f52360249ea692b.png</picture>
<vendor>Yukon</vendor>
<name>Ночной монокуляр Yukon Signal N340 RT</name>
<description></description>
</offer>
<offer id="683" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_pritsely/dedal_450_c.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>189400</price>
<currencyId>RUB</currencyId>
<categoryId>78</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/7a4/7a48f7aba01c84a5cb844d52d69c5ee2.png</picture>
<vendor>Dedal</vendor>
<name>Ночной прицел Dedal 450-C</name>
<description></description>
</offer>
<offer id="684" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_pritsely/dedal_460_dk_3.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>311200</price>
<currencyId>RUB</currencyId>
<categoryId>78</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/c1f/c1f4fc7e8f126d638436394fe5cb4836.png</picture>
<vendor>Dedal</vendor>
<name>Ночной прицел Dedal 460 DK-3</name>
<description></description>
</offer>
<offer id="685" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_pritsely/dedal_460_dk_3_bw.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>325900</price>
<currencyId>RUB</currencyId>
<categoryId>78</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/501/501694b97e8baed1c6cf706d9e1287d7.png</picture>
<vendor>Dedal</vendor>
<name>Ночной прицел Dedal 460 DK-3/bw</name>
<description></description>
</offer>
<offer id="686" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_pritsely/dedal_490_dk_3_100.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>342700</price>
<currencyId>RUB</currencyId>
<categoryId>78</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/853/85356f67804f5295352d598d3d68a7e3.png</picture>
<vendor>Dedal</vendor>
<name>Ночной прицел Dedal 490 DK-3 100</name>
<description></description>
</offer>
<offer id="687" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_pritsely/nochnoy_pritsel_dedal_490_dk_3_100_b_w.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>357400</price>
<currencyId>RUB</currencyId>
<categoryId>78</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/ad3/ad3fdd81692ad7d378e90dad9cfe5745.png</picture>
<vendor>Dedal</vendor>
<name>Ночной прицел Dedal 490 DK-3 100 b/w</name>
<description></description>
</offer>
<offer id="688" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_pritsely/dedal_490_dk_3_165.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>350500</price>
<currencyId>RUB</currencyId>
<categoryId>78</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/edc/edc05737a0a3c79ca972d47b0f2946d1.jpg</picture>
<vendor>Dedal</vendor>
<name>Ночной прицел Dedal 490 DK-3 165</name>
<description></description>
</offer>
<offer id="689" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_pritsely/dedal_490_dk_3_165_b_w.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>365200</price>
<currencyId>RUB</currencyId>
<categoryId>78</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/b2b/b2be999cf87119f7ee5e5c301b26a337.jpg</picture>
<vendor>Dedal</vendor>
<name>Ночной прицел Dedal 490 DK-3 165 b/w</name>
<description></description>
</offer>
<offer id="690" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_monokulyary/dedal_370_dk3.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>267400</price>
<currencyId>RUB</currencyId>
<categoryId>87</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/dcb/dcb5bed4d7e55a95fdc1b11c617ae6b5.jpg</picture>
<vendor>Dedal</vendor>
<name>Ночной монокуляр Dedal-370-DK3</name>
<description></description>
</offer>
<offer id="691" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_monokulyary/dedal_370_dk3_b_w.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>281300</price>
<currencyId>RUB</currencyId>
<categoryId>87</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/0ab/0abed1e76ed9ba4e29cae423e5ab7e53.jpg</picture>
<vendor>Dedal</vendor>
<name>Ночной монокуляр Dedal-370-DK3 b/w</name>
<description></description>
</offer>
<offer id="692" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_ochki/dedal_dvs_8_dk3_f_bw.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>281100</price>
<currencyId>RUB</currencyId>
<categoryId>86</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/2ce/2ce087b13856fb0a0c6624d27581e876.jpg</picture>
<vendor>Dedal</vendor>
<name>Ночные очки Dedal DVS-8-DK3/f/bw</name>
<description></description>
</offer>
<offer id="887" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/pulsar_thermion_xm30.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>330000</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/1a3/1a3c0c65b0a0da6e52281c0c479c8b1b.png</picture>
<vendor>Pulsar</vendor>
<name>Тепловизионный прицел Pulsar THERMION XM30</name>
<description></description>
</offer>
<offer id="888" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/pulsar_thermion_xm38.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>310000</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/fca/fcaa76b8f72568a4aab866178a3e7638.png</picture>
<vendor>Pulsar</vendor>
<name>Тепловизионный прицел Pulsar THERMION XM38</name>
<description></description>
</offer>
<offer id="889" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/pulsar_thermion_xm50.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>380000</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/fe2/fe2b99f80be91cb66b79129b3ebd753d.png</picture>
<vendor>Pulsar</vendor>
<name>Тепловизионный прицел Pulsar THERMION XM50</name>
<description></description>
</offer>
<offer id="890" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/pulsar_thermion_xp38.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>415000</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/186/18623533a9a367de5cb0d0da91260931.png</picture>
<vendor>Pulsar</vendor>
<name>Тепловизионный прицел Pulsar THERMION XP38</name>
<description></description>
</offer>
<offer id="891" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/pulsar_thermion_xp50.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>499900</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/b68/b68c69d5ded5312892be028cbb17544f.png</picture>
<vendor>Pulsar</vendor>
<name>Тепловизионный прицел Pulsar THERMION XP50</name>
<description></description>
</offer>
<offer id="894" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/infiray_xeye_e3m.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>94900</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/b17/b179fc275d17f8af921ca234bdd1dd3d.png</picture>
<vendor>InfiRay</vendor>
<name>Тепловизионный монокуляр InfiRay Xeye E3m</name>
<description></description>
</offer>
<offer id="895" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_monokulyary/nochnoy_monokulyar_firefield_vigilance.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12260</price>
<currencyId>RUB</currencyId>
<categoryId>87</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/05c/05c17761615dcb905a7e0ad882681624.jpg</picture>
<vendor>Firefield</vendor>
<name>Ночной монокуляр FireField Vigilance</name>
<description></description>
</offer>
<offer id="896" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_monokulyary/firefield_n_vader.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>14340</price>
<currencyId>RUB</currencyId>
<categoryId>87</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/65c/65c4ed3a095f5947733837991dd4ba3f.jpg</picture>
<vendor>Firefield</vendor>
<name>Ночной монокуляр FireField N-Vader 3-9x</name>
<description></description>
</offer>
<offer id="899" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_nasadki/cono_nightseer_ns335c.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>239000</price>
<currencyId>RUB</currencyId>
<categoryId>75</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/dac/dacc2252767d3d2724b02289d6c49e82.jpg</picture>
<vendor>CONO</vendor>
<name>Тепловизионная насадка CONO NightSeer NS335C</name>
<description></description>
</offer>
<offer id="900" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_nasadki/cono_nightseer_ns350c.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>289900</price>
<currencyId>RUB</currencyId>
<categoryId>75</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/69b/69b184699d2fc810758a56f82f571f61.jpg</picture>
<vendor>CONO</vendor>
<name>Тепловизионная насадка CONO NightSeer NS350C</name>
<description></description>
</offer>
<offer id="901" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_binokli/dipol_tg_22.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>370000</price>
<currencyId>RUB</currencyId>
<categoryId>73</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/436/4363401183a7cf1d0d1e6c28a9df5007.jpg</picture>
<vendor>Диполь</vendor>
<name>Тепловизионные очки Dipol TG-22</name>
<description></description>
</offer>
<offer id="902" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/cono_nightseer_ns350r_s_krepleniem_weaver.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>259000</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/041/041b8c0f94f0b8e9549f273db164cdea.jpg</picture>
<vendor>CONO</vendor>
<name>Тепловизионный прицел CONO NightSeer NS350R с креплением Weaver</name>
<description></description>
</offer>
<offer id="903" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_binokli/dipol_d212_sl_6x.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>43000</price>
<currencyId>RUB</currencyId>
<categoryId>88</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/e76/e765e8498fb5eb4b82c227a08ad64bd6.jpg</picture>
<vendor>Диполь</vendor>
<name>Ночной бинокль Dipol D212 SL (6x)</name>
<description></description>
</offer>
<offer id="904" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_ochki/nochnye_ochki_psevdobinokulyarnye_shvabe_pn_14k.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>89900</price>
<currencyId>RUB</currencyId>
<categoryId>86</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/2bd/2bd1125441bbddea8ad479cd8eea6e11.jpg</picture>
<vendor>Швабе</vendor>
<name>Ночные очки псевдобинокулярные Швабе ПН-14К зеленый люминофор</name>
<description></description>
</offer>
<offer id="906" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/sturman_le_032.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12990</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/016/01699c488c6ebacd03fb9fd6cb2bfaac.JPG</picture>
<vendor>Sturman</vendor>
<name>Дальномер Sturman LE-032</name>
<description></description>
</offer>
<offer id="907" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_pritsely/belomo_nv_s_17m.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>146431</price>
<currencyId>RUB</currencyId>
<categoryId>78</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/d10/d10ce38159bf76cad83f999b16cf2b16.jpg</picture>
<vendor>БелОМО</vendor>
<name>Ночной прицел БелОМО NV/S-17M</name>
<description></description>
</offer>
<offer id="908" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_pritsely/zenit_np_260_mil_dot_parabola.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>69900</price>
<currencyId>RUB</currencyId>
<categoryId>78</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/8a8/8a84fa24f6fda345220ef17260e75db1.jpg</picture>
<vendor>Zenit</vendor>
<name>Ночной прицел Zenit NP-260 Mil-Dot + парабола</name>
<description></description>
</offer>
<offer id="909" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_binokli/farvision_bdn_9s_den_noch.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>379000</price>
<currencyId>RUB</currencyId>
<categoryId>88</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/626/626d219622e420fd3e40aee01a5618a9.jpg</picture>
<vendor>Farvision</vendor>
<name>Бинокль Farvision БДН-9С День-Ночь</name>
<description></description>
</offer>
<offer id="910" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_binokli/farvision_bdn_9_den_noch.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>359000</price>
<currencyId>RUB</currencyId>
<categoryId>88</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/6c6/6c632309a75452ac91bc07aef32dbea8.jpg</picture>
<vendor>Farvision</vendor>
<name>Бинокль Farvision БДН-9 День-Ночь</name>
<description></description>
</offer>
<offer id="911" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_monokulyary/romz_nzt_36m2_nv_mini_ii_.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3600</price>
<currencyId>RUB</currencyId>
<categoryId>87</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/78d/78d98ece98561359e00f01dc13bc0695.jpg</picture>
<vendor>РОМЗ</vendor>
<name>Ночной монокуляр РОМЗ НЗТ-36М2 (NV mini II)&amp;#8203;</name>
<description></description>
</offer>
<offer id="912" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_ochki/belomo_nv_g_14_pok_2_plus.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>230000</price>
<currencyId>RUB</currencyId>
<categoryId>86</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/72b/72b7ef249d5fcaa3ac3b3431f34fc120.jpg</picture>
<vendor>БелОМО</vendor>
<name>Ночные очки БелОМО NV/G-14 (пок.2+)</name>
<description></description>
</offer>
<offer id="913" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_ochki/belomo_nv_g_16m_2_plus.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>175000</price>
<currencyId>RUB</currencyId>
<categoryId>86</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/4d9/4d970a4ec6d0f6974fc0c9f2b3e9afa4.jpg</picture>
<vendor>БелОМО</vendor>
<name>Ночные очки БелОМО NV/G-16M (2+)</name>
<description></description>
</offer>
<offer id="914" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_ochki/shvabe_pn_14k_bw_pok_2_plus.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>105000</price>
<currencyId>RUB</currencyId>
<categoryId>86</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/fae/fae58d915c4f9a736119911dced3fe47.jpg</picture>
<vendor>Швабе</vendor>
<name>Ночные очки Швабе ПН-14К/bw (пок. 2+) черно-белый люминофор</name>
<description></description>
</offer>
<offer id="915" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_binokli/atn_binox_hd_4_16x.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>50900</price>
<currencyId>RUB</currencyId>
<categoryId>88</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/7bb/7bb21a959dcab6f0ae31dca5d5918375.png</picture>
<vendor>ATN</vendor>
<name>Ночной цифровой бинокль ATN BinoX-HD 4-16X</name>
<description></description>
</offer>
<offer id="916" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/pulsar_trail_xp38.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>365000</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/0f5/0f5c8112701eb96f71d5844af17d5f92.png</picture>
<vendor>Pulsar</vendor>
<name>Тепловизионный прицел Pulsar Trail XP38</name>
<description></description>
</offer>
<offer id="917" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/pulsar_trail_xq38.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>290000</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/701/701ae58ba49f682ce1e632dddda73ee5.png</picture>
<vendor>Pulsar</vendor>
<name>Тепловизионный прицел Pulsar Trail XQ38</name>
<description></description>
</offer>
<offer id="918" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/pulsar_trail_xq50.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>335000</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/b9a/b9a04ad71927b3a3ffe761d5412af043.png</picture>
<vendor>Pulsar</vendor>
<name>Тепловизионный прицел Pulsar Trail XQ50</name>
<description></description>
</offer>
<offer id="919" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/pulsar_trail_x50.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>420000</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/d15/d15a3a58f57789ff70c694e79a7b7229.png</picture>
<vendor>Pulsar</vendor>
<name>Тепловизионный прицел Pulsar Trail XP50</name>
<description></description>
</offer>
<offer id="921" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/pulsar_trail_lrf_xq38.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>330000</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/79c/79ca9442fda84b703da1dfdc9880098f.png</picture>
<vendor>Pulsar</vendor>
<name>Тепловизионный прицел Pulsar Trail LRF XQ38</name>
<description></description>
</offer>
<offer id="922" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/pulsar_trail_lrf_xq50.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>349000</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/f3e/f3eb40bf6183d4d058505e95989f8aaf.png</picture>
<vendor>Pulsar</vendor>
<name>Тепловизионный прицел Pulsar Trail LRF XQ50</name>
<description></description>
</offer>
<offer id="923" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/pulsar_trail_lrf_xp38.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>374141</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/453/453dfd30c5b7e3fcea1ccda0fed312bc.png</picture>
<vendor>Pulsar</vendor>
<name>Тепловизионный прицел Pulsar Trail LRF XP38</name>
<description></description>
</offer>
<offer id="924" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/pulsar_trail_lrf_xp50.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>485000</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/704/704652e3e777291c5c92c6cfc88aeccd.jpg</picture>
<vendor>Pulsar</vendor>
<name>Тепловизионный прицел Pulsar Trail LRF XP50</name>
<description></description>
</offer>
<offer id="926" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/atn_thor_lt_3_6x.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>575900</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/54a/54ab96e3f7ef3a6bf5a0704d16d7d66b.png</picture>
<vendor>ATN</vendor>
<name>Тепловизионный прицел ATN ThOR LT 3-6X</name>
<description></description>
</offer>
<offer id="950" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/atn_thor_hd_384_1_25_5kh.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>336500</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/d3c/d3cd74b459f9136be211ce9b96379c5c.png</picture>
<vendor>ATN</vendor>
<name>Тепловизионный прицел ATN ThOR HD 384 1.25-5х</name>
<description></description>
</offer>
<offer id="951" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_binokli/fortuna_general_binocular_3b_korpus_bez_obektiva.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>309900</price>
<currencyId>RUB</currencyId>
<categoryId>119</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/23d/23d11de59a6fb862a6049d4110af1013.jpg</picture>
<vendor>FORTUNA</vendor>
<name>Тепловизионные очки FORTUNA GENERAL BINOCULAR 3B (корпус без объектива)</name>
<description></description>
</offer>
<offer id="968" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/venator_le_032_range_finder.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>13650</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/5ae/5ae9b007201464f8316d4a67b4419902.jpg</picture>
<vendor>Dedal</vendor>
<name>Дальномер Venator LE-032 Range Finder</name>
<description></description>
</offer>
<offer id="976" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/carl_zeiss_victory_10x56_rf_.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>239990</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/9fb/9fb1f435734b0b0c9ec044e9e68d2033.jpg</picture>
<vendor>Carl Zeiss</vendor>
<name>Дальномер Carl Zeiss Victory RF 10x56</name>
<description></description>
</offer>
<offer id="977" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/leupold_rx_1600i_tbr_w_dna_6x22_black_gray.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>50690</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/3e1/3e16b9a2089700ec1a968bec1e260fbf.jpg</picture>
<vendor>Leupold</vendor>
<name>Дальномер Leupold RX-1600i DNA</name>
<description></description>
</offer>
<offer id="978" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/leica_rangemaster_crf_r_2400.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>46000</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/a55/a55e03d07c2c18dc6106ace599e31ca0.jpg</picture>
<vendor>Leica</vendor>
<name>Дальномер Leica Rangemaster CRF-R 2400</name>
<description></description>
</offer>
<offer id="984" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/atn_mars_4_384_1_25_5x.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>279200</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/43b/43b0d49eb1ca43319ecb7ecf4bba12a9.png</picture>
<vendor>ATN</vendor>
<name>Тепловизионный прицел ATN MARS 4 384 1.25-5x</name>
<description></description>
</offer>
<offer id="985" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/atn_mars_4_384_2_8x.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>393600</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/1d6/1d6f87bb0e9d230c1216be452557e20d.jpg</picture>
<vendor>ATN</vendor>
<name>Тепловизионный прицел ATN MARS 4 384 2-8x</name>
<description></description>
</offer>
<offer id="986" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/atn_mars_4_384_4_5_18x.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>329000</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/966/96625ae1667fe4e2f46b39a82c9bc6e8.jpg</picture>
<vendor>ATN</vendor>
<name>Тепловизионный прицел ATN MARS 4 384 4.5-18x</name>
<description></description>
</offer>
<offer id="1061" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/atn_mars_4_384_7_28x.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>543800</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/7e2/7e240e70e734647a7d2e9d289cde9ced.png</picture>
<vendor>ATN</vendor>
<name>Тепловизионный прицел ATN MARS 4 384 7-28x</name>
<description></description>
</offer>
<offer id="1062" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/atn_mars_hd384_1_25_5x.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>159900</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/1ce/1ce7a3a365657c61598104c01bc6ba3c.png</picture>
<vendor>ATN</vendor>
<name>Тепловизионный  прицел ATN MARS HD 384 1.25-5x</name>
<description></description>
</offer>
<offer id="1066" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/ik_osvetiteli/atn_ir850_pro.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>10700</price>
<currencyId>RUB</currencyId>
<categoryId>92</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/520/520d2ecf61b590ccddaffdaad9e95e58.jpg</picture>
<vendor>ATN</vendor>
<name>Инфракрасный фонарь ATN IR850 PRO</name>
<description></description>
</offer>
<offer id="1130" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_binokli/pulsar_edge_gs_2_7kh20.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>32800</price>
<currencyId>RUB</currencyId>
<categoryId>88</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/05e/05effcb1995256390625d171518647d9.jpg</picture>
<vendor>Pulsar</vendor>
<name>Ночной бинокль Pulsar EDGE GS 2.7х20</name>
<description></description>
</offer>
<offer id="1131" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_binokli/pulsar_edge_gs_2_7kh20_l.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>36030</price>
<currencyId>RUB</currencyId>
<categoryId>88</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/84b/84b714a2f9a8849f6bcff0305d86a158.jpg</picture>
<vendor>Pulsar</vendor>
<name>Ночной бинокль Pulsar EDGE GS 2.7х20 L</name>
<description></description>
</offer>
<offer id="1132" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_binokli/yukon_tracker_3x42.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>26800</price>
<currencyId>RUB</currencyId>
<categoryId>88</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/478/478700e41cb056f8d23f00580e5886d3.png</picture>
<vendor>Yukon</vendor>
<name>Ночной бинокль NVB Yukon Tracker 3x42</name>
<description></description>
</offer>
<offer id="1133" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_binokli/nochnoy_binokl_nvb_yukon_tracker_2kh24_lt.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>28480</price>
<currencyId>RUB</currencyId>
<categoryId>88</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/acc/acc6d7e6f412d7018ed37ce884f84029.png</picture>
<vendor>Yukon</vendor>
<name>Ночной бинокль NVB Yukon Tracker 2х24 LT</name>
<description></description>
</offer>
<offer id="1134" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_binokli/yukon_tracker_2x24_lt_wp.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>27200</price>
<currencyId>RUB</currencyId>
<categoryId>88</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/70c/70cb10ab377582d8ed15daa1dd3f24b8.jpg</picture>
<vendor>Yukon</vendor>
<name>Ночной бинокль NVB Yukon Tracker 2x24 LT WP</name>
<description></description>
</offer>
<offer id="1265" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nonye_nasadki/cot_nm_80m.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>117000</price>
<currencyId>RUB</currencyId>
<categoryId>85</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/5dc/5dcb78e4da653079efb5955bd22ded23.jpg</picture>
<vendor>СОТ</vendor>
<name>Ночная насадка СОТ NM-80M</name>
<description></description>
</offer>
<offer id="1266" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nonye_nasadki/cot_nm_80m_hr.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>132000</price>
<currencyId>RUB</currencyId>
<categoryId>85</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/3b2/3b243061b10d0a8cbb5d2ad197df42cc.jpg</picture>
<vendor>СОТ</vendor>
<name>Ночная насадка СОТ NM-80M HR</name>
<description></description>
</offer>
<offer id="1267" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nonye_nasadki/cot_nm_80m_hr_k.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>137000</price>
<currencyId>RUB</currencyId>
<categoryId>85</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/652/652994943995264cf9c858234b2c32d2.jpg</picture>
<vendor>СОТ</vendor>
<name>Ночная насадка СОТ NM-80M HR (K)</name>
<description></description>
</offer>
<offer id="1268" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nonye_nasadki/cot_nm_80m_bw.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>124000</price>
<currencyId>RUB</currencyId>
<categoryId>85</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/e56/e5658c854a3d7b35717c36464a922ea1.jpg</picture>
<vendor>СОТ</vendor>
<name>Ночная насадка СОТ NM-80M BW</name>
<description></description>
</offer>
<offer id="1269" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nonye_nasadki/cot_nm_80m_hr_bw.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>139000</price>
<currencyId>RUB</currencyId>
<categoryId>85</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/a73/a732aa06df3aad4b1ab86e7244e71c1b.jpg</picture>
<vendor>СОТ</vendor>
<name>Ночная насадка СОТ NM-80М HR/BW</name>
<description></description>
</offer>
<offer id="1270" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nonye_nasadki/cot_nm_80m_hr_bw_k.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>144000</price>
<currencyId>RUB</currencyId>
<categoryId>85</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/afc/afc59d67b6150dd490c467529569f4e2.jpg</picture>
<vendor>СОТ</vendor>
<name>Ночная насадка СОТ NM-80М HR/BW (К)</name>
<description></description>
</offer>
<offer id="1272" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nonye_nasadki/cot_nm_80m_3v.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>172000</price>
<currencyId>RUB</currencyId>
<categoryId>85</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/85d/85d963a87c824757f4e6458d72a27d75.jpg</picture>
<vendor>СОТ</vendor>
<name>Ночная насадка СОТ NM-80М (3В)</name>
<description></description>
</offer>
<offer id="1437" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/guide_ir510_n2_wifi.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>139000</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/b7c/b7cc631cf4d5592257f0431719e9c519.jpg</picture>
<vendor>GUIDE</vendor>
<name>Тепловизионный монокуляр Guide IR510 N2 WIFI</name>
<description></description>
</offer>
<offer id="1447" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_monokulyary/cot_nvm_14.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>125000</price>
<currencyId>RUB</currencyId>
<categoryId>87</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/0b0/0b03f42b89afadf1a4343bc77f193d54.jpg</picture>
<vendor>СОТ</vendor>
<name>Ночной монокуляр СОТ NVM-14</name>
<description></description>
</offer>
<offer id="1448" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_monokulyary/cot_nvm_14_bw_cherno_beloe_svechenie.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>132000</price>
<currencyId>RUB</currencyId>
<categoryId>87</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/6c4/6c42b5c853ec1d6e6140ecee01befea1.jpg</picture>
<vendor>СОТ</vendor>
<name>Ночной монокуляр СОТ NVM-14 BW</name>
<description></description>
</offer>
<offer id="1449" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_monokulyary/cot_nvm_14_hr.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>137000</price>
<currencyId>RUB</currencyId>
<categoryId>87</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/d07/d07a30fd064e75be21394afc9d8af595.jpg</picture>
<vendor>СОТ</vendor>
<name>Ночной монокуляр СОТ NVM-14 HR</name>
<description></description>
</offer>
<offer id="1450" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_monokulyary/cot_nvm_14_hr_bw.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>144000</price>
<currencyId>RUB</currencyId>
<categoryId>87</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/07a/07af98f42c809ddf2bcb5ffb97ab4c0b.jpg</picture>
<vendor>СОТ</vendor>
<name>Ночной монокуляр СОТ NVM-14 HR BW</name>
<description></description>
</offer>
<offer id="1451" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_monokulyary/cot_nvm_14_bc_3v.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>183000</price>
<currencyId>RUB</currencyId>
<categoryId>87</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/8e3/8e311a7768d0f6e29f9719de0d290f1d.jpg</picture>
<vendor>СОТ</vendor>
<name>Ночной монокуляр СОТ NVM-14 BC (3В)</name>
<description></description>
</offer>
<offer id="1452" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_monokulyary/cot_nvm_14_bc_3v_bw.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>190000</price>
<currencyId>RUB</currencyId>
<categoryId>87</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/ca1/ca1e1d28fef1c7590ae33888f6bfa99a.jpg</picture>
<vendor>СОТ</vendor>
<name>Ночной монокуляр СОТ NVM-14 BC (3В) BW</name>
<description></description>
</offer>
<offer id="1453" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_monokulyary/cot_nvm_14_bc_3v_eop_pr_vo_ooo_fep.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>215000</price>
<currencyId>RUB</currencyId>
<categoryId>87</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/8dc/8dcddc9a0907b5335614d1fda8e03b12.jpg</picture>
<vendor>СОТ</vendor>
<name>Ночной монокуляр СОТ NVM-14 BC (3A) ЭОП пр-во ООО ФЭП</name>
<description></description>
</offer>
<offer id="1455" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/ik_osvetiteli/dipol_l2_weaver_850nm.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>16100</price>
<currencyId>RUB</currencyId>
<categoryId>92</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/f8b/f8bf4c4637856b8131f726b8710a4947.jpg</picture>
<vendor>Диполь</vendor>
<name>ИК-осветитель Диполь L2 Weaver 850 нм</name>
<description></description>
</offer>
<offer id="1456" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/ik_osvetiteli/bars_ik_l_808nm.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9450</price>
<currencyId>RUB</currencyId>
<categoryId>92</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/fa9/fa90b34b96b6050f1f50354e0a9138bc.jpg</picture>
<vendor>Барс</vendor>
<name>Лазерный осветитель Барс ИК-L 808нм</name>
<description></description>
</offer>
<offer id="1490" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_monokulyary/cot_nvm_14_bc_3a_bw_eop_pr_vo_ooo_fep.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>222000</price>
<currencyId>RUB</currencyId>
<categoryId>87</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/e69/e690930890b2e37c46f32fe9b67e4634.jpg</picture>
<vendor>СОТ</vendor>
<name>Ночной монокуляр СОТ NVM-14 BC (3A) BW ЭОП пр-во ООО ФЭП</name>
<description></description>
</offer>
<offer id="1491" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_monokulyary/cot_nvm_14_bc_3a.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>258000</price>
<currencyId>RUB</currencyId>
<categoryId>87</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/d7b/d7b862f6fd2c30483baeabd9470eb32a.jpg</picture>
<vendor>СОТ</vendor>
<name>Ночной монокуляр СОТ NVM-14 BC (3A)</name>
<description></description>
</offer>
<offer id="1492" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_monokulyary/cot_nvm_14_bc_3a_bw_cherno_beloe_svechenie.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>272000</price>
<currencyId>RUB</currencyId>
<categoryId>87</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/372/3728987452635c805b00b6c3d78ca9eb.jpg</picture>
<vendor>СОТ</vendor>
<name>Ночной монокуляр СОТ NVM-14 BC (3A) BW</name>
<description></description>
</offer>
<offer id="1493" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_ochki/sot_cvs_7.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>139000</price>
<currencyId>RUB</currencyId>
<categoryId>86</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/fb7/fb73c44c73800f369f9e6a36dc3acb5d.jpg</picture>
<vendor>СОТ</vendor>
<name>Ночные очки СОТ CVS-7</name>
<description></description>
</offer>
<offer id="1494" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_ochki/sot_cvs_7_3b.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>184000</price>
<currencyId>RUB</currencyId>
<categoryId>86</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/55a/55a8aa7b0a11a5a4906b80b0bfc61a5b.jpg</picture>
<vendor>СОТ</vendor>
<name>Ночные очки СОТ CVS-7 (3B)</name>
<description></description>
</offer>
<offer id="1495" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_ochki/sot_cvs_7_3a.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>267000</price>
<currencyId>RUB</currencyId>
<categoryId>86</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/b7d/b7d80c57323aacdae219a36ecee5a62f.jpg</picture>
<vendor>СОТ</vendor>
<name>Ночные очки СОТ CVS-7 (3A)</name>
<description></description>
</offer>
<offer id="1496" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_ochki/sot_cvs_7_hr.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>150000</price>
<currencyId>RUB</currencyId>
<categoryId>86</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/440/440fefca555f7d309852873e6442c064.jpg</picture>
<vendor>СОТ</vendor>
<name>Ночные очки СОТ CVS-7 HR</name>
<description></description>
</offer>
<offer id="1499" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_ochki/sot_nv_1_5m_a.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>124000</price>
<currencyId>RUB</currencyId>
<categoryId>86</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/228/22815c65cc106b541b95e93acacf42b1.png</picture>
<vendor>СОТ</vendor>
<name>Ночные очки СОТ NV/1-5М (A)</name>
<description></description>
</offer>
<offer id="1517" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_binokli/cot_nvb_6_bc.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>130000</price>
<currencyId>RUB</currencyId>
<categoryId>88</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/3d9/3d98c0d37a98740b6217dd85c015e0e6.png</picture>
<vendor>СОТ</vendor>
<name>Ночной бинокль СОТ NVB-6 BC</name>
<description></description>
</offer>
<offer id="1518" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_binokli/cot_nvb_6_hr_bc.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>139000</price>
<currencyId>RUB</currencyId>
<categoryId>88</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/e4d/e4d96ebdcacda09dcf1baecb20a63027.jpg</picture>
<vendor>СОТ</vendor>
<name>Ночной бинокль СОТ NVB-6 HR/BC</name>
<description></description>
</offer>
<offer id="1519" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_binokli/cot_nvb_6_bc_3v.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>173000</price>
<currencyId>RUB</currencyId>
<categoryId>88</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/939/939be152a61a3e9dd16f0f0202a4e189.jpg</picture>
<vendor>СОТ</vendor>
<name>Ночной бинокль СОТ NVB-6 BC (3В)</name>
<description></description>
</offer>
<offer id="1520" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_binokli/cot_nvb_6_bc_3a.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>208000</price>
<currencyId>RUB</currencyId>
<categoryId>88</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/5e7/5e792023322279245945d51ef6afc807.png</picture>
<vendor>СОТ</vendor>
<name>Ночной бинокль СОТ NVB-6 BC (3А)</name>
<description></description>
</offer>
<offer id="1521" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_binokli/cot_nvb_6_bc_3a_k.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>253000</price>
<currencyId>RUB</currencyId>
<categoryId>88</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/7d5/7d5b8c3b054b4cad39e3c4dc2b29bafa.png</picture>
<vendor>СОТ</vendor>
<name>Ночной бинокль СОТ NVB-6 BC (3А/К)</name>
<description></description>
</offer>
<offer id="1522" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_monokulyary/cot_spark_f_35.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>39000</price>
<currencyId>RUB</currencyId>
<categoryId>87</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/21f/21fad2011db433c1418c6eb4d9b91a20.jpg</picture>
<vendor>СОТ</vendor>
<name>Ночной монокуляр СОТ SPARK f/35</name>
<description></description>
</offer>
<offer id="1523" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/ik_osvetiteli/cot_ir_120_850_bez_kronshteyna.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6000</price>
<currencyId>RUB</currencyId>
<categoryId>92</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/a7c/a7cb8c5705f9359da3de1a5338cbb04d.jpg</picture>
<vendor>СОТ</vendor>
<name>ИК-осветитель диодный СОТ IR-120 (850) без кронштейна</name>
<description></description>
</offer>
<offer id="1559" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/guide_ir_ts445.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>229000</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/b3c/b3c8c59fa56140a541e1e96d43690d68.jpg</picture>
<vendor>GUIDE</vendor>
<name>Тепловизионный прицел Guide IR TS445</name>
<description></description>
</offer>
<offer id="1561" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_pritsely/sot_x3_standart.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>48500</price>
<currencyId>RUB</currencyId>
<categoryId>78</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/1b5/1b51d7007edaaedcf51152e75d230fed.jpg</picture>
<vendor>СОТ</vendor>
<name>Ночной прицел СОТ X3 Стандарт</name>
<description></description>
</offer>
<offer id="1562" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_pritsely/sot_x2.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>119000</price>
<currencyId>RUB</currencyId>
<categoryId>78</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/fbb/fbb15fda28a8b63a38d6522d0948758b.jpg</picture>
<vendor>СОТ</vendor>
<name>Ночной прицел СОТ X2</name>
<description></description>
</offer>
<offer id="1563" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_pritsely/sot_x2_bw.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>119000</price>
<currencyId>RUB</currencyId>
<categoryId>78</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/91d/91db5672c76af209c955183bc9e69fec.jpg</picture>
<vendor>СОТ</vendor>
<name>Ночной прицел СОТ X2 BW</name>
<description></description>
</offer>
<offer id="1564" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_pritsely/sot_x2_3b.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>155000</price>
<currencyId>RUB</currencyId>
<categoryId>78</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/089/089e3769622bc5af7eeee343feb5c9e4.jpg</picture>
<vendor>СОТ</vendor>
<name>Ночной прицел СОТ X2 (3B)</name>
<description></description>
</offer>
<offer id="1565" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_pritsely/sot_x2_3b_bw.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>155000</price>
<currencyId>RUB</currencyId>
<categoryId>78</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/885/885764760d1e374c02f1bffd2d076a62.jpg</picture>
<vendor>СОТ</vendor>
<name>Ночной прицел СОТ X2 (3B) BW</name>
<description></description>
</offer>
<offer id="1567" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_pritsely/sot_x4.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>125000</price>
<currencyId>RUB</currencyId>
<categoryId>78</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/fce/fce92a415c70e043d9d6896648e72a48.jpg</picture>
<vendor>СОТ</vendor>
<name>Ночной прицел СОТ X4</name>
<description></description>
</offer>
<offer id="1568" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_pritsely/sot_x4_bw.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>125000</price>
<currencyId>RUB</currencyId>
<categoryId>78</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/095/095dc2dd9d96173c12df31bd1cbea5b9.jpg</picture>
<vendor>СОТ</vendor>
<name>Ночной прицел СОТ X4 BW</name>
<description></description>
</offer>
<offer id="1569" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_pritsely/sot_x4_3b.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>160000</price>
<currencyId>RUB</currencyId>
<categoryId>78</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/ace/ace57e8ed017dfc8b7d5d96d1dd58346.jpg</picture>
<vendor>СОТ</vendor>
<name>Ночной прицел СОТ X4 (3B)</name>
<description></description>
</offer>
<offer id="1570" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_pritsely/sot_x4_3b_bw.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>160000</price>
<currencyId>RUB</currencyId>
<categoryId>78</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/144/144ad4ab0cd223dc731905f1dda921e6.jpg</picture>
<vendor>СОТ</vendor>
<name>Ночной прицел СОТ X4 (3B) BW</name>
<description></description>
</offer>
<offer id="1572" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_pritsely/sot_x4_pro_bc.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>148000</price>
<currencyId>RUB</currencyId>
<categoryId>78</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/a59/a59839cfcd18c7eb40bba3fa23964fde.jpg</picture>
<vendor>СОТ</vendor>
<name>Ночной прицел СОТ X4 PRO-BC</name>
<description></description>
</offer>
<offer id="1573" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_pritsely/sot_x4_pro_bc_bw.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>155000</price>
<currencyId>RUB</currencyId>
<categoryId>78</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/233/2333cd0a24402593fe5273d69b455b25.jpg</picture>
<vendor>СОТ</vendor>
<name>Ночной прицел СОТ X4 PRO-BC BW</name>
<description></description>
</offer>
<offer id="1574" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_pritsely/sot_x4_pro_bc_hr.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>162000</price>
<currencyId>RUB</currencyId>
<categoryId>78</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/7e4/7e4162523effd018bbf57ed6623f1d0e.jpg</picture>
<vendor>СОТ</vendor>
<name>Ночной прицел СОТ X4 PRO-BC HR</name>
<description></description>
</offer>
<offer id="1575" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_pritsely/sot_x4_pro_bc_3b.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>193000</price>
<currencyId>RUB</currencyId>
<categoryId>78</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/2f0/2f0f298032da574f720642572ce15c4f.jpg</picture>
<vendor>СОТ</vendor>
<name>Ночной прицел СОТ X4 PRO-BC (3B)</name>
<description></description>
</offer>
<offer id="1576" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_pritsely/sot_x4_pro_bc_3b_bw.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>200000</price>
<currencyId>RUB</currencyId>
<categoryId>78</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/043/04364253fa32830d9f1ff2475e53ae81.jpg</picture>
<vendor>СОТ</vendor>
<name>Ночной прицел СОТ X4 PRO-BC (3B) BW</name>
<description></description>
</offer>
<offer id="1577" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_pritsely/sot_x4_pro_bc_3a.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>299000</price>
<currencyId>RUB</currencyId>
<categoryId>78</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/6e1/6e1aac04c5de0660c6f6ca77d9154156.jpg</picture>
<vendor>СОТ</vendor>
<name>Ночной прицел СОТ X4 PRO-BC (3A)</name>
<description></description>
</offer>
<offer id="1578" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_pritsely/sot_x4_pro_bc_3a_bw.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>314000</price>
<currencyId>RUB</currencyId>
<categoryId>78</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/bdc/bdcd790d69ab2d7cd191f9b3407202d2.jpg</picture>
<vendor>СОТ</vendor>
<name>Ночной прицел СОТ X4 PRO-BC (3A) BW</name>
<description></description>
</offer>
<offer id="1579" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_pritsely/sot_x6_pro_bc_a.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>156000</price>
<currencyId>RUB</currencyId>
<categoryId>78</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/dd3/dd3ee487b710c3056fcf30b7f1b51908.jpg</picture>
<vendor>СОТ</vendor>
<name>Ночной прицел СОТ X6 PRO-BC (A)</name>
<description></description>
</offer>
<offer id="1580" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_pritsely/sot_x6_pro_bc_a_bw.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>163000</price>
<currencyId>RUB</currencyId>
<categoryId>78</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/c07/c073c2910e4188c45705d04f4f00b7bc.jpg</picture>
<vendor>СОТ</vendor>
<name>Ночной прицел СОТ X6 PRO-BC (A) BW</name>
<description></description>
</offer>
<offer id="1581" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_pritsely/sot_x6_pro_bc_3b.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>201000</price>
<currencyId>RUB</currencyId>
<categoryId>78</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/ef5/ef5546bcd7f6dfe99756c7ab03ab19e9.jpg</picture>
<vendor>СОТ</vendor>
<name>Ночной прицел СОТ X6 PRO-BC (3B)</name>
<description></description>
</offer>
<offer id="1582" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_pritsely/sot_x6_pro_bc_3b_bw.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>208000</price>
<currencyId>RUB</currencyId>
<categoryId>78</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/a86/a863dae6f4ff3032f0248b585658764e.jpg</picture>
<vendor>СОТ</vendor>
<name>Ночной прицел СОТ X6 PRO-BC (3B) BW</name>
<description></description>
</offer>
<offer id="1583" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_pritsely/sot_x6_pro_bc_3a.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>306000</price>
<currencyId>RUB</currencyId>
<categoryId>78</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/503/5034e6b7fa8a0c3d868d6d6a7fa0eb0b.jpg</picture>
<vendor>СОТ</vendor>
<name>Ночной прицел СОТ X6 PRO-BC (3A)</name>
<description></description>
</offer>
<offer id="1584" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_pritsely/sot_x6_pro_bc_3a_bw.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>320000</price>
<currencyId>RUB</currencyId>
<categoryId>78</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/4e4/4e47118c0e1d01836174f7a0ef77ca55.jpg</picture>
<vendor>СОТ</vendor>
<name>Ночной прицел СОТ X6 PRO-BC (3A) BW</name>
<description></description>
</offer>
<offer id="1590" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_ochki/sot_nv_1_5m_hr_a.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>134000</price>
<currencyId>RUB</currencyId>
<categoryId>86</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/1f0/1f0e186a1a182427c86bb3b413040fae.png</picture>
<vendor>СОТ</vendor>
<name>Ночные очки СОТ NV/1-5М HR (A)</name>
<description></description>
</offer>
<offer id="1591" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_ochki/sot_nv_1_5m_3b.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>170000</price>
<currencyId>RUB</currencyId>
<categoryId>86</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/1da/1da55cfc84a4f2ea35ac99d672594733.png</picture>
<vendor>СОТ</vendor>
<name>Ночные очки СОТ NV/1-5М (3B)</name>
<description></description>
</offer>
<offer id="1597" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/guide_ir510_n1.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>89000</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/d57/d572dfca0d371d5d5a77d763013526a1.jpg</picture>
<vendor>GUIDE</vendor>
<name>Тепловизионный монокуляр Guide IR510 N1</name>
<description></description>
</offer>
<offer id="1598" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/guide_ir510_n1_wifi.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>99000</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/bba/bbad4aae27ecc7f02c434df2209adef5.jpg</picture>
<vendor>GUIDE</vendor>
<name>Тепловизионный монокуляр Guide IR510 N1 WIFI</name>
<description></description>
</offer>
<offer id="1599" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_nasadki/guide_ta435.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>279900</price>
<currencyId>RUB</currencyId>
<categoryId>75</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/27d/27d99ec745a22c139b124c3fbb78e701.png</picture>
<vendor>GUIDE</vendor>
<name>Тепловизионная насадка Guide TA435</name>
<description></description>
</offer>
<offer id="1600" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/guide_trackir_50mm.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>159900</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/e55/e55d0331368f047bed8350c21312ed0d.jpg</picture>
<vendor>GUIDE</vendor>
<name>Тепловизионный монокуляр Guide TrackIR 50mm</name>
<description></description>
</offer>
<offer id="1601" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/guide_trackir_35mm.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>139900</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/805/8053812b84c68e3fcf35c888def4537e.jpg</picture>
<vendor>GUIDE</vendor>
<name>Тепловизионный монокуляр Guide TrackIR 35mm</name>
<description></description>
</offer>
<offer id="1602" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/guide_trackir_25mm.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>114900</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/4a5/4a5457c0373ef2406ff83ecc436ec960.jpg</picture>
<vendor>GUIDE</vendor>
<name>Тепловизионный монокуляр Guide TrackIR 25mm</name>
<description></description>
</offer>
<offer id="1604" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/nikon_monarch_7i_vr.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>28900</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/1bd/1bd34d0dc3f8da4f97d1affea36acb07.jpg</picture>
<vendor>Nikon</vendor>
<name>Дальномер Nikon MONARCH 7i VR</name>
<description></description>
</offer>
<offer id="1605" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/nikon_prostaff_3i.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>21710</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/ecf/ecf9c0aebf2d77b4e000f116399579b3.jpg</picture>
<vendor>Nikon</vendor>
<name>Дальномер Nikon PROSTAFF 3i</name>
<description></description>
</offer>
<offer id="1606" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/nikon_forestry_pro_kit.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>28190</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/103/103f075b0daafcfbf29b83aa8ad88744.jpg</picture>
<vendor>Nikon</vendor>
<name>Дальномер Nikon Forestry Pro Kit</name>
<description></description>
</offer>
<offer id="1607" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/nikon_coolshot_80_vr.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>38490</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/22e/22eaef6ef8e5e8104d7b2ed7932a8600.jpg</picture>
<vendor>Nikon</vendor>
<name>Дальномер Nikon COOLSHOT 80 VR</name>
<description></description>
</offer>
<offer id="1608" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/dalnomer_nikon_lrf_aculon_al11.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>17090</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/290/290941a8f92daac4a870050dd152360e.jpg</picture>
<vendor>Nikon</vendor>
<name>Дальномер Nikon LRF ACULON AL11</name>
<description></description>
</offer>
<offer id="1609" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/nikon_prostaff_7i.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>37380</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/322/32235ae2c7c9a7d00bf66d2171a737ee.jpg</picture>
<vendor>Nikon</vendor>
<name>Дальномер Nikon Prostaff 7i</name>
<description></description>
</offer>
<offer id="1615" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/guide_ir510_n2.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>109000</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/afb/afbef84353dd5dd2947deeaafa90ece5.jpg</picture>
<vendor>GUIDE</vendor>
<name>Тепловизор монокуляр GUIDE IR510 N2</name>
<description></description>
</offer>
<offer id="1977" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/ik_osvetiteli/ik_fonar_nl85040dw_850_weaver.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>15600</price>
<currencyId>RUB</currencyId>
<categoryId>92</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/389/3898a185c81b22ec80aa24da3296cd16.jpg</picture>
<vendor>NAYVIS</vendor>
<name>ИК фонарь NL85040DW (850) weaver</name>
<description></description>
</offer>
<offer id="2141" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/atn_mars_4_640_1_10x.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>378300</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/265/26547a0df9940469901068889c2cb4bd.jpg</picture>
<vendor>ATN</vendor>
<name>Тепловизионный прицел ATN MARS 4 640 1-10X</name>
<description></description>
</offer>
<offer id="2142" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/atn_mars_4_640_1_5_15x.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>700680</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/0f8/0f856983d65b34158512615da422c245.jpg</picture>
<vendor>ATN</vendor>
<name>Тепловизионный прицел ATN MARS 4 640 1.5-15X</name>
<description></description>
</offer>
<offer id="2143" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/atn_mars_4_640_2_5_25x.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>685800</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/875/875295d79617cfca050dd48542a4bc5d.jpg</picture>
<vendor>ATN</vendor>
<name>Тепловизионный прицел ATN MARS 4 640 2.5-25X</name>
<description></description>
</offer>
<offer id="2144" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/atn_mars_4_640_4_40x.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>769200</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/cac/cac8b4fe573a6831e2a114319eddb793.jpg</picture>
<vendor>ATN</vendor>
<name>Тепловизионный прицел ATN MARS 4 640 4-40X</name>
<description></description>
</offer>
<offer id="2146" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_binokli/dipol_203v_2_.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>150000</price>
<currencyId>RUB</currencyId>
<categoryId>88</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/734/734382f1e48c2f99a38d0b941c825e33.jpg</picture>
<vendor>Диполь</vendor>
<name>Ночной бинокль Dipol 203В (2+)</name>
<description></description>
</offer>
<offer id="2148" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_binokli/dipol_d209_bw_2_.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>164000</price>
<currencyId>RUB</currencyId>
<categoryId>88</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/748/748ac95990622282c5eaf243e691048f.jpg</picture>
<vendor>Диполь</vendor>
<name>Ночной бинокль Dipol D209 bw (2+)</name>
<description></description>
</offer>
<offer id="2149" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_ochki/dipol_203_2_.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>135000</price>
<currencyId>RUB</currencyId>
<categoryId>86</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/042/042539f352ca1aaee0d11defd5fdd9a1.jpg</picture>
<vendor>Диполь</vendor>
<name>Ночные очки Dipol 203 (2+)</name>
<description></description>
</offer>
<offer id="2203" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/pulsar_axion_key_xm22.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>75000</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/3f0/3f00820ce3b9d75637842abef1d4dc6f.jpg</picture>
<vendor>Pulsar</vendor>
<name>Тепловизионный монокуляр Pulsar Axion Key XM22</name>
<description></description>
</offer>
<offer id="2207" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_monokulyary/pulsar_challenger_gs_2_7x50.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>19600</price>
<currencyId>RUB</currencyId>
<categoryId>87</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/da2/da28a6eb9a8ab84e1b2f005b0bcba929.jpg</picture>
<vendor>Pulsar</vendor>
<name>Ночной монокуляр Pulsar Challenger GS 2.7X50</name>
<description></description>
</offer>
<offer id="2208" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_ochki/yukon_tracker_1x24.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>27100</price>
<currencyId>RUB</currencyId>
<categoryId>86</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/189/189b9abe864f1539d1cf3f08e2215b94.jpg</picture>
<vendor>Yukon</vendor>
<name>Ночные очки Yukon Tracker 1x24</name>
<description></description>
</offer>
<offer id="2209" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_pritsely/pulsar_phantom_3x50.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>103900</price>
<currencyId>RUB</currencyId>
<categoryId>78</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/7b2/7b2086ff78defe822962408e8937e08a.jpg</picture>
<vendor>Pulsar</vendor>
<name>Ночной прицел Pulsar Phantom 3x50</name>
<description></description>
</offer>
<offer id="2210" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_pritsely/dipol_161_pro_weaver.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>39900</price>
<currencyId>RUB</currencyId>
<categoryId>78</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/fb5/fb54fa6e7f469306658bf433355f189b.jpg</picture>
<vendor>Диполь</vendor>
<name>Ночной прицел Dipol 161 PRO/WEAVER</name>
<description></description>
</offer>
<offer id="2211" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/veber_night_eagle_m35_384_wifi.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>129250</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/a2d/a2d14779639842d0a562b4bad8a8cee2.jpg</picture>
<vendor>Veber</vendor>
<name>Тепловизионный монокуляр Veber Night Eagle M35/384 WiFi</name>
<description></description>
</offer>
<offer id="2212" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/xeye_e3_max.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>157800</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/cbd/cbd9126e1615fb3d969a19535cffb325.jpg</picture>
<vendor>InfiRay</vendor>
<name>Тепловизионный монокуляр InfiRay Xeye E3 Max</name>
<description></description>
</offer>
<offer id="2213" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/xeye_e3_plus.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>139400</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/e37/e37dbe4a9752be12585caaabc19f45c4.jpg</picture>
<vendor>InfiRay</vendor>
<name>Тепловизионный монокуляр InfiRay Xeye E3 Plus</name>
<description></description>
</offer>
<offer id="2214" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/xeye_e3_pro.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>129900</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/0fa/0fa6c0e0a336382c97ea75c7523ea339.jpg</picture>
<vendor>InfiRay</vendor>
<name>Тепловизионный монокуляр InfiRay Xeye E3 Pro</name>
<description></description>
</offer>
<offer id="2215" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/xeye_e6_plus.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>220400</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/24d/24d06961088f978575f18eeafea713b1.jpg</picture>
<vendor>InfiRay</vendor>
<name>Тепловизионный монокуляр InfiRay Xeye E6 Plus</name>
<description></description>
</offer>
<offer id="2216" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/iray_xeye_e6n.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>240700</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/c84/c84aa2ad5a8beed6a54cb1d51c39c216.jpg</picture>
<vendor>iRay</vendor>
<name>Тепловизионный монокуляр iRay Xeye E6N</name>
<description></description>
</offer>
<offer id="2217" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/dipol_dtm1000r_s_lazernym_dalnomerom.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>310000</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/985/9851d484cb6a91976e35d99f1b6a5bd2.jpg</picture>
<vendor>Диполь</vendor>
<name>Тепловизионный монокуляр Dipol DTM1000R с лазерным дальномером</name>
<description></description>
</offer>
<offer id="2218" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/cono_nightseer_ns335r.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>223366</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/3b6/3b60d38de630012af65645e4ee488df8.jpg</picture>
<vendor>CONO</vendor>
<name>Тепловизионный прицел CONO NightSeer NS335R</name>
<description></description>
</offer>
<offer id="2219" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/cono_orion_ts_50.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>280000</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/08d/08dd4cd4d6a5613560ce16a1fa0f16e3.jpg</picture>
<vendor>CONO</vendor>
<name>Тепловизионный прицел CONO ORION TS 50</name>
<description></description>
</offer>
<offer id="2220" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/dedal_t2_380_hunter_lrf_v_5_1.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>675859</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/fd8/fd888877a890fa70a1ee5e2c654cda97.jpg</picture>
<vendor>Dedal</vendor>
<name>Тепловизионный прицел Dedal-T2.380 Hunter LRF v.5.1</name>
<description></description>
</offer>
<offer id="2279" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/iray_saim_scl_25.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>161900</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/f09/f09a6984b195e0dd125fb8c19673590b.jpg</picture>
<vendor>iRay</vendor>
<name>Тепловизионный прицел iRay Saim SCL 25</name>
<description></description>
</offer>
<offer id="2280" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/iray_saim_scl_35.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>188900</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/064/06409295a9edb0a2be25c96af5f835d4.jpg</picture>
<vendor>iRay</vendor>
<name>Тепловизионный прицел iRay Saim SCL 35</name>
<description></description>
</offer>
<offer id="2282" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_monokulyary/pulsar_challenger_gs_3_5x50.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>22230</price>
<currencyId>RUB</currencyId>
<categoryId>87</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/a13/a13ed832abfd574bd95c1b0cbff71cfe.jpg</picture>
<vendor>Pulsar</vendor>
<name>Ночной монокуляр Pulsar Challenger GS 3.5X50</name>
<description></description>
</offer>
<offer id="2283" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_monokulyary/pulsar_challenger_gs_4_5x60.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>24950</price>
<currencyId>RUB</currencyId>
<categoryId>87</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/08a/08ab54f7add1ee110a6e2fe73a401392.jpg</picture>
<vendor>Pulsar</vendor>
<name>Ночной монокуляр Pulsar Challenger GS 4.5X60</name>
<description></description>
</offer>
<offer id="2285" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_binokli/nochnoy_binokl_dipol_d206_pro_bw_100.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>164000</price>
<currencyId>RUB</currencyId>
<categoryId>88</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/9d1/9d100a66a9fb47bf9d93dffb3d81fc53.jpg</picture>
<vendor>Диполь</vendor>
<name>Ночной бинокль Dipol D206 PRO bw (100)</name>
<description></description>
</offer>
<offer id="2286" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_binokli/sightmark_ghost_hunter_2x24.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>38420</price>
<currencyId>RUB</currencyId>
<categoryId>88</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/ee3/ee38c2b9603024d58d6c58e911d7f29c.jpg</picture>
<vendor>Sightmark</vendor>
<name>Ночной бинокль Sightmark Ghost Hunter 2x24</name>
<description></description>
</offer>
<offer id="2287" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_binokli/sightmark_ghost_hunter_4x50.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>64020</price>
<currencyId>RUB</currencyId>
<categoryId>88</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/dae/dae7902d0fd94d407fef85e634f92a40.jpg</picture>
<vendor>Sightmark</vendor>
<name>Ночной бинокль Sightmark Ghost Hunter 4x50</name>
<description></description>
</offer>
<offer id="2289" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_monokulyary/nochnoy_monokulyar_sightmark_ghost_hunter_2x24.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>23050</price>
<currencyId>RUB</currencyId>
<categoryId>87</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/2ca/2caddc3d0f457137c2bc7bf843729a05.jpg</picture>
<vendor>Sightmark</vendor>
<name>Ночной монокуляр Sightmark Ghost Hunter 2x24</name>
<description></description>
</offer>
<offer id="2290" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_monokulyary/nochnoy_monokulyar_sightmark_ghost_hunter_4x50.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>25610</price>
<currencyId>RUB</currencyId>
<categoryId>87</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/b83/b83ca7677d3ecfde5fdc955019510621.jpg</picture>
<vendor>Sightmark</vendor>
<name>Ночной монокуляр Sightmark Ghost Hunter 4x50</name>
<description></description>
</offer>
<offer id="2292" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_ochki/dipol_d206pro_bw.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>159900</price>
<currencyId>RUB</currencyId>
<categoryId>86</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/40c/40cf09c546402469817a727ca083a583.jpg</picture>
<vendor>Диполь</vendor>
<name>Ночные очки Dipol D206PRO bw</name>
<description></description>
</offer>
<offer id="2358" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/teplovizionnyy_monokulyar_xeye_e6_pro.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>245400</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/848/8488e372abc84bdca77dd59265b4b1fe.jpg</picture>
<vendor>InfiRay</vendor>
<name>Тепловизионный монокуляр InfiRay Xeye E6 Pro</name>
<description></description>
</offer>
<offer id="2385" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/iray_xsight_sh50.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>410900</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/6f8/6f8ccb40c73a078df837e2327862a5b9.jpg</picture>
<vendor>iRay</vendor>
<name>Тепловизионный прицел iRay Xsight SH50</name>
<description></description>
</offer>
<offer id="2386" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/iray_xsight_sh75.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>491900</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/2db/2db36da034c3e301374ba645a5bd9e16.jpg</picture>
<vendor>iRay</vendor>
<name>Тепловизионный прицел iRay Xsight SH75</name>
<description></description>
</offer>
<offer id="2387" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/iray_xsight_sl35.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>253250</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/b68/b68e55d3b01c376caa9111a030235ed3.jpg</picture>
<vendor>iRay</vendor>
<name>Тепловизионный прицел iRay Xsight SL35</name>
<description></description>
</offer>
<offer id="2388" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/iray_xsight_sl50.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>280000</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/772/772f69d053f9a86a41833e29677c9291.jpg</picture>
<vendor>iRay</vendor>
<name>Тепловизионный прицел iRay Xsight SL50</name>
<description></description>
</offer>
<offer id="2389" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/iray_xsight_sl50r.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>306000</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/83a/83acc68cfcb34a73736c35177f9fa2c6.jpg</picture>
<vendor>iRay</vendor>
<name>Тепловизионный прицел iRay Xsight SL50R</name>
<description></description>
</offer>
<offer id="2390" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/iray_xsight_sl50w.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>305300</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/90d/90d191491d6ae23c1b8351f437b6596a.jpg</picture>
<vendor>iRay</vendor>
<name>Тепловизионный прицел iRay Xsight SL50W</name>
<description></description>
</offer>
<offer id="2392" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/iray_saim_scl_25w.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>179900</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/d38/d3805eb0d5b31d44fcb06685328bf9c2.jpg</picture>
<vendor>iRay</vendor>
<name>Тепловизионный прицел iRay Saim SCL 25W</name>
<description></description>
</offer>
<offer id="2393" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/iray_saim_scl_35w.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>206900</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/f99/f99efbc7e4d3e3bb50e0b8528eecc720.jpg</picture>
<vendor>iRay</vendor>
<name>Тепловизионный прицел iRay Saim SCL 35W</name>
<description></description>
</offer>
<offer id="2394" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/veber_night_eagle_r25_384.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>185000</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/50d/50da9126a6213d97f78e0833dd43d733.jpg</picture>
<vendor>Veber</vendor>
<name>Тепловизионный прицел Veber Night Eagle R25/384</name>
<description></description>
</offer>
<offer id="2395" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/veber_night_eagle_r35_384hd.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>210000</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/1eb/1eb86ac1405e39a867d1189fd3775b40.jpg</picture>
<vendor>Veber</vendor>
<name>Тепловизионный прицел Veber Night Eagle R35/384HD</name>
<description></description>
</offer>
<offer id="2398" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/legat_gen2_s_3f75.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>378000</price>
<currencyId>RUB</currencyId>
<categoryId>71</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/993/99324532916b613e9c8be9804dec2036.jpg</picture>
<vendor>Electrooptic</vendor>
<name>Тепловизионный прицел LEGAT Gen2 S 3F75</name>
<description></description>
</offer>
<offer id="2400" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_kollimatornye_pritsely/iray_xholo_hp06.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>89900</price>
<currencyId>RUB</currencyId>
<categoryId>139</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/fea/fea49dffe4a41aa2d5ed562b9aab6430.jpg</picture>
<vendor>iRay</vendor>
<name>Тепловизионный коллиматорный прицел iRay Xholo HP06</name>
<description></description>
</offer>
<offer id="2401" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_kollimatornye_pritsely/iray_xholo_hl13.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>116900</price>
<currencyId>RUB</currencyId>
<categoryId>139</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/d24/d24b30bb1b194e74b51fa1e2f29eb329.jpg</picture>
<vendor>iRay</vendor>
<name>Тепловизионный коллиматорный прицел iRay Xholo HL13</name>
<description></description>
</offer>
<offer id="2416" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/aper_ts35.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>210000</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/5f1/5f1c800e0f79228936b64a5822058ef9.jpg</picture>
<vendor>Aper</vendor>
<name>Тепловизионный прицел Aper TS35</name>
<description></description>
</offer>
<offer id="2417" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/aper_ts25.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>185000</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/8f1/8f101d8840e217b2116a4de41c690bb7.png</picture>
<vendor>Aper</vendor>
<name>Тепловизионный прицел Aper TS25</name>
<description></description>
</offer>
<offer id="2419" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/legat_gen2_s_3f54.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>343000</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/83f/83f996db67d03dd4551188920541c088.jpg</picture>
<vendor>Electrooptic</vendor>
<name>Тепловизионный прицел LEGAT Gen2 S 3F54</name>
<description></description>
</offer>
<offer id="2420" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/legat_gen2_lite_3f54.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>308000</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/c4d/c4d79aaefb035a946a75f165cbcd659e.jpg</picture>
<vendor>Electrooptic</vendor>
<name>Тепловизионный прицел LEGAT Gen2 Lite 3F54</name>
<description></description>
</offer>
<offer id="2421" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/legat_gen2_lite_3f40.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>287000</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/b9b/b9b2e181ee7d4cf61fa9d277b1d5be0d.jpg</picture>
<vendor>Electrooptic</vendor>
<name>Тепловизионный прицел LEGAT Gen2 Lite 3F40</name>
<description></description>
</offer>
<offer id="2422" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/legat_gen2_lite_3f75.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>336000</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/38b/38b7cdf1fec2e999ffa0348543e5bb51.jpg</picture>
<vendor>Electrooptic</vendor>
<name>Тепловизионный прицел LEGAT Gen2 Lite 3F75</name>
<description></description>
</offer>
<offer id="2425" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/legat_smart_3f54.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>364000</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/b73/b738d576b289833833f3e338c4caff2b.jpg</picture>
<vendor>Electrooptic</vendor>
<name>Тепловизионный прицел LEGAT Smart 3F54</name>
<description></description>
</offer>
<offer id="2426" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/legat_smart_3f40.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>343000</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/941/9412f9f585aa3dad7ce19b2019163583.jpg</picture>
<vendor>Electrooptic</vendor>
<name>Тепловизионный прицел LEGAT Smart 3F40</name>
<description></description>
</offer>
<offer id="2427" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/legat_smart_3f75.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>392000</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/f6a/f6a47b4da062ec847f2c218bed1bb818.jpg</picture>
<vendor>Electrooptic</vendor>
<name>Тепловизионный прицел LEGAT Smart 3F75</name>
<description></description>
</offer>
<offer id="2615" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/teplovizionnyy_pritsel_guide_ts8100.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>599000</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/9a9/9a9690f7c51ecc735e7da2405b1134fb.jpg</picture>
<vendor>GUIDE</vendor>
<name>Тепловизионный прицел Guide TS8100</name>
<description></description>
</offer>
<offer id="2617" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/ik_osvetiteli/bars_ik_l_980_nm.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>8775</price>
<currencyId>RUB</currencyId>
<categoryId>92</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/e08/e0802fc47e20afd101cbe3d29687bbef.jpg</picture>
<vendor>Барс</vendor>
<name>ИК-осветитель Барс ИК-L 980 нм</name>
<description></description>
</offer>
<offer id="2618" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/ik_osvetiteli/dipol_weaver_810_nm.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>14400</price>
<currencyId>RUB</currencyId>
<categoryId>92</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/b4b/b4b1b50cd4361862592987db581e6a0a.jpg</picture>
<vendor>Диполь</vendor>
<name>ИК-осветитель Диполь L2 Weaver, 810 нм</name>
<description></description>
</offer>
<offer id="2619" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/ik_osvetiteli/dipol_l2_1_4_810_nm.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>14400</price>
<currencyId>RUB</currencyId>
<categoryId>92</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/f14/f14507afafabda6c9319135b21d70921.jpg</picture>
<vendor>Диполь</vendor>
<name>ИК-осветитель Диполь L2 1/4, 810 нм</name>
<description></description>
</offer>
<offer id="2620" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/ik_osvetiteli/dipol_l3_1_4_850_nm.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>17250</price>
<currencyId>RUB</currencyId>
<categoryId>92</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/419/4196df1d38dfa8f6ae10cf39334e9a50.jpg</picture>
<vendor>Диполь</vendor>
<name>ИК-осветитель Диполь L3 1/4, 850 нм</name>
<description></description>
</offer>
<offer id="2621" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/ik_osvetiteli/dipol_l2_1_4_850_nm.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>16100</price>
<currencyId>RUB</currencyId>
<categoryId>92</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/751/7519b4e3eee9e31f5eba08f3187a1a32.jpg</picture>
<vendor>Диполь</vendor>
<name>ИК-осветитель Диполь L2 1/4, 850 нм</name>
<description></description>
</offer>
<offer id="2865" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/leupold_vendetta_2_black_174557.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>25740</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/69d/69dae86745d52695b2d41a79806717e8.jpg</picture>
<vendor>Leupold</vendor>
<name>Дальномер Leupold Vendetta 2 Black 174557</name>
<description></description>
</offer>
<offer id="2872" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/leupold_rx_2800_tbr_w_7x27.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>46540</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/687/6871c2828ee07e9221a37ef26175f4ad.jpg</picture>
<vendor>Leupold</vendor>
<name>Дальномер Leupold RX-2800 TBR/W 7x27 171910</name>
<description></description>
</offer>
<offer id="2873" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/leupold_rx_1600i_tbr_w_dna_6x22_mossy_oak_blaze_orange.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>50690</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/c5a/c5a351d57b26700ed829673bbc4456b2.jpg</picture>
<vendor>Leupold</vendor>
<name>Дальномер Leupold RX-1600i TBR/W DNA 6x22 Mossy Oak Blaze Orange 173806</name>
<description></description>
</offer>
<offer id="2874" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/leupold_rx_1600i_tbr_w_dna_6x22_mossy_oak_break_up_country.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>50690</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/747/747d9f86055c968efdd628cc83de7f93.jpg</picture>
<vendor>Leupold</vendor>
<name>Дальномер Leupold RX-1600i TBR/W DNA 6x22 Mossy Oak Break-Up Country 173807</name>
<description></description>
</offer>
<offer id="2875" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/leupold_rx_1300i_tbr_6x23_black_gray.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>24700</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/16e/16ef8d54b9022de78624d73e29f7a40d.jpg</picture>
<vendor>Leupold</vendor>
<name>Дальномер Leupold RX-1300i TBR 6x23 Black/Gray 174555</name>
<description></description>
</offer>
<offer id="2876" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/leupold_rx_fulldraw_3_dna_6x23_green.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>50690</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/2b6/2b683d583e82438e15303de55d90823e.jpg</picture>
<vendor>Leupold</vendor>
<name>Дальномер Leupold RX-Fulldraw 3 DNA 6x23 Green 174557</name>
<description></description>
</offer>
<offer id="2877" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/leupold_rx_950.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>24700</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/5d8/5d8c20207585731759843642cb72005e.jpg</picture>
<vendor>Leupold</vendor>
<name>Дальномер Leupold RX-950 176769</name>
<description></description>
</offer>
<offer id="2923" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/leupold_rx_650_6kh20.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>20200</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/b86/b86949be39319c3b68828866bfcdb580.jpg</picture>
<vendor>Leupold</vendor>
<name>Дальномер Leupold RX-650 6х20 120464</name>
<description></description>
</offer>
<offer id="2970" available="true">
<url>https://russiancaliber.ru/catalog/pribory_dlya_teploaudita/sistemy_izmereniya_temperatury_tela/bf5421_t_komplekt_3.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1270000</price>
<currencyId>RUB</currencyId>
<categoryId>141</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/4c6/4c67905db7944a9ae01a538a55f097d1.jpg</picture>
<vendor></vendor>
<name>Система эпидемиологического контроля Dahua BF5421-T Комплект 3</name>
<description></description>
</offer>
<offer id="2971" available="true">
<url>https://russiancaliber.ru/catalog/pribory_dlya_teploaudita/sistemy_izmereniya_temperatury_tela/bf5421_t_komplekt_2.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1170000</price>
<currencyId>RUB</currencyId>
<categoryId>141</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/89e/89e7d92e5af9ce0b73ca0cbfaa62c50c.jpg</picture>
<vendor></vendor>
<name>Система эпидемиологического контроля Dahua BF5421-T Комплект 2</name>
<description></description>
</offer>
<offer id="2993" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_pritsely/vomz_pilad_pns_3x50_pika.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>31350</price>
<currencyId>RUB</currencyId>
<categoryId>78</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/d92/d928eef84f0089a50cb6c937304ec891.jpg</picture>
<vendor>ВОМЗ</vendor>
<name>Ночной прицел ВОМЗ Пилад PNS 3x50 Пика</name>
<description></description>
</offer>
<offer id="2994" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_pritsely/vomz_pilad_pns_3x50_krest.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>31350</price>
<currencyId>RUB</currencyId>
<categoryId>78</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/da3/da32813caf0cde554131c5a0da31de79.jpg</picture>
<vendor>ВОМЗ</vendor>
<name>Ночной прицел ВОМЗ Пилад PNS 3x50 Крест</name>
<description></description>
</offer>
<offer id="2995" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_pritsely/vomz_pilad_pns_2_5x50_pika.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>26900</price>
<currencyId>RUB</currencyId>
<categoryId>78</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/73a/73a0ff21b664dc07bb5443eb2bf761a0.jpg</picture>
<vendor>ВОМЗ</vendor>
<name>Ночной прицел ВОМЗ Пилад PNS 2,5x50 Пика</name>
<description></description>
</offer>
<offer id="2996" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_pritsely/vomz_pilad_pns_2_5x50_krest.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>26900</price>
<currencyId>RUB</currencyId>
<categoryId>78</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/7a2/7a21e11e17b3dce41a8527a9ef830139.jpg</picture>
<vendor>ВОМЗ</vendor>
<name>Ночной прицел ВОМЗ Пилад PNS 2,5x50 Крест</name>
<description></description>
</offer>
<offer id="3177" available="true">
<url>https://russiancaliber.ru/catalog/pribory_dlya_teploaudita/sistemy_izmereniya_temperatury_tela/bf5421_t_komplekt_1.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>970000</price>
<currencyId>RUB</currencyId>
<categoryId>141</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/c38/c38d6ccd3b77039479a7b123ae1118c7.jpg</picture>
<vendor></vendor>
<name>Система эпидемиологического контроля Dahua BF5421-T Комплект 1</name>
<description></description>
</offer>
<offer id="3254" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/hawke_laser_range_finder_vantage_400.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>39760</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/e7a/e7adc53af30df3ae2e671d6ead6ee1d0.jpg</picture>
<vendor>Hawke</vendor>
<name>Дальномер Hawke Laser Range Finder Vantage 400 41200</name>
<description></description>
</offer>
<offer id="3255" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/laser_range_finder_vantage_600.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>39760</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/676/676fcc3510ec4ca6095651e8ecb5b395.jpg</picture>
<vendor>Hawke</vendor>
<name>Дальномер Hawke Laser Range Finder Vantage 600 41201</name>
<description></description>
</offer>
<offer id="3256" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/laser_range_finder_vantage_900.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>39760</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/d8e/d8e83007f5c026a5f51a1af726c26d6b.jpg</picture>
<vendor>Hawke</vendor>
<name>Дальномер Hawke Laser Range Finder Vantage 900 41202</name>
<description></description>
</offer>
<offer id="3258" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/laser_range_finder_endurance_700.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>39760</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/3b9/3b98e0af34e345ec8d3720bcc137dd96.jpg</picture>
<vendor>Hawke</vendor>
<name>Дальномер Hawke Laser Range Finder Endurance 700 41210</name>
<description></description>
</offer>
<offer id="3259" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/laser_range_finder_endurance_1000.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>39760</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/647/647e4d05adb18bb2bcfcd39c63dbb751.jpg</picture>
<vendor>Hawke</vendor>
<name>Дальномер Hawke Laser Range Finder Endurance 1000 41211</name>
<description></description>
</offer>
<offer id="3260" available="true">
<url>https://russiancaliber.ru/catalog/dalnomery/hawke_laser_range_finder_endurance_1500.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>39760</price>
<currencyId>RUB</currencyId>
<categoryId>81</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/4f6/4f64c45ee889b6332cfdf825b2758690.jpg</picture>
<vendor>Hawke</vendor>
<name>Дальномер Hawke Laser Range Finder Endurance 1500 41212</name>
<description></description>
</offer>
<offer id="3294" available="true">
<url>https://russiancaliber.ru/catalog/pribory_dlya_teploaudita/pirometry/cem_dt_8806s.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12000</price>
<currencyId>RUB</currencyId>
<categoryId>142</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/20d/20d1f9d97c13a6064003e478625d54ef.jpg</picture>
<vendor>CEM</vendor>
<name>Пирометр для измерения температуры тела CEM DT-8806S</name>
<description></description>
</offer>
<offer id="3295" available="true">
<url>https://russiancaliber.ru/catalog/pribory_dlya_teploaudita/pirometry/cem_dt_8806h.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12000</price>
<currencyId>RUB</currencyId>
<categoryId>142</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/05f/05fbac1df49bbe2d6116b601c9fd92a6.jpg</picture>
<vendor>CEM</vendor>
<name>Пирометр для измерения температуры тела CEM DT-8806H</name>
<description></description>
</offer>
<offer id="3296" available="true">
<url>https://russiancaliber.ru/catalog/pribory_dlya_teploaudita/pirometry/cem_dt_608.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12000</price>
<currencyId>RUB</currencyId>
<categoryId>142</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/69e/69e6e0a87ed6a69f4afa7e0f139a553f.jpg</picture>
<vendor>CEM</vendor>
<name>Пирометр для измерения температуры тела CEM DT-608</name>
<description></description>
</offer>
<offer id="3297" available="true">
<url>https://russiancaliber.ru/catalog/pribory_dlya_teploaudita/pirometry/cem_dt_806.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>10000</price>
<currencyId>RUB</currencyId>
<categoryId>142</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/d3e/d3e4ac27000a4fcc149f4006a297aef4.jpg</picture>
<vendor>CEM</vendor>
<name>Пирометр для измерения температуры тела CEM DT-806</name>
<description></description>
</offer>
<offer id="3298" available="true">
<url>https://russiancaliber.ru/catalog/pribory_dlya_teploaudita/pirometry/mlg_36_6_double.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>10200</price>
<currencyId>RUB</currencyId>
<categoryId>142</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/e1e/e1e43487fd0dd8ae11c2af0a53c25286.jpg</picture>
<vendor>Palmer Wahl</vendor>
<name>Пирометр для измерения температуры тела MLG 36.6 Double</name>
<description></description>
</offer>
<offer id="3299" available="true">
<url>https://russiancaliber.ru/catalog/pribory_dlya_teploaudita/pirometry/b_well_wf_1000_.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>10000</price>
<currencyId>RUB</currencyId>
<categoryId>142</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/36e/36eb3a776d48bd1d79d9a51e2d83e259.jpg</picture>
<vendor>B.Well</vendor>
<name>Пирометр для измерения температуры тела B.Well WF-1000</name>
<description></description>
</offer>
<offer id="3300" available="true">
<url>https://russiancaliber.ru/catalog/pribory_dlya_teploaudita/pirometry/b_well_wf_5000.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12000</price>
<currencyId>RUB</currencyId>
<categoryId>142</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/d83/d83e5690319ee800ce8a6174fef5e8d7.jpg</picture>
<vendor>B.Well</vendor>
<name>Пирометр для измерения температуры тела B.Well WF-5000</name>
<description></description>
</offer>
<offer id="3301" available="true">
<url>https://russiancaliber.ru/catalog/pribory_dlya_teploaudita/pirometry/medisana_ftn.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>11000</price>
<currencyId>RUB</currencyId>
<categoryId>142</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/810/81002bb600b0bbe5c67578d8f8e04225.jpg</picture>
<vendor>Medisana</vendor>
<name>Пирометр для измерения температуры тела Medisana FTN</name>
<description></description>
</offer>
<offer id="3302" available="true">
<url>https://russiancaliber.ru/catalog/pribory_dlya_teploaudita/pirometry/izmereniya_temperatury_tela_megeon.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12000</price>
<currencyId>RUB</currencyId>
<categoryId>142</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/461/461a72877195846b7b03ef083a1d9976.jpg</picture>
<vendor></vendor>
<name>Пирометр для измерения температуры тела HD-T01</name>
<description></description>
</offer>
<offer id="3303" available="true">
<url>https://russiancaliber.ru/catalog/pribory_dlya_teploaudita/pirometry/apexmed_sensitec_nf_3101.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>10790</price>
<currencyId>RUB</currencyId>
<categoryId>142</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/51c/51c62701f12f14984b72a41cd90e43c4.jpg</picture>
<vendor>Apexmed</vendor>
<name>Пирометр для измерения температуры тела Apexmed Sensitec NF-3101</name>
<description></description>
</offer>
<offer id="3304" available="true">
<url>https://russiancaliber.ru/catalog/pribory_dlya_teploaudita/pirometry/flus_ir_805.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>10000</price>
<currencyId>RUB</currencyId>
<categoryId>142</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/224/22429fa431afd77ae1d51e03018ced52.jpg</picture>
<vendor>Flus</vendor>
<name>Пирометр для измерения температуры тела Flus IR-805</name>
<description></description>
</offer>
<offer id="3305" available="true">
<url>https://russiancaliber.ru/catalog/pribory_dlya_teploaudita/pirometry/sensitec_nb_401.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12199</price>
<currencyId>RUB</currencyId>
<categoryId>142</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/a47/a47958f745f348f6554cdf7f06bcf84b.jpg</picture>
<vendor>Sensitec</vendor>
<name>Пирометр для измерения температуры тела Sensitec NB-401</name>
<description></description>
</offer>
<offer id="3306" available="true">
<url>https://russiancaliber.ru/catalog/pribory_dlya_teploaudita/pirometry/ck_t1501.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>10950</price>
<currencyId>RUB</currencyId>
<categoryId>142</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/3d9/3d980c8efb2e5b8b5c87de5cdbfca1ef.jpg</picture>
<vendor>CK</vendor>
<name>Пирометр для измерения температуры тела CK-T1501</name>
<description></description>
</offer>
<offer id="3307" available="true">
<url>https://russiancaliber.ru/catalog/pribory_dlya_teploaudita/pirometry/xiaomi_ihealth.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12000</price>
<currencyId>RUB</currencyId>
<categoryId>142</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/740/740c9561afb5bdd8de754fb503d09dfb.jpg</picture>
<vendor>Xiaomi</vendor>
<name>Пирометр для измерения температуры тела Xiaomi iHealth</name>
<description></description>
</offer>
<offer id="3308" available="true">
<url>https://russiancaliber.ru/catalog/pribory_dlya_teploaudita/pirometry/endever_04_temp.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>11500</price>
<currencyId>RUB</currencyId>
<categoryId>142</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/b72/b72300d6dfd46b1370fa5b5c85803834.jpg</picture>
<vendor>Endever</vendor>
<name>Пирометр для измерения температуры тела Endever 04-TEMP</name>
<description></description>
</offer>
<offer id="3309" available="true">
<url>https://russiancaliber.ru/catalog/pribory_dlya_teploaudita/pirometry/gmini_gm_irt_900d.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>11100</price>
<currencyId>RUB</currencyId>
<categoryId>142</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/7a9/7a963ca8727e7409158c71509ef50b0a.jpg</picture>
<vendor>Gmini</vendor>
<name>Пирометр для измерения температуры тела Gmini GM-IRT-900D</name>
<description></description>
</offer>
<offer id="3310" available="true">
<url>https://russiancaliber.ru/catalog/pribory_dlya_teploaudita/pirometry/b_well_wf_2000.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>11949</price>
<currencyId>RUB</currencyId>
<categoryId>142</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/cd0/cd08f7b87b24337c30279ff3648fa396.jpg</picture>
<vendor>B.Well</vendor>
<name>Пирометр для измерения температуры тела B.Well WF-2000</name>
<description></description>
</offer>
<offer id="3311" available="true">
<url>https://russiancaliber.ru/catalog/pribory_dlya_teploaudita/pirometry/gminigm_irt_860d.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>10120</price>
<currencyId>RUB</currencyId>
<categoryId>142</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/b21/b212216055bde9eea80a1b6ce1cc2b27.jpg</picture>
<vendor>Gmini</vendor>
<name>Пирометр для измерения температуры тела GminiGM-IRT-860D</name>
<description></description>
</offer>
<offer id="3312" available="true">
<url>https://russiancaliber.ru/catalog/pribory_dlya_teploaudita/pirometry/shengde_dt_8836.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>10940</price>
<currencyId>RUB</currencyId>
<categoryId>142</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/b08/b08045575238d1f9f9803f46191145f2.jpg</picture>
<vendor>Shengde</vendor>
<name>Пирометр для измерения температуры тела Shengde DT-8836</name>
<description></description>
</offer>
<offer id="3313" available="true">
<url>https://russiancaliber.ru/catalog/pribory_dlya_teploaudita/pirometry/ramili_et3050.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12000</price>
<currencyId>RUB</currencyId>
<categoryId>142</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/be6/be654a98fb064abe235e5964225198be.jpg</picture>
<vendor>Ramili</vendor>
<name>Пирометр для измерения температуры тела Ramili ET3050</name>
<description></description>
</offer>
<offer id="3314" available="true">
<url>https://russiancaliber.ru/catalog/pribory_dlya_teploaudita/pirometry/non_contact.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>10750</price>
<currencyId>RUB</currencyId>
<categoryId>142</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/7ff/7ff4c5d773cc1e9bae15bfecb15ad2e2.png</picture>
<vendor></vendor>
<name>Пирометр для измерения температуры тела Non-contact</name>
<description></description>
</offer>
<offer id="3572" available="true">
<url>https://russiancaliber.ru/catalog/pribory_dlya_teploaudita/pirometry/nc_9900.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3500</price>
<currencyId>RUB</currencyId>
<categoryId>142</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/8ca/8ca8c462950161c05efe5345cfec3555.png</picture>
<vendor>Исток-Аудио</vendor>
<name>Медицинский бесконтактный ИК-термометр для измерения температуры тела NC-9900</name>
<description></description>
</offer>
<offer id="3622" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/solnyshko_ouf_06.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4900</price>
<currencyId>RUB</currencyId>
<categoryId>146</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/e23/e235773368ebedddb634560f73333fc3.jpg</picture>
<vendor>Солнышко</vendor>
<name>Облучатель ультрафиолетовый &quot;Солнышко&quot; ОУФ-06</name>
<description></description>
</offer>
<offer id="3623" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/solnyshko_oufb_04.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3000</price>
<currencyId>RUB</currencyId>
<categoryId>146</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/b7e/b7e924db47f8feb3cc71ed630ad2dab6.jpg</picture>
<vendor>Солнышко</vendor>
<name>Облучатель ультрафиолетовый &quot;Солнышко&quot; ОУФБ-04</name>
<description></description>
</offer>
<offer id="3624" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/solnyshko_oufb_08.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9000</price>
<currencyId>RUB</currencyId>
<categoryId>146</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/923/923aa5fe954e9241c5a843f167291129.jpg</picture>
<vendor>Солнышко</vendor>
<name>Облучатель ультрафиолетовый бактерицидный &quot;Солнышко&quot; ОУФБ-08</name>
<description></description>
</offer>
<offer id="3625" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/soeks_kvazar.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>14990</price>
<currencyId>RUB</currencyId>
<categoryId>146</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/0d6/0d6d5a3932d1743bf063943831795355.jpg</picture>
<vendor>СОЭКС</vendor>
<name>Антивирусный и антибактерицидный облучатель СОЭКС КВАЗАР</name>
<description></description>
</offer>
<offer id="3626" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/ovu_01_solnechnyy_briz.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>10990</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/eda/edad31ab4151b0e97caab75766255ef3.jpg</picture>
<vendor>РЭМО</vendor>
<name>Рециркулятор бактерицидный ОВУ-01 Солнечный бриз</name>
<description></description>
</offer>
<offer id="3627" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/ovu_03_solnechnyy_briz.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>25690</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/392/39216f607600f28f0515900302e3b830.jpg</picture>
<vendor>РЭМО</vendor>
<name>Рециркулятор бактерицидный ОВУ-03 Солнечный бриз</name>
<description></description>
</offer>
<offer id="3628" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/ovu_04_solnechnyy_briz.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>36000</price>
<currencyId>RUB</currencyId>
<categoryId>145</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/6de/6ded8fb81bc3bc36a5c3b5a727f84c7b.jpg</picture>
<vendor>РЭМО</vendor>
<name>Ультрафиолетовый очиститель воздуха ОВУ-04 Солнечный бриз</name>
<description></description>
</offer>
<offer id="3629" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/mvbo_02_virus_killer.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>10990</price>
<currencyId>RUB</currencyId>
<categoryId>146</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/238/23835e3f78883feebd82e8b94647f765.jpg</picture>
<vendor>РЭМО</vendor>
<name>Ультрафиолетовый облучатель МВБО.02 Вирус Киллер</name>
<description></description>
</offer>
<offer id="3630" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/msk_908.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>17790</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/1e5/1e5d6abbe5a6a8fcdaedf6effbfcaec4.png</picture>
<vendor>Медстальконструкция</vendor>
<name>Рециркулятор бактерицидный для обеззараживания воздуха МСК-908</name>
<description></description>
</offer>
<offer id="3631" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/msk_909.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>11200</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/b52/b52da053a002691ad48866af9cc4f953.png</picture>
<vendor>Медстальконструкция</vendor>
<name>Рециркулятор бактерицидный для обеззараживания воздуха МСК-909</name>
<description></description>
</offer>
<offer id="3632" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/msk_910.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>10150</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/82e/82eb06a14d7903cb0279609d12a8df14.jpg</picture>
<vendor>Медстальконструкция</vendor>
<name>Рециркулятор бактерицидный для обеззараживания воздуха МСК-910</name>
<description></description>
</offer>
<offer id="3633" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/msk_911.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>10150</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/e46/e466e64a83b62048a2eca84788ffb86e.jpg</picture>
<vendor>Медстальконструкция</vendor>
<name>Рециркулятор бактерицидный для обеззараживания воздуха МСК-911</name>
<description></description>
</offer>
<offer id="3634" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/msk_913.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12520</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/c83/c831179779e5bf773139d98286ea2c59.jpg</picture>
<vendor>Медстальконструкция</vendor>
<name>Рециркулятор бактерицидный для обеззараживания воздуха МСК-913</name>
<description></description>
</offer>
<offer id="3635" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/msk_908_1.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>21230</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/d58/d587ff34e51d92a96e8f3b2e75b3ac16.jpg</picture>
<vendor>Медстальконструкция</vendor>
<name>Рециркулятор бактерицидный для обеззараживания воздуха МСК-908.1</name>
<description></description>
</offer>
<offer id="3636" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/msk_909_1.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>14640</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/e88/e88c30d5ed72144da10ba5fdf26dc7eb.jpg</picture>
<vendor>Медстальконструкция</vendor>
<name>Рециркулятор бактерицидный для обеззараживания воздуха МСК-909.1</name>
<description></description>
</offer>
<offer id="3637" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/msk_910_1.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>13590</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/7bf/7bf0a1e22dc5288f37572499c9738a4a.png</picture>
<vendor>Медстальконструкция</vendor>
<name>Рециркулятор бактерицидный для обеззараживания воздуха МСК-910.1</name>
<description></description>
</offer>
<offer id="3638" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/msk_911_1.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>17290</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/23c/23caaf4e8cadbf6636647f9c68d2f057.png</picture>
<vendor>Медстальконструкция</vendor>
<name>Рециркулятор бактерицидный для обеззараживания воздуха МСК-911.1</name>
<description></description>
</offer>
<offer id="3639" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/msk_913_1.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>15960</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/d8f/d8ffce4850a07eb66628963ef7fea702.png</picture>
<vendor>Медстальконструкция</vendor>
<name>Рециркулятор бактерицидный для обеззараживания воздуха МСК-913.1</name>
<description></description>
</offer>
<offer id="3640" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/msk_5908.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>23450</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/0a7/0a700319fa637f0f0c382de7881b93f9.jpg</picture>
<vendor>Медстальконструкция</vendor>
<name>Рециркулятор бактерицидный для обеззараживания воздуха МСК-5908</name>
<description></description>
</offer>
<offer id="3641" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/msk_5911.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>21360</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/6e5/6e5b0037c5bf47e9563c7dcabfd19021.jpg</picture>
<vendor>Медстальконструкция</vendor>
<name>Рециркулятор бактерицидный для обеззараживания воздуха МСК-5911</name>
<description></description>
</offer>
<offer id="3642" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/msk_5913.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>17550</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/5c0/5c001bc5c750acf756ad6c95ccca48c7.jpg</picture>
<vendor>Медстальконструкция</vendor>
<name>Рециркулятор бактерицидный для обеззараживания воздуха МСК-5913</name>
<description></description>
</offer>
<offer id="3643" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/msk_5908_5.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>32720</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/427/427cd9d3286f965f3d89748c1d2fa6f9.jpg</picture>
<vendor>Медстальконструкция</vendor>
<name>Рециркулятор бактерицидный для обеззараживания воздуха МСК-5908.5</name>
<description></description>
</offer>
<offer id="3644" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/msk_5909_5.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>25320</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/a85/a8570794f9a4fe38e059182c3ce43831.png</picture>
<vendor>Медстальконструкция</vendor>
<name>Рециркулятор бактерицидный для обеззараживания воздуха МСК-5909.5</name>
<description></description>
</offer>
<offer id="3645" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/msk_5911_5.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>30630</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/ddc/ddc6cbad471b399025078997fa3aa7de.jpg</picture>
<vendor>Медстальконструкция</vendor>
<name>Рециркулятор бактерицидный для обеззараживания воздуха МСК-5911.5</name>
<description></description>
</offer>
<offer id="3646" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/msk_5913_5.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>26820</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/cac/cac8b9d885620f32956c133557289238.jpg</picture>
<vendor>Медстальконструкция</vendor>
<name>Рециркулятор бактерицидный для обеззараживания воздуха МСК-5913.5</name>
<description></description>
</offer>
<offer id="3647" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/obnr_2kh15_kristall.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>10000</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/8bb/8bb81b64691279904dfc957839bb0338.png</picture>
<vendor>Диак</vendor>
<name>Облучатель рециркулятор бактерицидный ОБНР 2х15 Кристалл</name>
<description></description>
</offer>
<offer id="3648" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/bnb_01_11_001_kristall.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3200</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/879/8794b5bc0ea3e2b84ffcdae01d0f96e3.jpg</picture>
<vendor>Диак</vendor>
<name>Облучатель рециркулятор бактерицидный БНБ 01-11-001 Кристалл</name>
<description></description>
</offer>
<offer id="3649" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/kristall_2.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7200</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/0e2/0e281d1ef1bbe2434d27e0d357533c67.jpg</picture>
<vendor>Диак</vendor>
<name>Облучатель рециркулятор бактерицидный Кристалл-2</name>
<description></description>
</offer>
<offer id="3650" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/kristall_3.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7900</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/82a/82a263c31550d615d1e1a4156a64fbc1.jpg</picture>
<vendor>Диак</vendor>
<name>Облучатель рециркулятор бактерицидный Кристалл-3</name>
<description></description>
</offer>
<offer id="3651" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/foton_ob_01.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6990</price>
<currencyId>RUB</currencyId>
<categoryId>146</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/39c/39c048debb157173d21523b79a1d719d.jpg</picture>
<vendor>ООО Экология XXI-Века</vendor>
<name>Ультрафиолетовый облучатель бактерицидный &quot;ФОТОН&quot;ОБ-01</name>
<description></description>
</offer>
<offer id="3652" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/foton_ob_03.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12990</price>
<currencyId>RUB</currencyId>
<categoryId>146</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/13b/13b4e98eb5c0476f3838e8068882a7a7.jpg</picture>
<vendor>ООО Экология XXI-Века</vendor>
<name>Ультрафиолетовый облучатель бактерицидный &quot;ФОТОН&quot;ОБ-03</name>
<description></description>
</offer>
<offer id="3653" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/obn01_75_001_bakt.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2890</price>
<currencyId>RUB</currencyId>
<categoryId>146</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/dbd/dbda6d6b3d4542c2e7712901dbe052f0.jpg</picture>
<vendor>АСТЗ</vendor>
<name>Облучатель бактерицидный ОБН01-75-001 Bakt</name>
<description></description>
</offer>
<offer id="3654" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/obn01_150_001_bakt.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5667</price>
<currencyId>RUB</currencyId>
<categoryId>146</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/159/15987c7617261495adf64451b6702739.jpg</picture>
<vendor>АСТЗ</vendor>
<name>Облучатель бактерицидный ОБН01-150-001 Bakt</name>
<description></description>
</offer>
<offer id="3655" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/armed_sn_111_115.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4900</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/46f/46f2bf844eafbdd4591fe2d3ada0a3b9.jpg</picture>
<vendor>Армед</vendor>
<name>Облучатель рециркулятор Армед СН1-115</name>
<description></description>
</offer>
<offer id="3656" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/armed_sn_111_115_metallicheskiy_korpus.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>13000</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/628/628596a43f39a4c7f96f19c7554dee31.jpg</picture>
<vendor>Армед</vendor>
<name>Облучатель рециркулятор Армед СН-111-115 металлический корпус</name>
<description></description>
</offer>
<offer id="3657" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/armed_sn_111_130_metallicheskiy_korpus.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5600</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/612/612eee74cb359cc36ded062165909383.jpg</picture>
<vendor>Армед</vendor>
<name>Облучатель рециркулятор Армед СН-111-130 металлический корпус</name>
<description></description>
</offer>
<offer id="3658" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/armed_sn211_115_plastikovyy_korpus.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6500</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/b7e/b7ef635c205f8d65b26e44aef77c280b.jpg</picture>
<vendor>Армед</vendor>
<name>Облучатель рециркулятор Армед СН2-115 пластиковый корпус</name>
<description></description>
</offer>
<offer id="3659" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/armed_sn211_130_metallicheskiy_korpus.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>8200</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/4f3/4f350e18a2b43801160031d838dda185.jpg</picture>
<vendor>Армед</vendor>
<name>Облучатель рециркулятор Армед СН2-130 металлический корпус</name>
<description></description>
</offer>
<offer id="3660" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/obr_15_med_teko.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>19400</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/d1a/d1a3344421e31fb7def60462f7845bb9.jpg</picture>
<vendor>ООО МедТеКо</vendor>
<name>Облучатель рециркулятор ОБР-15 Мед ТеКо</name>
<description></description>
</offer>
<offer id="3661" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/obn_35_azov.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6000</price>
<currencyId>RUB</currencyId>
<categoryId>146</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/948/948eac38fcdcc9f1988684ef74fddc2f.jpg</picture>
<vendor>ООО Элид</vendor>
<name>Облучатель бактерицидный ОБН-35 Азов</name>
<description></description>
</offer>
<offer id="3662" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/sten_111.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>10900</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/33a/33a4572fcbb5d1c3d319847bfdf255dd.png</picture>
<vendor>СТЭН</vendor>
<name>Облучатель рециркулятор бактерицидный СТЭН-111</name>
<description></description>
</offer>
<offer id="3663" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/sten_115.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>11500</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/ecf/ecf7e2cf037e3e1f0caa3e835549b05f.png</picture>
<vendor>СТЭН</vendor>
<name>Облучатель рециркулятор бактерицидный СТЭН-115</name>
<description></description>
</offer>
<offer id="3664" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/sten_125.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>11900</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/96d/96db3190670ed987dc6f00ab2cd13edd.png</picture>
<vendor>СТЭН</vendor>
<name>Облучатель рециркулятор бактерицидный СТЭН-125</name>
<description></description>
</offer>
<offer id="3665" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/sten_155.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>14900</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/756/756e7de5b53d8008c8bdd3d30b9c8b63.png</picture>
<vendor>СТЭН</vendor>
<name>Облучатель рециркулятор бактерицидный СТЭН-155</name>
<description></description>
</offer>
<offer id="3666" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/orubn_3_5_dezar_5.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>16078</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/0cb/0cb9408e955c5dd09af94f7e8a49b322.jpg</picture>
<vendor>КРОНТ</vendor>
<name>Облучатель рециркулятор воздуха ультрафиолетовый бактерицидный ОРУБн-3-5 Дезар-5</name>
<description></description>
</offer>
<offer id="3667" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/kront_dezar_802.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>8200</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/ba2/ba261e0e94419f2e678ddc001e2c9ca8.jpg</picture>
<vendor>КРОНТ</vendor>
<name>Облучатель-рециркулятор Кронт Дезар-802</name>
<description></description>
</offer>
<offer id="3668" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/kront_dezar_802p.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9000</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/04f/04f3f0d318fce11162206209d9f8fa8f.jpg</picture>
<vendor>КРОНТ</vendor>
<name>Облучатель-рециркулятор Кронт Дезар-802п</name>
<description></description>
</offer>
<offer id="3669" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/orubn_2_01_kront_dezar_2.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>11600</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/e14/e1416daa83548080e7f3dcbc00e7ae86.jpg</picture>
<vendor>КРОНТ</vendor>
<name>Облучатель рециркулятор ОРУБн 2-01 Кронт Дезар-2</name>
<description></description>
</offer>
<offer id="3670" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/orubn_3_3_kront_dezar_3.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>13000</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/645/6454d2109ab371a68f015893ebb6153b.jpg</picture>
<vendor>КРОНТ</vendor>
<name>Облучатель рециркулятор ОРУБн 3-3 Кронт Дезар 3</name>
<description></description>
</offer>
<offer id="3671" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/obn_04_ya_fp.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>18100</price>
<currencyId>RUB</currencyId>
<categoryId>146</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/025/0259ecd4598e5f1f3ded3d5eedae089f.png</picture>
<vendor>Ферропласт Медикал</vendor>
<name>Облучатель напольный передвижной для обеззараживания воздуха помещений ОБН-04-Я-ФП</name>
<description></description>
</offer>
<offer id="3672" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/ambilayf_n_l_5524m.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>10400</price>
<currencyId>RUB</currencyId>
<categoryId>145</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/863/863c5e7d8784753c96913b8eeaff8ee4.jpg</picture>
<vendor>Амбилайф</vendor>
<name>Обеззараживатель и очиститель воздуха Амбилайф Н L-5524М</name>
<description></description>
</offer>
<offer id="3673" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/ambilayf_n_l_7024m.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>11500</price>
<currencyId>RUB</currencyId>
<categoryId>145</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/45c/45c97cafb14df3473287ede406bce2c4.jpg</picture>
<vendor>Амбилайф</vendor>
<name>Обеззараживатель и очиститель воздуха Амбилайф Н L-7024М</name>
<description></description>
</offer>
<offer id="3674" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/ambilayf_n_l_9024m.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12100</price>
<currencyId>RUB</currencyId>
<categoryId>145</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/8c1/8c13ca310746a30b4d244e581f6a9b96.jpg</picture>
<vendor>Амбилайф</vendor>
<name>Обеззараживатель и очиститель воздуха Амбилайф Н L-9024М</name>
<description></description>
</offer>
<offer id="3675" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/ambilayf_n_l_10024m.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12850</price>
<currencyId>RUB</currencyId>
<categoryId>145</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/f15/f1579d4c62cf537a86c31f2cc071468f.jpg</picture>
<vendor>Амбилайф</vendor>
<name>Обеззараживатель и очиститель воздуха Амбилайф Н L-10024М</name>
<description></description>
</offer>
<offer id="3676" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/ambilayf_l_100.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>24900</price>
<currencyId>RUB</currencyId>
<categoryId>145</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/5b9/5b9cd51a03c7abd852fda952d030f8ab.jpg</picture>
<vendor>Амбилайф</vendor>
<name>Обеззараживатель и очиститель воздуха Амбилайф L-100</name>
<description></description>
</offer>
<offer id="3677" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/ambilayf_l_150.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>25480</price>
<currencyId>RUB</currencyId>
<categoryId>145</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/e12/e12ce592b3f61672b35f832a993eb0eb.jpg</picture>
<vendor>Амбилайф</vendor>
<name>Обеззараживатель и очиститель воздуха Амбилайф L-150</name>
<description></description>
</offer>
<offer id="3679" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/obpe_450.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7500</price>
<currencyId>RUB</currencyId>
<categoryId>146</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/987/987131896ed718ffec1919fae6863e6a.jpg</picture>
<vendor>Элид</vendor>
<name>Облучатель бактерицидный передвижной ОБПе-450</name>
<description></description>
</offer>
<offer id="3680" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/defender_1_15_compact.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>15900</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/827/8273db7abfd883027ea9f29c069bc364.jpg</picture>
<vendor>TAGLER</vendor>
<name>Бактерицидный облучатель-рециркулятор Defender 1-15 Compact</name>
<description></description>
</offer>
<offer id="3681" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/uvc.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6000</price>
<currencyId>RUB</currencyId>
<categoryId>146</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/289/2892193e93211879d8e1ace2849ec01b.jpg</picture>
<vendor>Beauty Star</vendor>
<name>Бактерицидный УФ облучатель-озонатор UVC</name>
<description></description>
</offer>
<offer id="3682" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/argus_bo_1n.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>24500</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/7bc/7bccef7e9b0b6c1542deb006d71de573.jpg</picture>
<vendor>Аргус</vendor>
<name>Дезинфектор облучатель-рециркулятор закрытого типа Аргус-БО-1Н</name>
<description></description>
</offer>
<offer id="3683" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/doktor_ultrafiolet_20_m_eco_philips.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>10690</price>
<currencyId>RUB</currencyId>
<categoryId>146</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/5ae/5ae19381d3e7cfcc0387045ae2ad013a.jpg</picture>
<vendor>Philips</vendor>
<name>Бактерицидный облучатель Доктор Ультрафиолет 20 м&amp;#178; ECO PHILIPS</name>
<description></description>
</offer>
<offer id="3684" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/barer_1.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>14900</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/bd1/bd103048640cb67a3c77ebe13a04f1a7.jpg</picture>
<vendor>ЛенСвет</vendor>
<name>Облучатель-рециркулятор Барьер 1</name>
<description></description>
</offer>
<offer id="3685" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/barer_2.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>18800</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/f48/f48b67e92de7de9db6fe6aa7bdb99342.jpg</picture>
<vendor>ЛенСвет</vendor>
<name>Облучатель-рециркулятор Барьер 2</name>
<description></description>
</offer>
<offer id="3686" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/ultra_f_115.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>8900</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/e50/e50b37872bb278408f096a29bab8b930.png</picture>
<vendor>Медицинские Технологии</vendor>
<name>Бактерицидный рециркулятор Ультра-Ф 115</name>
<description></description>
</offer>
<offer id="3687" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/ultra_f_215.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>10900</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/a7e/a7ecfadd5124554d5feac5ac69498ae8.png</picture>
<vendor>Медицинские Технологии</vendor>
<name>Бактерицидный рециркулятор Ультра-Ф 215</name>
<description></description>
</offer>
<offer id="3688" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/safe_air.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5280</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/a9b/a9b29d3404ffdb0091fe58884ce7a854.jpg</picture>
<vendor>Армед</vendor>
<name>Облучатель рециркулятор Safe Air</name>
<description></description>
</offer>
<offer id="3689" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/rbpe_6kh15.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>16000</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/df5/df55e79cae62878bbbf1b173e4f3c8d8.jpg</picture>
<vendor>ЭМА</vendor>
<name>Бактерицидный облучатель рециркулятор РБПЕ 6Х15</name>
<description></description>
</offer>
<offer id="3690" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/kront_dezar_4.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>11600</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/f97/f97799cca36fc9caacb8d421bac2dc78.png</picture>
<vendor>КРОНТ</vendor>
<name>Облучатель рециркулятор Кронт Дезар 4</name>
<description></description>
</offer>
<offer id="3691" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/kront_dezar_6.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>14000</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/9a7/9a7cf26ebd17e36cad687ca27be423e4.png</picture>
<vendor>КРОНТ</vendor>
<name>Облучатель рециркулятор Кронт Дезар 6</name>
<description></description>
</offer>
<offer id="3692" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/kront_dezar_5.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>13900</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/49a/49a7780464201ef2e60e40508a5cc99b.png</picture>
<vendor>КРОНТ</vendor>
<name>Облучатель рециркулятор Кронт Дезар 5</name>
<description></description>
</offer>
<offer id="3693" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/kront_dezar_7.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>13900</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/811/811f3698aa741a9e63f30e4861530352.png</picture>
<vendor>КРОНТ</vendor>
<name>Облучатель рециркулятор Кронт Дезар 7</name>
<description></description>
</offer>
<offer id="3694" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/vityaz.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>10300</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/696/696e50d7f5665b325b89dbed09bd5d04.jpg</picture>
<vendor>Витязь</vendor>
<name>Бактерицидный рециркулятор воздуха Витязь</name>
<description></description>
</offer>
<offer id="3695" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/vityaz_01fk.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>10300</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/c90/c90c9ecf8b94d4b1b185b55bdbc0480f.jpg</picture>
<vendor>Витязь</vendor>
<name>Бактерицидный рециркулятор воздуха Витязь 01ФК</name>
<description></description>
</offer>
<offer id="3696" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/obp_300.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2800</price>
<currencyId>RUB</currencyId>
<categoryId>146</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/e9c/e9c1675237b74fa6f418ee4c9ffae128.jpg</picture>
<vendor>ЭМА</vendor>
<name>Бактерицидный потолочный облучатель ОБП 300</name>
<description></description>
</offer>
<offer id="3697" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/rb_2kh15.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>10000</price>
<currencyId>RUB</currencyId>
<categoryId>146</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/2fa/2fabbb72a14d9ac8513d2af79a34b48c.jpg</picture>
<vendor>ЭМА</vendor>
<name>Бактерицидный настенный облучатель РБ 2Х15</name>
<description></description>
</offer>
<offer id="3698" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/sibest_50.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>21000</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/fa9/fa944e6dae50df981977280063982364.jpg</picture>
<vendor>СибЭСТ</vendor>
<name>Рециркулятор бактерицидный Сибэст - 50</name>
<description></description>
</offer>
<offer id="3699" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/sibest_20.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>20400</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/19b/19b06984e7abb09381a24cbcf1c113c8.jpg</picture>
<vendor>СибЭСТ</vendor>
<name>Рециркулятор бактерицидный Сибэст - 20</name>
<description></description>
</offer>
<offer id="3700" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/sibest_70.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>24400</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/ddd/ddd41be5003c53f80e97992659d148d3.jpg</picture>
<vendor>СибЭСТ</vendor>
<name>Рециркулятор бактерицидный Сибэст - 70</name>
<description></description>
</offer>
<offer id="3701" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/sibest_45.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>22600</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/276/2769a98a5cf9653c9e667d70cbb46885.jpg</picture>
<vendor>СибЭСТ</vendor>
<name>Рециркулятор бактерицидный Сибэст - 45</name>
<description></description>
</offer>
<offer id="3702" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/sibest_100.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>26600</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/6e8/6e873eea009eafacd5c1e84fe5f877f5.jpg</picture>
<vendor>СибЭСТ</vendor>
<name>Рециркулятор бактерицидный Сибэст - 100</name>
<description></description>
</offer>
<offer id="3703" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyator_bakteritsidnyy_sunny_20c.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>20400</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/c23/c23b0aed97d5bf659dc200fd2a2dca90.jpg</picture>
<vendor>СибЭСТ</vendor>
<name>Рециркулятор бактерицидный Sunny 20C</name>
<description></description>
</offer>
<offer id="3704" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/remo_kvarts_ovu_11.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7900</price>
<currencyId>RUB</currencyId>
<categoryId>146</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/cf4/cf4dd6edddb6a2d3cf2b28a4063d6f91.jpg</picture>
<vendor>РЭМО</vendor>
<name>Облучатель бактерицидный ультрафиолетовый РЭМО Кварц ОВУ-11</name>
<description></description>
</offer>
<offer id="3705" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/rbk_1_pozis.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>14715</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/d47/d474d9839e3e5f2fcc6273da99932bf2.jpg</picture>
<vendor>POZIS</vendor>
<name>Рециркулятор бактерицидный РБК-1 POZIS</name>
<description></description>
</offer>
<offer id="3706" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/rbk_2_pozis.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12700</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/680/6804a8b961940b1be29a7b6f8b3a41f8.jpg</picture>
<vendor>POZIS</vendor>
<name>Рециркулятор бактерицидный РБК-2 POZIS</name>
<description></description>
</offer>
<offer id="3707" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/orb_1n_pozis.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12900</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/694/694a28055899f149ef4871bd3c2734fd.jpg</picture>
<vendor>POZIS</vendor>
<name>Облучатель рециркулятор бактерицидный ОРБ-1Н POZIS</name>
<description></description>
</offer>
<offer id="3708" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/orb_2n_pozis.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>15550</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/7cf/7cf4468b7cd7e55f6706f4b125aa4fc7.jpg</picture>
<vendor>POZIS</vendor>
<name>Облучатель рециркулятор бактерицидный ОРБ-2Н POZIS</name>
<description></description>
</offer>
<offer id="3709" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/orb_1p_pozis.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>16000</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/b03/b0379e20212fdd6a25a50e6f6c642ee0.jpg</picture>
<vendor>POZIS</vendor>
<name>Облучатель рециркулятор бактерицидный ОРБ-1П POZIS</name>
<description></description>
</offer>
<offer id="3710" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/orb_2p_pozis.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>14300</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/7ad/7ade23a5cd9a8fb02a40a13d32dca518.jpg</picture>
<vendor>POZIS</vendor>
<name>Облучатель рециркулятор бактерицидный ОРБ-2П POZIS</name>
<description></description>
</offer>
<offer id="3711" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/uv_medical.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>17712</price>
<currencyId>RUB</currencyId>
<categoryId>146</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/5f5/5f5265b5b1feacda2d4aec13956dcfc9.png</picture>
<vendor>Alba</vendor>
<name>Антибактериальный светильник UV-Medical</name>
<description></description>
</offer>
<offer id="3712" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/spds_90_r.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>11670</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/67d/67d4a6658f85443c804995b878af2f80.jpg</picture>
<vendor>ООО СПДС</vendor>
<name>Рециркулятор бактерицидный СПДС&amp;#8209;90&amp;#8209;Р</name>
<description></description>
</offer>
<offer id="3713" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/istok_briz.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>24500</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/f8f/f8f6f388ecf55329dd955e7c62d64d17.jpg</picture>
<vendor>Исток-Аудио</vendor>
<name>Рециркулятор бактерицидный ИСТОК&amp;#8209;БРИЗ 120</name>
<description></description>
</offer>
<offer id="3714" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/spds_60_r.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>10000</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/f03/f03aa0b8d0271f8cb8200ebc8229ec4b.jpg</picture>
<vendor>ООО СПДС</vendor>
<name>Рециркулятор бактерицидный СПДС&amp;#8209;60&amp;#8209;Р</name>
<description></description>
</offer>
<offer id="3715" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/spds_100_r.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12500</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/1e6/1e6c308a229a6e9e8aa69ed46d85da05.jpg</picture>
<vendor>ООО СПДС</vendor>
<name>Рециркулятор бактерицидный СПДС&amp;#8209;100&amp;#8209;Р</name>
<description></description>
</offer>
<offer id="3716" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/spds_110_r.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>16000</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/3c0/3c048ef673a3a6c3b34c32236ca9729f.jpg</picture>
<vendor>ООО СПДС</vendor>
<name>Рециркулятор бактерицидный СПДС&amp;#8209;110&amp;#8209;Р</name>
<description></description>
</offer>
<offer id="3717" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/spds_120_r.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>17500</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/2ee/2eebf6891f9faf931a612ce42ed9e178.jpg</picture>
<vendor>ООО СПДС</vendor>
<name>Рециркулятор бактерицидный СПДС&amp;#8209;120&amp;#8209;Р</name>
<description></description>
</offer>
<offer id="3718" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/edvantis_15w_u.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>29900</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/8b7/8b7087fe7e5d28fa7e322175a79e447c.jpg</picture>
<vendor>Эйч Ти Эль</vendor>
<name>Рециркулятор-облучатель бактерицидный 2 в 1 HTL Эдвантис 15W-U</name>
<description></description>
</offer>
<offer id="3719" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/oxira_xg.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>33000</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/e52/e528e4641d7a6dca728db2cb07cc8eec.png</picture>
<vendor>OXIRA</vendor>
<name>Рециркулятор для обеззараживания воздуха OXIRA XG</name>
<description></description>
</offer>
<offer id="3720" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/obrn_01_2kh15.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>8990</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/4fd/4fd66131ca82528cd18e7b16463fc54b.jpeg</picture>
<vendor>ЭЛИД АЗОВ</vendor>
<name>Рециркулятор для обеззараживания воздуха противовирусный ОБРН 01-2х15</name>
<description></description>
</offer>
<offer id="3721" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/obrn_01_15.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7000</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/e77/e7758cabbf62c80ea22388f2e89c616b.jpeg</picture>
<vendor>ЭЛИД АЗОВ</vendor>
<name>Рециркулятор для обеззараживания воздуха противовирусный ОБРН 01-15</name>
<description></description>
</offer>
<offer id="3722" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/pulsar_axion_xm30s.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>119900</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/13c/13cd05efae614330d329124a1c4faf49.png</picture>
<vendor>Pulsar</vendor>
<name>Тепловизионный монокуляр Pulsar Axion XM30S</name>
<description></description>
</offer>
<offer id="3723" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/pulsar_helion_2_xp50.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>229900</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/d5d/d5df6a4dbef7164ce854c37faf9b8b04.png</picture>
<vendor>Pulsar</vendor>
<name>Тепловизионный монокуляр Pulsar HELION 2 XP50</name>
<description></description>
</offer>
<offer id="3724" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_binokli/pulsar_accolade_2_lrf_xp50.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>350000</price>
<currencyId>RUB</currencyId>
<categoryId>73</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/9de/9de4d5cc36e908193782fdeff7df27eb.png</picture>
<vendor>Pulsar</vendor>
<name>Тепловизионный бинокль Pulsar Accolade 2 LRF XP50</name>
<description></description>
</offer>
<offer id="3725" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/ik_osvetiteli/pulsar_digex_x850.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9500</price>
<currencyId>RUB</currencyId>
<categoryId>92</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/c9a/c9a32a39ee8a78143724826510e218e8.png</picture>
<vendor>Pulsar</vendor>
<name>ИК-осветитель Pulsar Digex-X850</name>
<description></description>
</offer>
<offer id="3726" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/ik_osvetiteli/pulsar_digex_x940.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9900</price>
<currencyId>RUB</currencyId>
<categoryId>92</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/d95/d951f5eb3ea139a4a7acc7c230076ca6.png</picture>
<vendor>Pulsar</vendor>
<name>ИК-осветитель Pulsar Digex-X940</name>
<description></description>
</offer>
<offer id="3730" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/istok_briz_1200.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>55000</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/06c/06cb4a900d631b62b7b93d725d2b2d54.jpg</picture>
<vendor>Исток-Аудио</vendor>
<name>Рециркулятор бактерицидный ИСТОК&amp;#8209;БРИЗ 1200 (400, 800, 1200м3)</name>
<description></description>
</offer>
<offer id="3734" available="true">
<url>https://russiancaliber.ru/catalog/pribory_dlya_teploaudita/sistemy_izmereniya_temperatury_tela/sistema_epidemiologicheskogo_kontrolya_dahua_bf2221p_td.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>720000</price>
<currencyId>RUB</currencyId>
<categoryId>141</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/159/15953374fc87fe849957f5d2d92b57c0.jpg</picture>
<vendor></vendor>
<name>Система эпидемиологического контроля Dahua BF2221P-TD</name>
<description></description>
</offer>
<offer id="3737" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/istok_briz_60.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12000</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/90f/90f68cfef39e4e90db72b7b0fcf4e4bc.jpg</picture>
<vendor>Исток-Аудио</vendor>
<name>Рециркулятор бактерицидный ИСТОК&amp;#8209;БРИЗ 60</name>
<description></description>
</offer>
<offer id="3738" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/avtomobilnye_retsirkulyatory/retsirkulyator_ufrs_270.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6500</price>
<currencyId>RUB</currencyId>
<categoryId>147</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/947/947a4e599865b6bae07538e632afb004.jpeg</picture>
<vendor>АО НПП Салют</vendor>
<name>Рециркулятор автомобильный ультрафиолетовый светодиодный УФРС-270</name>
<description></description>
</offer>
<offer id="3739" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/avtomobilnye_retsirkulyatory/ochistitel_vozdukha_iqair_atem_car.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>39990</price>
<currencyId>RUB</currencyId>
<categoryId>147</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/fc6/fc64c5c759178739d2ff395cab4e6d97.png</picture>
<vendor></vendor>
<name>Очиститель воздуха IQAir Atem Car</name>
<description></description>
</offer>
<offer id="3740" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/avtomobilnye_retsirkulyatory/obluchatel_retsirkulyator_dezar_sp.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>14300</price>
<currencyId>RUB</currencyId>
<categoryId>147</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/eb5/eb5fe6458334aa92a64b246dd639be46.png</picture>
<vendor>КРОНТ</vendor>
<name>Облучатель-рециркулятор Дезар-СП</name>
<description></description>
</offer>
<offer id="3741" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/obluchatel_retsirkulyator_aladdin_jet_70.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9600</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/3e0/3e0c459ea8370e5af9605bdc4a238f3b.jpg</picture>
<vendor>Лисма</vendor>
<name>Облучатель - рециркулятор ALADDIN JET -70</name>
<description></description>
</offer>
<offer id="3742" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/obluchatel_retsirkulyator_aladdin_jet_120.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>13200</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/58d/58dd3bf14da65bd98d11eea55dc39d25.jpg</picture>
<vendor>Лисма</vendor>
<name>Облучатель - рециркулятор ALADDIN JET -120</name>
<description></description>
</offer>
<offer id="3743" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/obluchatel_retsirkulyator_aladdin_jet_180.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>15600</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/b62/b6274eb98d9d0d42073f04f613c34a18.jpg</picture>
<vendor>Лисма</vendor>
<name>Облучатель - рециркулятор ALADDIN JET -180</name>
<description></description>
</offer>
<offer id="3744" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/obluchatel_retsirkulyator_aladdin_jet_270.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>22800</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/a34/a34619a393f106c6bfe2f55c56da9c99.jpg</picture>
<vendor>Лисма</vendor>
<name>Облучатель - рециркулятор ALADDIN JET -270</name>
<description></description>
</offer>
<offer id="3745" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/obluchateli/obluchatel_bakteritsidnyy_aladdin_19.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3960</price>
<currencyId>RUB</currencyId>
<categoryId>146</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/f8b/f8ba60e90c60e699ea717954ee0272b4.jpg</picture>
<vendor>Лисма</vendor>
<name>Облучатель бактерицидный Aladdin-19</name>
<description></description>
</offer>
<offer id="3747" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyator_defender_2_15.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>16850</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/63d/63db07ec14aaef625e637ce9b9967fba.jpg</picture>
<vendor>TAGLER</vendor>
<name>Бактерицидный облучатель-рециркулятор Defender 2-15С </name>
<description></description>
</offer>
<offer id="3756" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/g_15w.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>10500</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/a3e/a3e4198e92f48a05e723733195773773.jpeg</picture>
<vendor></vendor>
<name>Рециркулятор бактерицидный G-15w</name>
<description></description>
</offer>
<offer id="3757" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/kristall_ru_2_3v90.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7150</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/a8d/a8dda72c32105e0fcd20b3d889747f6f.jpg</picture>
<vendor>РК</vendor>
<name>Рециркулятор бактерицидный RU 2 3V90</name>
<description></description>
</offer>
<offer id="3758" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/kristall_ru_2_3v60.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7670</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/b82/b82c860dae1481d0e6580f648f86df66.jpg</picture>
<vendor>РК</vendor>
<name>Рециркулятор бактерицидный RU 2 3V60</name>
<description></description>
</offer>
<offer id="3759" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/avtomobilnye_retsirkulyatory/ruv_60.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12000</price>
<currencyId>RUB</currencyId>
<categoryId>147</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/1b4/1b4d7a01336224cebc5944c096830257.jpg</picture>
<vendor>АО НПП Салют</vendor>
<name>Рециркулятор автомобильный ультрафиолетовый светодиодный RUV-60</name>
<description></description>
</offer>
<offer id="3760" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/rb_06_ya_fp_ultra_layt.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>24823</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/79b/79bc3fd69634ef1b9c6300c5747c4809.jpg</picture>
<vendor>Ферропласт</vendor>
<name>Рециркулятор РБ-06-«Я-ФП» «Ультра-Лайт»</name>
<description></description>
</offer>
<offer id="3761" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/rb_07_ya_fp_ultra_layt.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>22730</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/202/20200343daa52f8019a7c79ed9c1341d.jpg</picture>
<vendor>Ферропласт</vendor>
<name>Рециркулятор РБ-07-«Я-ФП» «Ультра-Лайт»</name>
<description></description>
</offer>
<offer id="3762" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/rb_18_ya_fp_01.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>17430</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/d16/d16e8d3fe09a06fc56323f755a555258.jpg</picture>
<vendor>Ферропласт</vendor>
<name>Рециркулятор РБ-18-«Я-ФП»-01</name>
<description></description>
</offer>
<offer id="3763" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/rb_18_ya_fp_02.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>16300</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/b73/b7336559e4b218fd0103a8d18e4081c2.jpg</picture>
<vendor>Ферропласт</vendor>
<name>Рециркулятор РБ-18-«Я-ФП»-02</name>
<description></description>
</offer>
<offer id="3764" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/rb_20_ya_fp_01.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>33411</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/3a6/3a6c9314cc4ee878d27aded91547ebdc.jpg</picture>
<vendor>Ферропласт</vendor>
<name>Рециркулятор РБ-20-«Я-ФП»-01</name>
<description></description>
</offer>
<offer id="3765" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/rb_20_ya_fp_02.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>30120</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/980/98099c87b39d1fa782a902bd10e7b332.jpg</picture>
<vendor>Ферропласт</vendor>
<name>Рециркулятор РБ-20-«Я-ФП»-02</name>
<description></description>
</offer>
<offer id="3766" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/megidez_msk_908.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>17790</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/289/289e04ccec16db1e17d4d34f166971f5.jpg</picture>
<vendor>МЕГИДЕЗ</vendor>
<name>Рециркулятор МЕГИДЕЗ МСК-908</name>
<description></description>
</offer>
<offer id="3767" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/megidez_msk_909.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>11200</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/741/7413f8155b0d65722bdee98fb38310a0.jpg</picture>
<vendor>МЕГИДЕЗ</vendor>
<name>Рециркулятор МЕГИДЕЗ МСК-909</name>
<description></description>
</offer>
<offer id="3768" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/megidez_msk_910.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>10150</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/275/275226855dad8e8772b5af7a50e4e98f.jpg</picture>
<vendor>МЕГИДЕЗ</vendor>
<name>Рециркулятор МЕГИДЕЗ МСК-910</name>
<description></description>
</offer>
<offer id="3769" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/megidez_msk_911.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>13850</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/9fa/9fa4cbb340868fde54a334252cb99e13.jpg</picture>
<vendor>МЕГИДЕЗ</vendor>
<name>Рециркулятор МЕГИДЕЗ МСК-911</name>
<description></description>
</offer>
<offer id="3770" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/megidez_msk_913.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12520</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/527/5272ca0609a80d49a5e5b4a9905132ec.png</picture>
<vendor>МЕГИДЕЗ</vendor>
<name>Рециркулятор МЕГИДЕЗ МСК-913</name>
<description></description>
</offer>
<offer id="3771" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/kristall_ru_2_3v30.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6650</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/b94/b94b983a395c789b4171883835e81c7d.jpg</picture>
<vendor>РК</vendor>
<name>Рециркулятор бактерицидный RU 2 3V30</name>
<description></description>
</offer>
<offer id="3772" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/kristall_ru_2_1v30..html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7250</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/28f/28f2241db1ac9a3b04fa62a782727de8.jpg</picture>
<vendor>РК</vendor>
<name>Рециркулятор бактерицидный RU 2 1V30</name>
<description></description>
</offer>
<offer id="3773" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/kristall_ru_2_1v60..html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5740</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/34f/34fd737ee18859701f833988de476d45.jpg</picture>
<vendor>РК</vendor>
<name>Рециркулятор бактерицидный RU 2 1V60</name>
<description></description>
</offer>
<offer id="3774" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/kristall_ru_2_1v90.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6950</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/3ff/3ffce34b8078fe635ff0985f7de75488.jpg</picture>
<vendor>РК</vendor>
<name>Рециркулятор бактерицидный RU 2 1V90</name>
<description></description>
</offer>
<offer id="3775" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/newled_nef_home.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>11990</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/822/822b04cef501b5ac71d3d86a6984d022.png</picture>
<vendor>NEWLED</vendor>
<name>Рециркулятор воздуха NEWLED NEF-HOME</name>
<description></description>
</offer>
<offer id="3776" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/newled_nef_work.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>14900</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/e2d/e2d85203e8ffd6beb5fa9d0ca71468da.jpg</picture>
<vendor>NEWLED</vendor>
<name>Рециркулятор воздуха NEWLED.NEF-WORK</name>
<description></description>
</offer>
<offer id="3777" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/newled_nef_x_35_100_h.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>26910</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/04a/04ad1ac748aeb7cad42e5220e9bc783e.jpg</picture>
<vendor>NEWLED</vendor>
<name>Рециркулятор воздуха NEWLED.NEF-X.35.100.H</name>
<description></description>
</offer>
<offer id="3778" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/newled_nef_x_50_150_v.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>28700</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/bdf/bdfca6d561e201f5792a9ce20ceed30d.png</picture>
<vendor>NEWLED</vendor>
<name>Рециркулятор воздуха NEWLED.NEF-X.50.150.V</name>
<description></description>
</offer>
<offer id="3779" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/newled_nef_x_70_200_v.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>29900</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/85f/85fa81f53d776c43b4be7e10a6c88f7e.jpg</picture>
<vendor>NEWLED</vendor>
<name>Рециркулятор воздуха NEWLED.NEF-X.70.200.V</name>
<description></description>
</offer>
<offer id="3780" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/newled_nef_x_100_300_v.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>33990</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/6c3/6c33c68873350870f000b92d26ca3b63.jpg</picture>
<vendor>NEWLED</vendor>
<name>Рециркулятор-очиститель воздуха NEWLED.NEF-X-100-300.V</name>
<description></description>
</offer>
<offer id="3781" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/newled_nef_x_150_450_v.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>43000</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/974/974e9b6836293dd600539b1d837a1723.jpg</picture>
<vendor>NEWLED</vendor>
<name>Рециркулятор воздуха NEWLED.NEF. X.150.450-V</name>
<description></description>
</offer>
<offer id="3782" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/bios_s15.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>8230</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/655/655718326e2af19021c56a7a7ce92f3d.jpg</picture>
<vendor>Биос+</vendor>
<name>Рециркулятор Биос+ с15</name>
<description></description>
</offer>
<offer id="3783" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/bios_s30.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12240</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/762/76209290788b8b689e07bdddb749df3f.jpg</picture>
<vendor>Биос+</vendor>
<name>Рециркулятор Биос+ с30</name>
<description></description>
</offer>
<offer id="3784" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/bios_b15.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>10280</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/61d/61df3a3b26b0cbd45845dd5783f7526c.jpg</picture>
<vendor>Биос+</vendor>
<name>Рециркулятор Биос+ b15</name>
<description></description>
</offer>
<offer id="3785" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/bios_b30.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>14170</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/1b0/1b0f78e3cead59d2a5237883f108ab90.png</picture>
<vendor>Биос+</vendor>
<name>Рециркулятор Биос+ b30</name>
<description></description>
</offer>
<offer id="3786" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/bios_b60.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>20670</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/f51/f514552fcae793a600f1e23f1f3eebb4.png</picture>
<vendor>Биос+</vendor>
<name>Рециркулятор Биос+ b60</name>
<description></description>
</offer>
<offer id="3787" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/bios_b120.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>23882</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/f7f/f7f05143de6da26c041176938fe49535.png</picture>
<vendor>Биос+</vendor>
<name>Рециркулятор Биос+ b120</name>
<description></description>
</offer>
<offer id="3788" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/milerd_dzr_1.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12780</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/67d/67d46a99ac1bb8479b2c4888572650c7.jpg</picture>
<vendor>Milerd</vendor>
<name>Рециркулятор Milerd DZR-1</name>
<description></description>
</offer>
<offer id="3789" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/milerd_dzr_2.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>19880</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/7c4/7c4e47df8694d1d575aaa77cd4653baa.jpg</picture>
<vendor>Milerd</vendor>
<name>Рециркулятор Milerd DZR-2</name>
<description></description>
</offer>
<offer id="3790" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/milerd_dzr_3.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>25750</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/d7a/d7a33d962502c26866e3aa0217e7fdc9.jpg</picture>
<vendor>Milerd</vendor>
<name>Рециркулятор Milerd DZR-3</name>
<description></description>
</offer>
<offer id="3791" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/milerd_dzr_4.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>34900</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/41f/41f9a093647160bd7086f0c0a38078e2.jpg</picture>
<vendor>Milerd</vendor>
<name>Рециркулятор Milerd DZR-4</name>
<description></description>
</offer>
<offer id="3792" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/milerd_dzr_1_pro.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>16490</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/49e/49e38783794855bfca1791204f1964d0.png</picture>
<vendor>Milerd</vendor>
<name>Рециркулятор Milerd DZR-1 Pro</name>
<description></description>
</offer>
<offer id="3793" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/milerd_dzr_2_pro.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>23900</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/936/93662aa20d9024263f06a06e1222a78c.png</picture>
<vendor>Milerd</vendor>
<name>Рециркулятор Milerd DZR-2 Pro</name>
<description></description>
</offer>
<offer id="3794" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/milerd_dzr_3_pro.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>33292</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/bd1/bd1811334e185d718fcd38881c2918fb.png</picture>
<vendor>Milerd</vendor>
<name>Рециркулятор Milerd DZR-3 Pro</name>
<description></description>
</offer>
<offer id="3795" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/milerd_dzr_4_pro.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>39900</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/7c2/7c222eb69401300046bf854187adbdf5.png</picture>
<vendor>Milerd</vendor>
<name>Рециркулятор Milerd DZR-4 Pro</name>
<description></description>
</offer>
<offer id="3796" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/milerd_dzr_5_.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>48900</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/5a5/5a5a5ef81004b66b4007fd52f44fa736.jpg</picture>
<vendor>Milerd</vendor>
<name>Рециркулятор Milerd DZR-5 </name>
<description></description>
</offer>
<offer id="3797" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/milerd_dzr_6.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>59900</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/d5c/d5cec14158a9906579a9ccdfc2e489a0.jpg</picture>
<vendor>Milerd</vendor>
<name>Рециркулятор Milerd DZR-6</name>
<description></description>
</offer>
<offer id="3798" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/milerd_dzr_10.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>179000</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/fc2/fc26c72b74224f3b16d13e4c26479f46.png</picture>
<vendor>Milerd</vendor>
<name>Рециркулятор Milerd DZR-10</name>
<description></description>
</offer>
<offer id="3799" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/briz_orb_130.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>13900</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/27f/27f9bdb2daeb451cf017a6b8be5a7ad4.jpg</picture>
<vendor>БРИЗ ОРБ</vendor>
<name>Рециркулятор-очиститель воздуха БРИЗ ОРБ-130</name>
<description></description>
</offer>
<offer id="3800" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/briz_orb_230.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>18400</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/18d/18db69d954c9d5ee8adbb5574b800928.jpg</picture>
<vendor>БРИЗ ОРБ</vendor>
<name>Рециркулятор-очиститель воздуха БРИЗ ОРБ-230</name>
<description></description>
</offer>
<offer id="3801" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/briz_orb_260.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>19400</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/ad4/ad41dc756fd00f6b67ebd1699168f530.jpg</picture>
<vendor>БРИЗ ОРБ</vendor>
<name>Рециркулятор-очиститель воздуха БРИЗ ОРБ-260</name>
<description></description>
</offer>
<offer id="3802" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/briz_orb_90s.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>24900</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/792/79216547b2638a1094a2237cfa41fd21.jpg</picture>
<vendor>БРИЗ ОРБ</vendor>
<name>Ультрафиолетовый рециркулятор воздуха БРИЗ ОРБ-90С</name>
<description></description>
</offer>
<offer id="3803" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/briz_orb_150s.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>33900</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/bcd/bcd7bd771bbfaf458beebebabc586e06.jpg</picture>
<vendor>БРИЗ ОРБ</vendor>
<name>Ультрафиолетовый рециркулятор воздуха БРИЗ ОРБ-150С</name>
<description></description>
</offer>
<offer id="3804" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/bvc_wlq_e.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>19500</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/14a/14abd252975644bbedd6432ed79183ed.jpg</picture>
<vendor>BVC-Health</vendor>
<name>Рециркулятор BVC WLQ/E</name>
<description></description>
</offer>
<offer id="3805" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/bvc_slp_e_021.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>26900</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/876/8768e0de22a7945feee6a46cf7019c2a.jpg</picture>
<vendor>BVC-Health</vendor>
<name>Рециркулятор BVC SLP/E-021</name>
<description></description>
</offer>
<offer id="3806" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/ultramedtekh_rvb_01_15.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12950</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/dbf/dbf2841de6c61e8f8fdf8f27d4e58023.jpg</picture>
<vendor>Ультрамедтех</vendor>
<name>Облучатель-рециркулятор Ультрамедтех РВБ 01/15</name>
<description></description>
</offer>
<offer id="3807" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/ultramedtekh_rvb_02_15_e.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>21600</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/cc6/cc6167798953f101d37f1fd88cac786a.jpg</picture>
<vendor>Ультрамедтех</vendor>
<name>Облучатель-рециркулятор Ультрамедтех РВБ 02/15 Э</name>
<description></description>
</offer>
<offer id="3808" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/ultramedtekh_rvb_02_15.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>18700</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/339/33927a35bead02062d7b03673dd5b704.jpg</picture>
<vendor>Ультрамедтех</vendor>
<name>Облучатель-рециркулятор Ультрамедтех РВБ 02/15</name>
<description></description>
</offer>
<offer id="3809" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/ultramedtekh_rvb_01_30.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>19290</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/5a8/5a8d6a1197a4eb3d53cd2d962e107d93.jpg</picture>
<vendor>Ультрамедтех</vendor>
<name>Облучатель-рециркулятор Ультрамедтех РВБ 01/30</name>
<description></description>
</offer>
<offer id="3810" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/ultramedtekh_rvb_03_15_e.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>27350</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/e5c/e5c144ae0d859755ed6a8e808519dfc7.jpg</picture>
<vendor>Ультрамедтех</vendor>
<name>Облучатель-рециркулятор Ультрамедтех РВБ 03/15 Э</name>
<description></description>
</offer>
<offer id="3811" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/ultramedtekh_rvb_02_30.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>22100</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/110/110dec99ed3b76e549b209bbe40a729a.jpg</picture>
<vendor>Ультрамедтех</vendor>
<name>Облучатель-рециркулятор Ультрамедтех РВБ 02/30</name>
<description></description>
</offer>
<offer id="3812" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/ultramedtekh_rvb_01_15_e.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>15850</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/48e/48e6fa4f682121be0ed89ec783ca6bad.jpg</picture>
<vendor>Ультрамедтех</vendor>
<name>Облучатель-рециркулятор Ультрамедтех РВБ 01/15 Э</name>
<description></description>
</offer>
<offer id="3813" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/ultramedtekh_rvb_01_30_e.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>21600</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/7f8/7f8201288d243058e1551fa372c13a00.jpg</picture>
<vendor>Ультрамедтех</vendor>
<name>Облучатель-рециркулятор Ультрамедтех РВБ 01/30 Э</name>
<description></description>
</offer>
<offer id="3814" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/ultramedtekh_rvb_03_15_e_nerzh_.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>26470</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/b17/b17c3a96c7029f40ac96553484c7fe8e.jpg</picture>
<vendor>Ультрамедтех</vendor>
<name>Облучатель-рециркулятор Ультрамедтех РВБ 03/15 Э (корпус нерж.)</name>
<description></description>
</offer>
<offer id="3815" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/ultramedtekh_rvb_01_35_e.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>15290</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/dec/dec8ba1a963ea483ad53b3f17aecc510.jpg</picture>
<vendor>Ультрамедтех</vendor>
<name>Облучатель-рециркулятор Ультрамедтех РВБ 01/35 Э</name>
<description></description>
</offer>
<offer id="3816" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/ultramedtekh_rvb_02_35_e.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>29580</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/369/369babd590152b172039b9dcdc4d8491.jpg</picture>
<vendor>Ультрамедтех</vendor>
<name>Облучатель-рециркулятор Ультрамедтех РВБ 02/35 Э</name>
<description></description>
</offer>
<offer id="3817" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/ultramedtekh_rvb_02_55.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>16690</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/2f2/2f2238ab9fe1bd19c9aed3bde7c37d64.jpg</picture>
<vendor>Ультрамедтех</vendor>
<name>Облучатель-рециркулятор Ультрамедтех РВБ 02/55</name>
<description></description>
</offer>
<offer id="3818" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/ultramedtekh_rvb_02_55_pn.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>22490</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/5b6/5b6a1acf624a92f9295546f093df9bb2.jpg</picture>
<vendor>Ультрамедтех</vendor>
<name>Облучатель-рециркулятор Ультрамедтех РВБ 02/55 ПН</name>
<description></description>
</offer>
<offer id="3819" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/ultramedtekh_rvb_02_55_pn_e.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>24190</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/18c/18cfa73a2211cb25fd04374ac0ce3749.jpg</picture>
<vendor>Ультрамедтех</vendor>
<name>Облучатель-рециркулятор Ультрамедтех РВБ 02/55 ПН-Э</name>
<description></description>
</offer>
<offer id="3820" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/ultramedtekh_rvb_03_25_e.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>29580</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/926/926ff4ee5adf2d33abb3794caf9d8f41.jpg</picture>
<vendor>Ультрамедтех</vendor>
<name>Облучатель-рециркулятор Ультрамедтех РВБ 03/25 Э</name>
<description></description>
</offer>
<offer id="3821" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/ultramedtekh_rvb_04_32_pn_e_nerzh_.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>62390</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/3f0/3f0294b8c94f35781aa28816a42bbca1.jpg</picture>
<vendor>Ультрамедтех</vendor>
<name>Облучатель-рециркулятор Ультрамедтех РВБ 04/32 ПН-Э (корпус нерж.)</name>
<description></description>
</offer>
<offer id="3822" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/saltlight_combo_15_.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>15120</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/ed3/ed38edafd1dd95b546552fb2ff31a0ad.jpg</picture>
<vendor>SaltLight</vendor>
<name>Рециркулятор воздуха SaltLight Combo 15 </name>
<description></description>
</offer>
<offer id="3823" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/saltlight_arm_30_bez_pu.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>17560</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/033/033b4f298e64877be0a508380211f126.jpg</picture>
<vendor>SaltLight</vendor>
<name>Рециркулятор воздуха SaltLight Arm 30 (без ПУ)</name>
<description></description>
</offer>
<offer id="3824" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/saltlight_combo_30.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>17920</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/74a/74ae6ecf360e7a9b3a84440a99843b23.jpg</picture>
<vendor>SaltLight</vendor>
<name>Рециркулятор воздуха SaltLight Combo 30</name>
<description></description>
</offer>
<offer id="3825" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/saltlight_arm_30_s_pu.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>19100</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/436/436d668f47d858a71720c9fffc01208a.jpeg</picture>
<vendor>SaltLight</vendor>
<name>Рециркулятор воздуха SaltLight Arm 30 (с ПУ)</name>
<description></description>
</offer>
<offer id="3826" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/saltlight_arm_60_bez_pu.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>25980</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/fbb/fbb77796fbf60cfdeb167ccc2fe3833e.jpg</picture>
<vendor>SaltLight</vendor>
<name>Рециркулятор воздуха SaltLight Arm 60 (без ПУ)</name>
<description></description>
</offer>
<offer id="3827" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/saltlight_arm_60_s_pu_belyy.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>27980</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/b12/b129deebaa192b78ed10178e17546b45.jpg</picture>
<vendor>SaltLight</vendor>
<name>Рециркулятор воздуха SaltLight Arm 60 (с ПУ) Белый</name>
<description></description>
</offer>
<offer id="3828" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/pt_home_1.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>8900</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/88c/88c7febc7e8c9db3e118226f229387ad.jpg</picture>
<vendor>Purge Technology</vendor>
<name>Рециркулятор воздуха PT Home 1</name>
<description></description>
</offer>
<offer id="3829" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/pt_home_2.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>10400</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/64a/64a53764214b9965450ab9aab4a9b916.jpg</picture>
<vendor>Purge Technology</vendor>
<name>Рециркулятор воздуха PT Home 2</name>
<description></description>
</offer>
<offer id="3830" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/pt_office_1.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12900</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/13d/13dce888b81430a5f7efb8cb98dda7ff.jpg</picture>
<vendor>Purge Technology</vendor>
<name>Рециркулятор воздуха PT Office 1</name>
<description></description>
</offer>
<offer id="3831" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/pt_office_2.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>17500</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/ef1/ef11447235510340e195f72921934583.jpg</picture>
<vendor>Purge Technology</vendor>
<name>Рециркулятор воздуха PT Office 2</name>
<description></description>
</offer>
<offer id="3832" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/pt_pro_1.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>15500</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/54a/54a7a3e8abc0896f0776cdc73b46897e.jpg</picture>
<vendor>Purge Technology</vendor>
<name>Рециркулятор воздуха PT Pro 1</name>
<description></description>
</offer>
<offer id="3833" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/pt_pro_2.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>17500</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/a61/a61e2640c2eb8b9b9382b52ab654c678.jpg</picture>
<vendor>Purge Technology</vendor>
<name>Рециркулятор воздуха PT Pro 2</name>
<description></description>
</offer>
<offer id="3834" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/double_prom.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>22000</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/34e/34e0abbae9fa3152cba690076386a2a8.jpg</picture>
<vendor>Purge Technology</vendor>
<name>Рециркулятор воздуха Double Prom</name>
<description></description>
</offer>
<offer id="3835" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/pt_triple.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>27000</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/5e8/5e8b867af0994fa15060ad3d9f9f4d44.jpg</picture>
<vendor>Purge Technology</vendor>
<name>Рециркулятор воздуха PT Triple</name>
<description></description>
</offer>
<offer id="3836" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/armstrong.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>21900</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/1da/1da59471f2247f8c030cfa4e85de852e.jpg</picture>
<vendor>Purge Technology</vendor>
<name>Рециркулятор воздуха Armstrong</name>
<description></description>
</offer>
<offer id="3837" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/pt_quadro.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>33000</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/6bb/6bb1e4ff029cfd7c3e6da3b228fca891.jpg</picture>
<vendor>Purge Technology</vendor>
<name>Рециркулятор воздуха PT Quadro</name>
<description></description>
</offer>
<offer id="3838" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/airuv_tbl_55_pl_.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12900</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/2b6/2b691cb408e5b435c21733ebc61832c2.png</picture>
<vendor>AIRUV</vendor>
<name>Рециркулятор AIRUV-TBL-55-PL </name>
<description></description>
</offer>
<offer id="3839" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/airuv_tbl_80_pl.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>19900</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/c1d/c1d322f2e12a3bfa5d4477d6827a196d.png</picture>
<vendor>AIRUV</vendor>
<name>Рециркулятор AIRUV-TBL-80-PL</name>
<description></description>
</offer>
<offer id="3840" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/airuv_tbl_110_pl.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>24900</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/e50/e50eb7c57e8d3d831c508c7ebcd5e5bf.png</picture>
<vendor>AIRUV</vendor>
<name>Рециркулятор AIRUV-TBL-110-PL</name>
<description></description>
</offer>
<offer id="3841" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/airuv_tbl_55_pnp.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12000</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/c80/c8047b19388471f65db5f6bc7cacf478.png</picture>
<vendor>AIRUV</vendor>
<name>Рециркулятор AIRUV-TBL-55-PNP</name>
<description></description>
</offer>
<offer id="3842" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/airuv_tbl_80_pnp.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>18900</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/632/632cf678f5dc0aa650776bfc3adc8087.png</picture>
<vendor>AIRUV</vendor>
<name>Рециркулятор AIRUV-TBL-80-PNP</name>
<description></description>
</offer>
<offer id="3843" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/airuv_tbl_110_pnp.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>23900</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/cc5/cc50cf181ef5bd6757476751d6b6135e.png</picture>
<vendor>AIRUV</vendor>
<name>Рециркулятор AIRUV-TBL-110-PNP</name>
<description></description>
</offer>
<offer id="3844" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/airuv_light.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>8179</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/2a7/2a70108c3968043df830eda529f88172.png</picture>
<vendor>AIRUV</vendor>
<name>Рециркулятор AIRUV-LIGHT</name>
<description></description>
</offer>
<offer id="3845" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/airuv_tbl_150_pnp.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>28900</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/cfa/cfa61350fea0e3c0464bdd406daaab62.png</picture>
<vendor>AIRUV</vendor>
<name>Рециркулятор AIRUV-TBL-150-PNP</name>
<description></description>
</offer>
<offer id="3846" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/airuv_tbl_150_pl.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>29900</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/b5d/b5d134edf7f7def86c808a11cbb0322f.jpg</picture>
<vendor>AIRUV</vendor>
<name>Рециркулятор AIRUV-TBL-150-PL</name>
<description></description>
</offer>
<offer id="3847" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/kama_r_uf1x15.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>8400</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/113/113c3594313171e8ef349608e4767bab.jpg</picture>
<vendor>Кама</vendor>
<name>Рециркулятор Кама Р-УФ1x15</name>
<description></description>
</offer>
<offer id="3848" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/kama_r_uf2x15.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9930</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/994/99456fbe37bd8c72edf6257aeb0e1b3a.jpg</picture>
<vendor>Кама</vendor>
<name>Рециркулятор Кама Р-УФ2x15</name>
<description></description>
</offer>
<offer id="3849" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/kama_r_uf3x15.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>11460</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/aa1/aa19ea07dc3c8201a66e34d9eb34b6a5.jpg</picture>
<vendor>Кама</vendor>
<name>Рециркулятор Кама Р-УФ3x15</name>
<description></description>
</offer>
<offer id="3850" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/kama_r_uf1x30.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12220</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/b77/b770e7aadce3013ca9cfc2cc6510d0ea.jpg</picture>
<vendor>Кама</vendor>
<name>Рециркулятор Кама Р-УФ1x30</name>
<description></description>
</offer>
<offer id="3851" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/kama_r_uf2x30.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>13750</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/763/763fe741ae41c760ecffad62c8ce497f.jpg</picture>
<vendor>Кама</vendor>
<name>Рециркулятор Кама Р-УФ2x30</name>
<description></description>
</offer>
<offer id="3852" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/kama_r_uf3x30.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>15280</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/f92/f921a137a8d10a44c0aaaa0c6c56ea54.jpg</picture>
<vendor>Кама</vendor>
<name>Рециркулятор Кама Р-УФ3x30</name>
<description></description>
</offer>
<offer id="3853" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/82_381_nur_01_215_g13_wh.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4267</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/6aa/6aafc58f6615590386a767945b29fcc2.jpg</picture>
<vendor>Navigator</vendor>
<name>Рециркулятор Navigator 82 381 NUR-01-215-G13-WH</name>
<description></description>
</offer>
<offer id="3854" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/14_668_nur_01_215_g13_wh.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4753</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/7ea/7eafec75393345a4aa6d3fcaed0e218c.jpg</picture>
<vendor>Navigator</vendor>
<name>Рециркулятор Navigator 14 668 NUR-01-215-G13-WH</name>
<description></description>
</offer>
<offer id="3855" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/sterilife_30.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>10200</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/181/181449f5a79f3c2a32914ed09182f7b3.jpg</picture>
<vendor>STERN</vendor>
<name>Рециркулятор-облучатель STERILIFE-30</name>
<description></description>
</offer>
<offer id="3856" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/sterilife_60.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>14500</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/14c/14cf43976368ffa03c3181a510d2c5e1.jpg</picture>
<vendor>STERN</vendor>
<name>Рециркулятор-облучатель STERILIFE-60</name>
<description></description>
</offer>
<offer id="3857" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/sterilife_100.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>16200</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/962/9628002a703901d4faa7cd05cecc322d.jpg</picture>
<vendor>STERN</vendor>
<name>Рециркулятор-облучатель STERILIFE-100</name>
<description></description>
</offer>
<offer id="3858" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/sterilife_50.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>13200</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/309/30912e511c01b4c1709a9d7ea06c2297.jpg</picture>
<vendor>STERN</vendor>
<name>Рециркулятор-облучатель STERILIFE-50</name>
<description></description>
</offer>
<offer id="3859" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/atesy_ro_1_15_02_1.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12340</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/12c/12c4a3e22bc11f585751bb450e00b479.jpg</picture>
<vendor>Atesy</vendor>
<name>Рециркулятор-облучатель Atesy РО-1-15-02-1</name>
<description></description>
</offer>
<offer id="3860" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/atesy_ro_2_30_02_1.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>22533</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/0d0/0d0a36b1aa12b0218d0a6ec5f7e05060.jpg</picture>
<vendor>Atesy</vendor>
<name>Рециркулятор-облучатель Atesy РО-2-30-02-1</name>
<description></description>
</offer>
<offer id="3861" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/atesy_ro_1_8_02_1.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>10414</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/b21/b2178dbe0b2ab5d831d33c843fd1ea9a.jpg</picture>
<vendor>Atesy</vendor>
<name>Рециркулятор бактерицидный Atesy РО-1-8-02-1</name>
<description></description>
</offer>
<offer id="3862" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/atesy_ro_2_8_02_1.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12237</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/d6f/d6ffacf8eccdd4747bdd28267d786320.jpg</picture>
<vendor>Atesy</vendor>
<name>Рециркулятор-облучатель Atesy РО-2-8-02-1</name>
<description></description>
</offer>
<offer id="3863" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/atesy_ro_2_15_02_1.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>19073</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/8d3/8d36cb0f6024aab828b11b9e52ff71fa.jpg</picture>
<vendor>Atesy</vendor>
<name>Рециркулятор бактерицидный Atesy РО-2-15-02-1</name>
<description></description>
</offer>
<offer id="3864" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/atesy_ro_1_30_02_1.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>15423</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/2ab/2ab3d04943c2e6dfb511ef051f140847.jpg</picture>
<vendor>Atesy</vendor>
<name>Рециркулятор-облучатель Atesy РО-1-30-02-1</name>
<description></description>
</offer>
<offer id="3865" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/kobor_br6_300n.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>44106</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/84b/84bff3dafeba6c3649a4d2cd93974c88.jpg</picture>
<vendor>КОБОР</vendor>
<name>Рециркулятор КОБОР БР6-300Н</name>
<description></description>
</offer>
<offer id="3866" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/kobor_br6_300.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>37810</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/6ae/6ae6684823de1f5e1712253c78fbfe20.jpg</picture>
<vendor>КОБОР</vendor>
<name>Рециркулятор КОБОР БР6-300</name>
<description></description>
</offer>
<offer id="3867" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/kobor_br4_200n.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>32205</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/057/057b4a39836695f4868f6fdab249ab74.jpg</picture>
<vendor>КОБОР</vendor>
<name>Рециркулятор бактерицидный КОБОР БР4-200Н</name>
<description></description>
</offer>
<offer id="3868" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/kobor_br4_200.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>27568</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/b62/b62b242629a129a5b54ac634774363da.jpg</picture>
<vendor>КОБОР</vendor>
<name>Рециркулятор бактерицидный КОБОР БР4-200</name>
<description></description>
</offer>
<offer id="3869" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/kobor_br2_100n.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>19126</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/10c/10caba0c08d07aa6b37ca1ac8222a492.jpg</picture>
<vendor>КОБОР</vendor>
<name>Рециркулятор бактерицидный КОБОР БР2-100Н</name>
<description></description>
</offer>
<offer id="3870" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/kobor_br2_100.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>16200</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/bbd/bbdd880dc8c9bc940ec95901eb97d584.jpg</picture>
<vendor>КОБОР</vendor>
<name>Рециркулятор бактерицидный КОБОР БР2-100</name>
<description></description>
</offer>
<offer id="3871" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/mkhm_orb_1_30_01.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12325</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/a24/a243c518c2ce47c65d69666a93c864cc.jpg</picture>
<vendor>МХМ</vendor>
<name>Рециркулятор МХМ ОРБ-1-30-01</name>
<description></description>
</offer>
<offer id="3872" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/mkhm_orb_2_15_01.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>16235</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/a16/a161b6a2636cb903be3f9c46ef541dcb.jpg</picture>
<vendor>МХМ</vendor>
<name>Рециркулятор бактерицидный МХМ ОРБ-2-15-01</name>
<description></description>
</offer>
<offer id="3873" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/a_04b.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6900</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/f63/f633fff0f285eedf8fe0b75307a64823.jpg</picture>
<vendor>Аванта</vendor>
<name>Рециркулятор воздуха настольный А-04Б</name>
<description></description>
</offer>
<offer id="3874" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/a_05b_s_datchikom.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>20200</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/634/634f024d1298071c938db3af97935691.jpg</picture>
<vendor>Аванта</vendor>
<name>Рециркулятор А-05Б с датчиком наработки часов</name>
<description></description>
</offer>
<offer id="3875" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/a_06b_s_datchikom.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>26200</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/680/6802689897a27871c18836cffa3e1aa2.jpg</picture>
<vendor>Аванта</vendor>
<name>Рециркулятор А-06Б с датчиком наработки часов</name>
<description></description>
</offer>
<offer id="3876" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/a_04b_potolochnyy.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>22800</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/0a4/0a4023cbd2552a90dd5912bdeb0e6a8d.jpg</picture>
<vendor>Аванта</vendor>
<name>Рециркулятор воздуха А-04Б, потолочный</name>
<description></description>
</offer>
<offer id="3877" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/a_05b_potolochnyy.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>27800</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/8dc/8dcf6f092b4beae6f1408454951d2898.jpg</picture>
<vendor>Аванта</vendor>
<name>Рециркулятор воздуха А-05Б, потолочный</name>
<description></description>
</offer>
<offer id="3878" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/a_06b_potolochnyy.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>32800</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/251/25145e8f8baf4b2395806be7e0e4318c.jpg</picture>
<vendor>Аванта</vendor>
<name>Рециркулятор воздуха А-06Б, потолочный</name>
<description></description>
</offer>
<offer id="3879" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/obrn02_2kh15_001_antiviral.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>11951</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/a87/a87745afe0dfc1ac5b430191d7f4a281.png</picture>
<vendor>АСТЗ Ардатов</vendor>
<name>Рециркулятор ОБРН02-2х15-001 Antiviral</name>
<description></description>
</offer>
<offer id="3880" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/obrn02_2kh30_001_antiviral.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>23985</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/728/728c92017b8fe8b4ab0e1d17178594b5.png</picture>
<vendor>АСТЗ Ардатов</vendor>
<name>Рециркулятор ОБРН02-2х30-001 Antiviral</name>
<description></description>
</offer>
<offer id="3881" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/obrn01_1kh15_foton.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6400</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/0d9/0d9fd921b9adca6eaf776df880d8f118.png</picture>
<vendor>Ксенон</vendor>
<name>Рециркулятор ОБРН01-1х15 Фотон</name>
<description></description>
</offer>
<offer id="3882" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/obrn01_2kh15_foton.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6900</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/6d4/6d41087d1244359603ff85a3e5a15607.png</picture>
<vendor>Ксенон</vendor>
<name>Рециркулятор ОБРН01-2х15 Фотон</name>
<description></description>
</offer>
<offer id="3883" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/rbm_2kh15.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12990</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/41a/41a45821309a7c884411ee7304225ba6.jpg</picture>
<vendor>ЭМА</vendor>
<name>Облучатель-рециркулятор РБм 2Х15</name>
<description></description>
</offer>
<offer id="3884" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/rbm_3kh15.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>15990</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/409/4098fa8c1aaa1c5b573b68d0f9c4748d.jpg</picture>
<vendor>ЭМА</vendor>
<name>Рециркулятор РБм 3Х15</name>
<description></description>
</offer>
<offer id="3885" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/rbm_4kh15.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>17550</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/3df/3df9c61112284d503ad24209c53868ce.jpg</picture>
<vendor>ЭМА</vendor>
<name>Рециркулятор РБм 4Х15</name>
<description></description>
</offer>
<offer id="3886" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/rbm_4kh15_2kh15.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>34740</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/27d/27d55959a49a33cddc6d25d3afb11a0c.jpg</picture>
<vendor>ЭМА</vendor>
<name>Рециркулятор передвижной РБм 4Х15 + 2Х15</name>
<description></description>
</offer>
<offer id="3887" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/rbm_4kh15_3kh15.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>37740</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/734/73437e8c932d4a429a551cfb1b07c38a.jpg</picture>
<vendor>ЭМА</vendor>
<name>Рециркулятор передвижной РБм 4Х15 + 3Х15</name>
<description></description>
</offer>
<offer id="3888" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/rbm_4kh15_4kh15.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>39300</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/c6e/c6e146848cf7ff6ca0f1a4216932f087.jpg</picture>
<vendor>ЭМА</vendor>
<name>Рециркулятор передвижной РБм 4Х15 + 4Х15</name>
<description></description>
</offer>
<offer id="3889" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/chistyy_vozdukh_ekonom_g_15_15w_1.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>11800</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/65f/65f3af55e421a04d8cf06401e16104c6.jpeg</picture>
<vendor>Чистый воздух</vendor>
<name>Рециркулятор &quot;Чистый воздух&quot; горизонтальный (Эконом) G-15 15w*1</name>
<description></description>
</offer>
<offer id="3890" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/chistyy_vozdukh_universal_u_45_15w_3.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>32900</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/e7f/e7f85cf1f55e45b0bbd9d733b009df7f.jpeg</picture>
<vendor>Чистый воздух</vendor>
<name>Рециркулятор &quot;Чистый воздух&quot; универсальный (Universal) U-45 15w*3</name>
<description></description>
</offer>
<offer id="3891" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/chistyy_vozdukh_universal_u_30_15w_2.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>22900</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/7f1/7f12e5c82b252a69e80f0b8e224b11ed.jpeg</picture>
<vendor>Чистый воздух</vendor>
<name>Рециркулятор &quot;Чистый воздух&quot; универсальный (Universal) U-30 15w*2</name>
<description></description>
</offer>
<offer id="3892" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/chistyy_vozdukh_comfort_v_15_15w_1.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12800</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/4fd/4fdcbf6d5eeefc04a9cda5270efa27f8.jpeg</picture>
<vendor>Чистый воздух</vendor>
<name>Рециркулятор &quot;Чистый воздух&quot; (Comfort) V-15 15w*1</name>
<description></description>
</offer>
<offer id="3893" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/chistyy_vozdukh_comfort_v_60_15w_4.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>36900</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/6b5/6b53162f3f68d07024c2dd54f911a864.jpeg</picture>
<vendor>Чистый воздух</vendor>
<name>Рециркулятор &quot;Чистый воздух&quot; (Comfort) V-60 15w*4</name>
<description></description>
</offer>
<offer id="3894" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/chistyy_vozdukh_ekonom_g_30_15w_2.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>14900</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/512/512ecafdb4b743767d7aee9b96d751ed.jpeg</picture>
<vendor>Чистый воздух</vendor>
<name>Рециркулятор &quot;Чистый воздух&quot; (Эконом) G-30 15w*2</name>
<description></description>
</offer>
<offer id="3895" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/chistyy_vozdukh_comfort_v_45_15w_3.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>28900</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/b83/b830c198eeb08bdb5e0dfdd491505b4f.jpeg</picture>
<vendor>Чистый воздух</vendor>
<name>Рециркулятор &quot;Чистый воздух&quot; (Comfort) V-45 15w*3</name>
<description></description>
</offer>
<offer id="3896" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/chistyy_vozdukh_universal_u_15_15w_1.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>13800</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/ff4/ff44a90edb9781efc70cae34f48f00b4.jpeg</picture>
<vendor>Чистый воздух</vendor>
<name>Рециркулятор &quot;Чистый воздух&quot; универсальный (Universal) U-15 15w*1</name>
<description></description>
</offer>
<offer id="3897" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/chistyy_vozdukh_universal_u_60_15w_4.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>39900</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/4b9/4b9e24e9751397cb84114e935f7f1a25.jpeg</picture>
<vendor>Чистый воздух</vendor>
<name>Рециркулятор &quot;Чистый воздух&quot; универсальный (Universal) U-60 15w*4</name>
<description></description>
</offer>
<offer id="3898" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/chistyy_vozdukh_comfort_v_30_15w_2.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>18900</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/12e/12ed8fb54a136f445e1e07670e077a76.jpeg</picture>
<vendor>Чистый воздух</vendor>
<name>Рециркулятор &quot;Чистый воздух&quot; вертикальный (Comfort) V-30 15w*2</name>
<description></description>
</offer>
<offer id="3899" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/htl_advansys_15.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>16000</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/b6a/b6a224c15c95adef548cfd5d3705cf1d.jpg</picture>
<vendor>HTL-Advansys</vendor>
<name>Рециркулятор HTL-ADVANSYS-15</name>
<description></description>
</offer>
<offer id="3900" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/htl_advansys_15u_3in1.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>21500</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/fba/fba7b624f485dbecb2994428a3f5b8ce.jpg</picture>
<vendor>HTL-Advansys</vendor>
<name>Рециркулятор-облучатель HTL-ADVANSYS-15U 3in1</name>
<description></description>
</offer>
<offer id="3901" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/htl_advansys_15_2u_3_in_1.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>22500</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/696/69601db2b9191f330321decc51927acc.jpg</picture>
<vendor>HTL-Advansys</vendor>
<name>Рециркулятор-облучатель HTL-ADVANSYS-15.2U 3 in 1</name>
<description></description>
</offer>
<offer id="3902" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/htl_advansys_30m.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>21000</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/002/00236c4c7af5b9fe65464e61267e843c.jpg</picture>
<vendor>HTL-Advansys</vendor>
<name>Рециркулятор HTL-ADVANSYS-30M</name>
<description></description>
</offer>
<offer id="3903" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/htl_advansys_15s12.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>30000</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/119/11986eeb2d033df87154ece28bc5369d.jpg</picture>
<vendor>HTL-Advansys</vendor>
<name>Рециркулятор для общественного транспорта HTL-ADVANSYS-15С12</name>
<description></description>
</offer>
<offer id="3904" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/htl_advansys_30.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>34200</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/e84/e8477e32af6ae9494564e5a2cbefe04a.jpg</picture>
<vendor>HTL-Advansys</vendor>
<name>Рециркулятор HTL-ADVANSYS-30</name>
<description></description>
</offer>
<offer id="3905" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/htl_advansys_30u_3_in_1.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>54000</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/57a/57a4bb16498dccf6ff2b64fedae0bf28.jpg</picture>
<vendor>HTL-Advansys</vendor>
<name>Рециркулятор-облучатель HTL-ADVANSYS-30U 3 in 1</name>
<description></description>
</offer>
<offer id="3906" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/htl_advansys_3012.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>55602</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/87b/87b31ac15bb7cff5bf83651425f88d7c.jpg</picture>
<vendor>HTL-Advansys</vendor>
<name>Рециркулятор HTL-ADVANSYS-3012</name>
<description></description>
</offer>
<offer id="3907" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/htl_advansys_6001u.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>63600</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/21d/21d36a9c30c3c7beaa879265122633ab.jpg</picture>
<vendor>HTL-Advansys</vendor>
<name>Рециркулятор-облучатель HTL-ADVANSYS-6001U</name>
<description></description>
</offer>
<offer id="3908" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/htl_advansys_3018.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>61200</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/2d9/2d971eea3eea05af257d1cce49c9c502.jpg</picture>
<vendor>HTL-Advansys</vendor>
<name>Рециркулятор HTL-ADVANSYS-3018</name>
<description></description>
</offer>
<offer id="3909" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/puri_uv30w.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>14900</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/54a/54a963c2c10f3b3307869990bfafa356.jpeg</picture>
<vendor>PURI</vendor>
<name>Рециркулятор PURI UV30W</name>
<description></description>
</offer>
<offer id="3910" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/puri_uv60w_2kh30w.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>15900</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/e5b/e5b862e7fbac340041da088501720ead.jpeg</picture>
<vendor>PURI</vendor>
<name>Рециркулятор PURI UV60W</name>
<description></description>
</offer>
<offer id="3911" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/ufr1_670_02.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>29330</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/621/6218222f0307f73cd4b2357343cd8b13.jpg</picture>
<vendor>Лючера</vendor>
<name>Рециркулятор UFR1-670-02</name>
<description></description>
</offer>
<offer id="3912" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/ufr2_670_01.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>18630</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/2e5/2e5df3b40bb464ca542357a1d4994933.jpg</picture>
<vendor>Лючера</vendor>
<name>Рециркулятор UFR2-670-01</name>
<description></description>
</offer>
<offer id="3913" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/orvb_100_ufik.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4000</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/2ef/2ef817809f1ef40066e39d5bfd5b8a4c.jpg</picture>
<vendor>УФИК</vendor>
<name>Рециркулятор ОРВБ-100 «УФИК»</name>
<description></description>
</offer>
<offer id="3914" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/navi_2kh15vt.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4000</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/ae1/ae1e47564165d062fe2670c5d2e1bf20.png</picture>
<vendor>Navi</vendor>
<name>Рециркулятор Navi 2х15Вт</name>
<description></description>
</offer>
<offer id="3915" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/nortec_rbu_r2d2.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>14900</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/8cd/8cde197e76f3198e55a0fb7f793d4deb.png</picture>
<vendor>NORTEC РБУ</vendor>
<name>Рециркулятор NORTEC РБУ Р2Д2</name>
<description></description>
</offer>
<offer id="3916" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/nortec_rbu_r2d2n.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>16400</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/aee/aee651db0e359164bd8fdcd635742719.png</picture>
<vendor>NORTEC РБУ</vendor>
<name>Рециркулятор NORTEC РБУ Р2Д2Н</name>
<description></description>
</offer>
<offer id="3917" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/nortec_rbu_110.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>16900</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/b87/b8762b011e1cef648cef967d37472eed.png</picture>
<vendor>NORTEC РБУ</vendor>
<name>Рециркулятор NORTEC РБУ-110</name>
<description></description>
</offer>
<offer id="3918" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/nortec_rbu_110n.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>19900</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/8b8/8b8088aff745d3c482de99bfec47da29.png</picture>
<vendor>NORTEC РБУ</vendor>
<name>Рециркулятор NORTEC РБУ-110Н</name>
<description></description>
</offer>
<offer id="3919" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/nortec_rbu_155.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>19900</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/03c/03c96792dd58f1ba21eecae4fa82c9a1.png</picture>
<vendor>NORTEC РБУ</vendor>
<name>Рециркулятор NORTEC РБУ-155</name>
<description></description>
</offer>
<offer id="3920" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/nortec_rbu_155n.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>25500</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/a2c/a2c11179c82cf4c32e0f6bbbe941e7af.png</picture>
<vendor>NORTEC РБУ</vendor>
<name>Рециркулятор NORTEC РБУ-155Н</name>
<description></description>
</offer>
<offer id="3921" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/nortec_rbu_600.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>120900</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/1d1/1d179bc377ab7c4d948a263cae51fbf9.png</picture>
<vendor>NORTEC РБУ</vendor>
<name>Рециркулятор NORTEC РБУ-600</name>
<description></description>
</offer>
<offer id="3922" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/obr_15_2_h.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>14200</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/db5/db55c9f71b6a0ec77681d9e9562ad1df.jpg</picture>
<vendor>Мед ТеКо</vendor>
<name>Рециркулятор ОБР-15/2-H</name>
<description></description>
</offer>
<offer id="3923" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/obr_15.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>10300</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/b6c/b6c22e7845af4453a3b77aef91d5d762.jpg</picture>
<vendor>Мед ТеКо</vendor>
<name>Рециркулятор ОБР-15</name>
<description></description>
</offer>
<offer id="3924" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/obr_15_2_p.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>18550</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/e09/e092b4b45c09578728673f7b476a41a7.jpg</picture>
<vendor>Мед ТеКо</vendor>
<name>Рециркулятор ОБР-15/2-П</name>
<description></description>
</offer>
<offer id="3925" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/obr_30_2_h.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>17100</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/c6f/c6f410efa1e42663ac117d26ff27f759.jpg</picture>
<vendor>Мед ТеКо</vendor>
<name>Рециркулятор ОБР-30/2-H</name>
<description></description>
</offer>
<offer id="3926" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/obr_30_2_p.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>20600</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/8be/8bed60f87d3572fd2ad651c67c1e0d1d.jpg</picture>
<vendor>Мед ТеКо</vendor>
<name>Рециркулятор ОБР-30/2-П</name>
<description></description>
</offer>
<offer id="3927" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/obr_30.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>14200</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/f30/f30bdc993c4892d4f9d828ec70d142d3.jpg</picture>
<vendor>Мед ТеКо</vendor>
<name>Рециркулятор ОБР-30</name>
<description></description>
</offer>
<offer id="3928" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/violet_1.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>10320</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/5e9/5e90c3d174cdedd55ff44099a5320461.jpg</picture>
<vendor>VIOLET</vendor>
<name>Рециркулятор VIOLET 1</name>
<description></description>
</offer>
<offer id="3929" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/violet_2.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12460</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/44a/44a5e0173055cbc4276876076d02a601.jpg</picture>
<vendor>VIOLET</vendor>
<name>Рециркулятор VIOLET 2</name>
<description></description>
</offer>
<offer id="3930" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/mbox_ro_50_uv.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12500</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/35d/35d28743ad176aee64ef33ea6460489c.jpg</picture>
<vendor>MBox</vendor>
<name>Рециркулятор MBox РО-50 UV</name>
<description></description>
</offer>
<offer id="3931" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/mbox_ro_100_uv.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>16500</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/85b/85b3384d8d8c9f33f2749e35d2d4e56d.jpg</picture>
<vendor>MBox</vendor>
<name>Рециркулятор MBox РО-100 UV</name>
<description></description>
</offer>
<offer id="3932" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/mbox_ro_200_uv.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>21600</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/cae/caeb2f68467893d3300b3dd502724335.jpg</picture>
<vendor>MBox</vendor>
<name>Рециркулятор MBox РО-200 UV</name>
<description></description>
</offer>
<offer id="3933" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/mbox_ro_250_uv.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>70500</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/5b0/5b0b39ae27580e7759c3e05835da558d.jpg</picture>
<vendor>MBox</vendor>
<name>Рециркулятор MBox РО-250 UV</name>
<description></description>
</offer>
<offer id="3934" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/mbox_ro_350_uv.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>99200</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/9cb/9cb9d32f22d7c322a1394cfb87e4bf93.jpg</picture>
<vendor>MBox</vendor>
<name>Рециркулятор MBox РО-350 UV</name>
<description></description>
</offer>
<offer id="3935" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/eslayt_lu_rb_110_200.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>17190</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/e64/e64048c34d0f91a706b75733bf0cc3ec.jpg</picture>
<vendor>Эслайт</vendor>
<name>Рециркулятор Эслайт LU-rb 110/200</name>
<description></description>
</offer>
<offer id="3936" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/eslayt_lu_rb_60_120.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>18800</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/d48/d48dfcde31b34c36e1fdaab0de61409c.jpg</picture>
<vendor>Эслайт</vendor>
<name>Рециркулятор Эслайт LU-rb 60/120</name>
<description></description>
</offer>
<offer id="3937" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/eslayt_lu_rb_60_100.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>13900</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/1e4/1e4d662300320b829ca6da80b63343da.jpg</picture>
<vendor>Эслайт</vendor>
<name>Рециркулятор Эслайт LU-rb 60/100</name>
<description></description>
</offer>
<offer id="3938" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/eslayt_lu_rb_30_60.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12300</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/f28/f2869278e9798a613ecaa4ddc3e427b6.jpg</picture>
<vendor>Эслайт</vendor>
<name>Рециркулятор Эслайт LU-rb 30/60</name>
<description></description>
</offer>
<offer id="3939" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/eslayt_lu_rb_15_30.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>8550</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/a6d/a6dc9b83187bfdb3361552599c563326.jpg</picture>
<vendor>Эслайт</vendor>
<name>Рециркулятор Эслайт LU-rb 15/30</name>
<description></description>
</offer>
<offer id="3940" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/trendvision_nord_70.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>11990</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/ea4/ea4b5d61ecafbc86b0f01af1ca66d224.jpg</picture>
<vendor>TrendVision</vendor>
<name>Рециркулятор TrendVision NORD 70</name>
<description></description>
</offer>
<offer id="3941" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/trendvision_nord_100.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12990</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/9a9/9a9ffc0db233ee968e988eade6edb0b0.jpg</picture>
<vendor>TrendVision</vendor>
<name>Рециркулятор TrendVision NORD 100</name>
<description></description>
</offer>
<offer id="3942" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/trendvision_tayfun_1_15.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>10990</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/27f/27f03f9867030e7368fa1e6bd41fc492.jpg</picture>
<vendor>TrendVision</vendor>
<name>Рециркулятор TrendVision Тайфун 1-15</name>
<description></description>
</offer>
<offer id="3943" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/trendvision_tayfun_2_15.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>13990</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/ac2/ac2d8a5501572bd913e7c1106c1985bb.jpg</picture>
<vendor>TrendVision</vendor>
<name>Рециркулятор TrendVision Тайфун 2-15</name>
<description></description>
</offer>
<offer id="3944" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/trendvision_craft.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12990</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/fd3/fd3afa8d7d2040014fa18452b487f616.jpg</picture>
<vendor>TrendVision</vendor>
<name>Рециркулятор TrendVision Craft</name>
<description></description>
</offer>
<offer id="3945" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/trendvision_craft_60.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>14590</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/331/3318e9a2ee4a28d7cb3410af9486222c.jpg</picture>
<vendor>TrendVision</vendor>
<name>Рециркулятор TrendVision Craft 60</name>
<description></description>
</offer>
<offer id="3946" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/trendvision_st_1.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>11990</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/058/058deda50443a56983098ebc79b4132f.jpg</picture>
<vendor>TrendVision</vendor>
<name>Рециркулятор TrendVision ST-1</name>
<description></description>
</offer>
<offer id="3947" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/trendvision_smart_1.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9900</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/e0c/e0c2894e7d722a459f940f7a0a2ba02a.png</picture>
<vendor>TrendVision</vendor>
<name>Рециркулятор TrendVision СМАРТ 1</name>
<description></description>
</offer>
<offer id="3948" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/trendvision_smart_2.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>10900</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/e47/e47f0c4e5c3d6f810a0445bf85820b62.png</picture>
<vendor>TrendVision</vendor>
<name>Рециркулятор TrendVision СМАРТ 2</name>
<description></description>
</offer>
<offer id="3949" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/trendvision_smart_2m_bez_stoyki.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9100</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/332/332781b47b99242196238ab701ff946c.jpg</picture>
<vendor>TrendVision</vendor>
<name>Рециркулятор TrendVision СМАРТ 2M (без стойки)</name>
<description></description>
</offer>
<offer id="3950" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/antivirus_prom_combi.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>18900</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/220/2204b94303289ca67794d25454d6d7af.jpg</picture>
<vendor>LEDeffect</vendor>
<name>Рециркулятор АНТИВИРУС ПРОМ Combi</name>
<description></description>
</offer>
<offer id="3951" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/antivirus_prom.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>16900</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/931/931642b78c5c7ff14f2e56d36978d18d.jpg</picture>
<vendor>LEDeffect</vendor>
<name>Рециркулятор АНТИВИРУС ПРОМ</name>
<description></description>
</offer>
<offer id="3952" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/antivirus.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9900</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/cd7/cd7163078ca2f8d10648b7670d1ad081.jpg</picture>
<vendor>LEDeffect</vendor>
<name>Рециркулятор АНТИВИРУС</name>
<description></description>
</offer>
<offer id="3953" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/ofis_antivirus.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>13900</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/ff8/ff8767978909e77c9829ede2cecf7830.jpg</picture>
<vendor>LEDeffect</vendor>
<name>Рециркулятор ОФИС АНТИВИРУС</name>
<description></description>
</offer>
<offer id="3954" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/riteyl_antivirus.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>15900</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/9cd/9cd662f85fa92d6a4c8939762caeed8a.jpg</picture>
<vendor>LEDeffect</vendor>
<name>Рециркулятор РИТЕЙЛ АНТИВИРУС</name>
<description></description>
</offer>
<offer id="3955" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/potok_100_01.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>11950</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/d2b/d2b397efdfdeeba834d4cfd0c7abf0b7.png</picture>
<vendor>Поток</vendor>
<name>Рециркулятор Поток 100/01</name>
<description></description>
</offer>
<offer id="3956" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/potok_100_02.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1590</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/345/345592c1bb8c2d699d7fb38214785e66.png</picture>
<vendor>Поток</vendor>
<name>Рециркулятор Поток 100/02</name>
<description></description>
</offer>
<offer id="3957" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/potok_190_02.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>22950</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/38f/38f22a5f1cdd5a61a3e76574addc1c5f.png</picture>
<vendor>Поток</vendor>
<name>Рециркулятор Поток 190/02</name>
<description></description>
</offer>
<offer id="3958" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/potok_300_02.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>33200</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/cc5/cc55fa836575ff7f7e0cbd15399a3e6b.png</picture>
<vendor>Поток</vendor>
<name>Рециркулятор Поток 300/02</name>
<description></description>
</offer>
<offer id="3959" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/potok_890_04.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>60550</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/2cf/2cf128a6b1c6fcdf1dddeb9e138f3cef.png</picture>
<vendor>Поток</vendor>
<name>Рециркулятор Поток 890/04</name>
<description></description>
</offer>
<offer id="3960" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/potok_300_04.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>46950</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/87c/87ccf7215264ddc2db903339f337854f.png</picture>
<vendor>Поток</vendor>
<name>Рециркулятор Поток 300/04</name>
<description></description>
</offer>
<offer id="3961" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/bbo123_15_1_b_r_gen2_epra.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>8500</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/018/0181aae20602969038af07d58064d043.jpg</picture>
<vendor>GALAD</vendor>
<name>Рециркулятор с лампой ББО123-15/1/Б/Р GEN2 ЭПРА</name>
<description></description>
</offer>
<offer id="3962" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/skat_uv36.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7900</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/58a/58a24611a3f0705fd6d5e5e8bffd69b6.jpg</picture>
<vendor>Бастион</vendor>
<name>УФ облучатель-рециркулятор SKAT UV36</name>
<description></description>
</offer>
<offer id="3963" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/skat_uv55.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9900</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/4fc/4fc48334ff82046cd7ed893343a649c0.jpg</picture>
<vendor>Бастион</vendor>
<name>УФ облучатель-рециркулятор SKAT UV55</name>
<description></description>
</offer>
<offer id="3964" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/v1_c0_0uv70_10op0.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>21384</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/060/060bcd61cbc30b6301b784095432e5fc.jpg</picture>
<vendor>Varton</vendor>
<name>Рециркулятор облучатель V1-C0-0UV70-10OP0</name>
<description></description>
</offer>
<offer id="3965" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/v1_c0_0uv70_10pr0.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>21384</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/a09/a09c6b7089f072fcff943b1883a12a40.jpg</picture>
<vendor>Varton</vendor>
<name>Рециркулятор облучатель V1-C0-0UV70-10PR0</name>
<description></description>
</offer>
<offer id="3966" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/v1_c0_0uv70_10opd.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>23094</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/364/36402e3b961a9b1a1beb426f7ed68fb6.jpg</picture>
<vendor>Varton</vendor>
<name>Рециркулятор облучатель V1-C0-0UV70-10OPD</name>
<description></description>
</offer>
<offer id="3967" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/v1_c0_0uv70_10g06.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>25229</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/7cd/7cde1d9204f9165909f6075ed8f6a3f0.jpg</picture>
<vendor>Varton</vendor>
<name>Рециркулятор облучатель V1-C0-0UV70-10G06</name>
<description></description>
</offer>
<offer id="3968" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/v1_c0_0uv70_10gd6.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>26929</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/a35/a35f106e336ed4cbe074a785f0dcbe82.jpg</picture>
<vendor>Varton</vendor>
<name>Рециркулятор облучатель V1-C0-0UV70-10GD6</name>
<description></description>
</offer>
<offer id="3969" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/v1_c0_0uv70_10opa.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>28222</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/334/334bd4f2a5159a6f4e821d7b8c17b754.jpg</picture>
<vendor>Varton</vendor>
<name>Рециркулятор облучатель V1-C0-0UV70-10OPA</name>
<description></description>
</offer>
<offer id="3970" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/v1_c0_0uv70_10ga6.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>32068</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/044/044edb72d6aecdd2b495354e9784e257.jpg</picture>
<vendor>Varton</vendor>
<name>Рециркулятор облучатель V1-C0-0UV70-10GA6</name>
<description></description>
</offer>
<offer id="3971" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/antibiotic_r_led_215_4000k_combi1.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>27753</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/82d/82d225de680a49170e9985b69b839c5c.png</picture>
<vendor>Световые Технологии</vendor>
<name>Светодиодный светильник с бактерицидным рециркулятором ANTIBIOTIC/R LED 215 4000K COMBI1</name>
<description></description>
</offer>
<offer id="3972" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/antibiotic_r_led_215_4000k_combi1_set.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>37819</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/9c1/9c13a4ad886ab0db35f8ab2369528784.png</picture>
<vendor>Световые Технологии</vendor>
<name>Светодиодный светильник с бактерицидным рециркулятором ANTIBIOTIC/R LED 215 4000K COMBI1 SET</name>
<description></description>
</offer>
<offer id="3973" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/airom_one.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>18200</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/bd2/bd26505f2586c8f23f692dd2f4401ad8.jpg</picture>
<vendor>AIROM</vendor>
<name>Рециркулятор Airom one</name>
<description></description>
</offer>
<offer id="3974" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/esi_v120.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>19900</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/18b/18bb62ad4bc62cec18c17783b5c0b794.png</picture>
<vendor>ESI</vendor>
<name>УФ Рециркулятор ESI В120</name>
<description></description>
</offer>
<offer id="3975" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/esi_v60.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>15900</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/b19/b19da7a1483f3392195fe0469aec8b98.png</picture>
<vendor>ESI</vendor>
<name>УФ Рециркулятор ESI В60</name>
<description></description>
</offer>
<offer id="3976" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/esi_a30.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12900</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/b41/b41bfb0adb1a761828c435e84a1a6a43.png</picture>
<vendor>ESI</vendor>
<name>УФ Рециркулятор ESI А30</name>
<description></description>
</offer>
<offer id="3977" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/esi_a15.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9900</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/367/36708120ef1efb2e9269f72ee6ce0736.png</picture>
<vendor>ESI</vendor>
<name>УФ Рециркулятор ESI А15</name>
<description></description>
</offer>
<offer id="3978" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/esi_s60.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>16900</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/6e7/6e755313d62ac6d6c6beeefc7fc911a9.png</picture>
<vendor>ESI</vendor>
<name>УФ Рециркулятор ESI S60</name>
<description></description>
</offer>
<offer id="3979" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/esi_s45.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>14900</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/fc7/fc74328247cc17b65da64a1076c6d896.png</picture>
<vendor>ESI</vendor>
<name>УФ Рециркулятор ESI S45</name>
<description></description>
</offer>
<offer id="3980" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/esi_s30.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12900</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/d1a/d1af1b80c52c7661754b1cc531976e32.png</picture>
<vendor>ESI</vendor>
<name>УФ Рециркулятор ESI S30</name>
<description></description>
</offer>
<offer id="3981" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/esi_p60_s_pultom.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>16900</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/d20/d20353e97bedecff68812ab5f544b7af.png</picture>
<vendor>ESI</vendor>
<name>УФ Рециркулятор ESI P60 с пультом ДУ для потолков Armstrong</name>
<description></description>
</offer>
<offer id="3982" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/esi_p45_s_pultom.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>14900</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/5fb/5fbc47abbc93da61f750ed479577997c.png</picture>
<vendor>ESI</vendor>
<name>УФ Рециркулятор ESI P45 с пультом ДУ для потолков Armstrong</name>
<description></description>
</offer>
<offer id="3983" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/esi_p30_s_pultom.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12900</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/9ab/9abe040d0345b4688a69da68301a93a6.png</picture>
<vendor>ESI</vendor>
<name>УФ Рециркулятор ESI P30 с пультом ДУ для потолков Armstrong</name>
<description></description>
</offer>
<offer id="3984" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/dz_215_nc.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9944</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/d7f/d7f026051de6259d84fe080566336d50.jpg</picture>
<vendor>DesAir</vendor>
<name>Рециркулятор DZ-215-НC</name>
<description></description>
</offer>
<offer id="3985" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/dz_315_nc.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>10944</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/f92/f927ea78f7e8780d7ba276aee918bcb3.jpg</picture>
<vendor>DesAir</vendor>
<name>Рециркулятор DZ-315-НC</name>
<description></description>
</offer>
<offer id="3986" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/dz_230_ns.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12196</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/ead/ead6644911267816e643c022ec10fc66.jpg</picture>
<vendor>DesAir</vendor>
<name>Рециркулятор DZ-230-НС</name>
<description></description>
</offer>
<offer id="3987" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/dz_215_np.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12450</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/fac/fac56a2fa75b940ae65559555701e81c.jpg</picture>
<vendor>DesAir</vendor>
<name>Рециркулятор DZ-215-НП</name>
<description></description>
</offer>
<offer id="3988" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/dz_215_nc_t.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12950</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/a24/a2423fccb2b85f929d38a4db06a0183e.jpg</picture>
<vendor>DesAir</vendor>
<name>Рециркулятор DZ-215-НC-T</name>
<description></description>
</offer>
<offer id="3989" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/dz_315_np.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>13430</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/e00/e009a07cb6618133e19c4e12df7dca94.jpg</picture>
<vendor>DesAir</vendor>
<name>Рециркулятор DZ-315-НП</name>
<description></description>
</offer>
<offer id="3990" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/dz_230_np.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>14670</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/885/885ef672d04c57ce1a6c3da0f67e48fa.jpg</picture>
<vendor>DesAir</vendor>
<name>Рециркулятор DZ-230-НП</name>
<description></description>
</offer>
<offer id="3991" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/dz_330_ns.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>15550</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/c41/c412305dd2641e29d7828e2e31bf6b04.jpg</picture>
<vendor>DesAir</vendor>
<name>Рециркулятор DZ-330-НС</name>
<description></description>
</offer>
<offer id="3992" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/dz_330_np.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>18050</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/279/279d90dce641efab3f1960bc1114b903.jpg</picture>
<vendor>DesAir</vendor>
<name>Рециркулятор DZ-330-НП</name>
<description></description>
</offer>
<offer id="3993" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/eko_r_15.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9990</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/b22/b22baded0aa373e766d960b41d9fab21.jpg</picture>
<vendor>ЭКО-Р</vendor>
<name>Рециркулятор ЭКО-Р 15</name>
<description></description>
</offer>
<offer id="3994" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/eko_r_30.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>10990</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/32f/32fb298a418a690a4bd5a8210319e872.jpg</picture>
<vendor>ЭКО-Р</vendor>
<name>Рециркулятор ЭКО-Р 30</name>
<description></description>
</offer>
<offer id="3995" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/eko_r_60.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>17500</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/2ed/2ed65f86a33d1d3bb8635c8d8730cf95.jpg</picture>
<vendor>ЭКО-Р</vendor>
<name>Рециркулятор ЭКО-Р 60</name>
<description></description>
</offer>
<offer id="3996" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/eko_r_120.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>23950</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/812/812f9dd9f2c6ad357888f0a4753369ed.jpg</picture>
<vendor>ЭКО-Р</vendor>
<name>Рециркулятор ЭКО-Р 120</name>
<description></description>
</offer>
<offer id="3997" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/eko_r_15_so_schetchikom.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12050</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/cca/cca0134a03f8580f479a0e8bc7bdc267.jpg</picture>
<vendor>ЭКО-Р</vendor>
<name>Рециркулятор ЭКО-Р 15 со счетчиком ресурса УФ-ламп</name>
<description></description>
</offer>
<offer id="3998" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/eko_r_30_so_schetchikom.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>15490</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/381/38168ecbd2622637254ad652b9a0ee48.jpg</picture>
<vendor>ЭКО-Р</vendor>
<name>Рециркулятор ЭКО-Р 30 со счетчиком ресурса УФ-ламп</name>
<description></description>
</offer>
<offer id="3999" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/eko_r_60_so_schetchikom.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>19550</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/cf3/cf323e41994eefda8be729919d12719d.jpg</picture>
<vendor>ЭКО-Р</vendor>
<name>Рециркулятор ЭКО-Р 60 со счетчиком ресурса УФ-ламп</name>
<description></description>
</offer>
<offer id="4000" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/eko_r_120_so_schetchikom.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>26050</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/f39/f39d07f089242a687e9cf8d53679d47e.jpg</picture>
<vendor>ЭКО-Р</vendor>
<name>Рециркулятор ЭКО-Р 120 со счетчиком ресурса УФ-ламп</name>
<description></description>
</offer>
<offer id="4001" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/orion_1.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>8490</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/853/853fde815e29dce8ade9af5ae577a232.jpg</picture>
<vendor>Орион</vendor>
<name>Рециркулятор Орион-1</name>
<description></description>
</offer>
<offer id="4002" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/orion_2.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12090</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/c47/c47417879102100e1363c30880a77ff6.jpg</picture>
<vendor>Орион</vendor>
<name>Рециркулятор Орион-2</name>
<description></description>
</offer>
<offer id="4003" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/orion_3.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>14190</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/e28/e28c89ea20a8e24f23391f58eaae298b.jpg</picture>
<vendor>Орион</vendor>
<name>Рециркулятор Орион-3</name>
<description></description>
</offer>
<offer id="4004" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/orion_4.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>17690</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/eae/eaea991ef8c20ec61478da4c15794fe1.jpg</picture>
<vendor>Орион</vendor>
<name>Рециркулятор Орион-4</name>
<description></description>
</offer>
<offer id="4005" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/orion_5.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>19990</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/050/0500c4a327a2869d07179b93e342a2cf.jpg</picture>
<vendor>Орион</vendor>
<name>Рециркулятор Орион-5</name>
<description></description>
</offer>
<offer id="4006" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/orion_6.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>22550</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/f34/f34e343f184f580baccf652d284aee75.jpg</picture>
<vendor>Орион</vendor>
<name>Рециркулятор Орион-6</name>
<description></description>
</offer>
<offer id="4007" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/raylight_s.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9450</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/4d9/4d9e7c6dae3b2b02dc849519e8a53769.jpg</picture>
<vendor>RayLight</vendor>
<name>Рециркулятор воздуха RayLight S</name>
<description></description>
</offer>
<offer id="4008" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/raylight_c.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>10750</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/dd2/dd276f05e77090807efe2f1119e395e0.jpg</picture>
<vendor>RayLight</vendor>
<name>Рециркулятор воздуха RayLight C</name>
<description></description>
</offer>
<offer id="4009" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/raylight_m.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>18350</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/220/2200045f6b5ae7ad1e0ea7203f565191.jpg</picture>
<vendor>RayLight</vendor>
<name>Рециркулятор воздуха RayLight M</name>
<description></description>
</offer>
<offer id="4010" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/raylight_l.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>26340</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/26d/26d477c1c141b8f7ccd067798f0015c8.jpg</picture>
<vendor>RayLight</vendor>
<name>Рециркулятор воздуха RayLight L</name>
<description></description>
</offer>
<offer id="4011" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/raylight_xl.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>34650</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/1de/1defacd723ff6147903841a4f3a38325.jpg</picture>
<vendor>RayLight </vendor>
<name>Рециркулятор воздуха RayLight XL</name>
<description></description>
</offer>
<offer id="4012" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/vakio_reflash_60.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>14900</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/b91/b91ee627569c9b4365714cdd08769d93.png</picture>
<vendor>VAKIO</vendor>
<name>Рециркулятор VAKIO reFLASH 60</name>
<description></description>
</offer>
<offer id="4013" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/vakio_reflash_60_s_osnovaniem.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>17600</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/206/2069262d2fe004da37976bf71e65b370.jpeg</picture>
<vendor>VAKIO</vendor>
<name>Рециркулятор VAKIO reFLASH 60 с мобильным основанием</name>
<description></description>
</offer>
<offer id="4014" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/vakio_reflash_120.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>19900</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/26e/26e8144a59cc9a041a3681b1c0482d34.png</picture>
<vendor>VAKIO</vendor>
<name>Рециркулятор VAKIO reFLASH 120</name>
<description></description>
</offer>
<offer id="4015" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/vakio_reflash_120_s_osnovaniem.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>22600</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/5ea/5ea0560a1868bb8f44e3e23435c00f78.jpeg</picture>
<vendor>VAKIO</vendor>
<name>Рециркулятор VAKIO reFLASH 120 с мобильным основанием</name>
<description></description>
</offer>
<offer id="4016" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/sfera_112_03.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6210</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/0b2/0b2d2fcdaaf3243c156659bec703bd23.jpeg</picture>
<vendor>Сфера</vendor>
<name>Рециркулятор Сфера 112/03</name>
<description></description>
</offer>
<offer id="4017" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/ekolyumen_uf_arm36_08.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>15605</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/e85/e856c55dee105331bcaa9964805759da.jpg</picture>
<vendor>ЭКОЛЮМЕН</vendor>
<name>Рециркулятор ЭКОЛЮМЕН УФ-ARM36-08</name>
<description></description>
</offer>
<offer id="4018" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/ekolyumen_uf_arm36_15.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>15220</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/339/33908b72f65395bfad27f2be37af6bf9.jpg</picture>
<vendor>ЭКОЛЮМЕН</vendor>
<name>Рециркулятор ЭКОЛЮМЕН УФ-ARM36-15</name>
<description></description>
</offer>
<offer id="4019" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/ekolyumen_uf_arm36_30.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>20720</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/4c4/4c436c416de9cf593cc753a214e3fd82.jpg</picture>
<vendor>ЭКОЛЮМЕН</vendor>
<name>Рециркулятор ЭКОЛЮМЕН УФ-ARM36-30</name>
<description></description>
</offer>
<offer id="4020" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/ekolyumen_uf_arm36_45.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>26850</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/99b/99b4c97bd8de807e5566450f40939b90.jpg</picture>
<vendor>ЭКОЛЮМЕН</vendor>
<name>Рециркулятор ЭКОЛЮМЕН УФ-ARM36-45</name>
<description></description>
</offer>
<offer id="4021" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/tm_dez_fabrika_serii_t_s_taymerom.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>19000</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/eb7/eb7d93320c454858146a2085083e2ab2.png</picture>
<vendor>Dez Fabrika</vendor>
<name>Рециркулятор ТМ Dez Fabrika серии Т с механическим таймером 120 Вт</name>
<description></description>
</offer>
<offer id="4022" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/tm_dez_fabrika_serii_t_s_taymerom_15.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>8500</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/120/12006cdd2745dd694c6298d09617a412.png</picture>
<vendor>Dez Fabrika</vendor>
<name>Рециркулятор ТМ Dez Fabrika серии Т с механическим таймером 15 Вт</name>
<description></description>
</offer>
<offer id="4023" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/tm_dez_fabrika_serii_t_s_taymerom_180_vt.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>26550</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/5ab/5abf6737330e7cd8b7c0b6e84563a671.png</picture>
<vendor>Dez Fabrika</vendor>
<name>Рециркулятор ТМ Dez Fabrika серии Т с механическим таймером 180 Вт</name>
<description></description>
</offer>
<offer id="4024" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/tm_dez_fabrika_serii_t_s_taymerom_30_vt.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>8500</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/88e/88e762884102fb895dd12c1b6ad65988.png</picture>
<vendor>Dez Fabrika</vendor>
<name>Рециркулятор ТМ Dez Fabrika серии Т с механическим таймером 30 Вт</name>
<description></description>
</offer>
<offer id="4025" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/tm_dez_fabrika_serii_t_s_taymerom_45_vt.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12500</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/315/315f69eb54e52c7c966777863efa2224.png</picture>
<vendor>Dez Fabrika</vendor>
<name>Рециркулятор ТМ Dez Fabrika серии Т с механическим таймером 45 Вт</name>
<description></description>
</offer>
<offer id="4026" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/tm_dez_fabrika_serii_t_s_taymerom_60_vt.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12900</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/f7c/f7c9e23b363aa21f51d6202be8afb5bf.png</picture>
<vendor>Dez Fabrika</vendor>
<name>Рециркулятор ТМ Dez Fabrika серии Т с механическим таймером 60 Вт</name>
<description></description>
</offer>
<offer id="4027" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/tm_dez_fabrika_serii_t_bez_taymera_120_vt.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>17300</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/ae7/ae78702c9e928f7a421a27c5adac0b33.png</picture>
<vendor>Dez Fabrika</vendor>
<name>Рециркулятор ТМ Dez Fabrika серии Т без таймера 120 Вт</name>
<description></description>
</offer>
<offer id="4028" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/tm_dez_fabrika_serii_t_bez_taymera_15_vt.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6500</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/926/926a705407bf81651964bb8bf62fc79f.png</picture>
<vendor>Dez Fabrika</vendor>
<name>Рециркулятор ТМ Dez Fabrika серии Т без таймера 15 Вт</name>
<description></description>
</offer>
<offer id="4029" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/tm_dez_fabrika_serii_t_bez_taymera_180_vt.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>25000</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/154/154f419201dec0e3c5d7e9499ae1db22.png</picture>
<vendor>Dez Fabrika</vendor>
<name>Рециркулятор ТМ Dez Fabrika серии Т без таймера 180 Вт</name>
<description></description>
</offer>
<offer id="4030" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/tm_dez_fabrika_serii_t_bez_taymera_30_vt.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7000</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/bc5/bc5178a596e7ffcf8e631e9e478801d9.png</picture>
<vendor>Dez Fabrika</vendor>
<name>Рециркулятор ТМ Dez Fabrika серии Т без таймера 30 Вт</name>
<description></description>
</offer>
<offer id="4031" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/tm_dez_fabrika_serii_t_bez_taymera_45_vt.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>10500</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/2cd/2cd2a0f57cb5c2e69693780f7be88e19.png</picture>
<vendor>Dez Fabrika</vendor>
<name>Рециркулятор ТМ Dez Fabrika серии Т без таймера 45 Вт</name>
<description></description>
</offer>
<offer id="4032" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/tm_dez_fabrika_serii_t_bez_taymera_60_vt.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>11300</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/dc3/dc36e681550038b8fc5b404866be65c2.png</picture>
<vendor>Dez Fabrika</vendor>
<name>Рециркулятор ТМ Dez Fabrika серии Т без таймера 60 Вт</name>
<description></description>
</offer>
<offer id="4033" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/tm_dez_fabrika_serii_t_s_el_taymerom_120_vt.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>19500</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/654/654777d26201d46941e7959132dd4877.png</picture>
<vendor>Dez Fabrika</vendor>
<name>Рециркулятор ТМ Dez Fabrika серии Т с электронным таймером 120 Вт</name>
<description></description>
</offer>
<offer id="4034" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/tm_dez_fabrika_serii_t_s_el_taymerom_15_vt.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9000</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/172/1723f37fab293d99d296117a0d2e3209.png</picture>
<vendor>Dez Fabrika</vendor>
<name>Рециркулятор ТМ Dez Fabrika серии Т с электронным таймером 15 Вт</name>
<description></description>
</offer>
<offer id="4035" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/tm_dez_fabrika_serii_t_s_el_taymerom_180_vt.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>27500</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/61f/61f5c5eab30803cdcc68e76a52d444d6.png</picture>
<vendor>Dez Fabrika</vendor>
<name>Рециркулятор ТМ Dez Fabrika серии Т с электронным таймером 180 Вт</name>
<description></description>
</offer>
<offer id="4036" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/tm_dez_fabrika_serii_t_s_el_taymerom_30_vt.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9500</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/48c/48cfb370f2d772c2964e1005c373ce04.png</picture>
<vendor>Dez Fabrika</vendor>
<name>Рециркулятор ТМ Dez Fabrika серии Т с электронным таймером 30 Вт</name>
<description></description>
</offer>
<offer id="4037" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/tm_dez_fabrika_serii_t_s_el_taymerom_45_vt.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>13100</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/833/8330711fba57906631dc1014ac7ba69d.png</picture>
<vendor>Dez Fabrika</vendor>
<name>Рециркулятор ТМ Dez Fabrika серии Т с электронным таймером 45 Вт</name>
<description></description>
</offer>
<offer id="4038" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/tm_dez_fabrika_serii_t_s_el_taymerom_60_vt.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>13500</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/103/10339b457f0a45b9648b36d4ce8ae701.png</picture>
<vendor>Dez Fabrika</vendor>
<name>Рециркулятор ТМ Dez Fabrika серии Т с электронным таймером 60 Вт</name>
<description></description>
</offer>
<offer id="4040" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/volna_2_belyy.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>14850</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/f4a/f4ad855ceb31f7340bf9322ca0cbd469.jpeg</picture>
<vendor>Ningbo Yawei Water Purifier Manufacture</vendor>
<name>Рециркулятор бактерицидный Волна-2 белый (80м3, 110м3, 140м3)</name>
<description></description>
</offer>
<offer id="4042" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/volna_4_belyy.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>17500</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/16c/16c3745630f74fd1c3008c797132f36c.jpeg</picture>
<vendor>Ningbo Yawei Water Purifier Manufacture</vendor>
<name>Рециркулятор бактерицидный Волна-4 белый (100м3, 160м3, 220м3)</name>
<description></description>
</offer>
<offer id="4045" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/lampy_bakteritsidnye/ssl_t8_uvc_15w_g13_bg.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>450</price>
<currencyId>RUB</currencyId>
<categoryId>148</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/0bd/0bd7be25998e3fb4c26eeb074292c9f3.jpg</picture>
<vendor>SWEKO</vendor>
<name>Лампа бактерицидная Sweko SSL-T8-UVC-  15W-G13-BG</name>
<description></description>
</offer>
<offer id="4046" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/lampy_bakteritsidnye/ssl_t8_uvc_30w_g13_bg.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>650</price>
<currencyId>RUB</currencyId>
<categoryId>148</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/227/2271a3da230e14af041be52820c43dd7.jpg</picture>
<vendor>SWEKO</vendor>
<name>Лампа бактерицидная Sweko SSL-T8-UVC-  30W-G13-BG</name>
<description></description>
</offer>
<offer id="4047" available="true">
<url>https://russiancaliber.ru/catalog/bakteritsidnye_lampy/retsirkulyatory/stoyka_dlya_retsirkulyatora.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1500</price>
<currencyId>RUB</currencyId>
<categoryId>144</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/04c/04cc0da971126a337ec2b07561fda683.jpg</picture>
<vendor></vendor>
<name>Стойка для рециркулятора</name>
<description></description>
</offer>
<offer id="4074" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/hikmicro_gryphon_lrf_gh35l.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>266300</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/b37/b3779722833a00c711545c2ebd42aaba.jpeg</picture>
<vendor>Hikvision</vendor>
<name>Тепловизионный монокуляр HIKMICRO Gryphon LRF GH35L</name>
<description></description>
</offer>
<offer id="4075" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/gryphon_lrf_gh35.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>229900</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/6e7/6e74571f34bd6809774099d3d50e2a21.jpg</picture>
<vendor>Hikvision</vendor>
<name>Тепловизионный монокуляр HIKMICRO Gryphon LRF GH35</name>
<description></description>
</offer>
<offer id="4076" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/iray_saim_sct_35w_v2.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>242900</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/e5f/e5f082e9c86f925db52ae1ea9077fb57.jpg</picture>
<vendor>iRay</vendor>
<name>Тепловизионный прицел iRay Saim SCT 35W v2</name>
<description></description>
</offer>
<offer id="4077" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/iray_saim_sct_35w.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>218900</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/4d3/4d36c38a6f5a844e8c7939dbb6c565fa.jpg</picture>
<vendor>iRay</vendor>
<name>Тепловизионный прицел iRay Saim SCT 35W</name>
<description></description>
</offer>
<offer id="4078" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/iray_saim_scp_19.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>102900</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/1db/1db0c0a70aa622c6000b6e993193e956.jpg</picture>
<vendor>iRay</vendor>
<name>Тепловизионный прицел iRay Saim SCP 19</name>
<description></description>
</offer>
<offer id="4079" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/iray_saim_scp_19w.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>119900</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/447/4473572853e25a0cd71ad71ade2570f9.jpg</picture>
<vendor>iRay</vendor>
<name>Тепловизионный прицел iRay Saim SCP 19W</name>
<description></description>
</offer>
<offer id="4080" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/iray_saim_sch_50.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>350900</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/77d/77d7294ff7016ba24e92f87be7cb2e7b.jpg</picture>
<vendor>iRay</vendor>
<name>Тепловизионный прицел iRay Saim SCH 50</name>
<description></description>
</offer>
<offer id="4081" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_pritsely/iray_tube_td50l.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>89900</price>
<currencyId>RUB</currencyId>
<categoryId>78</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/3f9/3f9b519fc3b52f6f3ba97374e91db494.jpg</picture>
<vendor>iRay</vendor>
<name>Цифровой прицел iRay Tube TD50L</name>
<description></description>
</offer>
<offer id="4083" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/iray_tube_tl35.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>269900</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/54f/54f72cd3c0250f1828e81e34d4d62a32.jpg</picture>
<vendor>iRay</vendor>
<name>Тепловизионный прицел iRay Tube TL35</name>
<description></description>
</offer>
<offer id="4084" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/iray_tube_th_35.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>305900</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/cc7/cc7dfbe0160616675a93cae49254decc.jpg</picture>
<vendor>iRay</vendor>
<name>Тепловизионный прицел iRay Tube TH 35</name>
<description></description>
</offer>
<offer id="4085" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/iray_tube_th_50.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>408900</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/d49/d49e2886261ead93a8bb82c097bf4c97.jpg</picture>
<vendor>iRay</vendor>
<name>Тепловизионный прицел iRay Tube TH 50</name>
<description></description>
</offer>
<offer id="4086" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/iray_geni_gl_35r.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>287900</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/c1e/c1ebf1a2f213d2cc80cd9309be44aa54.jpg</picture>
<vendor>iRay</vendor>
<name>Тепловизионный прицел  iRay Geni GL 35R с лазерным дальномером</name>
<description></description>
</offer>
<offer id="4087" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/iray_rico_rl42.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>287900</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/6e9/6e95f985b30471a2085a6e6275df740e.jpg</picture>
<vendor>iRay</vendor>
<name>Тепловизионный прицел iRay Rico RL42</name>
<description></description>
</offer>
<offer id="4088" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/iray_rico_rl42_lrf.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>329800</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/9f9/9f9fc8b72157a120881f5547414a9260.jpg</picture>
<vendor>iRay</vendor>
<name>Тепловизионный прицел iRay Rico RL42 LRF</name>
<description></description>
</offer>
<offer id="4089" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_kollimatornye_pritsely/iray_xholo_hp13.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>102900</price>
<currencyId>RUB</currencyId>
<categoryId>139</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/a33/a335207a78c294b122ecded00cca5575.jpg</picture>
<vendor>iRay</vendor>
<name>Тепловизионный коллиматорный прицел iRay Xholo HP13</name>
<description></description>
</offer>
<offer id="4090" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_kollimatornye_pritsely/iray_xholo_hl_25.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>170900</price>
<currencyId>RUB</currencyId>
<categoryId>139</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/524/524e6b706d209358429eadf6db83a844.jpg</picture>
<vendor>iRay</vendor>
<name>Тепловизионный коллиматорный прицел iRay Xholo HL 25</name>
<description></description>
</offer>
<offer id="4091" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/iray_rico_rh_35.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>386900</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/7da/7da6adbf04044322110ea84b34e7082b.jpg</picture>
<vendor>iRay</vendor>
<name>Тепловизионный прицел iRay Rico RH 35</name>
<description></description>
</offer>
<offer id="4092" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/iray_rico_rh_35_lrf.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>428800</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/4b0/4b01d1142d01f37101e32ed95475baf4.jpg</picture>
<vendor>iRay</vendor>
<name>Тепловизионный прицел iRay Rico RH 35 LRF</name>
<description></description>
</offer>
<offer id="4093" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/iray_rico_rh50.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>413900</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/730/73039844f82ec6405d99cb1a127b070e.jpg</picture>
<vendor>iRay</vendor>
<name>Тепловизионный прицел iRay Rico RH50</name>
<description></description>
</offer>
<offer id="4094" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/iray_rico_rh50_lrf.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>455800</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/ca0/ca09b562f08932cfdfc3935eadc4e330.jpg</picture>
<vendor>iRay</vendor>
<name>Тепловизионный прицел iRay Rico RH50 LRF</name>
<description></description>
</offer>
<offer id="4095" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/iray_dv_dp_09.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>38900</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/2cf/2cf2e13deae7338bf94a3faccdb1f251.png</picture>
<vendor>iRay</vendor>
<name>Тепловизионный монокуляр iRay DV DP 09</name>
<description></description>
</offer>
<offer id="4096" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/iray_dv_dl13.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>100900</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/b71/b713557035cc7f58ee3698cfb4245945.jpg</picture>
<vendor>iRay</vendor>
<name>Тепловизионный монокуляр iRay DV DL13</name>
<description></description>
</offer>
<offer id="4097" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/iray_xeye_e2n_v2.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>55900</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/a49/a499e0c5e54d08d534a829613ee630b7.jpg</picture>
<vendor>iRay</vendor>
<name>Тепловизионный монокуляр iRay Xeye E2N v2</name>
<description></description>
</offer>
<offer id="4098" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/iray_xeye_e3n.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>85900</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/1a9/1a9494cb237f2843668ba8ca340e7112.jpg</picture>
<vendor>iRay</vendor>
<name>Тепловизионный монокуляр iRay Xeye E3N</name>
<description></description>
</offer>
<offer id="4099" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/iray_xeye_c2w.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>63900</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/4a0/4a02d3e24d6b3aac7c50760a23250e23.jpg</picture>
<vendor>iRay</vendor>
<name>Тепловизионный монокуляр iRay Xeye C2W</name>
<description></description>
</offer>
<offer id="4100" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/iray_xeye_e3w.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>93900</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/512/5121c7d1fd5db02a45f1440d93c2508b.jpg</picture>
<vendor>iRay</vendor>
<name>Тепловизионный монокуляр iRay Xeye E3W</name>
<description></description>
</offer>
<offer id="4104" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/iray_cabin_cbl_19.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>142900</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/b22/b2201408736894cadf9635754b993076.jpg</picture>
<vendor>iRay</vendor>
<name>Тепловизионный монокуляр iRay Cabin CBL 19</name>
<description></description>
</offer>
<offer id="4105" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/iray_cabin_cbl_25.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>158900</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/56e/56e6f7d5d208feba1ce27dbc5b346972.jpg</picture>
<vendor>iRay</vendor>
<name>Тепловизионный монокуляр iRay Cabin CBL 25</name>
<description></description>
</offer>
<offer id="4106" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/iray_xeye_2_e3_plus_v2.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>150900</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/63f/63fa2803a5726903038c710a32cac8df.jpg</picture>
<vendor>iRay</vendor>
<name>Тепловизионный монокуляр iRay Xeye 2 E3 Plus v2</name>
<description></description>
</offer>
<offer id="4107" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/iray_xeye_e3_max_v2.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>183900</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/3b6/3b681eb52c3d67ee02b1f67fe2c61486.jpg</picture>
<vendor>iRay</vendor>
<name>Тепловизионный монокуляр iRay Xeye E3 Max v2</name>
<description></description>
</offer>
<offer id="4108" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/iray_xeye_2_e6_plus_v2.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>352900</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/442/442cdd353862e50ff1df872a6a8f49fb.jpg</picture>
<vendor>iRay</vendor>
<name>Тепловизионный монокуляр iRay Xeye 2 E6 Plus v2</name>
<description></description>
</offer>
<offer id="4109" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/iray_xeye_2_e6_plus_v3.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>225900</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/802/80224d2d835cbfe244737db1376dfae5.jpg</picture>
<vendor>iRay</vendor>
<name>Тепловизионный монокуляр iRay Xeye 2 E6 Plus v3</name>
<description></description>
</offer>
<offer id="4110" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/iray_xeye_e6_pro_v3.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>258900</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/9fd/9fd0f23dda5d22eb4cd1b0eaa1251001.jpg</picture>
<vendor>iRay</vendor>
<name>Тепловизионный монокуляр iRay Xeye E6 Pro v3</name>
<description></description>
</offer>
<offer id="4111" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/iray_xeye_finder_fl_25r.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>183900</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/e28/e28c434ce8acdc1b2cb2f9e935e9f5cd.jpg</picture>
<vendor>iRay</vendor>
<name>Тепловизионный монокуляр iRay Xeye Finder FL 25R</name>
<description></description>
</offer>
<offer id="4112" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/iray_xeye_finder_fh_25r.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>217900</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/d21/d21a03d34cfada23984d78a319dbcdb2.jpg</picture>
<vendor>iRay</vendor>
<name>Тепловизионный монокуляр iRay Xeye Finder FH 25R</name>
<description></description>
</offer>
<offer id="4113" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/iray_xeye_finder_fl_35r.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>208900</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/895/895d429b942cae566cb6a17a13bd765d.jpg</picture>
<vendor>iRay</vendor>
<name>Тепловизионный монокуляр iRay Xeye Finder FL 35R</name>
<description></description>
</offer>
<offer id="4114" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/iray_xeye_finder_fh_35r.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>242900</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/79a/79ab08b426a80c5a2b669daf64f1a705.jpg</picture>
<vendor>iRay</vendor>
<name>Тепловизионный монокуляр iRay Xeye Finder FH 35R</name>
<description></description>
</offer>
<offer id="4116" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/iray_zoom_zh_38.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>275900</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/4ea/4eab1f570f36f4564dac687b9f94872d.jpg</picture>
<vendor>iRay</vendor>
<name>Тепловизионный монокуляр iRay Zoom ZH 38</name>
<description></description>
</offer>
<offer id="4118" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/iray_xmini_ml19.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>167900</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/346/34659204d03c7a41fea0a19e983f9a31.jpg</picture>
<vendor>iRay</vendor>
<name>Тепловизионный монокуляр iRay xMini ML19</name>
<description></description>
</offer>
<offer id="4119" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/iray_xmini_mh25.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>267900</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/a83/a83e4c1ad2dc483894519103d64913fc.jpg</picture>
<vendor>iRay</vendor>
<name>Тепловизионный монокуляр iRay xMini MH25</name>
<description></description>
</offer>
<offer id="4120" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_binokli/iray_xfuse_pf6l.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1349900</price>
<currencyId>RUB</currencyId>
<categoryId>73</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/6b4/6b42d8b28390cebd27581120ea270686.jpg</picture>
<vendor>iRay</vendor>
<name>Тепловизионный бинокль iRay xFuse PF6L</name>
<description></description>
</offer>
<offer id="4121" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_binokli/iray_xfuse_pf6.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1619900</price>
<currencyId>RUB</currencyId>
<categoryId>73</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/d9c/d9c9dc1a4ed60d184de0201c460abf7d.jpg</picture>
<vendor>iRay</vendor>
<name>Тепловизионный бинокль iRay xFuse PF6</name>
<description></description>
</offer>
<offer id="4122" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_binokli/iray_xfuse_pt_se_640.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1799900</price>
<currencyId>RUB</currencyId>
<categoryId>73</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/98c/98c4b1325b21f5b8e62ff0d75f12abeb.jpg</picture>
<vendor>iRay</vendor>
<name>Тепловизионный бинокль iRay xFuse PT-SE 640</name>
<description></description>
</offer>
<offer id="4123" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_binokli/iray_xfuse_pt_se_1024.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2069900</price>
<currencyId>RUB</currencyId>
<categoryId>73</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/314/31472977f8bdc52a514c5ec048d2d709.jpg</picture>
<vendor>iRay</vendor>
<name>Тепловизионный бинокль iRay xFuse PT-SE 1024</name>
<description></description>
</offer>
<offer id="4124" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_binokli/iray_xfuse_pt_pro_640.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2968900</price>
<currencyId>RUB</currencyId>
<categoryId>73</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/12f/12f79f6d38a20595994d44a080d2e35f.jpg</picture>
<vendor>iRay</vendor>
<name>Тепловизионный бинокль iRay xFuse PT-Pro 640</name>
<description></description>
</offer>
<offer id="4125" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_binokli/iray_xfuse_pt_hd.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3058900</price>
<currencyId>RUB</currencyId>
<categoryId>73</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/093/093693c5f104409ad9fdcb426a94a52f.jpg</picture>
<vendor>iRay</vendor>
<name>Тепловизионный бинокль iRay xFuse PT-HD</name>
<description></description>
</offer>
<offer id="4126" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_binokli/iray_xfuse_pt_pro_1024.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3238900</price>
<currencyId>RUB</currencyId>
<categoryId>73</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/680/6804cde57a38c01e9ed75dde57f79688.jpg</picture>
<vendor>iRay</vendor>
<name>Тепловизионный бинокль iRay xFuse PT-Pro 1024</name>
<description></description>
</offer>
<offer id="4127" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/dedal_aper.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>249000</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/c15/c15dc4d040ef40843cf43e5af572eda5.png</picture>
<vendor>Dedal</vendor>
<name>Тепловизионный прицел Dedal Aper</name>
<description></description>
</offer>
<offer id="4128" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/dedal_eger.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>326000</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/792/79203c87988aded8ef451358e8a40ed8.png</picture>
<vendor>Dedal</vendor>
<name>Тепловизионный прицел Dedal Егерь</name>
<description></description>
</offer>
<offer id="4133" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/dali_rs150_640_50mm_640x480.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>269027</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/ca1/ca1c113f5ac5ca4ad1563b8cbb937b9f.jpg</picture>
<vendor>DALI</vendor>
<name>Тепловизионный прицел DALI RS150-640 (50mm, 640x480)</name>
<description></description>
</offer>
<offer id="4134" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/dali_rs225_240.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>115000</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/e0a/e0a2868574e2c43081014aeac9b502a2.jpg</picture>
<vendor>DALI</vendor>
<name>Тепловизионный прицел DALI RS225-240</name>
<description></description>
</offer>
<offer id="4135" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/hikmicro_lynx_lc06.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>44990</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/673/6731d25ec41431f24f3141529ad5cf43.jpg</picture>
<vendor>Hikmicro</vendor>
<name>Тепловизионный монокуляр Hikmicro LYNX LC06</name>
<description></description>
</offer>
<offer id="4136" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/hikmicro_lynx_pro_le10.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>62500</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/9a0/9a093c3a681087e410b75109a0b0d77a.jpg</picture>
<vendor>Hikmicro</vendor>
<name>Тепловизионный монокуляр Hikmicro LYNX PRO LE10</name>
<description></description>
</offer>
<offer id="4137" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/hikmicro_lynx_pro_le15.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>73600</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/e59/e5988131086e84004925102508cb0eb8.jpg</picture>
<vendor>Hikmicro</vendor>
<name>Тепловизионный монокуляр Hikmicro LYNX PRO LE15</name>
<description></description>
</offer>
<offer id="4147" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_binokli/nv_g_10m.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>221500</price>
<currencyId>RUB</currencyId>
<categoryId>88</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/1ed/1ed03d2a2295f0467749d1743d24e6f3.jpg</picture>
<vendor>БелОМО</vendor>
<name>Ночные очки БелОМО NV/G-10M</name>
<description></description>
</offer>
<offer id="4155" available="true">
<url>https://russiancaliber.ru/catalog/portativnye_ratsii/baofeng_uv_5r_8w.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2100</price>
<currencyId>RUB</currencyId>
<categoryId>156</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/124/124fbe302109c5afdd4f28c29190d53c.jpeg</picture>
<vendor></vendor>
<name>Рация Baofeng UV-5R 8W</name>
<description></description>
</offer>
<offer id="4156" available="true">
<url>https://russiancaliber.ru/catalog/meteostanntsii/la_crosse_ws1650.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9990</price>
<currencyId>RUB</currencyId>
<categoryId>157</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/3b7/3b7ed93f701df698b8ec1bb0057b8fce.jpg</picture>
<vendor></vendor>
<name>Метеостанция La Crosse WS1650</name>
<description></description>
</offer>
<offer id="4157" available="true">
<url>https://russiancaliber.ru/catalog/metalloiskateli/rgk_md_70_gold.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>18990</price>
<currencyId>RUB</currencyId>
<categoryId>158</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/003/003a14ade464592c31e6cf5654a5dba4.jpg</picture>
<vendor></vendor>
<name>Металлоискатель RGK MD-70 GOLD</name>
<description></description>
</offer>
<offer id="4161" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_binokli/guide_tn650.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>499900</price>
<currencyId>RUB</currencyId>
<categoryId>73</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/762/762c5b52464afa3d41bf86c363c2181d.jpg</picture>
<vendor>GUIDE</vendor>
<name>Тепловизионный бинокль GUIDE TN650</name>
<description></description>
</offer>
<offer id="4162" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/pulsar_thermion_2_xp50.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>456000</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/19c/19cafd04b88cd8f5495f3af04feeeb8e.png</picture>
<vendor>Pulsar</vendor>
<name>Тепловизионный прицел Pulsar THERMION 2 XP50</name>
<description></description>
</offer>
<offer id="4163" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_binokli/guide_tn430.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>285000</price>
<currencyId>RUB</currencyId>
<categoryId>73</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/b70/b705e42736e1c0425078c709b07d6743.png</picture>
<vendor>GUIDE</vendor>
<name>Тепловизионный бинокль GUIDE TN430</name>
<description></description>
</offer>
<offer id="4164" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_binokli/guide_tn450.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>315000</price>
<currencyId>RUB</currencyId>
<categoryId>73</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/2f9/2f9767903fa33d6045cef8af0dd1ca7d.png</picture>
<vendor>GUIDE</vendor>
<name>Тепловизионный бинокль GUIDE TN450</name>
<description></description>
</offer>
<offer id="4165" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_binokli/guide_tn630.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>460900</price>
<currencyId>RUB</currencyId>
<categoryId>73</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/d42/d4207eddbeeb1de681e304e66f212a18.png</picture>
<vendor>GUIDE</vendor>
<name>Тепловизионный бинокль GUIDE TN630</name>
<description></description>
</offer>
<offer id="4167" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/trackir_pro%2019mm.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>204900</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/23d/23d017e8e7fe0eac0d777346de86b454.png</picture>
<vendor>GUIDE</vendor>
<name>Тепловизионный монокуляр Guide TrackIR PRO 19mm</name>
<description></description>
</offer>
<offer id="4168" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/trackir_pro_25mm.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>200000</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/4e3/4e30cf8cddb2784cf820a6f7535b76ba.png</picture>
<vendor>GUIDE</vendor>
<name>Тепловизионный монокуляр Guide TrackIR PRO 25mm</name>
<description></description>
</offer>
<offer id="4169" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/trackir_pro_35mm.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>280000</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/e66/e6699a76b2881a53ee5110f9b5e8707c.png</picture>
<vendor>GUIDE</vendor>
<name>Тепловизионный монокуляр Guide TrackIR PRO 35mm</name>
<description></description>
</offer>
<offer id="4171" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/guide_tu420.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>210000</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/e17/e17b76c3c29656650da5765998e65463.png</picture>
<vendor>GUIDE</vendor>
<name>Тепловизионный прицел Guide TU420</name>
<description></description>
</offer>
<offer id="4172" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/guide_tu430.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>230000</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/dfa/dfa6192103a48742a0d9c5268ded0a27.png</picture>
<vendor>GUIDE</vendor>
<name>Тепловизионный прицел Guide TU430</name>
<description></description>
</offer>
<offer id="4173" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/guide_tu450.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>240000</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/702/702b3759cb108f4252a34f0f0ed4dfbb.png</picture>
<vendor>GUIDE</vendor>
<name>Тепловизионный прицел Guide TU450</name>
<description></description>
</offer>
<offer id="4175" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/guide_td210.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>62900</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/037/03733e408923b8ecb7887733003f0619.png</picture>
<vendor>GUIDE</vendor>
<name>Тепловизионный монокуляр Guide TD210</name>
<description></description>
</offer>
<offer id="4176" available="true">
<url>https://russiancaliber.ru/catalog/portativnye_ratsii/hytera_hp785.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>78290</price>
<currencyId>RUB</currencyId>
<categoryId>156</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/abb/abb152049bf2b6336ae998e6babf7a0c.png</picture>
<vendor>Hytera</vendor>
<name>Рация Hytera HP785</name>
<description></description>
</offer>
<offer id="4178" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/guide_tk631.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>249900</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/d64/d64e3f0ae9a4949b3096678a5d1aaa42.jpg</picture>
<vendor>GUIDE</vendor>
<name>Тепловизионный монокуляр Guide TK631</name>
<description></description>
</offer>
<offer id="4179" available="true">
<url>https://russiancaliber.ru/catalog/kvadrokoptery/dji_mavic_3.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>270000</price>
<currencyId>RUB</currencyId>
<categoryId>159</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/eb7/eb7d557816c880fcc833b54fe8ac3418.jpg</picture>
<vendor></vendor>
<name>Квадрокоптер DJI Mavic 3</name>
<description></description>
</offer>
<offer id="4180" available="true">
<url>https://russiancaliber.ru/catalog/kvadrokoptery/dji_mavic_3_combo.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>320000</price>
<currencyId>RUB</currencyId>
<categoryId>159</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/b9e/b9e25fcdcc3be0f98dbf7eeb3771df62.jpg</picture>
<vendor></vendor>
<name>Квадрокоптер DJI Mavic 3 Combo</name>
<description></description>
</offer>
<offer id="4181" available="true">
<url>https://russiancaliber.ru/catalog/kvadrokoptery/dji_matrice_rtk_300_combo_h20t.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2500000</price>
<currencyId>RUB</currencyId>
<categoryId>159</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/8df/8dfa9ce0c1fba84c0448aa083d6b507f.png</picture>
<vendor></vendor>
<name>Квадрокоптер DJI Matrice RTK 300 Combo + H20T</name>
<description></description>
</offer>
<offer id="4183" available="true">
<url>https://russiancaliber.ru/catalog/kvadrokoptery/kvadrokopter_dji_matrice_rtk_300_combo.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1500000</price>
<currencyId>RUB</currencyId>
<categoryId>159</categoryId>
<vendor></vendor>
<name>Квадрокоптер DJI Matrice RTK 300 Combo</name>
<description></description>
</offer>
<offer id="4184" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/guide_td410.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>104900</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/281/281c3342d2a6dcf82c3a48eaf906e67a.png</picture>
<vendor>GUIDE</vendor>
<name>Тепловизионный монокуляр Guide TD410</name>
<description></description>
</offer>
<offer id="4186" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/guide_tk431.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>179000</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/dc7/dc7473c3727e6137d16a0cad81c13e1e.jpg</picture>
<vendor>GUIDE</vendor>
<name>Тепловизионный монокуляр Guide TK431</name>
<description></description>
</offer>
<offer id="4187" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/guide_tk421.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>147000</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/dc7/dc73bba6f49d333d9fccdacdc4fb27cf.jpg</picture>
<vendor>GUIDE</vendor>
<name>Тепловизионный монокуляр Guide TK421</name>
<description></description>
</offer>
<offer id="4188" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/guide_tk621.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>209000</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/4d0/4d033c96df276901ddd44ea1d84ae5e5.jpg</picture>
<vendor>GUIDE</vendor>
<name>Тепловизионный монокуляр Guide TK621</name>
<description></description>
</offer>
<offer id="4189" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/guide_tk611.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>199000</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/ae8/ae8a9771142c96b5011604911431055e.jpg</picture>
<vendor>GUIDE</vendor>
<name>Тепловизионный монокуляр Guide TK611</name>
<description></description>
</offer>
<offer id="4191" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/arkon_ovis_lm25.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>102990</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/e12/e1223dddb913da26be8526d82bf0c322.png</picture>
<vendor>ARKON</vendor>
<name>Тепловизионный монокуляр Arkon OVis LM25</name>
<description></description>
</offer>
<offer id="4192" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/arkon_ovis_sm07.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>36900</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/766/766c10a7223026974425cfe79e8e8c9f.png</picture>
<vendor>ARKON</vendor>
<name>Тепловизионный монокуляр Arkon OVis SM07</name>
<description></description>
</offer>
<offer id="4193" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/arkon_ovis_sm15.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>51990</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/a81/a8194df9f719d0dd88cbeff6d6f05a01.png</picture>
<vendor>ARKON</vendor>
<name>Тепловизионный монокуляр Arkon OVis SM15</name>
<description></description>
</offer>
<offer id="4194" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/arkon_ovis_lm19.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>88990</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/894/8946c37d9eb540b262e2163335b5b6b8.png</picture>
<vendor>ARKON</vendor>
<name>Тепловизионный монокуляр Arkon OVis LM19</name>
<description></description>
</offer>
<offer id="4195" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/arkon_ovis_lm15.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>74990</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/6a7/6a764bbcf3396a14944e83ab746bd0d5.png</picture>
<vendor>ARKON</vendor>
<name>Тепловизионный монокуляр Arkon OVis LM15</name>
<description></description>
</offer>
<offer id="4196" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/arkon_ovis_sm10.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>44090</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/a26/a26387f6b4bb6d1d17b08a8aef85af52.png</picture>
<vendor>ARKON</vendor>
<name>Тепловизионный монокуляр Arkon OVis SM10</name>
<description></description>
</offer>
<offer id="4199" available="true">
<url>https://russiancaliber.ru/catalog/portativnye_ratsii/hytera_hp705.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>71420</price>
<currencyId>RUB</currencyId>
<categoryId>156</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/dcf/dcf75afedbf3cc6d4a4c2dc806174011.png</picture>
<vendor>Hytera</vendor>
<name>Рация Hytera HP705</name>
<description></description>
</offer>
<offer id="4201" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/arkon_alfa_ht50.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>264990</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/e4a/cuhbdbml2cya2tecl4xnsp1nb63839wx.jpg</picture>
<vendor>ARKON</vendor>
<name>Тепловизионный прицел Arkon Alfa HT50</name>
<description></description>
</offer>
<offer id="4202" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_pritsely/arkon_alfa_lt35.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>155990</price>
<currencyId>RUB</currencyId>
<categoryId>72</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/847/lx3onyikphm4dwkx1ui972xa16ytuq9w.png</picture>
<vendor>ARKON</vendor>
<name>Тепловизионный прицел Arkon Alfa LT35</name>
<description></description>
</offer>
<offer id="4204" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/sytong_gs03_19lrf_s_dalnomerom.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>150000</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/723/781nbimm81i0oizmmnq5wqf3748u3nfr.jpg</picture>
<vendor>Sytong</vendor>
<name>Тепловизионный монокуляр Sytong GS03-19LRF с дальномером</name>
<description></description>
</offer>
<offer id="4205" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/iray_xeye_2_e6_pro_v3_0.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>258900</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/82b/ql3rcuaqth3yxmi69xd7qb27ojj2o0ga.jpg</picture>
<vendor>iRay</vendor>
<name>Тепловизионный монокуляр iRay Xeye 2 E6 Pro v3.0</name>
<description></description>
</offer>
<offer id="4206" available="true">
<url>https://russiancaliber.ru/catalog/nochnye_pribory_dlya_okhoty/nochnye_pritsely/iray_nv_scd_35.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>80900</price>
<currencyId>RUB</currencyId>
<categoryId>78</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/9ea/9hdr1uu3ureq49syxuklce7z71qxof2v.jpg</picture>
<vendor>iRay</vendor>
<name>Цифровой прицел iRay NV SCD 35</name>
<description></description>
</offer>
<offer id="4207" available="true">
<url>https://russiancaliber.ru/catalog/teplovizionnye_pribory/teplovizionnye_monokulyary/guide_td420.html?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>109900</price>
<currencyId>RUB</currencyId>
<categoryId>74</categoryId>
<picture>https://russiancaliber.ru/upload/iblock/0d8/ctcxu825nfs1151oqupztqzahmjy49lp.jpg</picture>
<vendor>GUIDE</vendor>
<name>Тепловизионный монокуляр Guide TD420</name>
<description></description>
</offer>
</offers>
</shop>
</yml_catalog>
