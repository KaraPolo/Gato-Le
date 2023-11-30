<?php
    include '../model/db.class.php';
    include '../bases/header.php';
    include '../bases/nav.php';
?>
<body>

    <div class="container custom-container">
        <div class="card-deck">
            <div class="card">
                <img class="card-img-top" src="https://m.media-amazon.com/images/I/71+YcLO29uL._AC_UF1000,1000_QL80_.jpg" alt="Imagem de capa do card">
                <div class="card-body">
                    <h5 class="card-title">A Sociedade do Anel</h5>
                    <p class="card-text">The Fellowship of the Ring, publicado em 1984, é o primeiro volume da trilogia O Senhor dos Anéis, escrita pelo professor e filólogo britânico J. R. R. Tolkien.</p>
                    <a href="./2anelFORM.php" class="btn btn-primary">Ler</a>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="https://m.media-amazon.com/images/I/91+1SUO3vUL._AC_UF1000,1000_QL80_.jpg" alt="Imagem de capa do card">
                <div class="card-body">
                    <h5 class="card-title">A Guerra dos Tronos</h5>
                    <p class="card-text">A Game of Thrones é o primeiro livro da série de fantasia épica As Crônicas de Gelo e Fogo, escrita pelo norte-americano George R. R. Martin.</p>
                    <a href="./2tronosFORM.php" class="btn btn-primary">Ler</a>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="https://m.media-amazon.com/images/I/7158aW38zxL._AC_UF1000,1000_QL80_.jpg" alt="Imagem de capa do card">
                <div class="card-body">
                    <h5 class="card-title">O Leão, a Feiticeira e o Guarda-Roupa</h5>
                    <p class="card-text">The Lion, The Witch and the Wardrobe é um romance de literatura fantástica do escritor britânico C.S. Lewis. Publicado em 1950.</p>
                    <a href="./2narniaFORM.php" class="btn btn-primary">Ler</a>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="https://m.media-amazon.com/images/I/61jgm6ooXzL._AC_UF1000,1000_QL80_.jpg" alt="Imagem de capa do card">
                <div class="card-body">
                    <h5 class="card-title">Harry Potter e a Pedra Filosofal</h5>
                    <p class="card-text">Harry Potter e a Pedra Filosofal é o primeiro dos sete livros da série de fantasia Harry Potter, escrita por J. K. Rowling.</p>
                    <a href="./2harryFORM.php" class="btn btn-primary">Ler</a>
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
