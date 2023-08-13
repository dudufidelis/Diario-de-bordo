const date = new Date();
const day = String(date.getDate()).padStart(2, '0');
const month = String(date.getMonth() + 1).padStart(2, '0'); 
const year = String(date.getFullYear()).slice(2);
const formattedDate = `${day}/${month}/${year}`;

document.getElementById("btn-batch").addEventListener("click", function(event) {
    event.preventDefault(); 
    infoBatch();
});

function infoBatch() {
    const inputTextArea = document.querySelector("#inputTextArea");
    inputTextArea.value = `Batch-OK - Data Batch ${formattedDate} - PDV-OK - RUB-OK - Salvas-OK - sas77/sas08/sas24-OK - R.CARTÃO-OK - R.SACOLA-OK - ETIQUETA-OK`;
}

function validateForm() {
    const message = document.getElementById("inputTextArea").value;
    if (message.trim() === "") {
        alert("A mensagem não pode estar vazia.");
        return false;
    }
}
