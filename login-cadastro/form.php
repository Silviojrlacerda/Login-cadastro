<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style_login-form.css">
    <title>Cadastro</title>
</head>
<body>
    <header>
    </header>
    <main>
        <div class="box_form">

            <form action="config_register.php" method="POST" class="form" id="form" onsubmit="return validatePassword();" >

                <div class="title_Register">
                    <h1>Cadastro</h1>
                </div>
                <br>
                <div class="inputBox">

                    <label for="name" class="labelInput">Nome e sobrenome</label>
                    <input type="text" name="name" id="inputName" class="inputUser required" placeholder="Insira seu nome completo" oninput="nameValidate(); this.value = this.value.replace(/[0-9]/g, '')" required >
                    <span class="span-required">Este campo é obrigatório.</span>
                    
                </div>
                <br>
                <br>
                <div class="inputBox">
                    
                    <label for="email" class="labelInput">E-mail</label>
                    <input type="email" name="email" id="inputEmail" class="inputUser required" placeholder="Ex:(email@exemplo.com)" oninput="emailValidate();" required>
                    <span class="span-required"> Digite um e-mail válido</span>
                    
                </div>
                <br>
                <br>
                <div class="inputBox">

                    <label for="text" class="labelInput">Número de contato</label>
                    <input type="tel" name="telephone" id="inputTelephone" class="inputUser required" placeholder="(99) 99999-9999" onkeyup="masktelephone(this);" maxlength="15" oninput="telValidate();"  required>
                    <span class="span-required"> Este campo é obrigatório. </span>
                    
                </div>
                <br>
                <p>Gênero:</p>
                <div class="box_select">

                    <input type="radio" id="feminine" name="gender" value="feminine" >
                    <label for="feminine">Feminino</label>
                    <br>
                    <input type="radio" id="masculine" name="gender" value="masculine" >
                    <label for="masculine">Masculino</label>
                    <br>
                    <input type="radio" id="other" name="gender" value="other">
                    <label for="feminine">Outros</label>
                </div>
                <br>
                <br>
                <div class="inputBox">

                    <label for="birth_date">Data de nascimento:</label>
                    <input type="date" name="birth_date" id="inputBirth_date" class="inputBirth_date" max="<?php echo date('Y-m-d'); ?>" required >
                    
                </div>
                <br>
                <br>
                <div class="inputBox">
                    
                    <label for="password" class="labelInput">Senha</label>
                    <input type="password" name="password" class="inputUser required" id="password" placeholder="Insira uma senha (Ex: Exemplo@!123)" oninput="mainPasswordvalidate();" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*()_+-=]).{8,}$" required>
                    <span class="span-required">Senha com no mínimo 8 dígitos,<br> letras maiúsculas, minúsculas,<br> números e caracteres especiais.</span>
                </div>
                <br>
                <br>
                <div class="inputBox">

                    <label for="password" class="labelInput">Confirme sua senha</label>
                    <input type="password" name="confirm_password" class="inputUser required" id="confirm_password" placeholder="Insira a mesma senha" oninput="confirmPasswordvalidate();" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*()_+-=]).{8,}$" required>
                    <span class="span-required">A senha deve ser a mesma digitada anteriormente</span>
                
                <br>
                <br>
                <div>
                    <input type="submit" name="register" class="register" id="register" value="Registrar">
                </div>
                <br>
                <br>
                <div class="come_back" id="come_back" >
                    <a name="come_back" class="c_back" id="c_back" href="login.html">Voltar</a>
                <div>

            </form>

        </div>

    </main>
    <footer>

    </footer>
    
</body>
<script src="config_form.js"></script>
</html>