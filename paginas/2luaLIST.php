<?php
    include '../model/db.class.php';
    include '../bases/header.php';
    include '../bases/nav.php';

    $db = new DB();
    $db->conn();

    if(!empty($_GET['id'])){
        $db->destroy("comentariolua", $_GET['id']);
        header("location: 2luaLIST.php");
    }

    if(!empty($_POST)){
        $dados =  $db->search("comentariolua", $_POST);
    } else {
        $dados = $db->select("comentariolua");
    }
?>
<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <img src="https://www.lpm.com.br/livros/imagens/da_terra_a_lua_9788525436399_hd.jpg" class="img-fluid" alt="Imagem do Livro">
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Da Terra à Lua</h5>
                        <p class="card-text">Com o fim da guerra da Secessão, os Estados Unidos vivem um período de paz. Porém, um grupo de especialistas em balística não vê com bons olhos ficar de braços cruzados. Assim, decidem enfrentar um novo desafio: construir um gigantesco canhão que irá disparar um projétil cujo objetivo é chegar à Lua.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Autor:</strong> Júlio Verne</li>
                        <li class="list-group-item"><strong>Ano de Lançamento:</strong> 1865</li>
                        <li class="list-group-item"><strong>Gênero:</strong> Ficção</li>
                    </ul>
                    <div class="card-body">
                        <a href="https://memoria.ebc.com.br/sites/_portalebc2014/files/atoms/files/-da_terra_a_lua_-_julio_verne.pdf" class="btn btn-primary" target="_blank">Ler</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container sobre mx-auto"> <!-- Adiciona a classe mx-auto para centralizar -->
    <h3 class="mt-4">Comentários do livro: Da Terra à Lua</h3>
    <form action="2luaLIST.php" method="post" class="form-inline my-2 my-lg-0">
        <select name="tipo" class="form-control mr-sm-2">
            <option value="nota">Nota</option>
            <option value="personagem">Personagem Favorito</option>
            <option value="coment">Comentário</option>
        </select>
        <input type="text" name="valor" class="form-control mr-sm-2">
        <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Buscar</button>
    </form>

    <a href="2luaFORM.php" class="btn btn-primary mt-3">Comentar</a>

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
                echo "<td><a href='2luaFORM.php?id=$item->id' class='btn btn-warning btn-sm'>Editar</a></td>";
                echo "<td><a onclick='return confirm(\"Deseja Excluir?\")' href='2luaLIST.php?id=$item->id' class='btn btn-danger btn-sm'>Deletar</a></td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>
<?php include "../bases/footer.php" ?>
