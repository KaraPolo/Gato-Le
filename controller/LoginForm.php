<?php
    include '../bases/header.php';
    include '../model/db.class.php';
    session_start();

    $db = new DB();
    $db->conn();
    
    if (!empty($_POST)) {

        $usuario = $db->login("usuario", $_POST);

        if ($usuario !== "Error") {

            $_SESSION['usuario'] = $usuario;

            header("location: ../bases/Main.php");
        } else {
            echo "<b style='color:red'>Login e senha errado, por favor tente novamente</b>";
        }
    }
?>
<body class="bg-light" style="background-image: url('https://images.pixexid.com/a-4k-ultra-hd-wallpaper-of-a-cat-dressed-in-a-librarians-outfit-surrounded-by-zlvdb8uk.jpeg'); background-size: cover; background-position: top;">

<div class="container mt-5">
<div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.8);"></div>
<div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="text-white text-center">Biblioteca Virtual Gato Lê</h2>
            <h3 class="text-white text-center">Login</h3>

            <form action="LoginForm.php" method="post">
                <div class="form-group">
                    <label for="nome" class="text-white">Usuario</label>
                    <input type="text" class="form-control" name="nome">
                </div>

                <div class="form-group">
                    <label for="senha" class="text-white">Senha</label>
                    <input type="password" class="form-control" name="senha">
                </div>

                <button type="submit" class="btn btn-primary btn-block">Logar</button>
                <p class="text-white text-center mt-3"><a href="RegistrarForm.php" class="text-white">Cadastrar-se</a></p>
            </form>
        </div>
    </div>
</div>

<?php include "../bases/footer.php" ?>