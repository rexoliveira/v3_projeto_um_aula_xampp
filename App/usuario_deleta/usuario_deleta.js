//Apagar o registro no banco de dados
async function deletarUsuario(id) {
    var confirmar = confirm("Tem certeza que deseja excluir o usuário?")
    if (confirmar) {
        //Fetch - acessar e manipular partes do pipeline HTTP, tais como os
        //pedidos e respostas. Ela recursos de forma assíncrona através da
        //rede.
        const dados = await fetch('../usuario_deleta/usuario_deleta.php?id=' + id)

        //Pega o JSON recebido e coloca em uma variável
        var resposta = await dados.json();
        const status = resposta['status']
        const msg = resposta['msg']


        if (status) {
            document.location.reload(true);
            document.getElementById("avisoDelete").innerHTML = "<span>" + msg + "</span>"
            // Recarrega a página atual sem usar o cache
            setInterval(function () {
                document.location.reload(true);
            }, 10000);
        } else {
            document.location.reload(true);
            document.getElementById("avisoDelete").innerHTML = "<span style='color:yellow'>" + msg + "</span>"
            setInterval(function () {
                document.location.reload(true);
            }, 10000);
        }
    } else {
        document.getElementById("avisoDelete").innerHTML = "<span style='color:green'>Exclusão cancelada!</span>"
        setInterval(function () {
            document.location.reload(true);
        }, 2000);
    }
}