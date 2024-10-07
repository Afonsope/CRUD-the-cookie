<?php
// Inicia ou retoma uma sessão
session_start();

// ------------------------------
// CRIAÇÃO DE COOKIE E SESSÃO
// ------------------------------
// Cria um cookie chamado "altitude" com um valor exemplo "1500m"
// O cookie expira em 30 dias
setcookie("altitude", "1500m", time() + (86400 * 30), "/"); // 86400 = 1 dia
echo "Cookie 'altitude' criado com valor inicial: 1500m<br>";

// Armazena o país na sessão
$_SESSION['pais'] = 'Brasil';
echo "Sessão 'pais' criada com valor: Brasil<br>";

// ------------------------------
// MODIFICAÇÃO DE COOKIE
// ------------------------------
// Modifica o valor do cookie 'altitude'
if (isset($_COOKIE['altitude'])) {
    // Modifica o valor para "2000m"
    setcookie("altitude", "2000m", time() + (86400 * 30), "/");
    echo "Cookie 'altitude' modificado para: 2000m<br>";
} else {
    echo "Falha ao modificar cookie 'altitude' porque não foi encontrado.<br>";
}

// ------------------------------
// DELEÇÃO DE COOKIE E SESSÃO
// ------------------------------
// Deleta o cookie 'altitude'
setcookie("altitude", "", time() - 3600, "/"); // Define a data de expiração para uma hora atrás
echo "Cookie 'altitude' foi deletado.<br>";

// Deleta a sessão 'pais'
if (isset($_SESSION['pais'])) {
    unset($_SESSION['pais']); // Deleta apenas a variável 'pais'
    echo "Sessão 'pais' foi deletada.<br>";
} else {
    echo "Sessão 'pais' não encontrada para deletar.<br>";
}

?>
