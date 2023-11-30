<?php
    include '../model/db.class.php';
    include '../bases/header.php';
    include '../bases/nav.php';

    $db = new DB();
    $db->conn();
    
    if(!empty($_POST['id'])){
        $db->update("comentarioexorcista", $_POST);
        header("location: 2oexorcistaLIST.php");
    }
    else if($_POST){
        $db->insert("comentarioexorcista", $_POST);
        header("location: 2oexorcistaLIST.php");
    }
    if(!empty($_GET['id'])){
        $comentarioexorcista = $db->find("comentarioexorcista", $_GET['id']);
    }
?>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <img src="https://m.media-amazon.com/images/I/91fQ51I4TRL._AC_UF1000,1000_QL80_.jpg" class="img-fluid" alt="Imagem do Livro">
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">O Exorcista</h5>
                        <p class="card-text">A história centra-se em Regan, a filha de doze anos de Chris MacNeil, uma ocupada actriz que reside em Washington D.C. A criança aparenta estar possuída por um demónio ancestral e cabe a dois padres a dura tarefa de o exorcizar, arriscando a sanidade e a própria vida.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Autor:</strong> William Peter Blatty</li>
                        <li class="list-group-item"><strong>Ano de Lançamento:</strong> 1971</li>
                        <li class="list-group-item"><strong>Gênero:</strong> Terror</li>
                    </ul>
                    <div class="card-body">
                        <a href="https://www.osaberdigital.com.br/wp-content/uploads/2022/08/William-Peter-Blatty-O-Exorcista.pdf" class="btn btn-primary" target="_blank">Ler</a>
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
    <form action="2oexorcistaFORM.php" method="post">
        <input type="hidden" name="id" value="<?php echo !empty($comentarioexorcista->id) ? $comentarioexorcista->id : "" ?>" class="form-control"><br>

        <div class="form-group">
            <label for="nota">Nota (0-10)</label>
            <input type="int" name="nota" placeholder="Digite uma nota para essa Obra de 0 a 10..." required value="<?php echo !empty($comentarioexorcista->nota) ? $comentarioexorcista->nota : "" ?>" class="form-control">
        </div>

        <div class="form-group">
            <label for="personagem">Personagem Favorito da Obra</label>
            <input type="text" name="personagem" placeholder="Fale sobre personagem favorito da Obra..." required value="<?php echo !empty($comentarioexorcista->personagem) ? $comentarioexorcista->personagem : "" ?>" class="form-control">
        </div>

        <div class="form-group">
            <label for="coment">Crítica ou Elogio para a Obra</label>
            <input type="text" name="coment" placeholder="Digite sua crítica ou seu elogio para a Obra..." required value="<?php echo !empty($comentarioexorcista->coment) ? $comentarioexorcista->coment : "" ?>" class="form-control">
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
