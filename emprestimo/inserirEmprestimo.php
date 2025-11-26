<?php
include "../conexao.php";

// Pega os dados do formulário
$data = $_GET['data'];
$usuario = $_GET['usuario'];
$livro = $_GET['livro'];
$operacao = $_GET['operacao'];

// Busca quantidade atual
$qtd = $conexao->query("SELECT quantidade FROM livro WHERE titulo = '$livro'");

$dados = $qtd->fetch_object();
$quantidadeAtual = intval($dados->quantidade);

// Ajusta quantidade
if ($operacao == 'entrada') {
    $quantidadeAtual++;
} else {
    $quantidadeAtual--;
}

// Insere dados na tabela CORRETA
$sql = "INSERT INTO emprestimo (data, usuario, livro)
        VALUES ('$data', '$usuario', '$livro')";

try {

    $resposta = $conexao->query($sql);

    // Atualiza SOMENTE o livro selecionado
    $conexao->query("UPDATE livro SET quantidade = $quantidadeAtual 
                     WHERE titulo = '$livro'");

    echo "Cadastrado com Sucesso!";

} catch (Exception $erro) {

    echo "Erro ao cadastrar <br>" . $erro->getMessage();
}
?>

<a href="../index.php\">voltar</a>
