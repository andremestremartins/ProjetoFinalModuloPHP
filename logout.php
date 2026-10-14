<?php
/**
 * Terminar Sessão (Logout)
 */
require_once __DIR__ . "/includes/session.php";

// Limpar dados da sessão
$_SESSION = [];

if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

session_destroy();

// Iniciar nova sessão limpa apenas para a notificação
session_start();
setFlash('info', 'Terminou a sua sessão com sucesso. Até breve!');

header("Location: index.php");
exit;

