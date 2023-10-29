
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exemplo de Formulário</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<fieldset>
<?php
$checkbox = $_POST["check"];
$color = $_POST["color"];
$date = $_POST["date"];
$datetime_local = $_POST["datetime-local"];
$email = $_POST["email"];
$file = $_POST["file"];
//$hidden = $_POST["hidden"];
$mes = $_POST["mes"];
//$image = $_POST["image"];
$numero = $_POST["numero"];
$senha = $_POST["senha"];
$sexo = $_POST["sexo"];
$range = $_POST["range"];
$reset = $_POST["reset"];
$procurar = $_POST["procurar"];
$telefone = $_POST["telefone"];
$testo = $_POST["testo"];
$hora = $_POST["hora"];
$url = $_POST["url"];
$semana = $_POST["semana"];
$pnome = $_POST["pnome"];
$unome = $_POST["unome"];
$comentario = $_POST["comentario"];
//echo $checkbox;
//echo $hidden;
//echo $image;
?>
<p>Ola <?php echo "$pnome $unome";?>.</p>
<p>Confira se seus dados estão coretos?</p>
<?php 
    if (isset($_POST["check"])) {?>
<p>Você marcou a opção de compartilhar seus dados.</p>
<?php ;}?>

<p>Sua cor preferida é <?php echo $color;?></p>
<p>Sua data de nascimento é: <?php echo $date;?></p>
<p>O mês atual é: <?php echo $mes;?></p>
<p>Agora são: <?php echo $hora;?> Horas.</p>
<p>A semana do ano é: <?php echo $semana;?></p>
<p>A data e hora atual é: <?php echo $datetime_local;?></p>
<p>O arquivo enviado é <?php echo $file;?></p>
<p>Seu Telefone é: <?php echo $telefone;?></p>
<p>Seu E-mail é: <?php echo $email;?></p>
<p>Sua Senha é: <?php echo $senha;?></p>
<p>Seu Sexo é: <?php echo $sexo;?></p>
<p>O Range ficou em: <?php echo $range;?></p>
<p>O numero escolhido foi: <?php echo $numero;?></p>
<p>O termo da busca é: <?php echo $procurar;?></p>
<p>Sua URL é: <?php echo $url;?></p>
<p>Seus comentários foram: <?php echo $comentario;?></p>
</fieldset>
</body>
</html> 