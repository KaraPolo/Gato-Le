<?php
    include '../bases/header.php';
    include '../model/db.class.php';

    $db = new DB();
    $db->conn();

    if ($_POST) {
        if ($_POST['senha'] == $_POST['c_senha']) {
            $_POST['senha'] = password_hash($_POST['senha'], PASSWORD_BCRYPT);
            unset($_POST['c_senha']);

            $db->insert("usuario", $_POST);
            header("location: LoginForm.php");
        } else {
            echo "<b class='text-white'>As Senhas não batem</b>";
        }
    }
?>

<div class="container mt-5">
<div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.8);"></div>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="text-white text-center">Biblioteca Virtual Galo Lê</h2>
            <h3 class="text-white text-center">Registrar Formulário Usuário</h3>

            <form action="RegistrarForm.php" method="post">
                <div class="form-group">
                    <label for="nome" class="text-white">Nome</label>
                    <input type="text" class="form-control" name="nome">
                </div>
                <div class="form-group">
                    <label for="usuario" class="text-white">Login</label>
                    <input type="text" class="form-control" name="usuario">
                </div>
                <div class="form-group">
                    <label for="telefone" class="text-white">Telefone</label>
                    <input type="text" class="form-control" name="telefone">
                </div>

                <div class="form-group">
                    <label for="email" class="text-white">Email</label>
                    <input type="email" class="form-control" name="email">
                </div>

                <div class="form-group">
                    <label for="senha" class="text-white">Senha</label>
                    <input type="password" class="form-control" name="senha">
                </div>

                <div class="form-group">
                    <label for="c_senha" class="text-white">Confirmar Senha</label>
                    <input type="password" class="form-control" name="c_senha">
                </div>

                <button type="submit" class="btn btn-primary btn-block">Salvar</button>
                <a href="LoginForm.php" class="btn btn-secondary btn-block mt-2">Voltar</a>
            </form>
        </div>
    </div>
</div>

<?php include "../bases/footer.php" ?>
