<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Rate It | Animes e Mangás</title>
        <?php require_once('../assets/cmp/head_infos.php') ?>
    </head>

    <body id="calculadora">
        <!--Navegação-->
        <nav class="navbar navbar-expand-md shadow">
            <?php require_once('../assets/cmp/nav_infos.php') ?>
        </nav><!--// Navegação-->

        <!--Container-->
        <div class="container">

            <h1 class="mb-2 mt-4" style="color: white;">
                Avalie! ❤
            </h1>

            <!--Área de categorias-->
            <div class="d-flex flex-column align-items-center">

                <form action="" method="get" id="form">

                    <!--Categorias-->
                    <div id="categorias" class="d-flex flex-column flex-md-row justify-content-center">
                        <!--Animação-->
                        <div>
                            <div class="m-3 p-3 form-group rounded-lg bg-categoria area-categoria1 shadow text-center">
                                <h3 class="py-1">Animação</h3>
                                <select name="notaAnimacao" class="form-control" id="notaAnimacao" required>
                                    <option selected disabled value="0">Selecione</option>
                                    <option value="1">(1) Deplorável</option>
                                    <option value="2">(2) Horrível</option>
                                    <option value="3">(3) Muito ruim</option>
                                    <option value="4">(4) Ruim</option>
                                    <option value="5">(5) Mediano</option>
                                    <option value="6">(6) Legal</option>
                                    <option value="7">(7) Bom</option>
                                    <option value="8">(8) Muito bom</option>
                                    <option value="9">(9) Ótimo</option>
                                    <option value="10">(10) Masterpiece</option>
                                </select>
                            </div>
                        </div><!--// Animação-->

                        <!--Enredo-->
                        <div>
                            <div class="m-3 p-3 form-group rounded-lg bg-categoria area-categoria2 shadow text-center">
                                <h3 class="py-1">Enredo</h3>
                                <select name="notaEnredo" class="form-control" id="notaEnredo" required>
                                    <option selected disabled value="0">Selecione</option>
                                    <option value="1">(1) Deplorável</option>
                                    <option value="2">(2) Horrível</option>
                                    <option value="3">(3) Muito ruim</option>
                                    <option value="4">(4) Ruim</option>
                                    <option value="5">(5) Mediano</option>
                                    <option value="6">(6) Legal</option>
                                    <option value="7">(7) Bom</option>
                                    <option value="8">(8) Muito bom</option>
                                    <option value="9">(9) Ótimo</option>
                                    <option value="10">(10) Masterpiece</option>
                                </select>
                            </div>
                        </div><!--// Enredo-->
        
                        <!--Roteiro-->
                        <div>
                            <div class="m-3 p-3 form-group rounded-lg bg-categoria area-categoria3 shadow text-center">
                                <h3 class="py-1">Roteiro</h3>
                                <select name="notaRoteiro" class="form-control" id="notaRoteiro" required>
                                    <option selected disabled value="0">Selecione</option>
                                    <option value="1">(1) Deplorável</option>
                                    <option value="2">(2) Horrível</option>
                                    <option value="3">(3) Muito ruim</option>
                                    <option value="4">(4) Ruim</option>
                                    <option value="5">(5) Mediano</option>
                                    <option value="6">(6) Legal</option>
                                    <option value="7">(7) Bom</option>
                                    <option value="8">(8) Muito bom</option>
                                    <option value="9">(9) Ótimo</option>
                                    <option value="10">(10) Masterpiece</option>
                                </select>
                            </div>
                        </div><!--// Roteiro-->
                        
                    </div><!--// Categorias-->

                    <!--Botão calcular-->
                    <div class="text-center">
                        <button class="btn text-uppercase d-md-none shadow" onclick="calculo()" type="button">Resultado</button>
                        <button class="btn text-uppercase d-none d-md-inline shadow" onclick="calculo()" type="button">Resultado</button>
                    </div><!--// Botão calcular-->

                </form>

            </div><!--// Área de categorias-->

            <!--Display da nota-->
            <div class="d-flex flex-column align-items-center my-5">
                <div class="d-flex flex-column align-items-center">
                    <h4 class="text-uppercase text-white">Nota final</h4>
                    <input class="text-center mb-1 h4" type="text" id="resultado" disabled placeholder="0">
                    <a onclick="reset()" href="#">Limpar</a>
                </div>
            </div><!--// Display da nota-->

            <!--Cards-->
            <div class="mt-5">
                <h2>Sobre as categorias</h2>
                <div id="cards-categorias" class="d-flex flex-column align-items-center flex-md-row justify-content-md-center align-items-md-start">
                    <!--Card animação-->
                    <div class="card my-3 mr-md-3 shadow">
                        <img class="card-img-top" src="../assets/imgs/Imagens - cards/Animação.png" alt="Ilustração Categoria Animação">
                        <div class="card-body">
                            <h6 class="card-title">Animação</h6>
                            <p class="card-text">
                                <strong>Aspecto visual</strong>, artistíco da obra. É a representação visual do <strong>movimento</strong>.
                            </p>
                        </div>
                        <div class="card-footer">
                            <details class="d-md-none">
                                <summary>Ainda confuso(a)? Clique aqui!</summary>
                                <p>
                                    1 - estranho esteticamente, feio. <br>
                                    10 - muito bonito, combina perfeitamente com a essência do anime.
                                </p>
                            </details>
                            <a class="d-none d-md-inline link-bg-white" href="#" data-toggle="popover" data-trigger="hover" title="Dica 💡" data-content="1 - estranho esteticamente, feio;  10 - muito bonito, combina perfeitamente com a essência do anime">
                                Ainda confuso(a)? Passe o mouse aqui!
                            </a>
                        </div>
                    </div><!--// Card animação-->
                    <!--Card enredo-->
                    <div class="card my-3 mx-md-3 shadow">
                        <img class="card-img-top" src="../assets/imgs/Imagens - cards/Enredo.png" alt="Ilustração Categoria Enredo">
                        <div class="card-body">
                            <h6 class="card-title">Enredo</h6>
                            <p class="card-text">
                                <i>Plot</i>, em inglês, o enredo é a <strong>história da obra</strong>.
                            </p>
                        </div>
                        <div class="card-footer">
                            <details class="d-md-none">
                                <summary>Ainda confuso(a)? Clique aqui!</summary>
                                <p>
                                    1 - fraco, clichê. <br>
                                    10 - inovador e/ou interessante.
                                </p>
                            </details>
                            <a class="d-none d-md-inline link-bg-white" href="#" data-toggle="popover" data-trigger="hover" title="Dica 💡" data-content="1 - fraco, clichê; 10 - inovador e/ou interessante">
                                Ainda confuso(a)? Passe o mouse aqui!
                            </a>
                        </div>
                    </div><!--// Card enredo-->
                    <!--Card roteiro-->
                    <div class="card my-3 ml-md-3 shadow">
                        <img class="card-img-top" src="../assets/imgs/Imagens - cards/Roteiro.png" alt="Ilustração Categoria Roteiro">
                        <div class="card-body">
                            <h6 class="card-title">Roteiro</h6>
                            <p class="card-text">
                                <i>Script</i>, em inglês, o roteiro é a peça principal da obra. O <strong>guia de todos os acontecimentos</strong>, gerando emoções no momento certo.
                            </p>
                        </div>
                        <div class="card-footer">
                            <details class="d-md-none">
                                <summary>Ainda confuso(a)? Clique aqui!</summary>
                                <p>
                                    1 - rushado, rápido demais. <br>
                                    10 - extremamente bem desenvolvido.
                                </p>
                            </details>
                            <a class="d-none d-md-inline link-bg-white" href="#" data-toggle="popover" data-trigger="hover" title="Dica 💡" data-content="1 - rushado, rápido demais; 10 - extremamente bem desenvolvido">
                                Ainda confuso(a)? Passe o mouse aqui!
                            </a>
                        </div>
                    </div><!--// Card roteiro-->

                </div><!--// Cards-->
            </div>
            
            <!--Rodapé-->
            <footer class="mt-3 p-3 d-flex justify-content-around font-italic">
                <div>
                    Feito por <a class="link-rodape" href="https://www.github.com/allbertuu"><cite>Alberto Albuquerque</cite></a>
                </div>

                <div id="redes-sociais" class="d-flex align-items-center justify-content-lg-center flex-wrap" style="max-height: 48px;">
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
            </footer><!--// Rodapé-->

        </div><!--// Container -->

        <!-- Alertas -->
        <div>
            <!--selecione um de cada categoria-->
            <div class="modal fade" id="selectOneEach">
                <div class="modal-dialog">
                    <div class="modal-content">
                    
                        <div class="modal-header">
                            <h4 class="modal-title">Preste atenção!</h4>
                            <button type="button" class="close" data-dismiss="modal">×</button>
                        </div>
                        
                        <div class="modal-body">
                            Por favor, selecione <strong>ao menos 1 (uma)</strong> nota em <strong>cada</strong> categoria.
                        </div>
                        
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Ok</button>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div><!--// Alertas -->

        <?php require_once('../assets/cmp/scripts_bootstrap.php') ?>
        <script src="../assets/scripts/calculadora.js"></script>

    </body>

</html>