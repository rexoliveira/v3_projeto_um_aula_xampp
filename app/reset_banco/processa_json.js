

function confirmarReset() {
    var confirma = confirm("Confirme se quer acionar o RESET do BANCO!")
    if (confirma) {
        buscarJson()
    } else {
        document.getElementById("avisoDelete").innerHTML = "<p style='color:green'><br>Ação de RESET cancelada!</p>"
        // Recarrega a página atual sem usar o cache
        setInterval(function () {
            document.location.reload(true);
        }, 2000);
    }
}


//Função chama o json externo
function buscarJson() {

    let ajax = new XMLHttpRequest(Cache, false);

    ajax.onload = function () {
        if (ajax.readyState == 4) {
            if (ajax.status == 200) {
                //Objeto sem aspas na CHAVE somente no VALUE ao contrário do Json
                //O parse torna o Json em OBJETO
                let dados = JSON.parse(ajax.responseText);
                //Chama a função "sendJson" passando por parametro os usuario parseados em forma de OBJETOS
                sendJson(dados);
            } else {
                //Verifica se o arquivo existe e imprime um erro
                if (ajax.status == 404) {
                    document.getElementById("avisoDelete").innerHTML = '<h1 class="erro">Arquivo não encotrado!</h1>'
                }
            }
        }
    };

    ajax.open("GET", "../reset_banco/insert_banco.json",true);
    ajax.send();
}

//Função envido OBJETO
function sendJson(dados) {
    var xmlhttp = new XMLHttpRequest(Cache, false); // new HttpRequest instance ;
    xmlhttp.onload = function () {
        //Recebe os dados vindos do aqruivo processa.php
        document.getElementById("avisoDelete").innerHTML = xmlhttp.responseText;
        // Recarrega a página atual sem usar o cache
        setInterval(function () {
            document.location.reload(true);
        }, 3000);
    };

    //Tipo POST que envia dados para o arquivo ./processa.php
    xmlhttp.open("POST", "../reset_banco/processa.php", true);
    //Cabeçalho que define tipo de arquivo a ser enviado que é json
    xmlhttp.setRequestHeader("Content-Type", "application/json");

    //Pega OBJETO na variável DADOS e transforma em uma String
    myJSON = JSON.stringify(dados);

    //Envia essa String para o arquivo ./processa.php
    xmlhttp.send(myJSON);

}