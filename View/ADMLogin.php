<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Administrador</title>
    <style>
        /* Definimos que a sidebar terá uma largura de 120px e cor a cord de fundo #222 */
        .w3-sidebar {
            width: 120px;

        }

        /*Define Fonte para todas as tags listadas abaixo*/

        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Montserrat", sans-serif
        }
    </style>
</head>

<body class="w3-light-grey">

    <form action="/Controller/Navegacao.php" method="post" class="w3-container w3-card-4 w3-light-grey w3-
text-blue w3-margin w3-display-middle" style="width: 30%;">
        <input type="hidden" name="nome_form" value="frmLoginADM" />
        <h2 class="w3-center">Administrador</h2>
        <div class="w3-row w3-section">
            <div class="w3-col" style="width:11%"><i class="w3-xxlarge fa fa-user"></i></div>
            <div class="w3-rest">
                <input class="w3-input w3-border w3-round-large" name="txtLoginADM" type="text" placeholder="Login CPF (ex.: 33333333333)">
            </div>
        </div>
        <div class="w3-row w3-section">
            <div class="w3-col" style="width:11%"><i class="w3-xxlarge fa fa-lock"></i></div>
            <div class="w3-rest">
                <input class="w3-input w3-border w3-round-large" name="txtSenhaADM" type="password" placeholder="Senha">
            </div>
        </div>
        <div class="w3-row w3-section">
            <div>
                <button name="btnLoginADM" class="w3-button w3-block w3-margin w3-blue w3-cell w3-roundlarge" style="width: 90%;">Entrar</button>
            </div>
        </div>
    </form>

</body>

</html>