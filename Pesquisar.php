<html>

<head>
    <title> Listagem - Brunsker Tecnologia</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS JS e  CSS Externo  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css.css">

    <!-- JS -->
    <script src="js.js"></script>

    <!-- Fontes utilizas -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

</head>

<body>
    <!-- Barra inicial e a logo  -->
    <ul class="nav cor justify-content-center">
        <li class="nav-item">
            <a href="https://www.brunsker.com.br/" target="_blank"> <img src="img/topo.png" class="logo"> </a>

        </li>
    </ul>

    <!-- Menu Lateral  -->
    <div class="row">

        <div class="col-md-2 col-sm-6">

            <ul class="list-group mt-2 ">
                <li class="list-group-item cor ">Bem vindo <img src="img/user.png" class="imagem_usuario"> </li>
                <li onclick="Cadastrar();" class="list-group-item  btn cor ">Cadastrar Usuario</li>
                <li onclick="Listar();" class="list-group-item  btn cor"> Listar usuarios </li>
                <li onclick="inicial();" class="list-group-item  btn cor">Sair </li>

        </div>

        <!-- Indice da tabela que contém os dados cadastrados  -->
        <div class="form-row col-md-10 col-sm-1 mt-4">
            <table class="table table-hover table-striped-bordered mb-5">
                <thead>
                    <th>Nome Completo</th>
                    <th>CPF</th>
                    <th>Apelido</th>
                    <th>Sexo</th>
                    <th>Data de Nascimento</th>
                    <th>E-mail</th>
                    <th>Telefone Fixo </th>
                    <th>Telefone Celular</th>
                    <th>Estado</th>
                    <th>Cidade</th>
                    <th>CEP </th>
                    <th>Usuario</th>
                    <th>Senha</th>

                </thead>
                <tbody id="tabela">
                    <tr>
                        <td>Diego Serafim</td>
                        <td>123456</td>
                        <td>Diego</td>
                        <td>Masculino</td>
                        <td>05/05/1990</td>
                        <td>diego@diego</td>
                        <td>3133333333</td>
                        <td>3199999999</td>
                        <td>Minas Gerais</td>
                        <td>Belo Horizonte</td>
                        <td>30600000</td>
                        <td>Diego</td>
                        <td>123456</td>

                        <tr>
                             <!-- Resgata os dados cadastrados via php e carrega automaticamente -->
                                <?php include 'Lista_Cadastrados.php' ?>

                </tbody>
            </table>
            </form>

            <!-- Rodapé  -->
            <nav class="navbar fixed-bottom cor justify-content-end "> Brunsker Tecnologia </nav>

</body>

</body>

</html>