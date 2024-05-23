<?php
// Verifique se o parâmetro 'code' está presente na URL
if (isset($_GET['code'])) {
    // Capture o código de autorização da query string
    $authorization_code = $_GET['code'];

    // Exiba o código de autorização na página
    echo "Código de autorização: $authorization_code";
} else {
    // Se o código não está presente, exiba uma mensagem de erro
    echo 'Código de autorização não encontrado.';
}
?>
