<?php
    include '../model/db.class.php';
    include '../bases/header.php';
    include '../bases/nav.php';

    $db = new DB();
    $db->conn();

    if(!empty($_GET['id'])){
        $db->destroy("comentariocthulhu", $_GET['id']);
        header("location: 2cthulhuLIST.php");
    }

    if(!empty($_POST)){
        $dados =  $db->search("comentariocthulhu", $_POST);
    } else {
        $dados = $db->select("comentariocthulhu");
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

    <div class="container sobre mx-auto"> <!-- Adiciona a classe mx-auto para centralizar -->
    <h3 class="mt-4">Comentários do livro: O Chamado de Cthulhu</h3>
    <form action="2cthulhuLIST.php" method="post" class="form-inline my-2 my-lg-0">
        <select name="tipo" class="form-control mr-sm-2">
            <option value="nota">Nota</option>
            <option value="personagem">Personagem Favorito</option>
            <option value="coment">Comentário</option>
        </select>
        <input type="text" name="valor" class="form-control mr-sm-2">
        <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Buscar</button>
    </form>

    <a href="2cthulhuFORM.php" class="btn btn-primary mt-3">Comentar</a>

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
                echo "<td><a href='2cthulhuFORM.php?id=$item->id' class='btn btn-warning btn-sm'>Editar</a></td>";
                echo "<td><a onclick='return confirm(\"Deseja Excluir?\")' href='2cthulhuLIST.php?id=$item->id' class='btn btn-danger btn-sm'>Deletar</a></td>";
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
