/* 
async function detalharUsuario(id){
const  detalhes = await fetch('../usuario_detalhe/usuario_detalhe_processa.php?id='+id)
const resposta = await detalhes.json()


document.getElementById("idUsuario").innerHTML = resposta['dados'].id;
document.getElementById("nomeUsuario").innerHTML = resposta['dados'].nome;
document.getElementById("telUsuario").innerHTML = resposta['dados'].tel;
document.getElementById("emailUsuario").innerHTML = resposta['dados'].email;
}
 */


//Função chama o json externo
function detalharUsuario(id) {
    let ajax = new XMLHttpRequest();

    ajax.onload = function () {
        if (ajax.readyState == 4) {
            if (ajax.status == 200) {
                //Objeto sem aspas na CHAVE somente no VALUE ao contrário do Json
                //O parse torna o Json em OBJETO
                let resposta = JSON.parse(ajax.responseText);
                document.getElementById("idUsuario").innerHTML = resposta['dados'].id;
                document.getElementById("nomeUsuario").innerHTML = resposta['dados'].nome;
                document.getElementById("telUsuario").innerHTML = resposta['dados'].tel;
                document.getElementById("emailUsuario").innerHTML = resposta['dados'].email;
            } else {
                //Verifica se o arquivo existe e imprime um erro
                if (ajax.status == 404) {
                    document.getElementById("idUsuario").innerHTML ='<span style="color:red">Arquivo não encotrado!</span>';
                }
            }
        }
    };

    ajax.open("GET", '../usuario_detalhe/usuario_detalhe_processa.php?id=' + id);
    ajax.send();
}