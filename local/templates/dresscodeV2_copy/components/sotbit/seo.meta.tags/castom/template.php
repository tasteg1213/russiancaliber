<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);?>
<?
$temp = $arResult['ITEMS'];
foreach ($temp as $key=>$item){
    if (empty($item['TITLE']))
        unset($arResult['ITEMS'][$key]);
}
if (empty($arResult['ITEMS']))
    return true;
?>

<div class="tag_seo_list_castom">
    <div class="prew">
        <b>Часто ищут:</b>
        <ul>
            <? $i= false;
            foreach (array_slice($arResult['ITEMS'],0,9) as $arItem){
                if ($i)
                    echo '<li> | </li>';
                echo '<li><a href="'.$arItem['URL'].'">'.$arItem['TITLE'].'</a></li>';
                $i = true;
            }?>
        </ul>
    </div>
    <?if (count($arResult['ITEMS']) > 10){?>
        <div style="clear: both;"></div>
        <details>
            <summary >
                показать все
            </summary>
            <ul>
                <? $i = false;
                foreach (array_slice($arResult['ITEMS'],9,999) as $arItem) {
                    if ($i)
                        echo '<li> | </li>';
                    echo '<li><a href="' . $arItem['URL'] . '">' . $arItem['TITLE'] . '</a></li>';
                    $i = true;
                }?>
            </ul>
        </details>
    <?}?>
    <div style="clear: both;"></div>
</div>