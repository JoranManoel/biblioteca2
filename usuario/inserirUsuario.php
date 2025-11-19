<?php 

    include "../conexao.php";

    // Pega os dados do formulário
    $nome = $_GET['nome'];
    $email = $_GET['email'];
    $senha = $_GET['senha'];

    // Comando SQL para inserir dados no Banco de Dados
    $sql = "INSERT INTO usuario VALUES('','$nome','$email','$senha')";

    // Tenta executar o comando caso tenha erro pega o erro
    try{
         // Executa o comando e salva a resposta do resultado do comando
        $resposta = $conexao->query($sql);
        echo "Cadastrado com Sucesso!";
    }catch(Exception $erro){
        echo "Erro ao cadastrar <br>".$erro->getMessage();
    }
?>

<a href="../index.php">voltar</a>