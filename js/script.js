document.getElementById("btn-batch").addEventListener("click", function(event) {
    event.preventDefault(); 
    infoBatch();
});

function infoBatch() {
    const inputTextArea = document.querySelector("#inputTextArea");
    inputTextArea.value = 'Batch-OK - Data Batch 12/08/23-OK - PDV-OK - RUB-OK - Salvas-OK - sas77/sas08/sas24-OK - R.CARTÃO-OK - R.SACOLA-OK - ETIQUETA-OK';
}