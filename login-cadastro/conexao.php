<?php
     //Banco de dados
    $dbHost = 'localhost';
    //Usuário do banco de dados
    $dbUsername = 'root';
    //senha do banco, caso tenha senha
    $dbPassword= '';
    //Nome do banco de dados
    $dbName = 'formulario-cadastro';

     //Comando para se conectar com o seu banco de dados
    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
    
    if($conexao->connect_errno) {
        
        echo "Falha ao se conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
   } else{
        echo "conectado";
   }

   

?>