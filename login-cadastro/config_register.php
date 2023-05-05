<?php
    include_once('conexao.php');

    if (isset($_POST['register'])){
    
        $name = $_POST['name'];
        $email = $_POST['email'];
        $telephone = $_POST['telephone'];
        $gender = $_POST['gender'];
        $birth_date = $_POST['birth_date'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        $email = $_POST['email'];
        $query = "SELECT * FROM usuarios WHERE email = '{$email}'";
        $result = mysqli_query($conexao, $query);

        if ($result->num_rows > 0) {
            $mensagem = "E-mail já cadastrado!";
            header("Location: form.php?mensagem_error=".urlencode($mensagem));
            exit();

        } else {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $telephone = $_POST['telephone'];
            $gender = $_POST['gender'];
            $birth_date = $_POST['birth_date'];
            $password = $_POST['password'];
            $confirm_password = $_POST['confirm_password'];

            $query = "INSERT INTO usuarios(name, email, telephone, gender, birth_date, password, confirm_password) 
            VALUES ('{$name}', '{$email}', '{$telephone}', '{$gender}', '{$birth_date}', '{$password}', '{$confirm_password}')";
            $result = mysqli_query($conexao, $query);


            $to = $email;
            $subject = "Cadastro realizado com sucesso";
            $message1 = "Bem vindo, '$name'";
            $message2 = "Seu e-mail cadstrado é '$email'";
            $headers = "From: exemplo@exemplo.com";
            mail($to, $subject, $message1, $message2, $headers);
        
            $mensagem = "Cadastro realizado com sucesso!";
            header("Location: login.php?mensagem_sucess=".urlencode($mensagem));
            exit();
        }
        
    }
?>