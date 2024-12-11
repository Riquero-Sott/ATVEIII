<?php
    session_start();
    if(isset($_POST['submit']) && !empty($_POST['credencial']) && !empty($_POST['senha']))
    {

        #utilizando o arquivo config para acessar o banco de dados
        include_once('config.php');
        
        $credencial = $_POST['credencial'];
        $senha = $_POST['senha'];


        $consulta = "SELECT * FROM usuarios WHERE emailUsuarios = '$credencial' AND senhaUsuarios = '$senha'";
        $resultado = $conexao->query($consulta);

        
        if(mysqli_num_rows($resultado) < 1)
        {

            unset($_SESSION['credencial']);
            unset($_SESSION['senha']);
            header ('Location: login.php');
           
        }
        else
        {

            $_SESSION['credencial'] = $credencial;
            $_SESSION['senha'] = $senha;
            header('Location: sistema.php');
        }


    }
    else
    {
        header ('Location: login.php');
       
    }


?>