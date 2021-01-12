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

<div class="bannerHome container-fluid" id="desktop" id="topo">

    <div class="container d-flex align-items-center p-5">

        <h1 class="p-4">
            MIRE O OLHAR NO<br /> SEU FUTURO!<br />
        </h1>

    </div>

</div>
<div class="d-flex justify-content-center align-items-center my-5">
    <div class="borderRadius bg-purple m-auto p-3 col-8 col-sm-10 col-xl-4">
        <h1 class="camposLogin text-white text-center pb-4">LOGIN</h1>
        <form>
            <div class="form-group">
                <label class="my-2 form-label" for="e-mail" style="color: white">Digite seu e-mail</label>
                <input class="imputForm form-control has-validation" type="e-mail" id="email" aria-describedby="emailHelp" placeholder="email@email.com" name="email" />
            </div>
            <div class="form-group">
                <label class="my-2 form-label" for="password" style="color: white">Digite seu e-mail</label>
                <input class="imputForm form-control has-validation" type="password" id="password" placeholder="email@email.com" name="password" />
            </div>

            <a class="linkCadastro form-text " href="/cadastro">Cadastre-se aqui!</a>

            <button class="buttonForm btn mt-3">
                Enviar
            </button>
        </form>
    </div>
    <div class="col-12 col-sm-12 col-xl-6 d-flex justify-content-center my-4" id="">
        <img src="./imgs/index/capa-home-login.jpg" width="80%" alt="login" />
    </div>
</div>
<?php
//require_once('./servidor/Conection.php');
require_once('./nav/footer.html');
?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>