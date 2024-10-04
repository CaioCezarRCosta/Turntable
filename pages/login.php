<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Página de Login</title>
        <link rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        
        <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">

        <link rel="stylesheet" href="../assets/css/login.css">
    </head>
    <body>

        <header>
        <div class=" navbar d-flex justify-content-center navbar-light pt-5 mb-5 " style="width: 100%">
            <p>A melhor loja de Vinis da América Latina</p>
        </div>
        </header>
<section>
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-md-4" >
                    <div class="card mt-5 ">
                        <div class="card-body">
                            <h5 class="card-title text-center">Login</h5>
                            <form>
                                <div class="mb-3">
                                    <label for="email"
                                        class="form-label">Email</label>
                                    <input type="email" class="form-control"
                                        id="email"
                                        placeholder="Digite seu email">
                                </div>
                                <div class="mb-3">
                                    <label for="password"
                                        class="form-label">Senha</label>
                                    <input type="password" class="form-control"
                                        id="password"
                                        placeholder="Digite sua senha">
                                </div>
                                <button type="submit"
                                    class="btn btn-primary w-100">Entrar</button>
                            </form>
                            <div class="mt-3 text-center">
                                <a href="#">Esqueceu sua senha?</a>
                            </div>
                            <div class="mt-3 text-center">
                                <p>Não tem uma conta? <a
                                        href="cadastro.php">Crie uma
                                        agora!</a></p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
        <footer class="mt-5 fixed-bottom">
            <?php include '../includes/footer.php'; ?>
        </footer>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </body>
</html>
