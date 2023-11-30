<?php
    include '../model/db.class.php';
    include '../bases/header.php';
    include '../bases/nav.php';
    $db = new DB();
    $db->conn();
    
    if(!empty($_POST['id'])){
        $db->update("comentariocthulhu", $_POST);
        header("location: 2cthulhuLIST.php");
    }
    else if($_POST){
        $db->insert("comentariocthulhu", $_POST);
        header("location: 2cthulhuLIST.php");
    }
    if(!empty($_GET['id'])){
        $comentariocthulhu = $db->find("comentariocthulhu", $_GET['id']);
    }
?>


<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <img src="https://cdn.awsli.com.br/2500x2500/2099/2099388/produto/152923663/453009bb6b.jpg" class="img-fluid" alt="Imagem do Livro">
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">O Chamado de Cthulhu</h5>
                        <p class="card-text">O livro é um conto de terror que descreve a investigação de um ser considerado Deus por povos antigos. Esse Deus era um ser extraterrestre e seu retorno traria o fim da humanidade. O conto foi escrito em 1928 e foi lançado pela primeira vez na revista estadunidense Weird Tales (Contos Estranhos) em 1928.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Autor:</strong> H. P. Lovecraft</li>
                        <li class="list-group-item"><strong>Ano de Lançamento:</strong> 1928</li>
                        <li class="list-group-item"><strong>Gênero:</strong> Terror</li>
                    </ul>
                    <div class="card-body">
                        <a href="https://ia801003.us.archive.org/34/items/livrospdf/Terror/H.P.%20Lovecraft%20-%20O%20Chamado%20de%20Cthulhu_v2%20%281928%29.pdf" class="btn btn-primary" target="_blank">Ler</a>
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
    <form action="2cthulhuFORM.php" method="post">
        <input type="hidden" name="id" value="<?php echo !empty($comentariocthulhu->id) ? $comentariocthulhu->id : "" ?>" class="form-control"><br>

        <div class="form-group">
            <label for="nota">Nota (0-10)</label>
            <input type="int" name="nota" placeholder="Digite uma nota para essa Obra de 0 a 10..." required value="<?php echo !empty($comentariocthulhu->nota) ? $comentariocthulhu->nota : "" ?>" class="form-control">
        </div>

        <div class="form-group">
            <label for="personagem">Personagem Favorito da Obra</label>
            <input type="text" name="personagem" placeholder="Fale sobre personagem favorito da Obra..." required value="<?php echo !empty($comentariocthulhu->personagem) ? $comentariocthulhu->personagem : "" ?>" class="form-control">
        </div>

        <div class="form-group">
            <label for="coment">Crítica ou Elogio para a Obra</label>
            <input type="text" name="coment" placeholder="Digite sua crítica ou seu elogio para a Obra..." required value="<?php echo !empty($comentariocthulhu->coment) ? $comentariocthulhu->coment : "" ?>" class="form-control">
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
