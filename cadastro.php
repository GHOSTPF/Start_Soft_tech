<?php

require 'config.php';

if( isset($_POST['matricula']) ) {
    $nome = $_POST['nome'];
    $matricula = $_POST['matricula'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    $sexo = $_POST['genero'];
    $data_nasc = $_POST['data_nascimento'];
    $endereco = $_POST['endereco'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $sql = "INSERT INTO usuarios (nome, matricula, senha, sexo,data_nasc, endereco, cidade, estado)
    VALUES ('{$nome}', '{$matricula}', '{$senha}', '{$sexo}', '{$data_nasc}', '{$endereco}', '{$cidade}', '{$estado}')";

    if ($conexao->query($sql) === TRUE) {
        header('Location: form.php?cadastro=true');
  } else {
    header('Location: form.php?cadastro=false');
  }
}
  
$conexao->close();