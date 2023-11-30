<?php
    include '../model/db.class.php';
    include '../bases/header.php';
    include '../bases/nav.php';

    $db = new DB();
    $db->conn();

    if(!empty($_GET['id'])){
        $db->destroy("comentarioexorcista", $_GET['id']);
        header("location: 2oexorcistaLIST.php");
    }

    if(!empty($_POST)){
        $dados =  $db->search("comentarioexorcista", $_POST);
    } else {
        $dados = $db->select("comentarioexorcista");
    }
?>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <img src="https://m.media-amazon.com/images/I/91fQ51I4TRL._AC_UF1000,1000_QL80_.jpg" class="img-fluid" alt="Imagem do Livro">
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">O Exorcista</h5>
                        <p class="card-text">A história centra-se em Regan, a filha de doze anos de Chris MacNeil, uma ocupada actriz que reside em Washington D.C. A criança aparenta estar possuída por um demónio ancestral e cabe a dois padres a dura tarefa de o exorcizar, arriscando a sanidade e a própria vida.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Autor:</strong> William Peter Blatty</li>
                        <li class="list-group-item"><strong>Ano de Lançamento:</strong> 1971</li>
                        <li class="list-group-item"><strong>Gênero:</strong> Terror</li>
                    </ul>
                    <div class="card-body">
                        <a href="https://www.osaberdigital.com.br/wp-content/uploads/2022/08/William-Peter-Blatty-O-Exorcista.pdf" class="btn btn-primary" target="_blank">Ler</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container sobre mx-auto"> <!-- Adicione a classe mx-auto para centralizar -->
    <h3 class="mt-4">Comentários do livro: O Exorcista</h3>
    <form action="2oexorcistaLIST.php" method="post" class="form-inline my-2 my-lg-0">
        <select name="tipo" class="form-control mr-sm-2">
            <option value="nota">Nota</option>
            <option value="personagem">Personagem Favorito</option>
            <option value="coment">Comentário</option>
        </select>
        <input type="text" name="valor" class="form-control mr-sm-2">
        <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Buscar</button>
    </form>

    <a href="2oexorcistaFORM.php" class="btn btn-primary mt-3">Comentar</a>

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
                echo "<td><a href='2oexorcistaFORM.php?id=$item->id' class='btn btn-warning btn-sm'>Editar</a></td>";
                echo "<td><a onclick='return confirm(\"Deseja Excluir?\")' href='2oexorcistaLIST.php?id=$item->id' class='btn btn-danger btn-sm'>Deletar</a></td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>
<?php include "../bases/footer.php" ?>
