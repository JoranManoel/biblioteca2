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
    $sql = "SELECT * FROM livro";

    // Executo o comando e salvo a resposta
    $resposta = $conexao->query($sql);
?>

<h1>📚 Livros Cadastrados</h1>

<?php 

    // Repete enquanto tiver algum item no banco de dados.
    // O item vem do banco de dado por isso tem que ter o mesmo nome das colunas
    while($item = $resposta->fetch_object()){
        echo "
            ISBN: $item->isbn <br>
            Título: $item->titulo <br>
            Autor: $item->autor <br>
            Genero: $item->genero <br> 
            
            <br>
        
            <button> 
                <a href='editarLivro.php?id=$item->isbn'> EDITAR </a> 
            </button>

            <button> 
                <a href='../livro/apagar.php?id=$item->isbn'> EXCLUIR </a> 
            </button>

            <hr>
        ";
    }

?>