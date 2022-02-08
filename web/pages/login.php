<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>Rate It | Login</title>
        <?php require_once('../assets/cmp/head_infos.php') ?>
    </head>

    <body id="login">
        <!--Navegação-->
        <nav class="navbar navbar-expand-md pr-2 px-md-3 shadow">
            <?php require_once('../assets/cmp/nav_infos.php') ?>
        </nav><!--// Navegação-->

        <div class="container"><!--Container-->
            <h1 class="my-3 mt-5">Login</h1>
            <div id="area-login" class="my-2 p-3">
                <!--Formulário-->
                <form action="" method="post">
                    <div class="form-group">
                        <label for="usr"><h5 class="m-0">E-mail</h5></label>
                        <input class="form-control" type="email" name="email" id="usr"/>
                    </div>
                    <div class="form-group">
                        <label for="pwd"><h5 class="m-0">Senha</h5></label>
                        <input class="form-control" type="password" name="senha" id="pwd" />
                    </div>

                    <div class="form-check mt-1">
                        <label class="form-check-label" for="rememberMe">
                            <input type="checkbox" class="form-check-input" name="rememberMe" id="rememberMe">Lembre de mim :D
                        </label>
                    </div>

                    <div class="text-center mt-2">
                        <button class="btn btn-block" type="submit">Entrar</button>
                    </div>

                </form><!--// Formulário-->
            </div>

            <!--Disclaimer-->
            <footer class="disclaimer m-4" style="color: white;">
                Nós <strong>NÃO</strong> enviamos e-mails em hipótese alguma. 
                Se você receber, <strong><a href="#"><span class="link">denuncie aqui</span></a></strong>.
            </footer><!--// Disclaimer-->

        </div><!--// Container-->

        <?php require_once('../assets/cmp/scripts_bootstrap.php') ?>

    </body>

</html>