<?php
    include '../model/db.class.php';
    include '../bases/header.php';
    include '../bases/nav.php';

    $db = new DB();
    $db->conn();
    
    if(!empty($_POST['id'])){
        $db->update("comentarionarnia", $_POST);
        header("location: 2narniaLIST.php");
    }
    else if($_POST){
        $db->insert("comentarionarnia", $_POST);
        header("location: 2narniaLIST.php");
    }
    if(!empty($_GET['id'])){
        $comentarionarnia = $db->find("comentarionarnia", $_GET['id']);
    }
?>

<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <img src="https://m.media-amazon.com/images/I/7158aW38zxL._AC_UF1000,1000_QL80_.jpg" class="img-fluid" alt="Imagem do Livro">
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">O Leão, a Feiticeira e o Guarda-Roupa</h5>
                        <p class="card-text">A aventura começa durante a Segunda Guerra Mundial, quando Peter, Lucy, Edmund e Susan são obrigados a sair de Londres e a instalar-se numa pequena cidade em Inglaterra, na casa de um professor solteirão. Enquanto exploram a mansão, Lucy descobre uma passagem secreta muito especial no guarda-roupa do velho professor.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Autor:</strong> C.S. Lewis</li>
                        <li class="list-group-item"><strong>Ano de Lançamento:</strong> 1950</li>
                        <li class="list-group-item"><strong>Gênero:</strong> Fantasia</li>
                    </ul>
                    <div class="card-body">
                        <a href="https://itaudeminas.mg.gov.br/arquivos/ere/livros/o-Leao-a-feiticeira-e-o-guarda-roupa.pdf" class="btn btn-primary" target="_blank">Ler</a>
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
    <form action="2narniaFORM.php" method="post">
        <input type="hidden" name="id" value="<?php echo !empty($comentarionarnia->id) ? $comentarionarnia->id : "" ?>" class="form-control"><br>

        <div class="form-group">
            <label for="nota">Nota (0-10)</label>
            <input type="int" name="nota" placeholder="Digite uma nota para essa Obra de 0 a 10..." required value="<?php echo !empty($comentarionarnia->nota) ? $comentarionarnia->nota : "" ?>" class="form-control">
        </div>

        <div class="form-group">
            <label for="personagem">Personagem Favorito da Obra</label>
            <input type="text" name="personagem" placeholder="Fale sobre personagem favorito da Obra..." required value="<?php echo !empty($comentarionarnia->personagem) ? $comentarionarnia->personagem : "" ?>" class="form-control">
        </div>

        <div class="form-group">
            <label for="coment">Crítica ou Elogio para a Obra</label>
            <input type="text" name="coment" placeholder="Digite sua crítica ou seu elogio para a Obra..." required value="<?php echo !empty($comentarionarnia->coment) ? $comentarionarnia->coment : "" ?>" class="form-control">
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
