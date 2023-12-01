<?php
    include '../model/db.class.php';
    include '../bases/header.php';
    include '../bases/nav.php';

    $db = new DB();
    $db->conn();
    
    if(!empty($_POST['id'])){
        $db->update("sugestao", $_POST);
        header("location: SugestaoList.php");
    }
    else if($_POST){
        $db->insert("sugestao", $_POST);
        header("location: SugestaoList.php");
    }
    if(!empty($_GET['id'])){
        $sugestao = $db->find("sugestao", $_GET['id']);
    }
?>
 <div class="sobre">

<div class="container mt-5">
    <h3>Sugestão de Livro:</h3>
    <form action="SugestaoForm.php" method="post">
        <input type="hidden" name="id" value="<?php echo !empty($sugestao->id) ? $sugestao->id : "" ?>" class="form-control"><br>

        <div class="form-group">
            <label for="nome">Nome do Livro</label>
            <input type="text" required name="nome" required placeholder="Digite o nome do livro..." value="<?php echo !empty($sugestao->nome) ? $sugestao->nome : "" ?>" class="form-control">
        </div>

        <div class="form-group">
            <label for="autor">Autor</label>
            <input type="text" name="autor" required placeholder="Digite o autor..." required value="<?php echo !empty($sugestao->autor) ? $sugestao->autor : "" ?>" class="form-control">
        </div>

        <div class="form-group">
            <label for="ano">Ano de Publicação</label>
            <input type="number" name="ano" required placeholder="Digite o ano de publicação..." required value="<?php echo !empty($sugestao->ano) ? $sugestao->ano : "" ?>" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary"><?php echo !empty($_GET['id']) ? "Editar" : "Salvar"?></button>
        <a href="SugestaoList.php" class="btn btn-secondary">Voltar</a>
    </form>
</div>
</div>

<?php include "../bases/footer.php" ?>
