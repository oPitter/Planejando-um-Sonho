
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
            float:right;
            
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

    <?php #código otimizado
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $total = 0; 
 
    for ($i = 1; $i <= 6; $i++) {
     
        if (isset($_GET['valor' . $i]) && is_numeric($_GET['valor' . $i])) {
            $total += floatval($_GET['valor' . $i]);
        }
    }

    echo "Vocês precisam de R$ $total reais no total ";
}
        ?>

        <a href="index.html" style="color: white;">Voltar ao Inicio</a>
    </div>
</body>
</html>



<!-- // if ($_SERVER["REQUEST_METHOD"] == "GET") { //
    //Código V1
//     //verifica se o método de solicitação HTTP usado para acessar o script PHP é GET.
//     $valor1 = $_GET['valor1'];
//     $valor2 = $_GET['valor2'];
//     $valor3 = $_GET['valor3'];
//     $valor4 = $_GET['valor4'];
//     $valor5 = $_GET['valor5'];
//     $valor6 = $_GET['valor6'];
//     //os valores enviados pelo formulário HTML são recuperados usando a variável superglobal $_GET
    

//     // Exemplo de soma dos valores
//     $total = floatval($valor1) + floatval($valor2) + floatval($valor3) + floatval($valor4) + floatval($valor5) + floatval($valor6);

//     echo "O total dos valores é $total";
// }
?> -->