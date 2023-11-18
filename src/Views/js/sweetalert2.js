
function confirmaPedido() {
    Swal.fire({
        title: 'Confirmar pedido?',
        text: 'Clique no botão para confirmar o pedido ou voltar a tela anterior',
        icon: 'question',
        confirmButtonText: 'CONFIRMAR',
        confirmButtonColor: "#79BD23",
        showCancelButton: true,
        allowOutsideClick: false,
        allowEscapeKey: false,

    })
    .then((result) =>
    {
        if (result.isConfirmed)
        {
            pedidoConfirmado();
        }
    });
};


function pedidoConfirmado() 
{
    setTimeout(function() {
        location.reload();
    }, 5000);

    Swal.fire(
        {
            title: 'Pedido confirmado com sucesso!',
            text: 'Clique no botão para voltar para a tela de pedidos ou espere 5 segundos.',
            icon: 'success',
            allowOutsideClick: false,
            allowEscapeKey: false,
        })
        .then((result) => 
        {
            if(result.isConfirmed)
            {
                location.reload();
            }
        })
};