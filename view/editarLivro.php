<?php 
    session_start();
    if(!isset($_SESSION['usuario'])){
        header('location: ../login.php');
    }
    include "../conexao.php";

    $isbn = $_GET['id'];

    $resposta = $conexao->query("SELECT * FROM livro WHERE isbn = $isbn");

    $livro = $resposta->fetch_object();

    include "menu.php"
?>
<h1>Atualizar Livro</h1>


<form action="../livro/atualizarLivro.php">

    <!-- Esse input passa o id para o atualizar -->
    <input type="hidden" name="id" value="<?= $livro->isbn ?>">

    <label for="isbn">ISBN:</label>
    <input type="text" name="isbn" value="<?= $livro->isbn ?>" id="">
    <br>
    <label for="titulo">Título:</label>
    <input type="text" name="titulo"  value="<?= $livro->titulo ?>" id="">
    <br>
    <label for="autor">Autor:</label>
    <input type="text" name="autor"  value="<?= $livro->autor ?>" id="">
    <br>
    <label for="genero">Gênero</label>
    <select name="genero" id="">
        <option value="<?= $livro->genero ?>"><?= $livro->genero ?></option>
        <option value="romance">Romance</option>
        <option value="drama">Drama</option>
        <option value="terror">Terror</option>
        <option value="fantasia">Fantasia</option>
    </select>
    <br><br>
    <button type="submit">Atualizar</button>

</form>