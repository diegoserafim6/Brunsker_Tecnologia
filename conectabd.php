<?php
/* Conexão com o servidor . */
$servidor = 'localhost';
$banco = 'brunsker';
$usuario = 'root';
$senha = '';
$link = mysqli_connect($servidor, $usuario, $senha);
$db = mysqli_select_db($link,$banco);
if(!$link)

{
    echo "erro ao conectar ao banco de dados!";
}

/* Valida usuario e senha na tela de login */
  if(isset($_POST['submits'])){

	$Nome_Completo = mysqli_real_escape_string($link, $_POST['Nome_Completo']);
    $Senha = mysqli_real_escape_string($link, $_POST['Senha']);

	  if($Nome_Completo == "" || $Nome_Completo == null){
           echo "Informe o nome do usuário ";}

		   elseif($Senha == "" || $Senha == null){
           echo "Informe a senha de acesso ";}

	  else{

		$sql = "SELECT * FROM usuario WHERE Nome_Completo = '$Nome_Completo' AND Senha = '$Senha'";
		$resultado = mysqli_query($link, $sql);		

			if(mysqli_num_rows($resultado) == true):
				$dados = mysqli_fetch_array($resultado);
				mysqli_close($link);
				$_SESSION['logado'] = true;
				$_SESSION['id_usuario'] = $dados['id'];
				echo 'logado';
				header('Location:Pesquisar.php');

			else:
                        echo "Usuário e senha não localizados";
                        header('Location:Pesquisar.php');
            endif;
        } }

        /*Adiciona Novos usuarios ao banco de dados*/
        if(isset($_POST['Cadastrar_usuario'])){ 

            $Nome_Completo =$_POST['Nome_Completo'];
            $CPF = $_POST['CPF'];
            $Apelido= $_POST['Apelido'];
            $Sexo= $_POST['Sexo'];
            $Data_Nascimento= $_POST['Data_Nascimento'];
            $E_mail= $_POST['E_mail'];
            $Telefone_Fixo= $_POST['Telefone_Fixo'];
            $Telefone_Celular= $_POST['Telefone_Celular'];
            $Estado= $_POST['Estado'];
            $Cidade= $_POST['Cidade'];
            $CEP= $_POST['CEP'];
            $Usuario= $_POST['Usuario'];
            $Senha= $_POST['Senha'];

            $sql ="INSERT INTO usuario(Nome_Completo,CPF,Apelido,Sexo,Data_Nascimento,E_mail,Telefone_Fixo,Telefone_Celular,Estado,Cidade,CEP,Usuario,Senha) VALUES('$Nome_Completo','$CPF','$Apelido','$Sexo','$Data_Nascimento','$E_mail','$Telefone_Fixo','$Telefone_Celular','$Estado','$Cidade','$CEP','$Usuario','$Senha')";

            if (mysqli_query($link, $sql)) {
                    echo  " <p> Cadastro realizado  com sucesso! </br>";
                    header("Refresh: 1;url=cadastrar.php");
                  }
                 else {
                    echo  " <p>  Falha ao realizar o cadastro   </br>"; } 
                    header("Refresh: 1;url=cadastrar.php");
                   } 


  ?>