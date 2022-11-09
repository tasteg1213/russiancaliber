<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("pochtabank");
?>

    <h1>Рассрочка Почта Банк</h1>
    <div id="pos-credit-container"></div>
    <script src="https://my.pochtabank.ru/sdk/v1/pos-credit.js"></script>
    <script>
        var options = {
            ttCode: '1013001001571',
            ttName: 'г. Москва, Преображенская пл. 8', // Текст в поле пункт выдачи товара. Обязательно
            fullName: '',// ФИО. Опционально
            phone: '',// Телефон в формате 9161232323. Опционально
            extAppId: '',// внешний id заявки макс 20 символов
            product: '',// комментарий
            manualOrderInput: true, // Ручной ввод продукта. Показываются поля "Товарная категория" и "Сумма покупки", если true поле order должно отсутствовать
    }
;

window.PBSDK.posCredit.mount('#pos-credit-container', options);
window.PBSDK.posCredit.on('done', function(id){
    console.log('Id заявки: ' + id)
});
        
</script>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>