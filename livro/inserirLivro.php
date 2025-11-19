<?php 

    include "../conexao.php";

    // Pega os dados do formulário
    $isbn = $_GET['isbn'];
    $titulo = $_GET['titulo'];
    $autor = $_GET['autor'];
    $genero = $_GET['genero'];

    // Comando SQL para inserir dados no Banco de Dados
    $sql = "INSERT INTO livro VALUES('$isbn','$titulo','$autor','$genero')";

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