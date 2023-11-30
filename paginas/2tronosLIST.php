<?php
    include '../model/db.class.php';
    include '../bases/header.php';
    include '../bases/nav.php';

    $db = new DB();
    $db->conn();

    if(!empty($_GET['id'])){
        $db->destroy("comentariotronos", $_GET['id']);
        header("location: 2tronosLIST.php");
    }

    if(!empty($_POST)){
        $dados =  $db->search("comentariotronos", $_POST);
    } else {
        $dados = $db->select("comentariotronos");
    }
?>
<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <img src="https://m.media-amazon.com/images/I/91+1SUO3vUL._AC_UF1000,1000_QL80_.jpg" class="img-fluid" alt="Imagem do Livro">
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">A Guerra dos Tronos</h5>
                        <p class="card-text">Nas florestas ao norte de Winterfell, forças sobrenaturais se espalham por trás da Muralha que protege a região. E, nas Cidades Livres, o jovem Rei Dragão exilado na Rebelião de Robert planeja sua vingança e deseja recuperar sua herança de família: o Trono de Ferro de Westeros.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Autor:</strong> George R. R. Martin</li>
                        <li class="list-group-item"><strong>Ano de Lançamento:</strong> 1996</li>
                        <li class="list-group-item"><strong>Gênero:</strong> Fantasia</li>
                    </ul>
                    <div class="card-body">
                        <a href="https://universobh.files.wordpress.com/2013/01/a-guerra-dos-tronos-george-r-r-martin-as-crc3b4nicas-de-gelo-e-fogo-conhecimentovaleouro-blogspot-com-by-viniciusf666.pdf" class="btn btn-primary" target="_blank">Ler</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container sobre mx-auto"> <!-- Adicione a classe mx-auto para centralizar -->
    <h3 class="mt-4">Comentários do livro: A Guerra dos Tronos</h3>
    <form action="2tronosLIST.php" method="post" class="form-inline my-2 my-lg-0">
        <select name="tipo" class="form-control mr-sm-2">
            <option value="nota">Nota</option>
            <option value="personagem">Personagem Favorito</option>
            <option value="coment">Comentário</option>
        </select>
        <input type="text" name="valor" class="form-control mr-sm-2">
        <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Buscar</button>
    </form>

    <a href="2tronosFORM.php" class="btn btn-primary mt-3">Comentar</a>

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
                echo "<td><a href='2tronosFORM.php?id=$item->id' class='btn btn-warning btn-sm'>Editar</a></td>";
                echo "<td><a onclick='return confirm(\"Deseja Excluir?\")' href='2tronosLIST.php?id=$item->id' class='btn btn-danger btn-sm'>Deletar</a></td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>
<?php include "../bases/footer.php" ?>
