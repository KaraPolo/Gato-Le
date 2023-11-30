<?php
    include '../model/db.class.php';
    include '../bases/header.php';
    include '../bases/nav.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Sugestões</title>
    <!-- Adicione o link para o Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        /* Adicione qualquer estilo personalizado aqui */
        .sobre {
            margin: 20px;
        }
    </style>
</head>
<body>
<?php
    $db = new DB();
    $db->conn();

    if(!empty($_GET['id'])){
        $db->destroy("mensagem", $_GET['id']);
        header("location: MensagemList.php");
    }

    if(!empty($_POST)){
        $dados =  $db->search("mensagem", $_POST);
    } else {
        $dados = $db->select("mensagem");
    }
?>

<div class="container sobre mx-auto"> 
    <h3 class="mt-4">Listagem de Mensagens</h3>
    <form action="MensagemList.php" method="post" class="form-inline my-2 my-lg-0">
        <select name="tipo" class="form-control mr-sm-2">
            <option value="nome">Nome</option>
            <option value="email">E-mail</option>
            <option value="telefone1">Telefone 1</option>
            <option value="tipo1">Tipo 1</option>
            <option value="telefone2">Telefone 2</option>
            <option value="tipo2">Tipo 2</option>
            <option value="msg">Mensagem</option>
        </select>
        <input type="text" name="valor" class="form-control mr-sm-2">
        <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Buscar</button>
    </form>

    <a href="Mensagemform.php" class="btn btn-primary mt-3">Cadastrar Mensagem</a>

    <table class="table table-striped mt-3">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">E-Mail</th>
                <th scope="col">Telefone 1</th>
                <th scope="col">Tipo 1</th>
                <th scope="col">Telefone 2</th>
                <th scope="col">Tipo 2</th>
                <th scope="col">Mensagem</th>
                <th scope="col">Editar</th>
                <th scope="col">Deletar</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($dados as $item){
                echo "<tr>";
                echo "<th scope='row'>$item->id</th>";
                echo "<td>$item->nome</td>";
                echo "<td>$item->email</td>";
                echo "<td>$item->telefone1</td>";
                echo "<td>$item->tipo1</td>";
                echo "<td>$item->telefone2</td>";
                echo "<td>$item->tipo2</td>";
                echo "<td>$item->msg</td>";
                echo "<td><a href='MensagemForm.php?id=$item->id' class='btn btn-warning btn-sm'>Editar</a></td>";
                echo "<td><a onclick='return confirm(\"Deseja Excluir?\")' href='MensagemList.php?id=$item->id' class='btn btn-danger btn-sm'>Deletar</a></td>";
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
