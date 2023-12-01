<?php
    include '../model/db.class.php';
    include '../bases/header.php';
    include '../bases/nav.php';

    $db = new DB();
    $db->conn();
    
    if(!empty($_POST['id'])){
        $db->update("mensagem", $_POST);
        header("location: MensagemList.php");
    }
    else if($_POST){
        $db->insert("mensagem", $_POST);
        header("location: MensagemList.php");
    }
    if(!empty($_GET['id'])){
        $mensagem = $db->find("mensagem", $_GET['id']);
    }
?>
 <div class="sobre">

<div class="container mt-5">
        <div class="welcome-text">
            <h3>Nos Envie uma Mensagem</h3>
            <p>Tem alguma crítica construtiva? Escreva abaixo!</p>
        </div>
    <form action="MensagemForm.php" method="post">
        <input type="hidden" name="id" value="<?php echo !empty($mensagem->id) ? $mensagem->id : "" ?>" class="form-control"><br>

        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" placeholder="Digite seu nome..." required value="<?php echo !empty($mensagem->nome) ? $mensagem->nome : "" ?>" class="form-control">
        </div>
        <div class="form-group">
            <label for="sobrenome">Sobre nome</label>
            <input type="text" name="sobrenome" placeholder="Digite seu sobrenome..." required value="<?php echo !empty($mensagem->sobrenome) ? $mensagem->sobrenome : "" ?>" class="form-control">
        </div>
        <div class="form-group">
            <label for="telefone1">Telefone 1</label>
            <input type="text" name="telefone1" placeholder="Digite seu telefone..." required value="<?php echo !empty($mensagem->telefone1) ? $mensagem->telefone1 : "" ?>" class="form-control">
        </div>
        <div class="form-group">
            <label for="tipo1">Tipo de Telefone 1</label>
            <input type="text" name="tipo1" placeholder="Digite seu tipo de telefone..." required value="<?php echo !empty($mensagem->tipo1) ? $mensagem->tipo1 : "" ?>" class="form-control">
        </div>
        <div class="form-group">
            <label for="telefone2">Telefone 2</label>
            <input type="text" name="telefone2" placeholder="Digite seu telefone..." required value="<?php echo !empty($mensagem->telefone2) ? $mensagem->telefone2 : "" ?>" class="form-control">
        </div>
        <div class="form-group">
            <label for="tipo2">Tipo de Telefone 2</label>
            <input type="text" name="tipo2" placeholder="Digite seu tipo de telefone..." required value="<?php echo !empty($mensagem->tipo2) ? $mensagem->tipo2 : "" ?>" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">E-Mail</label>
            <input type="email" name="email" placeholder="Digite seu E-Mail..." required value="<?php echo !empty($mensagem->email) ? $mensagem->email : "" ?>" class="form-control">
        </div>

        <div class="form-group">
            <label for="msg">Mensagem</label>
            <input type="text" name="msg" placeholder="Digite sua mensagem..." required value="<?php echo !empty($mensagem->msg) ? $mensagem->msg : "" ?>" class="form-control">
        </div>
        <center>
            <button type="submit" class="btn btn-primary"><?php echo !empty($_GET['id']) ? "Editar" : "Enviar Mensagem"?></button>
        <a href="MensagemList.php" class="btn btn-secondary">Voltar</a>
        </center>
    </form>
</div>
</div>

<?php include "../bases/footer.php" ?>
