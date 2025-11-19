<?php 

    include "../conexao.php";

    // Pega os dados do formulário
    $id = $_GET['id'];
    $titulo = $_GET['titulo'];
    $autor = $_GET['autor'];
    $genero = $_GET['genero'];

    // Comando SQL para atualizar dados no Banco de Dados
    $sql = "UPDATE livro set isbn = '$id', titulo = '$titulo', autor = '$autor', genero = '$genero' WHERE isbn = $id";

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