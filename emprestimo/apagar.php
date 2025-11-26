<?php 
   
    // Faço a conexao com o banco de dados
   include "../conexao.php";

    // Pego o atributo identificador do formulário
   $id = $_GET['id'];

    // Escrevo o comando de apagar 
    $sql = "DELETE FROM emprestimo WHERE isbn = $id";

    try{
        // executo o comando
         $conexao->query($sql);
        //  Redireciona para a lista de emprestimos
         header('location: ../view/verEmprestimos.php');
    }catch(Exception $e){
        echo "Erro ao apagar ".$e->getMessage();
    }
    


?>