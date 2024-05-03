<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $ddd = $_POST['ddd'];
    $telefone = $_POST['telefone'];
    $quantidade = $_POST['quantidade'];

    $mensagem = "Novo pedido de brownies:\n\n";
    $mensagem .= "Nome: " . $nome . "\n";
    $mensagem .= "Telefone: (" . $ddd . ") " . $telefone . "\n";
    $mensagem .= "Quantidade de Brownies: " . $quantidade . "\n";

    $destinatario = "maria.estigarribia@escola.pr.gov.br"; // Coloque seu e-mail aqui

    $assunto = "Novo Pedido de Brownies";

    // Envio do e-mail
    mail($destinatario, $assunto, $mensagem);

    // Redirecionamento para página de confirmação
    header("Location: confirmacao.html");
    exit;
}
?>
