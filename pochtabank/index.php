<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("pochtabank");
?>

    <h1>��������� ����� ����</h1>
    <div id="pos-credit-container"></div>
    <script src="https://my.pochtabank.ru/sdk/v1/pos-credit.js"></script>
    <script>
        var options = {
            ttCode: '1013001001571',
            ttName: '�. ������, �������������� ��. 8', // ����� � ���� ����� ������ ������. �����������
            fullName: '',// ���. �����������
            phone: '',// ������� � ������� 9161232323. �����������
            extAppId: '',// ������� id ������ ���� 20 ��������
            product: '',// �����������
            manualOrderInput: true, // ������ ���� ��������. ������������ ���� "�������� ���������" � "����� �������", ���� true ���� order ������ �������������
    }
;

window.PBSDK.posCredit.mount('#pos-credit-container', options);
window.PBSDK.posCredit.on('done', function(id){
    console.log('Id ������: ' + id)
});
        
</script>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>