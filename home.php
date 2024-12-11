<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promocoes</title>
    
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20,147,220), rgb(17,54,71));
            color: white;
            text-align: center;
        }

        .box{
            color:white;
            position:absolute;
            top: 50%; left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0,0,0,0.6);
            padding: 15px;
            border-radius: 15px;
            width: 15%;
        }

        a{
            color: white;
            text-decoration: none;
            border: 3px solid dodgerblue;
            padding: 10px;
            border-radius: 10px;
        }
        a:hover{
            
            background-color: #2e72c1;
        }
    </style>
</head>
<body>
    <h1></h1>
    <h2></h2>
    <div class="box">
        <a href="login.php">Login</a>
        <a href="formularioCadastro.php">Cadastre-se</a>
    </div>
</body>
</html>