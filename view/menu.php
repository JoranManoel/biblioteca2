<div>

<!-- Caminhos dos arquivos de telas -->
    <a href="/biblioteca2">Início</a>

    <a href="/biblioteca2/view/cadastrarLivro.php">Cadastrar Livro</a>
    
    <a href="/biblioteca2/view/verLivros.php">Ver Livros</a>

    <a href="/biblioteca2/view/cadastrarUsuario.php">Cadastrar Usuário</a>
    
    <a href="/biblioteca2/view/verUsuarios.php">Ver Usuários</a>
    
    <a href="/biblioteca2/sair.php" id="logout">⍈ sair</a>

</div>

<style>
    .alerta{
        background-color: red;
        color: white;
    }
    div{
        display: flex; 
        justify-content: space-around; 
        background-color: yellow; 
        height: 40px; 
        border-radius: 15px; 
        align-items: center
    }
    a{
        text-decoration: none;
        color: darkgray;
        transition: 0.3s;
    }  
    a:hover{
        transform: scale(1.1);
        color: gray;
    }  

    #logout{
        color: black;
        font-weight: bolder;
    }

</style>