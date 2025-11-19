<?php 
    session_start();

    if(isset($_SESSION['usuario'])){
        include "menu.php";
    }else{
        echo "<a href='../login.php'> Realizar login</a>";
    }
    
?>
<h1>Cadastrar Usuario</h1>


<form action="../usuario/inserirUsuario.php">

    <label for="nome">Nome:</label>
    <input type="text" required name="nome" id="">
    <br>
    <label for="email">Email:</label>
    <input type="email" required name="email" id="">
    <br>
    <label for="senha">Senha:</label>
    <input type="text" required name="senha" id="">
    <br><br>
    <button type="submit">Cadastrar</button>

</form>