<html>

<head>

    <title> Cadastrar - Brunsker Tecnologia</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- Bootstrap CSS e CSS Externo  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css.css">

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>

    <!-- JS -->
    <script src="js.js"></script>

    <!-- Fontes utilizas -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

    
<script>
    $(document).ready(function()
	});
</script>




</head>


<!-- Barra inicial e a logo  -->
<ul class="nav cor justify-content-center">
    <li class="nav-item">
        <a href="https://www.brunsker.com.br/" target="_blank"> <img src="img/topo.png" class="logo"> </a>

    </li>
</ul>

<body>
<!-- Menu Lateral  -->
    <div class="row">

        <div class="col-md-2 col-sm-6">

            <ul class="list-group mt-2">
                <li class="list-group-item  cor">Bem vindo <img src="img/user.png" class="imagem_usuario"> </li>
                <li onclick="Cadastrar();" class="list-group-item  btn cor ">Cadastrar Usuario </li>
                <li onclick="Listar();" class="list-group-item  btn cor"> Listar usuarios </li>
                <li onclick="inicial();" class="list-group-item  btn cor">Sair </li>

        </div>
<!-- Formulario de cadastro -->
        <div class="col-md-10 mt-3 rounded">
            <form action="conectabd.php" method="post" id="Formulario">
                <div class="form-row  ">
                    <div class="col-md-3 col-sm-3 mb-3">
                        <label> Nome completo </label>
                        <input type="text" class="form-control" name="Nome_Completo" required>
                    </div>
                    <div class="col-md-3 col-sm-3 mb-3">
                        <label> CPF </label>
                        <input type="text" class="form-control" name="CPF" pattern="[0-9]+$" required>
                    </div>
                    <div class="col-md-3 col-sm-3 mb-3">
                        <label>Apelido</label>
                        <div class="input-group ">
                            <input type="text" class="form-control " name="Apelido" required>
                        </div>
                    </div>
                </div>

                <div class="form-row content-fluid">
                    <div class="col-md-1 col-sm-2 mb-3 ">
                        <label>Sexo </label>
                        <select class="custom-select mr-sm-2 " name="Sexo" required>
                            <option selected></option>
                            <option value="Masculino">Masculino</option>
                            <option value="Feminino">Feminino</option>
                        </select>
                    </div>
                    <div class="col-md-2 col-sm-3 mb-3 ">
                        <label> Data de nascimento </label>
                        <input type="date" class="form-control " name="Data_Nascimento" required>
                    </div>
                    <div class="col-md-2 col-sm-3 mb-3 ">
                        <label> E-mail </label>
                        <input type="email" class="form-control " name="E_mail" required>
                    </div>
                    <div class="col-md-2 col-sm-3 mb-3 ">
                        <label>Telefone fixo </label>
                        <input type="text " class="form-control " name="Telefone_Fixo" pattern="[0-9]+$" required>
                    </div>
                    <div class="col-md-2 col-sm-3 mb-3 ">
                        <label>Telefone Celular </label>
                        <input type="text " class="form-control " name="Telefone_Celular" pattern="[0-9]+$" required>
                    </div>
                </div>

                <div class="form-row ">
                    <div class="col-md-3 col-sm-3  mb-3 ">
                        <label>Estado </label>
                        <Select class="form-control" name="Estado" ID="Estado" required>
                            <option selected></option>
                        </Select>
                    </div>
                    <div class="col-md-3 col-sm-3 mb-3 ">
                        <label>Cidade</label>
                        <Select class="form-control" name="Cidade" ID="Cidade" required>
                            <option selected></option>
                        </Select>
                    </div>
                    <div class="col-md-2 col-sm-2 mb-3 ">
                        <label>CEP </label>
                        <input type="text " class="form-control" name="CEP" pattern="[0-9]+$" required>
                    </div>
                </div>

                <div class="form-row ">
                    <div class="col-md-3 col-sm-3 mb-3 ">
                        <label>Usuario </label>
                        <input type="text" class="form-control" name="Usuario" required>
                    </div>
                    <div class="col-md-3 col-sm-3 mb-3 ">
                        <label>Senha </label>
                        <input type="password" class="form-control " name="Senha" required>
                    </div>
                </div>
                <div class="form-row mt-5 ">

                    <button class="btn cor align-text-bottom mb-5" name='Cadastrar_usuario' type="submit "> Cadastrar Usuario </button>
                    <button class="btn cor align-text-bottom ml-5 mb-5" type="reset"> Limpar cadastro </button>
                </div>
        </div>

        </form>

</body>
             <!-- Rodapé  -->

<nav class="navbar fixed-bottom cor justify-content-end "> Brunsker Tecnologia </nav>


</body>

</html>