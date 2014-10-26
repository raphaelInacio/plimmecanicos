<?php
//Variaveis


//Campos a domiciilio
$tipo = $_POST['tipo'];
$horas = $_POST['horas'];
$tipoVeiculo = $_POST['tipo_veiculo'];		
$email = $_POST['email'];
$endereco = $_POST['endereco'];	
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$montadora = $_POST['montadora'];
$veiculo = $_POST['veiculo'];
$ano = $_POST['ano'];
$nome = $_POST['nome'];
$detalhes= $_POST['detalhes'];
$data_envio = date('d/m/Y');
$hora_envio = date('H:i:s');

// -------------

// Compo E-mail
	
	$arquivo = "
	<style type='text/css'>
	body {
	margin:0px;
	font-family:Verdane;
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
        <table width='510'>
            <tr>
              <td>
              	 <tr>
                 	<td width='500'>Tipo da solicitacao:$tipo</td>
                </tr>
                 <tr>
                 	<td width='500'>Horas:$horas</td>
                </tr>
                 <tr>
                 	<td width='500'>Tipo de Veiculo:$tipoVeiculo</td>
                </tr>
                 <tr>
                 	<td width='500'>Email:$email</td>
                </tr>
                 <tr>
                 	<td width='500'>Endereco:$endereco</td>
                </tr>
                 <tr>
                 	<td width='500'>Bairro:$bairro</td>
                </tr>
                 <tr>
                 	<td width='500'>Bairro:$cidade</td>
                </tr>
                 <tr>
                 	<td width='500'>Estado:$estado</td>
                </tr>
                <tr>
                 	<td width='500'>Montadora:$montadora</td>
                </tr>
                <tr>
                 	<td width='500'>Veiculo:$veiculo</td>
                </tr>
                <tr>
                 	<td width='500'>Ano:$ano</td>
                </tr>
                <tr>
                 	<td width='500'>Nome:$nome</td>
                </tr>
                 <tr>
                 	<td width='500'>Detalhes:$detalhes</td>
                </tr>
            </td>
          </tr>  
          <tr>
            <td>Este e-mail foi enviado em <b>$data_envio</b> &agrave;s <b>$hora_envio</b></td>
          </tr>
        </table>
    </html>
	";

// -------------------------

//enviar
	
	// emails para quem será enviado o formulário
	$destino = "contato@plimmecanicos.com.br";
	$assunto = "Plim Mecânicos";

	// É necessário indicar que o formato do e-mail é html
	$headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'From: <$nome>';
	//$headers .= "Bcc: $EmailPadrao\r\n";
	
	$enviaremail = mail($destino, $assunto, $arquivo, $headers);
	if($enviaremail){
	$mgm = "E-MAIL ENVIADO COM SUCESSO! <br> O link será enviado para o e-mail fornecido no formulário";
	echo " <meta http-equiv='refresh' content='3;URL=sucesso.html'>";
	} else {
	$mgm = "ERRO AO ENVIAR E-MAIL!";
	echo "";
	}
?>