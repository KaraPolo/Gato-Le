<?php
    include '../model/db.class.php';
    include '../bases/header.php';
    include '../bases/nav.php';

    $db = new DB();
    $db->conn();
    
    if(!empty($_POST['id'])){
        $db->update("comentariocorvo", $_POST);
        header("location: 2ocorvoLIST.php");
    }
    else if($_POST){
        $db->insert("comentariocorvo", $_POST);
        header("location: 2ocorvoLIST.php");
    }
    if(!empty($_GET['id'])){
        $comentariocorvo = $db->find("comentariocorvo", $_GET['id']);
    }
?>

<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <img src="https://a-static.mlcdn.com.br/450x450/o-corvo/livrariaitalivros/9788567191133/2bc3e3eb84f252b1ce1cc8d9000432ad.jpg" class="img-fluid" alt="Imagem do Livro">
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">O Corvo</h5>
                        <p class="card-text">O corvo é a obra mais famosa de Edgar Allan Poe, e considerado um dos poemas mais perfeitos já escritos por sua estrutura estética e literária. O enredo versa sobre os delírios de um homem após a morte de sua amada, Lenora, e trata sobre a dor da perda, a falta de esperança e a angústia da existência.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Autor:</strong> Edgar Allan Poe</li>
                        <li class="list-group-item"><strong>Ano de Lançamento:</strong> 1845</li>
                        <li class="list-group-item"><strong>Gênero:</strong> Terror</li>
                    </ul>
                    <div class="card-body">
                        <a href="https://www.esquerda.net/media/o_corvo_poe_pessoa.pdf" class="btn btn-primary" target="_blank">Ler</a>
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
    <form action="2ocorvoFORM.php" method="post">
        <input type="hidden" name="id" value="<?php echo !empty($comentariocorvo->id) ? $comentariocorvo->id : "" ?>" class="form-control"><br>

        <div class="form-group">
            <label for="nota">Nota (0-10)</label>
            <input type="int" name="nota" placeholder="Digite uma nota para essa Obra de 0 a 10..." required value="<?php echo !empty($comentariocorvo->nota) ? $comentariocorvo->nota : "" ?>" class="form-control">
        </div>

        <div class="form-group">
            <label for="personagem">Personagem Favorito da Obra</label>
            <input type="text" name="personagem" placeholder="Fale sobre personagem favorito da Obra..." required value="<?php echo !empty($comentariocorvo->personagem) ? $comentariocorvo->personagem : "" ?>" class="form-control">
        </div>

        <div class="form-group">
            <label for="coment">Crítica ou Elogio para a Obra</label>
            <input type="text" name="coment" placeholder="Digite sua crítica ou seu elogio para a Obra..." required value="<?php echo !empty($comentariocorvo->coment) ? $comentariocorvo->coment : "" ?>" class="form-control">
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
