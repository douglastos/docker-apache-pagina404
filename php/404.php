<?php
http_response_code(404);
// Define o cabeçalho de conteúdo como UTF-8
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Não Encontrada</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            text-align: center;
            background: #ffffff;
            padding: 50px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            max-width: 600px;
            width: 90%;
        }
        h1 {
            font-size: 80px;
            margin: 0;
            color: #e74c3c;
        }
        p {
            font-size: 22px;
            color: #555;
            margin: 20px 0;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 25px;
            background-color: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 25px;
            font-size: 18px;
        }
        a:hover {
            background-color: #2980b9;
        }
        img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>404</h1>
        <p>Oops! Parece que você se perdeu...</p>
        <img src="https://raw.githubusercontent.com/douglastos/docker-apache-pagina404/refs/heads/main/img/404.gif" alt="404">
        <p>A página que você está procurando não existe.</p>
        <a href="https://www.meusite.com.br">Voltar para a Página Inicial</a>
    </div>
</body>
</html>
