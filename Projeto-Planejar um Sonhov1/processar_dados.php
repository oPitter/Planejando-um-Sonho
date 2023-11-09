<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perguntas</title>
    <style>
        body{
            
            font-family: Arial, Helvetica, sans-serif;
            background-image:url(./img/casalzim.png);
            background-size: cover;
        }
        div{
            background-color: rgba(122, 40, 255, 0.726);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 15px;
            border-radius: 25px;
            color: #fff;
        }
        input{
            padding: 15px;
            border: 100px;
            border-radius: 100px;
            width: 90%;
            outline: 100px;
            font-size: 15px;
        }
        button{
            background-color: rgb(64, 19, 94);
            border: 100px;
            padding: 15px;
            right: 20%;
            border-radius: 100px;
            color: white;
            font-size: 15px;
            float:center;
            
        }
        button:hover{
            background-color: deepskyblue;
            cursor: pointer;            
        }
        h1 {
            color: white; /* Define a cor do texto para branco */
            text-shadow: 2px 5px 4px rgba(0, 0, 0, 10); /* Adicionando sombra de texto */
        }
    </style>
</head>
<body>
    <div>
<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Recuperar os dados do formulário usando a variável superglobal $_POST
    $nome_noivo = $_GET['nome_noivo'];
    $nome_noiva = $_GET['nome_noiva'];


    // Exemplo de exibição dos dados
    echo "<center>Bem vindos ao Planejar um Sonho!</center> <p>
    Noivinhos $nome_noivo e $nome_noiva</p>";
}
?>
   <center><button><a href="Perguntas.html" style="color: white;">Começar Agora!</a></button></center>
    </div>
    
