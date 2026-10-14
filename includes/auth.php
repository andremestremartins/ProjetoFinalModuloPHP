<?php
/**
 * Middleware / Verificação de Autenticação
 */
require_once __DIR__ . "/session.php";

if (!isLoggedIn()) {
    setFlash('warning', 'Por favor, inicie sessão para aceder a esta página.');
    header("Location: login.php");
    exit();
}