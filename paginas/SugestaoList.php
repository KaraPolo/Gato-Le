<?php
    include '../model/db.class.php';
    include '../bases/header.php';
    include '../bases/nav.php';
?>
<?php
    $db = new DB();
    $db->conn();

    if(!empty($_GET['id'])){
        $db->destroy("sugestao", $_GET['id']);
        header("location: SugestaoList.php");
    }

    if(!empty($_POST)){
        $dados =  $db->search("sugestao", $_POST);
    } else {
        $dados = $db->select("sugestao");
    }
?>

<div class="container sobre mx-auto"> <!-- Adicione a classe mx-auto para centralizar -->
    <h3 class="mt-4">Listagem de Sugestões</h3>
    <form action="SugestaoList.php" method="post" class="form-inline my-2 my-lg-0">
        <select name="tipo" class="form-control mr-sm-2">
            <option value="nome">Nome do Livro</option>
            <option value="autor">Autor</option>
            <option value="ano">Ano de Publicação</option>
        </select>
        <input type="text" name="valor" class="form-control mr-sm-2">
        <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Buscar</button>
    </form>

    <a href="Sugestaoform.php" class="btn btn-primary mt-3">Cadastrar</a>

    <table class="table table-striped mt-3">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Autor</th>
                <th scope="col">Ano de Publicação</th>
                <th scope="col">Ação</th>
                <th scope="col">Ação</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($dados as $item){
                echo "<tr>";
                echo "<th scope='row'>$item->id</th>";
                echo "<td>$item->nome</td>";
                echo "<td>$item->autor</td>";
                echo "<td>$item->ano</td>";
                echo "<td><a href='SugestaoForm.php?id=$item->id' class='btn btn-warning btn-sm'>Editar</a></td>";
                echo "<td><a onclick='return confirm(\"Deseja Excluir?\")' href='SugestaoList.php?id=$item->id' class='btn btn-danger btn-sm'>Deletar</a></td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>
<div class="component-spacing"></div>
        <div class="component-spacing"></div>        
        <div class="component-spacing"></div>
        <div class="component-spacing"></div>
        <?php include "../bases/footer.php" ?>
</body>
</html>
