<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início</title>
</head>
<body>
    <?php 
        session_start();
        if(!isset($_SESSION['usuario'])){
            header('Location: login.php');
        }

        // chamo a conexão do banco de dados
    include "conexao.php";

    // incluo o menu
    include "view/menu.php";

    // Escreve o comando sql
    $pegarLivro = "SELECT * FROM livro";
    $pegarUsuario = "SELECT * FROM Usuario";

    // Executo o comando e salvo a resposta
    $respostaLivro = $conexao->query($pegarLivro);
    $respostaUsuario = $conexao->query($pegarUsuario);
    ?>
    <h1>Início</h1>

    <h3>Realizar emprestimo</h3>


    <form action="emprestimo/inserirEmprestimo.php">

        <label for="data">Data:</label>
        <input type="date" name="data" id="">
        
        <label for="usuario">Usuário</label>
        <select name="usuario" id="">
            <?php 
                while($item = $respostaUsuario->fetch_object()){
                    echo "<option value='$item->nome'>$item->nome</option>";
                }
            ?>
        </select>

        <label for="livro">Livro</label>
        <select name="livro" id="">
            <?php 
                while($item = $respostaLivro->fetch_object()){
                    echo "<option value='$item->titulo'>$item->titulo</option>";
                }
            ?>
        </select>
        <label for="operacao">Operação</label>
        <select name="operacao" id="">
            <option value="entrada">entrada</option>
            <option value="saida">saída</option>
        </select>
        
        <button type="submit">Cadastrar</button>

    </form>

</body>
</html>