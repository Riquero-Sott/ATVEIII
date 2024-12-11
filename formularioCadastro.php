<?php
    
    if(isset($_POST['submit']))
    {
       

        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $bairro = $_POST['bairro'];
        $localidade = $_POST['localidade'];
        $genero = $_POST['genero'];
        $dataNascimento = $_POST['dataNascimento'];
        $senha = $_POST['senha'];

        $resultado = mysqli_query($conexao, "INSERT INTO usuarios(nomeUsuarios, emailUsuarios, telefoneUsuarios, bairroUsuarios, ruaUsuarios, sexoUsuarios, dataNascUsuarios, senhaUsuarios) VALUES ('$nome', '$email', '$telefone', '$bairro', '$localidade', '$genero', '$dataNascimento', '$senha')");

        header("Location: login.php");

    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Cadastro</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20,147,220), rgb(17,54,71));
        }

        .box{
            color:white;
            position:absolute;
            top: 50%; left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0,0,0,0.6);
            padding: 15px;
            border-radius: 15px;
            width: 30%;
        }
        fieldset{
            border: 3px solid dodgerblue;
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
        .input-user{
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

        .input-user:focus ~ .label-input,
        .input-user:valid ~ .label-input{
            top:-20px;
            font-size: 12px;
            color: dodgerblue;
        }

        #dataNascimento{
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
    </style>
</head>
<body>
    
    <div class="box">
        
        <form action="formularioCadastro.php" method="POST">
            <fieldset>
                <legend><b>Formulário de Cadastro</b></legend>
                <br><br>

                <div class="input-box-cadastro">
                    <input type="text" name="nome" id="nome" class="input-user" required>
                    <label for="nome" class="label-input">Nome Completo</label>
                </div>

                <br><br>

                <div class="input-box-cadastro">
                    <input type="text" name="email" id="email" class="input-user" required>
                    <label for="text" class="label-input">E-Mail</label>
                </div>
                <br><br>
                <div class="input-box-cadastro">
                    <input type="tel" name="telefone" id="telefone" class="input-user" required>
                    <label for="telefone" class="label-input">Telefone</label>
                </div>

                <br>

                <p><b>Sexo:</b></p>
                <input type="radio" id="feminino" name="genero" value="feminino">
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino">
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outro" name="genero" value="outro">
                <label for="outro">Outro</label>
                <br><br>
                

                <label for="dataNascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="dataNascimento" id="dataNascimento" required>
             
           
                <br><br>


                <div class="input-box-cadastro">
                    <input type="text" name="bairro" id="bairro" class="input-user" required>
                    <label for="bairro" class="label-input"><b>Bairro</b></label>
                </div>

                <br><br>

                <div class="input-box-cadastro">
                    <input type="text" name="localidade" id="localidade" class="input-user" required>
                    <label for="localidade" class="label-input"><b>Localidade/Rua</b></label>
                </div>
                <br><br>
                <div class="input-box-cadastro">
                    <input type="password" name="senha" id="senha" class="input-user" required>
                    <label for="senha" class="label-input"><b>Senha</b></label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
                <br><br>
                <a href="login.php">Já tem uma conta? Clique aqui!</a>
            </fieldset>




        </form>
        


    </div>



</body>
</html>