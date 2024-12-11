<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Login</title>

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

        .Tela-Login{
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

        #submit{
            background-image: linear-gradient(to right, rgb(20,147,220), rgb(17,54,71));
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
            background-image: linear-gradient(to right, rgb(30,157,235), rgb(25,65,82));

        }
        a{
            color: white;
        }
        a:hover{
            color: dodgerblue;
        }
    </style>
    </style>
</head>
<body>
    <div class="box">  
        <fieldset>
            <legend><b>Veja agora as novas ofertas!</b></legend>
            <br><br>
            <div class="Tela-Login">
            
                <h1>Login</h1>

                <form action="verificaLogin.php" method="POST">
                    <input type="text" name="credencial" class="input-user" placeholder="E-mail ou Telefone">
                    <label for="credencial" class="label-input"></label>
                    <br>
                    <br>
                    <input type="password" name="senha" class="input-user" placeholder="Senha">
                    <label for="senha" class="label-input"></label>
                    <br>
                    <br>
                    <input type="submit" name="submit" id="submit" value="Entrar">
                </form>
            </div>
            <br><br>
            <a href="formularioCadastro.php">Não tem uma conta? Cadastre-se aqui!</a>
        </fieldset>
    </div>  
</body>
</html>