<?php
    session_start();

    include_once("config.php");

    if((!isset($_SESSION['credencial']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['credencial']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
        
    $logged = $_SESSION['credencial'];



    $sql = "SELECT * FROM promocoes ORDER BY idPromo DESC";
    $resultado = $conexao  -> query($sql);

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promocoes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
         body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20,147,220), rgb(17,54,71));


        }

        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
        }

        .navbar{
            background-image: linear-gradient(to right, yellow, orange);
        }

        .loginCredencial{
            background: white;
            text-align: center;
            border-radius: 10px;
            padding: 10px;
        }
        .table{
            background-color: dodgerblue;
            text-align: center;
        }
        tr{
            background-color: dodgerblue;

        }
        .box{
            color:white;
            position:absolute;
            
            top: 10%; left: 0%;
            
            background-color: rgba(0,0,0,0.6);
            padding: 15px;
            border-radius: 15px;
            width: 70%;
        }
        fieldset{
            border: 3px solid dodgerblue;
            padding: 15px;
            border-radius: 15px;
        }
        table{
            color: dodgerblue;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Supermercado do Luizinho</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="sistema.php">Home</a>
            </li>
            <?php

            if($_SESSION['credencial'] == 'riqzero0@gmail.com')
            {
                echo ('<li class="nav-item">');
                echo ('<a class="nav-link" href="cadastrarPromo.php">Adicionar Promoção</a>');
                echo ('</li>');

            }
                
            ?>
        </ul>
        </div>
    </div>
    <div class="d-flex">
        <div class="loginCredencial">   
            <?php

                echo "<u>$logged</u>";

            ?>
        </div>
        <a href="sair.php" class="btn btn-danger me-5">Sair</a>
    </div>
    </nav>
    <br><br>
    <br><br>

    <div class="box">
        <fieldset>
            <legend><h1>Listagem de Promos</h1></legend>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">IdPromo</th>
                        <th scope="col">Nome Produto</th>
                        <th scope="col">Valor Inicial</th>
                        <th scope="col">Valor Promocional</th>
                        <th scope="col">Percentual da Promo</th>
                        <th scope="col">DataIni</th>
                        <th scope="col">DataFin</th>


                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($promo_data = mysqli_fetch_assoc($resultado))
                        {
                            echo "<tr>";
                            echo "<td>".$promo_data['idPromo']."</td>";
                            echo "<td>".$promo_data['produtoNome']."</td>";
                            echo "<td>".$promo_data['produtoValor']."</td>";
                            echo "<td>".$promo_data['promoValor']."</td>";
                            echo "<td>".$promo_data['promoPercent']."%</td>";
                            echo "<td>".$promo_data['promoDataInicio']."</td>";
                            echo "<td>".$promo_data['promoDataFim']."</td>";
                            echo "</tr>";

                        }

                    ?>
                </tbody>
            </table>
        </fieldset>
    </div>


</body>
</html>