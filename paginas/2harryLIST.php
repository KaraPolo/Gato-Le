<?php
    include '../model/db.class.php';
    include '../bases/header.php';
    include '../bases/nav.php';

    $db = new DB();
    $db->conn();

    if(!empty($_GET['id'])){
        $db->destroy("comentarioharry", $_GET['id']);
        header("location: 2harryLIST.php");
    }

    if(!empty($_POST)){
        $dados =  $db->search("comentarioharry", $_POST);
    } else {
        $dados = $db->select("comentarioharry");
    }
?>

<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <img src="https://m.media-amazon.com/images/I/61jgm6ooXzL._AC_UF1000,1000_QL80_.jpg" class="img-fluid" alt="Imagem do Livro">
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Harry Potter e a Pedra Filosofal</h5>
                        <p class="card-text">A narrativa que inicia a saga Harry Potter conta a história de um menino bruxo que fica órfão, depois que o vilão Voldemort assassina seus pais a sangue frio. O garoto se torna uma lenda no mundo mágico por ter sobrevivido ao feitiço mortal apenas com uma cicatriz na testa, mesmo sendo apenas um bebê.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Autor:</strong> J. K. Rowling</li>
                        <li class="list-group-item"><strong>Ano de Lançamento:</strong> 1997</li>
                        <li class="list-group-item"><strong>Gênero:</strong> Fantasia</li>
                    </ul>
                    <div class="card-body">
                        <a href="https://escolareginaaltman.com.br/wp-content/uploads/2020/04/Harry-Potter-e-a-pedra-filosofal.pdf" class="btn btn-primary" target="_blank">Ler</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container sobre mx-auto"> <!-- Adicione a classe mx-auto para centralizar -->
    <h3 class="mt-4">Comentários do livro: Harry Potter e a Pedra Filosofal</h3>
    <form action="2harryLIST.php" method="post" class="form-inline my-2 my-lg-0">
        <select name="tipo" class="form-control mr-sm-2">
            <option value="nota">Nota</option>
            <option value="personagem">Personagem Favorito</option>
            <option value="coment">Comentário</option>
        </select>
        <input type="text" name="valor" class="form-control mr-sm-2">
        <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Buscar</button>
    </form>

    <a href="2harryFORM.php" class="btn btn-primary mt-3">Comentar</a>

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
                echo "<td><a href='2harryFORM.php?id=$item->id' class='btn btn-warning btn-sm'>Editar</a></td>";
                echo "<td><a onclick='return confirm(\"Deseja Excluir?\")' href='2harryLIST.php?id=$item->id' class='btn btn-danger btn-sm'>Deletar</a></td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>
<?php include "../bases/footer.php" ?>
