<?php
include './model/db.class.php';
include "./bases/header.php";
?>

<body class="bg-light" style="background-image: url('https://images.pixexid.com/a-4k-ultra-hd-wallpaper-of-a-cat-dressed-in-a-librarians-outfit-surrounded-by-zlvdb8uk.jpeg'); background-size: cover; background-position: top;">

    <div class="container mt-5">
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.8);"></div>
            <div class="row justify-content-center">
                <div class="col-md-6 text-center" style="margin-top: 200px; position: relative;">
                    <h1 class="display-4 text-white">Bem-vindo a Gato Lê</h1>
                    <p class="lead text-white">A sua biblioteca virtual, com leitores gatinhos.</p>
                    <a href="./controller/LoginForm.php" class="btn btn-primary btn-lg">Login</a>
                </div>
            </div>
    </div>

    <?php include "./bases/footer.php" ?>

</body>

</html>
