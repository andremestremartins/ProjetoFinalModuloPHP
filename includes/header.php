<?php
/**
 * Header e Barra de Navegação Dinâmica
 * Sem pop-up: Redireciona diretamente para login/register ou para a profile page
 */
require_once __DIR__ . "/session.php";
$user = currentUser();
$isHome = (basename($_SERVER['PHP_SELF']) === 'index.php');
$navPrefix = $isHome ? '' : 'index.php';
?>

<!-- Header Principal -->
<header class="header">
    <a href="index.php" class="logo">
        <i class="fas fa-paw"></i> Zoo de Picoas
    </a>

    <nav class="navbar">
        <a href="<?= $navPrefix ?>#home" class="<?= $isHome ? 'active' : '' ?>">Início</a>
        <a href="<?= $navPrefix ?>#about">Sobre Nós</a>
        <a href="<?= $navPrefix ?>#gallery">Galeria</a>
        <a href="<?= $navPrefix ?>#animal">Animais</a>
        <a href="<?= $navPrefix ?>#pricing">Preçário</a>
        <a href="<?= $navPrefix ?>#contact">Contacto</a>
    </nav>

    <div class="icons">
        <?php if ($user): ?>
            <!-- Utilizador Autenticado: Redireciona diretamente para a Página de Perfil -->
            <a href="profile.php" class="icon-btn user-logged-btn" title="O Meu Perfil (<?= htmlspecialchars($user['name']) ?>)">
                <i class="fas fa-user-check"></i>
            </a>
            <!-- Botão de Sair Rápido -->
            <a href="logout.php" class="icon-btn logout-btn" title="Terminar Sessão">
                <i class="fas fa-right-from-bracket"></i>
            </a>
        <?php else: ?>
            <!-- Visitante: Redireciona diretamente para a Página de Login / Registo (Sem Pop-up) -->
            <a href="login.php" class="icon-btn login-direct-btn" title="Iniciar Sessão / Criar Conta">
                <i class="fas fa-user"></i>
            </a>
        <?php endif; ?>
        
        <!-- Botão Menu Mobile -->
        <div id="menu-btn" class="fas fa-bars" title="Menu de Navegação"></div>
    </div>
</header>

<!-- Notificações Flash Flutuantes -->
<div class="flash-container">
    <?php displayFlash(); ?>
</div>