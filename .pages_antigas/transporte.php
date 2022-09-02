<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="../image/icon/smart-city.png" type="image/x-icon">

    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/table_style.css">
    <!-- bot_style.css para o rodapé -->
    <link rel="stylesheet" href="../style/bot_style.css">
    <link rel="stylesheet" href="../style/data_hora_style.css">
    <title>Transporte</title>
    <!-- async = Você faz um carregamento assíncrono, ou seja, sem bloquear a página -->
    <script src="../script/data_hora.js" async></script>
</head>

<body class="body">
    <header class="Sobre">
        
        <section class="logo_title">
            <img class="logo" src="../image/icon/smart-city-200.png" alt="">
            <h1 class="title"> Transporte</h1>
            <section class="home">
                <a href="principal.php"><img id="image_home" class= "image_home"src="..\image\icon\house.png" alt="home"></a>
                 <label class="image_home_title"for="image_home">Home</label>
             </section>
        </section>
	</header>	
		<main class="conteudo_table">
		    <h1 class="title_iti">Itinerário dos Ônibus</h1>
            <section class ="container-data-hora">
                <h2 id="data-hora"></h2>
            </section>

            <table class="content-table">
                <thead>
                    <tr>
                        <th>Linha</th>
                        <th>Horário/Chegada</th>
                        <th>horário/Saída</th>
                        <th>Empresa</th>
                        <th>Dia/Semana</th>
                    </tr>
                </thead>
                <tbody>
                        <tr>
                            <th>01</th>
                            <th>10:00</th>
                            <th>10:15</th>
                            <th>Trex</th>
                            <th>Segunda/Sexta</th>
                        </tr>
                        <tr>
                            <th>02</th>
                            <th>11:00</th>
                            <th>11:15</th>
                            <th>Trex</th>
                            <th>Sabado/Domingo</th>
                        </tr>
                        <!-- dar um exemplo de linha ativa -->
                        <tr class="active-row">
                            <th>03</th>
                            <th>12:00</th>
                            <th>12:15</th>
                            <th>Trex</th>
                            <th>Feriados</th>
                        </tr>

                        <tr>
                            <th>04</th>
                            <th>9:00</th>
                            <th>9:15</th>
                            <th>Trex</th>
                            <th>Segunda/Sexta</th>
                        </tr>
                        <tr>
                            <th>05</th>
                            <th>10:00</th>
                            <th>10:15</th>
                            <th>Trex</th>
                            <th>Sabado/Domingo</th>
                        </tr>
                        <!-- dar um exemplo de linha ativa -->
                        <tr class="active-row">
                            <th>06</th>
                            <th>11:00</th>
                            <th>11:15</th>
                            <th>Trex</th>
                            <th>Feriados</th>
                        </tr>
                </tbody>
                
            </table>
        </main>
        <footer class="rodape">
            <section class="rodape_title">
                <h1 class="rodape_title_texto"> SmartCityCamaquã</h1>
            </section>
    
            <section class="rodape_credito">
                <a href="https://www.youtube.com/watch?v=biI9OFH6Nmg&ab_channel=dcode" target="_blank">
                    <h1 class="rodape_credito_texto"> Crédito: dcode (YouTube: Styling HTML tables with CSS - Web Design/UX Tutorial)</h1>
                </a>
            </section>
    
        </footer>
</body>

</html>