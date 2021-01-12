<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Importação de CSS -->
    <link rel="stylesheet" type="text/css" href="./css/global.css">


    <!-- Importação de BOOTSTRAP -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Favicon -->
    <link rel="shortcut icon" href="./imgs/Icones/FAVICON_PNG.png" type="image/x-icon">

    <!-- Titulo da pagina -->
    <title>EduImpulso - Orientação profissional</title>
</head>
<?php
//require_once('./servidor/Conection.php');
require_once('./nav/menu.html');
?>
<div class="container-fluid mt-4">
    <div class="col-12 text-center mb-4">
        <h1 class="display-4">Cadastre-se</h1>
    </div>
</div>
<div class="container-fluid d-flex justify-content-center align-items-center">

    <div class="container-fluid row mb-5">

        <div class="form m-auto p-4 my-4 col-12 col-md-12 col-lg-12 col-xl-5">

            <form>
                <div class="form-group">
                    <label class="my-2 form-label" for="name" style="color: white">Nome completo</label>
                    <input class="form-control has-validation" type="text" id="name" placeholder="Nome Completo" name="name" />
                </div>
                <div class="form-group">
                    <label class="my-2 form-label" for="username" style="color: white">Username</label>
                    <input class="form-control has-validation" type="text" id="username" placeholder="Informe seu username" name="username" />
                </div>
                <div class="form-group">
                    <label class="my-2 form-label" for="email" style="color: white">Informe seu e-mail</label>
                    <input class="form-control has-validation" type="e-mail" id="email" placeholder="Digite um nome de usuário" name="email" />
                </div>
                <div class="form-group">
                    <label class="my-2 form-label" for="password1" style="color: white">Digite uma senha</label>
                    <input class="form-control has-validation" type="password" id="password1" placeholder="Digite uma senha" name="password1" />
                </div>
                <div class="form-group">
                    <label class="my-2 form-label" for="password2" style="color: white">Repita a senha</label>
                    <input class="form-control has-validation" type="password" id="password2" placeholder="Confirme a senha" name="password2" />
                </div>
                <div class="form-group">
                    <label class="my-2 form-label" for="born" style="color: white">Repita a senha</label>
                    <input class="form-control has-validation" type="date" id="born" placeholder="Confirme a senha" name="born" />
                </div>

                <div class="row d-flex justify-content-center">
                    <div class="col-12">
                        <label class="dropsownEscolaridadeLabel my-2">Nível de escolaridade</label>
                        <div class="dropdown">
                            <button class="dropsownEscolaridade btn btn-secondary dropdown-toggle" style="color: black; width: 100%" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                clique aqui
                            </button>
                            <div class="dropdown-menu" style="width: 100%" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Fundamental</a>
                                <a class="dropdown-item" href="#">Ensino Médio</a>
                                <a class="dropdown-item" href="#">Técnico</a>
                                <a class="dropdown-item" href="#">Superior</a>
                                <a class="dropdown-item" href="#">Não estou estudando</a>
                                <a class="dropdown-item" href="#">Não quero declarar</a>
                            </div>
                        </div>
                    </div>



                </div>


                <div class="row d-flex justify-content-center">
                    <div class="col-12">
                        <label class="dropsownGeneroLabel my-2">Genero</label>
                        <div class="dropdown">
                            <button class="dropsownGenero btn btn-secondary dropdown-toggle" style="color: black" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                clique aqui
                            </button>
                            <div class="dropdown-menu" style="width: 100%" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Masculino</a>
                                <a class="dropdown-item" href="#">Feminino</a>
                                <a class="dropdown-item" href="#">Homem Trans</a>
                                <a class="dropdown-item" href="#">Mulher Trans</a>
                                <a class="dropdown-item" href="#">Não quero declarar</a>
                            </div>
                        </div>
                    </div>



                </div>

                <button class="buttonForm btn mt-3">
                    Cadastre-se
                </button>
                <link class="alternativeLink form-text" to="/">Já possui o cadastro? Clique aqui!</link>
            </form>
        </div>

    </div>
</div>
<?php
//require_once('./servidor/Conection.php');
require_once('./nav/footer.html');
?>
<footer className="container-fluid bg-purple text-light d-flex justify-content-center">
    <div className="footerBar d-flex align-items-center">
        ©2020 - EduImpulso - ORIENTAÇÃO PROFISSIONAL
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>