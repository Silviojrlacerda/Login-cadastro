<?php

    session_start();    

    
    if(isset($_POST['check_in']) && !empty($_POST['email']) && !empty($_POST['password'])){
        
        include_once('conexao.php');
        $email = $_POST['email'];
        $password = $_POST['password'];

        

        $sql = "SELECT * FROM usuarios WHERE email = '$email' and password = '$password'";
        $result = $conexao->query($sql);



        if(mysqli_num_rows($result) < 1){
            
            
            unset($_SESSION['email']);
            unset($_SESSION['password']);
            $mensagem = "E-mail não cadastrado!";
            header("Location: login.php?mensagem_error=".urlencode($mensagem));
            exit();
        }
        else{

            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            $mensagem = "Bem vindo, '$email'";
            header("Location: project.php?mensagem_sucess=".urlencode($mensagem));
            exit();

            
        }

    }else{   

        $mensagem = "E-mail ou senha incorretos.";
        header("Location: login.php?mensagem_error=".urlencode($mensagem));
        exit();

    }

    


?>