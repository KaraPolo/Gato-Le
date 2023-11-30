<?php
    include '../model/db.class.php';
    include '../bases/header.php';
    include '../bases/nav.php';

    $db = new DB();
    $db->conn();

    if(!empty($_GET['id'])){
        $db->destroy("comentarionarnia", $_GET['id']);
        header("location: 2narniaLIST.php");
    }

    if(!empty($_POST)){
        $dados =  $db->search("comentarionarnia", $_POST);
    } else {
        $dados = $db->select("comentarionarnia");
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

    <div class="container sobre mx-auto"> <!-- Adiciona a classe mx-auto para centralizar -->
    <h3 class="mt-4">Comentários do livro: O Leão, a Feiticeira e o Guarda-Roupa</h3>
    <form action="2narniaLIST.php" method="post" class="form-inline my-2 my-lg-0">
        <select name="tipo" class="form-control mr-sm-2">
            <option value="nota">Nota</option>
            <option value="personagem">Personagem Favorito</option>
            <option value="coment">Comentário</option>
        </select>
        <input type="text" name="valor" class="form-control mr-sm-2">
        <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Buscar</button>
    </form>

    <a href="2narniaFORM.php" class="btn btn-primary mt-3">Comentar</a>

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
                echo "<td><a href='2narniaFORM.php?id=$item->id' class='btn btn-warning btn-sm'>Editar</a></td>";
                echo "<td><a onclick='return confirm(\"Deseja Excluir?\")' href='2narniaLIST.php?id=$item->id' class='btn btn-danger btn-sm'>Deletar</a></td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>
<?php include "../bases/footer.php" ?>
