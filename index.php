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
            <p>Modificar o exercício anterior para que, em vez de parar no número 100, pare em um número gerado aleatoriamente entre 0 e 100</p>
            <div>
                <?php
                    for ($i=0; $i <= mt_rand(0,100) ; $i++) 
                    { 
                        echo ($i . " , ");
                    }
                ?>
            </div>
        </li>

        <li>
            <p> Mostrar a tabela de multiplicação do 2 utilizando um for</p>
            <div>
                    <table>
                        <?php
                            for ($i= 1; $i <= 10 ; $i++) {
                                echo('<tr>');
                                echo('<td>'); 
                                echo (2 . ' x ' . $i . ' = ' . (2*$i) );
                                echo('  </td>');
                                echo('<tr>');
                            }
                        ?>
                    </table>
            </div>
        </li>

        <li>
            <p>Utilizando um while, fazer um programa que lance uma moeda (escolhendo
            um número aleatório que pode ser 0 ou 1) até tirar 5 vezes cara (o número 1).
            Ao terminar, imprimir o número de lançamentos da moeda até tirar 5 vezes
            cara.</p>
            <div>
                <?php
                    $contagem = 0;
                    $n_arremessos = 0;
                    while($contagem != 5){

                        $result = mt_rand(0,1);
                        $n_arremessos++;

                        // FORMA IF NORMAL
                        // if($result == 1){
                        //     $contagem++;
                        // } else {
                        //     $contagem = 0;
                        // }

                        // FORMA IF TERNÁRIO com atribuição
                        $contagem = ($result == 1 ? $contagem + 1 : 0); //posso atribuir o resukltado do if ternário a una variável!

                        // FORMA IF TERNÁRIO sem atribuição
                        // $result == 1 ? $contagem++ : $contagem=0;
                        //para fazer o git commit --amend
                    }
                    echo("Lançou a moeda $n_arremessos vezes até conseguir 5 caras");
                ?>
            </div>
        </li>

        <li>
            <p> Utilizando um do/while, realizar um programa que lance a moeda até tirar cara (o número 1).
            No final do programa, imprimir quantos lançamentos da moeda forem necessários.</p>
            <div>
                    <?php
                        // SOLUÇÃO SÉRGIO
                        // $n_arremessos = 0;
                        // do {
                        //     $result = mt_rand(0,1);
                        //     $n_arremessos++;
                        // } while ($result != 1);
                        // echo('Deu cara depois de ' . $n_arremessos . ' arremessos');

                        // SOLUÇÃO AUTORAL
                        $resultadoCara = 0;
                        $quantidadeLancamento = 0;
                        do {
                            $lancamento = mt_rand(0,1);
                            echo $lancamento . " ";
                            $quantidadeLancamento++;
                            $resultadoCara = ($lancamento == 1 ? $resultadoCara + 1: 0);
                        } while ($resultadoCara != 1); // enquanto for diferente de 1 vai continuar fazendo !
                        echo("Lançou a moeda $quantidadeLancamento vezes até conseguir tirar cara");
                    ?>
            </div>
        </li>

        <li>
            <p>Definir um array com 5 strings que sejam nomes. Percorrer esse array para
            imprimir todos os nomes na tela.<br>
            a. Resolver este problema com um for.<br>
            b. Resolver este problema com while.<br>
            c. Resolver este problema com um do/while.<br>
            </p>
            <div>
                <?php
                    $nomes = [
                        'Sérgio',
                        'Thomaz',
                        'Fernando Finado',
                        'Ana Livia',
                        'Marcuso'
                    ];
                    echo "Metodo For".'<br>'.'<br>';

                    for($i = 0; $i < count($nomes) ; $i++){
                        echo($nomes[$i].'<br>');
                    }
                    echo '<br>'."Metodo While".'<br>'.'<br>';

                    $i = 0;
                    while ($i < count($nomes)){
                        echo($nomes[$i].'<br>');
                        $i++;
                    }

                    echo '<br>'."Imprimindo ao Contrário".'<br>'.'<br>';
                    $i = count($nomes) -1;
                    do {
                        echo($nomes[$i].'<br>');
                        $i--;
                    } while ($i >= 0);
                ?>
            </div>
        </li>

        <li>
            <p>Definir um array com 10 números aleatórios entre 0 e 10. Percorrer esse array
            para imprimir todos os números. A execução deve terminar se algum dos
            números encontrados for 5 (a mensagem impressa deve ser “Encontramos um
            5!”).
            a. Resolver este problema com um for.
            b. Resolver este problema com um while.
            c. Resolver este problema com um do/while.</p>

            <div>
                <?php
                    $numeros = [];
                    echo 'a) Método For'.'<br>';
                    for($i = 0; $i < 10; $i++){
                        $var = mt_rand(0,10);
                        $numeros[] = $var;
                        if ($var == 5){
                            echo 'Encontramos um 5!';
                            print_r($numeros);
                            break;
                        }
                    }
                    $numeros = [];
                    echo '<br>'.'b) Método While'.'<br>';
                    while(count($numeros)<=10){
                        $var = mt_rand(0,10);
                        $numeros[] = $var;
                        if ($var == 5){
                            echo 'Encontramos um 5!';
                            print_r($numeros);
                            break;
                        }
                    }
                    $numeros = [];
                    echo '<br>'.'c) Método Do/While'.'<br>';
                    do {
                        $var = mt_rand(0,10);
                        $numeros[] = $var;
                        if ($var == 5){
                            echo 'Encontramos um 5!';
                            print_r($numeros);
                            break;
                        }
                    } while (count($numeros)<=10)
                ?>
            </div>
        </li>

        <li>
            <p>Utilizando a função “Range”(http://php.net/manual/en/function.range.php),
            criar um intervalo de letras (de a até o), imprimir um valor que diga “Na posição<br>
            [index], está o valor [value]”, em que [value] será substituído por cada valor do<br>
            array e [index] representa o índice.<br>
            </p>

            <pre>
                <?php
                    $letras = range('a','o');
                    print_r($letras);
                ?>
            </pre>
            <div>
                <?php
                    foreach ($letras as $posicao => $letra) {
                        echo "Na posição $posicao, está o valor $letra<br>";
                    }
                ?>
            </div>
        </li>

        <li>
            <p>Definir uma variável $mascote que seja um array associativo</p>
            <div>
                <?php 
                    $mascote = [
                        'animal' => 'Cachorro',
                        'idade' => 5,
                        'altura' => 0.60,
                        'nome' => 'Sonic'
                    ];
                    echo('<pre>');
                    print_r($mascote);
                    echo('</pre>');

                ?>
            </div>
        </li>

        <li>
        <p>Percorrer os valores do array com um foreach que imprima (por exemplo):
            animal: cachorro
            idade: 5
            altura: 0,60
            nome: Sonic</p>
        <div>
        <?php
            foreach ($mascote as $indice => $valor) {
                echo "$indice: $valor <br>";
            }
        ?>
        </div>
        </li>
    </ol>
</body>
</html>