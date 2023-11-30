<?php
    include '../model/db.class.php';
    include '../bases/header.php';
    include '../bases/nav.php';
?>
<body>

    <div class="container custom-container">
        <div class="card-deck">
            <div class="card">
                <img class="card-img-top" src="https://sebolarlivros.com.br/media/catalog/product/cache/1/image/600x800/9df78eab33525d08d6e5fb8d27136e95/v/i/viagem_ao_centro_da_terra_1_.jpg" alt="Imagem de capa do card">
                <div class="card-body">
                    <h5 class="card-title">Viagem ao Centro Da Terra</h5>
                    <p class="card-text">Viagem ao Centro Da Terra é um livro, de Júlio Verne, lançado em 1864.</p>
                    <a href="./2terraFORM.php" class="btn btn-primary">Ler</a>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="https://www.lpm.com.br/livros/imagens/da_terra_a_lua_9788525436399_hd.jpg" alt="Imagem de capa do card">
                <div class="card-body">
                    <h5 class="card-title">Da Terra à Lua</h5>
                    <p class="card-text">Da Terra à Lua é um romance de ficção científica do escritor francês Júlio Verne, publicado em 1865.</p>
                    <a href="./2luaFORM.php" class="btn btn-primary">Ler</a>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="https://images-americanas.b2w.io/produtos/134563378/imagens/livro-battle-angel-alita-vol-1-autor-yukito-kishiro-2018/134563378_1_large.jpg" alt="Imagem de capa do card">
                <div class="card-body">
                    <h5 class="card-title">Battle Angel Alita</h5>
                    <p class="card-text">Gunnm ou Battle Angel Alita é um mangá cyberpunk criado por Yukito Kishiro e publicado de 1990 a 1995.</p>
                    <a href="./2alitaFORM.php" class="btn btn-primary">Ler</a>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="https://m.media-amazon.com/images/I/91Bx5ilP+EL._AC_UF1000,1000_QL80_.jpg" alt="Imagem de capa do card">
                <div class="card-body">
                    <h5 class="card-title">Neuromancer</h5>
                    <p class="card-text">Neuromancer, de William Gibson, publicado em 1984 é um dos mais famosos livros cyberpunk.</p>
                    <a href="./2cyberpunkFORM.php" class="btn btn-primary">Ler</a>
                </div>
            </div>
        </div>
        <div class="component-spacing"></div>        
        <div class="component-spacing"></div>
        <div class="component-spacing"></div>
    </div>

        <?php
            include "../bases/footer.php";
        ?>
</body>
</html>
