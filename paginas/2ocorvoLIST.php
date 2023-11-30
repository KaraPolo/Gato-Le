<?php
    include '../model/db.class.php';
    include '../bases/header.php';
    include '../bases/nav.php';

    $db = new DB();
    $db->conn();

    if(!empty($_GET['id'])){
        $db->destroy("comentariocorvo", $_GET['id']);
        header("location: 2ocorvoLIST.php");
    }

    if(!empty($_POST)){
        $dados =  $db->search("comentariocorvo", $_POST);
    } else {
        $dados = $db->select("comentariocorvo");
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

    <div class="container sobre mx-auto"> <!-- Adicione a classe mx-auto para centralizar -->
    <h3 class="mt-4">Comentários do livro: O Corvo</h3>
    <form action="2ocorvoLIST.php" method="post" class="form-inline my-2 my-lg-0">
        <select name="tipo" class="form-control mr-sm-2">
            <option value="nota">Nota</option>
            <option value="personagem">Personagem Favorito</option>
            <option value="coment">Comentário</option>
        </select>
        <input type="text" name="valor" class="form-control mr-sm-2">
        <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Buscar</button>
    </form>

    <a href="2ocorvoFORM.php" class="btn btn-primary mt-3">Comentar</a>

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
                echo "<td><a href='2ocorvoFORM.php?id=$item->id' class='btn btn-warning btn-sm'>Editar</a></td>";
                echo "<td><a onclick='return confirm(\"Deseja Excluir?\")' href='2ocorvoLIST.php?id=$item->id' class='btn btn-danger btn-sm'>Deletar</a></td>";
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
