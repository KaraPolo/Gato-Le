<?php
    include '../model/db.class.php';
    include '../bases/header.php';
    include '../bases/nav.php';

    $db = new DB();
    $db->conn();
    
    if(!empty($_POST['id'])){
        $db->update("comentarioharry", $_POST);
        header("location: 2harryLIST.php");
    }
    else if($_POST){
        $db->insert("comentarioharry", $_POST);
        header("location: 2harryLIST.php");
    }
    if(!empty($_GET['id'])){
        $comentarioharry = $db->find("comentarioharry", $_GET['id']);
    }
?>

<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <img src="https://m.media-amazon.com/images/I/61jgm6ooXzL._AC_UF1000,1000_QL80_.jpg" class="img-fluid" alt="Imagem do Livro">
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Harry Potter e a Pedra Filosofal</h5>
                        <p class="card-text">A narrativa que inicia a saga Harry Potter conta a história de um menino bruxo que fica órfão, depois que o vilão Voldemort assassina seus pais a sangue frio. O garoto se torna uma lenda no mundo mágico por ter sobrevivido ao feitiço mortal apenas com uma cicatriz na testa, mesmo sendo apenas um bebê.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Autor:</strong> J. K. Rowling</li>
                        <li class="list-group-item"><strong>Ano de Lançamento:</strong> 1997</li>
                        <li class="list-group-item"><strong>Gênero:</strong> Fantasia</li>
                    </ul>
                    <div class="card-body">
                        <a href="https://escolareginaaltman.com.br/wp-content/uploads/2020/04/Harry-Potter-e-a-pedra-filosofal.pdf" class="btn btn-primary" target="_blank">Ler</a>
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
    <form action="2harryFORM.php" method="post">
        <input type="hidden" name="id" value="<?php echo !empty($comentarioharry->id) ? $comentarioharry->id : "" ?>" class="form-control"><br>

        <div class="form-group">
            <label for="nota">Nota (0-10)</label>
            <input type="int" name="nota" placeholder="Digite uma nota para essa Obra de 0 a 10..." required value="<?php echo !empty($comentarioharry->nota) ? $comentarioharry->nota : "" ?>" class="form-control">
        </div>

        <div class="form-group">
            <label for="personagem">Personagem Favorito da Obra</label>
            <input type="text" name="personagem" placeholder="Fale sobre personagem favorito da Obra..." required value="<?php echo !empty($comentarioharry->personagem) ? $comentarioharry->personagem : "" ?>" class="form-control">
        </div>

        <div class="form-group">
            <label for="coment">Crítica ou Elogio para a Obra</label>
            <input type="text" name="coment" placeholder="Digite sua crítica ou seu elogio para a Obra..." required value="<?php echo !empty($comentarioharry->coment) ? $comentarioharry->coment : "" ?>" class="form-control">
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
