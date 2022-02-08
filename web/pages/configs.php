<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Rate It | Configurações</title>
        <?php require_once('../assets/cmp/head_infos.php') ?>
    </head>

    <body id="configs">
        <!--Navegação-->
        <nav class="navbar navbar-expand-md shadow">
            <?php require_once('../assets/cmp/nav_infos.php') ?>
        </nav><!--// Navegação-->

        <div class="container"><!--Container-->

            <div id="area-configuracoes" class="p-3 px-4">

                <div class="mt-3 text-center">
                    <h1>Configurações</h1>
                </div>

                <div class="d-flex flex-column align-items-start mt-3 mb-4">

                    <h6>Alterar peso das categorias</h6>

                    <!--<div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="alterarPesos">
                        <label class="custom-control-label" for="alterarPesos">XXXX</label>
                    </div>-->

                </div>

                <div class="row justify-content-around">
                    <a class="btn btn-aviso col-5" href="calculadora.php">Voltar</a>
                    <button class="btn col-5" onclick="" type="button">Aplicar</button>
                </div>

            </div>
            
        </div><!--// Container-->

        <?php require_once('../assets/cmp/scripts_bootstrap.php') ?>

    </body>

</html>