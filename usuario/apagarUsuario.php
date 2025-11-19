<?php 
   
    // Faço a conexao com o banco de dados
   include "../conexao.php";

    // Pego o atributo identificador do formulário
   $id = $_GET['id'];

    // Escrevo o comando de apagar 
    $sql = "DELETE FROM usuario WHERE id = $id";

    try{
        // executo o comando
         $conexao->query($sql);
        //  Redireciona para a lista de livros
         header('location: ../view/verUsuarios.php');
    }catch(Exception $e){
        echo "Erro ao apagar ".$e->getMessage();
    }
    


?>