<?php
/**
 * Gestão de Sessões e Funções Utilitárias de Autenticação
 */

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

/**
 * Verifica se o utilizador tem sessão ativa
 */
function isLoggedIn(): bool {
    return isset($_SESSION['user']) && !empty($_SESSION['user']['id']);
}

/**
 * Devolve os dados do utilizador atualmente autenticado
 */
function currentUser(): ?array {
    return $_SESSION['user'] ?? null;
}

/**
 * Verifica se o utilizador autenticado tem cargo de administrador
 */
function isAdmin(): bool {
    return isLoggedIn() && (($_SESSION['user']['role'] ?? '') === 'admin');
}

/**
 * Define uma mensagem flash para ser exibida na próxima requisição
 * @param string $type success | danger | warning | info
 * @param string $message Mensagem a apresentar
 */
function setFlash(string $type, string $message): void {
    $_SESSION['flash'] = [
        'type' => $type,
        'message' => $message
    ];
}

/**
 * Obtém e remove a mensagem flash da sessão
 */
function getFlash(): ?array {
    if (isset($_SESSION['flash'])) {
        $flash = $_SESSION['flash'];
        unset($_SESSION['flash']);
        return $flash;
    }
    return null;
}

/**
 * Renderiza o elemento HTML da mensagem flash se existir
 */
function displayFlash(): void {
    $flash = getFlash();
    if ($flash) {
        $type = htmlspecialchars($flash['type']);
        $icon = match($flash['type']) {
            'success' => 'check-circle',
            'danger' => 'exclamation-circle',
            'warning' => 'exclamation-triangle',
            default => 'info-circle'
        };
        $message = htmlspecialchars($flash['message']);
        echo "<div class='alert alert-{$type}' id='alert-flash'>
                <i class='fas fa-{$icon}'></i>
                <span>{$message}</span>
                <button type='button' class='alert-close' onclick='this.parentElement.remove()'>&times;</button>
              </div>";
    }
}

/**
 * Exige autenticação para aceder à página
 */
function requireAuth(string $redirect = 'login.php'): void {
    if (!isLoggedIn()) {
        setFlash('warning', 'Por favor, inicie sessão para aceder a esta página.');
        header("Location: $redirect");
        exit;
    }
}

/**
 * Exige que o utilizador seja visitante (não logado)
 */
function requireGuest(string $redirect = 'profile.php'): void {
    if (isLoggedIn()) {
        header("Location: $redirect");
        exit;
    }
}

