<?php
// Obtém o domínio ou IP acessado (ex: localhost, 0xsistema.zapto.org)
$host = $_SERVER['HTTP_HOST'];

// Obtém a porta usada (ex: 8090)
$porta = $_SERVER['SERVER_PORT'];

// Verifica se a porta já está no host
if (strpos($host, ":") === false && $porta != 80 && $porta != 443) {
    $baseURL = "http://$host:$porta";
} else {
    $baseURL = "http://$host";
}

// Definindo uma constante global para reutilizar em qualquer lugar
define('BASE_URL', $baseURL);
?>