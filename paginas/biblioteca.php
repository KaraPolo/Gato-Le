<?php
    include '../model/db.class.php';
    include '../bases/header.php';
    include '../bases/nav.php';
?>
<body>

    <div class="container custom-container">
        <div class="card-deck">
            <div class="card">
                <img class="card-img-top" src="https://img.freepik.com/fotos-premium/dois-gatos-com-chapeu-de-bruxa-lendo-um-livro-gerado-por-ia_990017-3752.jpg?w=360" alt="Imagem de capa do card">
                <div class="card-body">
                    <h5 class="card-title">Livros de Terror</h5>
                    <p class="card-text">Clique para acessar a parte mais assombrada da nossa biblioteca virtual</p>
                    <a href="./1terror.php" class="btn btn-primary">Visitar</a>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="https://wallpapers.com/images/hd/fantasy-cat-reading-a-book-dxowd9jff6kvqgw6.jpg" alt="Imagem de capa do card">
                <div class="card-body">
                    <h5 class="card-title">Livros de Fantasia</h5>
                    <p class="card-text">Clique para acessar a livros que te ajudarão em sua vida pessoal</p>
                    <a href="./1fantasia.php" class="btn btn-primary">Visitar</a>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="https://img.freepik.com/fotos-premium/gato-bonito-e-inteligente-com-oculos-lendo-um-livro-o-gato-esta-deitado-sobre-uma-pilha-de-livros-antigos_416511-1505.jpg" alt="Imagem de capa do card">
                <div class="card-body">
                    <h5 class="card-title">Livros de Ficção Científica</h5>
                    <p class="card-text">Clique para acessar a parte mais assombrada da nossa biblioteca virtual</p>
                    <a href="./1ficcao.php" class="btn btn-primary">Visitar</a>
                </div>
            </div>
        </div>    
        <div class="component-spacing"></div>        
        <div class="component-spacing"></div>
        <div class="component-spacing"></div>
</div>

<?php include "../bases/footer.php" ?>

</body>
</html>
