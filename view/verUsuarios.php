<?php 

    session_start();
    if(!isset($_SESSION['usuario'])){
        header('location: ../login.php');
    }

    // chamo a conexão do banco de dados
    include "../conexao.php";

    // incluo o menu
    include "menu.php";

    // Escreve o comando sql
    $sql = "SELECT * FROM usuario";

    // Executo o comando e salvo a resposta
    $resposta = $conexao->query($sql);
?>

<h1>Usuários Cadastrados</h1>

<?php 

    // Repete enquanto tiver algum item no banco de dados.
    // O item vem do banco de dado por isso tem que ter o mesmo nome das colunas
    while($item = $resposta->fetch_object()){
        echo "
            <b>Nome:</b> $item->nome <br>
            <b>Email:</b> $item->email <br>

            <br>
            <button> 
                <a href='../usuario/apagarUsuario.php?id=$item->id'> EXCLUIR </a> 
            </button>

            <hr>
        ";
    }

?>