<?php
    include '../model/db.class.php';
    include '../bases/header.php';
    include '../bases/nav.php';

    $db = new DB();
    $db->conn();
    
    if(!empty($_POST['id'])){
        $db->update("comentariolua", $_POST);
        header("location: 2luaLIST.php");
    }
    else if($_POST){
        $db->insert("comentariolua", $_POST);
        header("location: 2luaLIST.php");
    }
    if(!empty($_GET['id'])){
        $comentariolua = $db->find("comentariolua", $_GET['id']);
    }
?>

<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <img src="https://www.lpm.com.br/livros/imagens/da_terra_a_lua_9788525436399_hd.jpg" class="img-fluid" alt="Imagem do Livro">
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Da Terra à Lua</h5>
                        <p class="card-text">Com o fim da guerra da Secessão, os Estados Unidos vivem um período de paz. Porém, um grupo de especialistas em balística não vê com bons olhos ficar de braços cruzados. Assim, decidem enfrentar um novo desafio: construir um gigantesco canhão que irá disparar um projétil cujo objetivo é chegar à Lua.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Autor:</strong> Júlio Verne</li>
                        <li class="list-group-item"><strong>Ano de Lançamento:</strong> 1865</li>
                        <li class="list-group-item"><strong>Gênero:</strong> Ficção</li>
                    </ul>
                    <div class="card-body">
                        <a href="https://memoria.ebc.com.br/sites/_portalebc2014/files/atoms/files/-da_terra_a_lua_-_julio_verne.pdf" class="btn btn-primary" target="_blank">Ler</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="sobre">
    <div class="container mt-5">
        <div class="welcome-text">
            <h3>Deixe um Comentário</h3>
        </div>
    <form action="2luaFORM.php" method="post">
        <input type="hidden" name="id" value="<?php echo !empty($comentariolua->id) ? $comentariolua->id : "" ?>" class="form-control"><br>

        <div class="form-group">
            <label for="nota">Nota (0-10)</label>
            <input type="int" name="nota" placeholder="Digite uma nota para essa Obra de 0 a 10..." required value="<?php echo !empty($comentariolua->nota) ? $comentariolua->nota : "" ?>" class="form-control">
        </div>

        <div class="form-group">
            <label for="personagem">Personagem Favorito da Obra</label>
            <input type="text" name="personagem" placeholder="Fale sobre personagem favorito da Obra..." required value="<?php echo !empty($comentariolua->personagem) ? $comentariolua->personagem : "" ?>" class="form-control">
        </div>

        <div class="form-group">
            <label for="coment">Crítica ou Elogio para a Obra</label>
            <input type="text" name="coment" placeholder="Digite sua crítica ou seu elogio para a Obra..." required value="<?php echo !empty($comentariolua->coment) ? $comentariolua->coment : "" ?>" class="form-control">
        </div>
        <center>
            <button type="submit" class="btn btn-primary"><?php echo !empty($_GET['id']) ? "Editar" : "Enviar Comentário"?></button>
        </center>
    </form>
</div>
</div>

    <div class="container mt-5">
    <?php include "../bases/footer.php" ?>
    </div>
    
</body>
</html>