<?php

    function calcudarDiferencaPercentual($valorIni, $valorFin) 
    { 
        if($valorIni == 0)
        {
            return 0;
            header("Location: sistema.php");
            
        }
        $diferenca = $valorIni - $valorFin; // Calcula a diferença de preço 
        $percentialDif = ($diferenca / $valorIni) * 100;  // Calcula o percentual da diferença 
        return $percentialDif;
    }

    include_once("sistema.php");
    include_once("config.php");

    if(isset($_POST['submit']))
    {
        $nome = $_POST['nome'];
        $valorIni = $_POST['valorIni'];
        $valorFin = $_POST['valorFin'];
        $dataIni = $_POST['dataIni'];
        $dataFin = $_POST['dataFin'];
        $promoPercent = calcudarDiferencaPercentual($valorIni, $valorFin);
    
       $resultado = mysqli_query($conexao, "INSERT INTO promocoes(produtoNome, produtoValor, promoValor, promoPercent, promoDataInicio, promoDataFim) 
       VALUES ('$nome','$valorIni','$valorFin','$promoPercent', '$dataIni', '$dataFin')");

    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Promocão</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20,147,220), rgb(17,54,71));
        }

        .box-cadPromo{
            color:white;
            position:absolute;
            top: 51.5%; left: 85%;
            transform: translate(-50%,-50%);
            background-color: rgba(0,0,0,1);
            padding: 15px;
            border-radius: 15px;
            width: 30%;
        }
        fieldset{
            border: 3px solid dodgerblue;
            padding: 15px;
        }
        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
        }

        .input-box-cadastro{
            position: relative;
        }
        .input-promo{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
            

        }
        .label-input{
            position:absolute;
            top:0px;
            left:0px;
            pointer-events: none;
            transition: .5s
        }

        .input-promo:focus ~ .label-input,
        .input-promo:valid ~ .label-input{
            top:-20px;
            font-size: 12px;
            color: dodgerblue;
        }

        .dataIniFin{
            border: none;
            border-radius: 10px;
            padding: 8px;
            outline: none;
            font-size: 15px;
        }
        #submit{
            background-image: linear-gradient(to right, rgb(0,92,197), rgb(90,20,220));
            padding: 20px;
            border-radius: 10px;
            outline: none;
            border: none;
            width: 100%;
            color: white;
            cursor: pointer;
            font-size: 20px;

        }

        #submit:hover{
            background-image: linear-gradient(to right, rgb(0,80,172), rgb(80,19,195));
        }
        a{
            color: white;
        }
        a:hover{
            color: dodgerblue;
        }
        #closePopUp{
            position: relative;
            top: 20%;
            left:90%;
            border-radius: 10px;

        }
    </style>
</head>
<body>

    <div class="box-cadPromo">
        
        <form action="cadastrarPromo.php" method="POST">
            <a id="closePopUp"href="sistema.php" class="btn btn-danger me-5">X</a>

            <fieldset>
                <br>
                <legend><b>Incluir Promoção</b></legend>
                <br><br>

                <div class="input-box-cadastro">
                    <input type="text" name="nome" id="nome" class="input-promo" required>
                    <label for="nome" class="label-input">Nome Produto</label>
                </div>

                <br><br>

                <div class="input-box-cadastro">
                    <input type="currency" name="valorIni" id="valorIni" class="input-promo" required>
                    <label for="valorIni" class="label-input">Valor Inicial</label>
                </div>
                <br><br>
                <div class="input-box-cadastro">
                    <input type="currency" name="valorFin" id="ValorFin" class="input-promo" required>
                    <label for="valorFin" class="label-input">Valor Promocional</label>
                </div>

                <br>

                

                <label for="dataIni"><b>Data de Início da Promo:</b></label>
                <input class="dataIniFin" type="date" name="dataIni" id="dataIni" required>

                <br><br>

                <label for="dataFin"><b>Data de Fim da Promo:</b></label>
                <input class="dataIniFin" type="date" name="dataFin" id="dataFin" required>
               
                <br><br>
                <input type="submit" name="submit" id="submit">
                <br><br>
                
            </fieldset>




        </form>
        


    </div>

</body>
</html>
