<?php

if(isset($_POST['register'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = mysqli_query($conect, "INSERT INTO login (nome, email, password) VALUES ('$nome', '$email','$password')");

    if ($query){
        echo 'Cadastro realizado com sucesso';
    } else {
        echo 'Não foi possível cadastrar';
    }
} 

?>
