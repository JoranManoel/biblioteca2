<?php 

    include "../conexao.php";

    // Pega os dados do formulário
    $id = $_GET['id'];
    $data = $_GET['data'];
    $usuario = $_GET['usuario'];
    $livro = $_GET['livro'];


    // Comando SQL para atualizar dados no Banco de Dados
    $sql = "UPDATE emprestimo set id = '$id', data = '$data', usuario = '$usuario', livro = '$livro' WHERE id = $id";

    // Tenta executar o comando caso tenha erro pega o erro
    try{
         // Executa o comando e salva a resposta do resultado do comando
        $resposta = $conexao->query($sql);
        echo "Atualizado com Sucesso!";
    }catch(Exception $erro){
        echo "Erro ao cadastrar <br>".$erro->getMessage();
    }
?>

<a href="../index.php">voltar</a>