
async function detalharUsuario(id){
const  detalhes = await fetch('../usuario_detalhe/usuario_detalhe_processa.php?id='+id)
const resposta = await detalhes.json()


document.getElementById("idUsuario").innerHTML = resposta['dados'].id;
document.getElementById("nomeUsuario").innerHTML = resposta['dados'].nome;
document.getElementById("telUsuario").innerHTML = resposta['dados'].tel;
document.getElementById("emailUsuario").innerHTML = resposta['dados'].email;
}