<?php

include ("dbconfig.php");

$email_user = trim($_REQUEST[email]);
$cpf = trim($_REQUEST[cpf]);
$dtnasc = trim($_REQUEST[nascimento]);

//verifica se existe uma linha com o login digitado


    $consulta = pg_query("SELECT email FROM usuario WHERE cpf = '$cpf' AND dt_nasc='$dtnasc'") or die("Erro tabela usuario".pg_last_error());
    $saida = pg_fetch_array($consulta);

    if($saida){
         $email = $saida['email'];

          $assunto = "Assistência de senha do CICCOL";
	  $mensagem = "<html>";
	  $mensagem .= "<body>";
	  $mensagem .= "<br><br>Para iniciar o processo de redefinição de senha da sua conta do Ciccol Leonardo, clique no link abaixo:</br>";
	  $mensagem .= "<br><br>LINK LINK<br>";
	  $mensagem .= "<br>Se o link não funcionar, copie e cole o URL em uma nova janela do navegador.";
	  $mensagem .= "<br>Caso tenha recebido esse e-mail por engano, provavelmente outro usuário inseriu seu endereço de e-mail ao tentar redefinir uma senha. <br>Caso não tenha feito a solicitação, você não precisa tomar nenhuma ação e pode desconsiderar este e-mail com segurança.";
	  $mensagem .= "<br>Para qualquer dúvida sobre sua conta, entre em contato com o administrador do sistema do seu colegiado.<br>";
	  $mensagem .= "<br>Att,<br>Ciccol.";
          $mensagem .= "</body>";
	  $mensagem .= "</html>";
	  $headers = "MIME-Version: 1.0\r\n";
          $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
	  $headers .= "From: CICCOL <no-reply@ciccol.com>\r\n";

	  //enviar para o email o login e a senha

          mail($email, $assunto, $mensagem, $headers);

          $ac[] = "Uma mensagem foi enviada para seu e-mail.";
           echo "OK" .$email;
   }
    else{
        echo "erro";
    }


?>