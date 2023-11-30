<?php
    include '../model/db.class.php';
    include '../bases/header.php';
    include '../bases/nav.php';
    $db = new DB();
    $db->conn();
    
    if(!empty($_POST['id'])){
        $db->update("comentarioalita", $_POST);
        header("location: 2alitaLIST.php");
    }
    else if($_POST){
        $db->insert("comentarioalita", $_POST);
        header("location: 2alitaLIST.php");
    }
    if(!empty($_GET['id'])){
        $comentarioalita = $db->find("comentarioalita", $_GET['id']);
    }
?>

<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <img src="https://images-americanas.b2w.io/produtos/134563378/imagens/livro-battle-angel-alita-vol-1-autor-yukito-kishiro-2018/134563378_1_large.jpg" class="img-fluid" alt="Imagem do Livro">
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Battle Angel Alita</h5>
                        <p class="card-text">Com forte influência de filmes como Blade Runner – O Caçador de Andróides, Mad Max e O Exterminador do Futuro, Battle Angel Alita se passa em um mundo distópico, onde a alta tecnologia e a decadência da humanidade se misturam. É nesse futuro caótico que a ciborgue Alita é trazida de volta à vida.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Autor:</strong> Yukito Kishiro</li>
                        <li class="list-group-item"><strong>Ano de Lançamento:</strong> 1990</li>
                        <li class="list-group-item"><strong>Gênero:</strong> Ficção</li>
                    </ul>
                    <div class="card-body">
                        <a href="https://www.indicalivros.com/livros/battle-angel-alita-volume-1-yukito-kishiro/pdf" class="btn btn-primary" target="_blank">Ler</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Adicione margem superior à div que envolve o formulário de comentários -->
    <div class="sobre">

<div class="container mt-5">
        <div class="welcome-text">
            <h3>Deixe um Comentário</h3>
        </div>
    <form action="2alitaFORM.php" method="post">
        <input type="hidden" name="id" value="<?php echo !empty($comentarioalita->id) ? $comentarioalita->id : "" ?>" class="form-control"><br>

        <div class="form-group">
            <label for="nota">Nota (0-10)</label>
            <input type="int" name="nota" placeholder="Digite uma nota para essa Obra de 0 a 10..." required value="<?php echo !empty($comentarioalita->nota) ? $comentarioalita->nota : "" ?>" class="form-control">
        </div>

        <div class="form-group">
            <label for="personagem">Personagem Favorito da Obra</label>
            <input type="text" name="personagem" placeholder="Fale sobre personagem favorito da Obra..." required value="<?php echo !empty($comentarioalita->personagem) ? $comentarioalita->personagem : "" ?>" class="form-control">
        </div>

        <div class="form-group">
            <label for="coment">Crítica ou Elogio para a Obra</label>
            <input type="text" name="coment" placeholder="Digite sua crítica ou seu elogio para a Obra..." required value="<?php echo !empty($comentarioalita->coment) ? $comentarioalita->coment : "" ?>" class="form-control">
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