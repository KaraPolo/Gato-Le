<style>
    /* Adicione estilos CSS para escurecer as imagens do carousel */
    #carouselExampleIndicators .carousel-item img {
        filter: brightness(0.4  ); /* Valor entre 0 (totalmente escuro) e 1 (normal) */
    }
</style>

<?php
    include '../model/db.class.php';
    include './header.php';
    include './nav.php';
?>
<body>

    <div class="container custom-container">

        <div class="welcome-text">
            <h3>Bem-vindo à Biblioteca Virtual Gato Lê</h3>
            <p>Explore nossa vasta coleção de livros e aprimore seu conhecimento.</p>
        </div>          
        
        <!-- Adicione um espaçamento antes do carrossel -->
        <div class="component-spacing"></div>

        <!-- Carrossel (Slide Show) -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <!-- Slides aqui -->
        <div class="carousel-item active">
            <img class="d-block w-100" src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c9/Cat_reading_book_498102.jpg/1280px-Cat_reading_book_498102.jpg" alt="Primeiro Slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>Purr-fectamente Literário</h5>
                <p>Bem-vindo à nossa biblioteca virtual, onde os amantes de gatos encontram um lar para suas almas literárias. De romances encantadores a aventuras emocionantes, mergulhe em histórias que aquecerão seu coração e cativarão sua mente.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="https://catingtonpost.com/wp-content/uploads/2021/01/shutterstock_236566309-1000x600.jpg" alt="Segundo Slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>Gatos e Livros: Uma Combinação Perfeita</h5>
                <p>Desfrute da harmonia entre dois amores: gatos e livros. Nossa biblioteca virtual é um refúgio para os apaixonados por felinos e leituras envolventes. Encontre seu próximo livro favorito entre nossas estantes digitais.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="https://live.staticflickr.com/65535/52497892634_64985e3b40_h.jpg" alt="Terceiro Slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>Explorando Mundos Literários</h5>
                <p>Navegue pela nossa biblioteca virtual e descubra uma infinidade de histórias cativantes que transportarão você para mundos além da imaginação. Uma jornada literária para amantes de livros e gatos.</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Próximo</span>
    </a>
    </div>


        <!-- Adiciona um espaçamento entre o carrossel e os cards -->
        <div class="component-spacing"></div>
        <div class="component-spacing"></div>        
        <div class="component-spacing"></div>
        <div class="component-spacing"></div>


        <?php
            include "./footer.php";
        ?>
</body>
</html>
