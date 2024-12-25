<?php
    $aniversario = [8,12,2004];

    $variavel1 = "Olá!";
    $variavel2 = 58;
    $variavel3 = 9.137;
    $variavel4 = true;
    $variavel5 = [10,20,30];
    $variavel6 = null;

    $array = [3,4,9,1];
    $a = 5;
    $b = 8;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Atividade Funções</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet"  type="text/css" href="funcoes.css">

        <style>
            .php-highlight {
                color: #F2357B;
            }
        </style>
    </head>
    <body>
        <div class="titulo">
            <h1>Funções em <span class="php-highlight">PHP</span></h1>
        </div>
        <div class="container mt-4 pl-4 mb-5">
            <div class="row">
                <div class="col-12 col-lg-3 mb-4">
                    <div class = "menu">
                        <h2>Funções</h2>
                        <li><a href="#array">array_values()</a><br></li>
                        <li><a href="#gettype">gettype()</a><br></li>
                        <li><a href="#max">max()</a><br></li><br>

                        <h2>Integrantes</h2>

                        <li>Kleber</li>
                        <li>Nicole</li>
                        <li>Rafaela</li>
                        <li>Sarah</li>
                    </div>
                </div>
                <div class="col-12 col-lg-9">
                    <div class="row">
                        <div class="col-12 mb-md-4">
                            <p id="array" class="titulo_comeco">array_values()</p>
                            <p class="explicacao_comeco text-justify">
                                A funçao array_values() recebe como parametro um array, o converte para string e exibe seus elementos com os respectivos índices. Veja o exemplo:
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class = "exemplos">
                                <?php
                                    echo '
                                    &lt;?php<br><br>
                                        $aniversario = [08, 12, 2004];<br><br>
                                        
                                        print_r(array_values($array));<br>
                                        echo "Data de nascimento:"<br>.$array[0]."/".$array[1]."/".$array[2];<br><br>

                                    ?&gt;';
                                ?>
                            </div>
                        </div>
                        <div class="col-12 col-md-2 mt-4 mt-md-0 d-flex justify-content-center">
                            <div class = "caixa_botao">
                                <form method="POST">
                                    <button class="botoes" type="submit" name="botao1">EXECUTAR CÓDIGO DO EXEMPLO</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mt-4 mt-md-0">
                            <div class ="caixa">
                                <?php
                                    if($_SERVER['REQUEST_METHOD'] == 'POST'){
                                        if(isset($_POST['botao1'])){ 

                                            echo "<div class='resultados'>";
                                            print_r(array_values($aniversario))."<br>";
                                            echo "<br><br>Data de nascimento: <br>";
                                            echo $aniversario[0]."/".$aniversario[1]."/".$aniversario[2]."<br>";
                                            echo "</div>";
                                        }
                                    }
                                ?>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12 mb-md-4">
                            <p id = "gettype" class = "titulos">gettype()</p>
                            <p class = "explicacoes text-justify">
                                A função gettype() em PHP é utilizada quando deseja-se saber qual é o tipo de uma determinada variável com base em seu conteúdo. Para essa função, é requerido apenas um parâmetro: uma variável da qual se deseja obter o tipo de dado. Veja o exemplo:
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class = "exemplos">
                                <?php
                                    echo '
                                    &lt;?php<br><br>
                                        $variavel1 = "Olá!";<br>
                                        $variavel2 = 58;<br>
                                        $variavel3 = 9.137;<br>
                                        $variavel4 = true;<br>
                                        $variavel5 = [10,20,30];<br>
                                        $variavel6 = null;<br><br>

                                        echo "Tipo da variável1: ".gettype($variavel1);<br>
                                        echo "Tipo da variável2: ".gettype($variavel2);<br>
                                        echo "Tipo da variável3: ".gettype($variavel3);<br>
                                        echo "Tipo da variável4: ".gettype($variavel4);<br>
                                        echo "Tipo da variável5: ".gettype($variavel5);<br>
                                        echo "Tipo da variável6: ".gettype($variavel6);<br><br>

                                    ?&gt;';
                                ?>
                            </div>
                        </div>
                        <div class="col-12 col-md-2 mt-4 mt-md-0 d-flex justify-content-center">
                            <div class = "caixa_botao">
                                <form method="POST">
                                    <button class="botoes" type="submit" name="botao2">EXECUTAR CÓDIGO DO EXEMPLO</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mt-4 mt-md-0">
                            <div class ="caixa">
                                <?php
                                    if($_SERVER['REQUEST_METHOD'] == 'POST'){
                                        if(isset($_POST['botao2'])){ 

                                            echo "<div class='resultados'>";
                                            echo "Tipo da variável1: ".gettype($variavel1)."<br>";
                                            echo "Tipo da variável2: ".gettype($variavel2)."<br>";
                                            echo "Tipo da variável3: ".gettype($variavel3)."<br>";
                                            echo "Tipo da variável4: ".gettype($variavel4)."<br>";
                                            echo "Tipo da variável5: ".gettype($variavel5)."<br>";
                                            echo "Tipo da variável6: ".gettype($variavel6)."<br>";
                                            echo "</div>";
                                        }
                                    }
                                ?>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12 mb-md-4">
                            <p id = "max" class = "titulos">max()</p>          
                        
                            <p class = "explicacoes text-justify">
                                A função max() retorna o maior valor dentre os parâmetros fornecidos.
                                Caso seja fornecido um array, a função mostra o maior valor encontrado.
                                Veja o exemplo:
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="exemplos">
                                <?php
                                    echo '
                                    &lt;?php<br><br>
                                        $array = [3,4,9,1];<br>
                                        $a = 5;<br>
                                        $b = 8;<br><br>
                                        
                                        echo "Dentro do Array o maior valor é: " .max($array);<br>
                                        echo "Entre as variavies a e b o maior valor é: .max($a, $b);<br><br>
                                    ?&gt;';
                                ?>
                            </div>
                        </div>
                        <div class="col-12 col-md-2 mt-4 mt-md-0 d-flex justify-content-center">
                            <div class = "caixa_botao">
                                <form method="POST">
                                    <button class="botoes" type="submit" name="botao3">EXECUTAR CÓDIGO DO EXEMPLO</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mt-4 mt-md-0">
                            <div class ="caixa">
                                <?php
                                    if($_SERVER['REQUEST_METHOD'] == 'POST'){
                                        if(isset($_POST['botao3'])){ 

                                            echo "<div class='resultados'>";
                                            echo "Dentro do Array o maior valor é: ".max($array)."<br>";
                                            echo "Entre as variavies a e b o maior valor é: " .max($a, $b)."<br>";
                                            echo "</div>";
                                        }
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>