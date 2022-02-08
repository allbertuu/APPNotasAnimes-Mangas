<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Rate It | Animes & Mangás</title>
        <?php require_once('../assets/cmp/head_infos.php') ?>
    </head>

    <body id="home">
        <!--Navegação-->
        <nav class="navbar navbar-expand-md pr-2 px-md-3 container shadow">
            <?php require_once('../assets/cmp/nav_infos.php') ?>
        </nav><!--// Navegação-->

        <!--Container-->
        <div class="container">
            <!--Boas vindas-->
            <div class="mt-5 mb-4 row-cols-1">
                <h1>Bem-vindo!</h1>
            </div><!--// Boas vindas-->

            <!--Chamada-->
            <div class="row-cols-1 row-cols-md-2">
                
            </div><!--// Chamada-->

            <!--Recursos-->
            <div class="row-cols-1 row-cols-md-2">
                
            </div><!--// Recursos-->

            <div class="d-flex justify-content-center">
                <a class="btn" href="calculadora.php">
                    Let's go!
                </a>
            </div>

            <div style="height: 680px;"></div>
            
        </div><!--// Container-->

        <!--Rodapé-->
        <footer class="mt-3 p-3 d-flex justify-content-around font-italic">
            <div class="row w-75">

                <div class="col">
                    Feito por <a class="link-rodape" href="https://www.github.com/allbertuu"><cite>Alberto Albuquerque</cite></a>
                </div>

                <div id="redes-sociais" class="col-6 d-flex align-items-center justify-content-lg-center flex-wrap" style="max-height: 48px;">
                    <span class="mr-2">Redes sociais:</span>
                    <div class="d-flex align-items-center mr-2">
                        <a href="https://www.instagram.com/albert.vny">
                            <i class="fab fa-instagram"></i>
                            <span class="ml-1 d-none d-md-inline link-text-icons">Instagram</span>
                        </a>
                    </div>
                    <div class="d-flex align-items-center mr-2">
                        <a href="#">
                            <i class="fab fa-whatsapp"></i>
                            <span class="ml-1 d-none d-md-inline link-text-icons">Whatsapp</span>
                        </a>
                    </div>
                    <div class="d-flex align-items-center">
                        <a href="https://www.github.com/allbertuu">
                            <i class="fab fa-github"></i>
                            <span class="ml-1 d-none d-md-inline link-text-icons">Github</span>
                        </a>
                    </div>
                </div>

                <div class="col d-none d-md-flex align-items-center">
                    <h6>Créditos</h6>
                </div>

            </div>
        </footer><!--// Rodapé-->

        <?php require_once('../assets/cmp/scripts_bootstrap.php') ?>

    </body>

</html>