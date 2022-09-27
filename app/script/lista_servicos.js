servicos.forEach(service => {
    const tr = document.createElement('tr')
    /* Tem que ser dentro de crase */

    /* Escolhe o tipo de status basedo na cor do texto */
    const status =
        service.situacao === 'Pendente' ? 'perigo' :
            service.situacao === 'Andamento' ? 'alerta' :
                service.situacao === 'Efetuado' ? 'sucesso' :
                    service.situacao === 'Analise' ? 'analise' :
                        'principal'

    /* Atribui a construção da tabela à váriável */
    const trContent =
        `
                <td>${service.servico}</td>
                <td>${service.numero}</td>
                <td>${service.taxa}</td>
                <td class="${status}">${service.situacao}</td>
                <td class="principal"><a href="#" style="text-decoration:none">Detalhes</a></td>
                `
    /* Cria as linha com o conteúdo da variável */
    tr.innerHTML = trContent
    /* Atribui ao corpo da tabela as linhas */
    document.querySelector('table tbody').appendChild(tr)
})