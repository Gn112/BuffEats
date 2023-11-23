
function confirmaPedido() {
    Swal.fire({
        title: 'Pedido finalizado com sucesso!',
        text: 'Obrigado por utilizar a BuffEats!',
        width: 600,
        color: "#463B3B",
        iconHtml: '<img class="" src="./img/sucesso.png">',
        confirmButtonText: 'CONFIRMAR',
        confirmButtonColor: "#BD2323",
        allowOutsideClick: true,
        allowEscapeKey: false,

    })
    .then((result) =>
    {
        if (result.isConfirmed)
        {
            window.location.href = "../../index.php";
        }
    });
};



function decrementaValor(inputid) {
    var input = document.getElementById('produto' + inputid);
    if(input.value != 0)
    {
        input.value = parseInt(input.value) - 1;
    }
    calcularTotal();
};

function incrementaValor(inputid) {
    var input = document.getElementById('produto' + inputid);
    if(input.value != 99)
    {
        input.value = parseInt(input.value) + 1;
    }
    calcularTotal();
};


function calcularTotal() {
    var input1 = document.getElementById('produto1');
    var input2 = document.getElementById('produto2');
    var input3 = document.getElementById('produto3');
    
    var total = parseInt(input1.value) * 3.50 + parseInt(input2.value) * 3.50 + parseInt(input3.value) * 3.50;
    
    document.getElementById('totalPedido').textContent = 'R$ ' + total.toFixed(2);
}
