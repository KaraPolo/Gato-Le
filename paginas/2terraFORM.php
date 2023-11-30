<?php
    include '../model/db.class.php';
    include '../bases/header.php';
    include '../bases/nav.php';

    $db = new DB();
    $db->conn();
    
    if(!empty($_POST['id'])){
        $db->update("comentarioterra", $_POST);
        header("location: 2terraLIST.php");
    }
    else if($_POST){
        $db->insert("comentarioterra", $_POST);
        header("location: 2terraLIST.php");
    }
    if(!empty($_GET['id'])){
        $comentarioterra = $db->find("comentarioterra", $_GET['id']);
    }
?>

<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <img src="https://sebolarlivros.com.br/media/catalog/product/cache/1/image/600x800/9df78eab33525d08d6e5fb8d27136e95/v/i/viagem_ao_centro_da_terra_1_.jpg" class="img-fluid" alt="Imagem do Livro">
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Viagem ao Centro Da Terra</h5>
                        <p class="card-text">O professor Lidenbrock consegue decifrar um enigma do pergaminho de um cientista do século XII e se junta ao seu sobrinho, o jovem Áxel, para checar a possibilidade de chegar ao centro da Terra seguindo o relato decifrado.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Autor:</strong> Júlio Verne</li>
                        <li class="list-group-item"><strong>Ano de Lançamento:</strong> 1864</li>
                        <li class="list-group-item"><strong>Gênero:</strong> Ficção</li>
                    </ul>
                    <div class="card-body">
                        <a href="https://memoria.ebc.com.br/sites/_portalebc2014/files/atoms/files/-viagem_ao_centro_da_terra_-_julio_verne.pdf" class="btn btn-primary" target="_blank">Ler</a>
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
    <form action="2terraFORM.php" method="post">
        <input type="hidden" name="id" value="<?php echo !empty($comentarioterra->id) ? $comentarioterra->id : "" ?>" class="form-control"><br>

        <div class="form-group">
            <label for="nota">Nota (0-10)</label>
            <input type="int" name="nota" placeholder="Digite uma nota para essa Obra de 0 a 10..." required value="<?php echo !empty($comentarioterra->nota) ? $comentarioterra->nota : "" ?>" class="form-control">
        </div>

        <div class="form-group">
            <label for="personagem">Personagem Favorito da Obra</label>
            <input type="text" name="personagem" placeholder="Fale sobre personagem favorito da Obra..." required value="<?php echo !empty($comentarioterra->personagem) ? $comentarioterra->personagem : "" ?>" class="form-control">
        </div>

        <div class="form-group">
            <label for="coment">Crítica ou Elogio para a Obra</label>
            <input type="text" name="coment" placeholder="Digite sua crítica ou seu elogio para a Obra..." required value="<?php echo !empty($comentarioterra->coment) ? $comentarioterra->coment : "" ?>" class="form-control">
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