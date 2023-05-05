<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style_login-form.css">
    <title>Login</title>
    <script>
        
    </script>
</head>
<body>
    <header class="header_login">
    </header>

    <main class="main-login">

        <section class="box_login">
            
            <form action="config_login.php" method="POST" class="form" id="form">

                <div>
                    <h1 class="title_Login">Login</h1>
                </div>
                <br>

                <div class="inputBox">
                    <label for="email" class="login_Label" id="login_Label">E-mail</label>
                    <input type="email" name="email" class="inputUser required" id="loginEmail" placeholder="Insira seu e-mail cadastrado" oninput="emailValidate();" required>
                    <span class="span-requiredLogin">Preencha com seu e-mail cadastrado </span>
                </div>

                <br><br>

                <div class="inputBox">
                    <label for="password" class="login_Label" id="login_Label">Senha</label>
                    <input type="password" name="password" class="inputUser required" id="passwordLogin" placeholder="Insira sua senha" oninput="mainPasswordvalidate();" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*()_+-=]).{8,}$" required>
                    <span class="span-requiredLogin">Preencha sua senha</span>
                </div>

                <br><br>

                <div>
                    <input type="submit" name="check_in" class="check_in" id="check_in" value="Entrar"><br><br>
                </div>

                <br><br>

                <div class="p_login">É novo aqui?</div>
            
                <br>

                <div class="create_account" id="create_account" >
                    <a  id="a_account" href="form.html"> Crie sua conta</a>
                </div>

                <br>
            </form>
            
            
        </section>

    </main>
    
    <footer>


    </footer>
    
</body>
<script src="config_login.js"></script>
</html>