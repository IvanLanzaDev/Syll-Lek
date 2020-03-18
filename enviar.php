<?php
//Variáveis

$subject = "Central de Fãs";
$nome = $_POST['nome'];
$school = $_POST['mensagem'];
$email = $_POST['email'];
$data_envio = date('d/m/Y');
$hora_envio = date('H:i:s');

// Compo E-mail
  $arquivo = "
  <style type='text/css'>
  body {
  margin:0px;
  font-family:Verdana;
  font-size:12px;
  color: #666666;
  }
  a{
  color: #666666;
  text-decoration: none;
  }
  a:hover {
  color: #FF0000;
  text-decoration: none;
  }
  </style>
    <html>
        <table width='510' border='0' cellpadding='1' cellspacing='1' bgcolor='#FFF'>
            <tr>
                <td>
                <h2>Ola, $nome acaba de solicitar entrada na central de fãs
                <tr>
                    <td width='500'>Nome Completo:$nome</td>
                </tr>
                <tr>
                    <td width='320'>E-mail:<b>$email</b></td>
                </tr>
                <tr>
                    <td width='320'>Whatsapp:<b>$school</b></td>
                </tr>
                
                </td>
            </tr>  
            <tr>
                <td>Presença confirmada na seguinte data: <b>$data_envio</b> às <b>$hora_envio</b></td>
            </tr>
        </table>
    </html>
  ";

//enviar
  
  // emails para quem será enviado o formulário
  $emailenviar = "ivan@dappa.com.br";
  $destino = $emailenviar;
  $assunto = "Central de Fãs";

  // É necessário indicar que o formato do e-mail é html
  $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
      $headers .= "From: $nome <$email>";
  //$headers .= "Bcc: $EmailPadrao\r\n";
  
  $enviaremail = mail($destino, $assunto, $arquivo, $headers);
  if($enviaremail){
  $mgm = "Obrigado";
  echo " <meta http-equiv='refresh' content='1;URL=index.php'>";
  } else {
  $mgm = "ERRO AO ENVIAR E-MAIL!";
  echo "";
  }
?>