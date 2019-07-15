<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aula 18 - Exercícios</title>
</head>
<body>
    <ol>
        <li>
            <p>Utilizando um for, imprimir os números de 1 a 100</p>
            <div>
                <?php 
                    for ($i = 1; $i <= 100; $i++)
                    {
                        echo ($i . " , ");
                    }
                ?>
            </div>
        </li>
        <li>
            <p>Modificar o exercício anterior para que, em vez de parar no número 100, pare
em um número gerado aleatoriamente entre 0 e 100</p>
            <div>
                <?php
                    for ($i=0; $i <= mt_rand(0,100) ; $i++) 
                    { 
                        echo ($i . " , ");
                    }
                ?>
            </div>
        </li>
    </ol>
</body>
</html>