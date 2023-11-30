<?php
    include '../model/db.class.php';
    include '../bases/header.php';
    include '../bases/nav.php';

    $db = new DB();
    $db->conn();

    if(!empty($_GET['id'])){
        $db->destroy("comentarioterra", $_GET['id']);
        header("location: 2terraLIST.php");
    }

    if(!empty($_POST)){
        $dados =  $db->search("comentarioterra", $_POST);
    } else {
        $dados = $db->select("comentarioterra");
    }
?>

<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <img src="https://sebolarlivros.com.br/media/catalog/product/cache/1/image/600x800/9df78eab33525d08d6e5fb8d27136e95/v/i/viagem_ao_centro_da_terra_1_.jpg" class="img-fluid" alt="Imagem do Livro">
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Viagem ao Centro Da Terra</h5>
                        <p class="card-text">O professor Lidenbrock consegue decifrar um enigma do pergaminho de um cientista do século XII e se junta ao seu sobrinho, o jovem Áxel, para checar a possibilidade de chegar ao centro da Terra seguindo o relato decifrado.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Autor:</strong> Júlio Verne</li>
                        <li class="list-group-item"><strong>Ano de Lançamento:</strong> 1864</li>
                        <li class="list-group-item"><strong>Gênero:</strong> Ficção</li>
                    </ul>
                    <div class="card-body">
                        <a href="https://memoria.ebc.com.br/sites/_portalebc2014/files/atoms/files/-viagem_ao_centro_da_terra_-_julio_verne.pdf" class="btn btn-primary" target="_blank">Ler</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container sobre mx-auto"> <!-- Adicione a classe mx-auto para centralizar -->
    <h3 class="mt-4">Comentários do livro: Viagem ao Centro Da Terra</h3>
    <form action="2terraLIST.php" method="post" class="form-inline my-2 my-lg-0">
        <select name="tipo" class="form-control mr-sm-2">
            <option value="nota">Nota</option>
            <option value="personagem">Personagem Favorito</option>
            <option value="coment">Comentário</option>
        </select>
        <input type="text" name="valor" class="form-control mr-sm-2">
        <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Buscar</button>
    </form>

    <a href="2terraFORM.php" class="btn btn-primary mt-3">Comentar</a>

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
                echo "<td><a href='2terraFORM.php?id=$item->id' class='btn btn-warning btn-sm'>Editar</a></td>";
                echo "<td><a onclick='return confirm(\"Deseja Excluir?\")' href='2terraLIST.php?id=$item->id' class='btn btn-danger btn-sm'>Deletar</a></td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>
<?php include "../bases/footer.php" ?>
