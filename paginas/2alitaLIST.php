<?php
    include '../model/db.class.php';
    include '../bases/header.php';
    include '../bases/nav.php';

    $db = new DB();
    $db->conn();

    if(!empty($_GET['id'])){
        $db->destroy("comentarioalita", $_GET['id']);
        header("location: 2alitaLIST.php");
    }

    if(!empty($_POST)){
        $dados =  $db->search("comentarioalita", $_POST);
    } else {
        $dados = $db->select("comentarioalita");
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
    <div class="container sobre mx-auto"> <!-- Adicione a classe mx-auto para centralizar -->
    <h3 class="mt-4">Comentários do livro: Battle Angel Alita</h3>
    <form action="2alitaLIST.php" method="post" class="form-inline my-2 my-lg-0">
        <select name="tipo" class="form-control mr-sm-2">
            <option value="nota">Nota</option>
            <option value="personagem">Personagem Favorito</option>
            <option value="coment">Comentário</option>
        </select>
        <input type="text" name="valor" class="form-control mr-sm-2">
        <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Buscar</button>
    </form>

    <a href="2alitaFORM.php" class="btn btn-primary mt-3">Comentar</a>

    <table class="table table-striped mt-3">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nota</th>
                <th scope="col">Personagem Favorito</th>
                <th scope="col">Comentário</th>
                <th scope="col">Ação</th>
                <th scope="col">Ação</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($dados as $item){
                echo "<tr>";
                echo "<th scope='row'>$item->id</th>";
                echo "<td>$item->nota</td>";
                echo "<td>$item->personagem</td>";
                echo "<td>$item->coment</td>";
                echo "<td><a href='2alitaFORM.php?id=$item->id' class='btn btn-warning btn-sm'>Editar</a></td>";
                echo "<td><a onclick='return confirm(\"Deseja Excluir?\")' href='2alitaLIST.php?id=$item->id' class='btn btn-danger btn-sm'>Deletar</a></td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>

    <div class="container mt-5">
    <?php include "../bases/footer.php" ?>
    </div>
    
</body>
</html>