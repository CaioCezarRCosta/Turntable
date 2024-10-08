<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="../node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <title>Home</title>
</head>

<body>
    <!-- menu -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-transparent">
        <a class="navbar-brand text-white logo" href="#">
            <img src="" alt="Logo" style="max-height: 40px;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Catálogo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Encomenda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Por Artista</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Por Gênero</a>
                </li>
            </ul>

            <form class="form-inline" style="margin-left: 19vw; margin-right: 19vw">
                <input class="form-control mr-sm-2" type="search" placeholder="Buscar vinis" aria-label="Buscar">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Buscar</button>
            </form>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link text-white" href="#"><i class="bi bi-cart"></i> Carrinho</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="http://localhost/vinyl-store-project/app/views/login.php"><i
                            class="bi bi-box-arrow-in-right"></i> Login</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Conteúdo Parallax -->
    <section class="parallax">
        <div class="parallax-text">
            <h1>Bem-vindo à Turntable Treasures!</h1>
            <p class = "texto-bg">Explore nossa coleção de vinis clássicos e novos.</p>
        </div>
    </section>

    <!-- section dos produtos destacados -->
    <h2 class="d-flex justify-content-center mt-5">Produtos destacados</h2>

    <section class="produtosDestacados m-5">
        <div class="disco">
            <div class="imagens">
                <a href="#"><img
                        src="https://upload.wikimedia.org/wikipedia/pt/d/d7/Kanye_West_-_The_Life_of_Pablo.png"
                        class="img-thumbnail"></a>
            </div>
            <div class="textDisco">
                Kanye West - The Life Of Pablo Vinil Duplo
            </div>
            <div class="valor">
                450,00
            </div>
        </div>
        <div class="disco">
            <div class="imagens">
                <a href="#"><img
                        src="https://upload.wikimedia.org/wikipedia/pt/d/d7/Kanye_West_-_The_Life_of_Pablo.png"
                        class="img-thumbnail"></a>
            </div>
            <div class="textDisco">
                Kanye West - The Life Of Pablo Vinil Duplo
            </div>
            <div class="valor">
                450,00
            </div>
        </div>
        <div class="disco">
            <div class="imagens">
                <a href="#"><img
                        src="https://upload.wikimedia.org/wikipedia/pt/d/d7/Kanye_West_-_The_Life_of_Pablo.png"
                        class="img-thumbnail"></a>
            </div>
            <div class="textDisco">
                Kanye West - The Life Of Pablo Vinil Duplo
            </div>
            <div class="valor">
                450,00
            </div>
        </div>
        <div class="disco">
            <div class="imagens">
                <a href="#"><img
                        src="https://upload.wikimedia.org/wikipedia/pt/d/d7/Kanye_West_-_The_Life_of_Pablo.png"
                        class="img-thumbnail"></a>
            </div>
            <div class="textDisco">
                Kanye West - The Life Of Pablo Vinil Duplo
            </div>
            <div class="valor">
                450,00
            </div>
        </div>
    </section>

    <!-- Rodapé -->
    <footer>
        <?php include '../includes/footer.php' ?>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaBW8gaJxrQoThx26p6Tq0KnNpDfyIu5IV0r"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <script src ="assets/js/index.js"></script>
</body>

</html>
