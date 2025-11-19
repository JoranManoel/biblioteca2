<?php 
    session_start();
    if(!isset($_SESSION['usuario'])){
        header('location: ../login.php');
    }

    include "menu.php"
?>
<h1>Cadastrar Livro</h1>


<form action="../livro/inserirLivro.php">

    <label for="isbn">ISBN:</label>
    <input type="text" name="isbn" id="">
    <br>
    <label for="titulo">Título:</label>
    <input type="text" name="titulo" id="">
    <br>
    <label for="autor">Autor:</label>
    <input type="text" name="autor" id="">
    <br>
    <label for="genero">Gênero</label>
    <select name="genero" id="">
        <option value="romance">Romance</option>
        <option value="drama">Drama</option>
        <option value="terror">Terror</option>
        <option value="fantasia">Fantasia</option>
    </select>
    <br><br>
    <button type="submit">Cadastrar</button>

</form>