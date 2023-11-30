<?php
    include '../model/db.class.php';
    include '../bases/header.php';
    include '../bases/nav.php';

    $db = new DB();
    $db->conn();
    
    if(!empty($_POST['id'])){
        $db->update("comentarioit", $_POST);
        header("location: 2itacoisaLIST.php");
    }
    else if($_POST){
        $db->insert("comentarioit", $_POST);
        header("location: 2itacoisaLIST.php");
    }
    if(!empty($_GET['id'])){
        $comentarioit = $db->find("comentarioit", $_GET['id']);
    }
?>

<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <img src="https://m.media-amazon.com/images/I/51z0s3GcvwL._SY445_SX342_.jpg" class="img-fluid" alt="Imagem do Livro">
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">It: A Coisa</h5>
                        <p class="card-text">Durante as férias de 1958, em uma pacata cidadezinha chamada Derry, um grupo de sete amigos começa a ver coisas estranhas. Um conta que viu um palhaço, outro que viu uma múmia. Finalmente, acabam descobrindo que estavam todos vendo a mesma coisa: um ser sobrenatural e maligno que pode assumir várias formas.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Autor:</strong> Stephen King</li>
                        <li class="list-group-item"><strong>Ano de Lançamento:</strong> 1986</li>
                        <li class="list-group-item"><strong>Gênero:</strong> Terror</li>
                    </ul>
                    <div class="card-body">
                        <a href="https://kbook.com.br/wp-content/uploads/2016/08/It_-A-coisa-Stephen-King.pdf" class="btn btn-primary" target="_blank">Ler</a>
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
    <form action="2itacoisaFORM.php" method="post">
        <input type="hidden" name="id" value="<?php echo !empty($comentarioit->id) ? $comentarioit->id : "" ?>" class="form-control"><br>

        <div class="form-group">
            <label for="nota">Nota (0-10)</label>
            <input type="int" name="nota" placeholder="Digite uma nota para essa Obra de 0 a 10..." required value="<?php echo !empty($comentarioit->nota) ? $comentarioit->nota : "" ?>" class="form-control">
        </div>

        <div class="form-group">
            <label for="personagem">Personagem Favorito da Obra</label>
            <input type="text" name="personagem" placeholder="Fale sobre personagem favorito da Obra..." required value="<?php echo !empty($comentarioit->personagem) ? $comentarioit->personagem : "" ?>" class="form-control">
        </div>

        <div class="form-group">
            <label for="coment">Crítica ou Elogio para a Obra</label>
            <input type="text" name="coment" placeholder="Digite sua crítica ou seu elogio para a Obra..." required value="<?php echo !empty($comentarioit->coment) ? $comentarioit->coment : "" ?>" class="form-control">
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
