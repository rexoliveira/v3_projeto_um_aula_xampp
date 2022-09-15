//Função chama o json externo
function detalharUsuario(id) {
    let ajax = new XMLHttpRequest();

    ajax.onload = function () {
        if (ajax.readyState == 4) {
            if (ajax.status == 200) {
                let resposta = JSON.parse(ajax.responseText);
                document.getElementById("idUsuario").innerHTML = resposta['dados'].id;
                document.getElementById("nomeUsuario").innerHTML = resposta['dados'].nome;
                document.getElementById("telUsuario").innerHTML = resposta['dados'].tel;
                document.getElementById("emailUsuario").innerHTML = resposta['dados'].email;

                document.getElementById('btn_detalhes ' + resposta['dados'].id).style.color = 'var(--color-alerta)'
            } else {
                //Verifica se o arquivo existe e imprime um erro
                if (ajax.status == 404) {
                    document.getElementById("idUsuario").innerHTML = '<span style="color:red">Arquivo não encotrado!</span>';
                }
            }
        }
    };

    ajax.open("GET", '../usuario_detalhe/usuario_detalhe_processa.php?id=' + id);
    ajax.send();
}