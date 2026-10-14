<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil - Zoo de Picoas</title>
    
    <!-- Google Fonts: Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <!-- Estilos CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<!-- Header Principal -->
<header class="header">
    <a href="index.php" class="logo">
        <i class="fas fa-paw"></i> Zoo de Picoas
    </a>

    <nav class="navbar">
        <a href="index.php#home">Início</a>
        <a href="index.php#about">Sobre Nós</a>
        <a href="index.php#gallery">Galeria</a>
        <a href="index.php#animal">Animais</a>
        <a href="index.php#pricing">Preçário</a>
        <a href="index.php#contact">Contacto</a>
    </nav>

    <div class="icons">
        <a href="profile.php" class="icon-btn user-logged-btn" title="O Meu Perfil">
            <i class="fas fa-user-check"></i>
        </a>
        <a href="login.php" class="icon-btn logout-btn" title="Terminar Sessão">
            <i class="fas fa-right-from-bracket"></i>
        </a>
        <div id="menu-btn" class="fas fa-bars" title="Menu"></div>
    </div>
</header>

<main class="profile-page">
    <div class="profile-container">

        <!-- Cartão de Cabeçalho do Perfil -->
        <div class="profile-header-card">
            <div class="profile-header-left">
                <div class="profile-avatar-lg">
                    <i class="fas fa-user"></i>
                </div>
                <div class="profile-header-info">
                    <h2>André Martins</h2>
                    <p><i class="fas fa-envelope"></i> andre.martins@zoo.pt</p>
                    <div style="margin-top: .6rem;">
                        <span class="user-badge badge-admin">
                            <i class="fas fa-shield-halved"></i> Membro Registado
                        </span>
                        <span style="font-size: 1.3rem; color: var(--light); margin-left: 1rem;">
                            <i class="fas fa-calendar-alt"></i> Membro desde 2026
                        </span>
                    </div>
                </div>
            </div>

            <div class="profile-header-actions">
                <a href="index.php" class="btn btn-outline" style="margin-top: 0;">
                    <i class="fas fa-arrow-left"></i> Voltar ao Zoo de Picoas
                </a>
                <a href="login.php" class="btn btn-danger" style="margin-top: 0;">
                    <i class="fas fa-sign-out-alt"></i> Sair
                </a>
            </div>
        </div>

        <!-- Grade com Menu Lateral e Conteúdo -->
        <div class="profile-grid">
            
            <!-- Barra Lateral de Navegação -->
            <aside class="profile-sidebar">
                <ul class="profile-nav-list">
                    <li class="profile-nav-item">
                        <a href="#dados" data-tab="dados" class="active">
                            <i class="fas fa-user-edit"></i> Dados Pessoais
                        </a>
                    </li>
                    <li class="profile-nav-item">
                        <a href="#seguranca" data-tab="seguranca">
                            <i class="fas fa-lock"></i> Segurança & Senha
                        </a>
                    </li>
                    <li class="profile-nav-item">
                        <a href="#bilhetes" data-tab="bilhetes">
                            <i class="fas fa-ticket-alt"></i> Os Meus Bilhetes
                        </a>
                    </li>
                    <li class="profile-nav-item">
                        <a href="#favoritos" data-tab="favoritos">
                            <i class="fas fa-heart"></i> Animais Favoritos
                        </a>
                    </li>
                </ul>

                <div class="profile-stats-card">
                    <h4>Estado da Conta</h4>
                    <span class="stats-badge">
                        <i class="fas fa-check-circle"></i> Ativa
                    </span>
                    <p style="font-size: 1.2rem; color: var(--light); margin-top: 1rem;">
                        Acesso livre às funcionalidades do parque.
                    </p>
                </div>
            </aside>

            <!-- Área de Conteúdo das Abas -->
            <div class="profile-card-content">
                
                <!-- ABA 1: Dados Pessoais -->
                <div class="tab-pane active" id="tab-dados">
                    <h3 class="profile-section-title">
                        <i class="fas fa-id-card"></i> Dados Pessoais
                    </h3>
                    <form onsubmit="event.preventDefault(); alert('Dados guardados com sucesso!');">
                        <div class="form-grid-2">
                            <div class="form-group">
                                <label for="name">Nome Completo</label>
                                <div class="input-with-icon">
                                    <i class="fas fa-user icon-prefix"></i>
                                    <input type="text" id="name" value="André Martins" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email">Endereço de E-mail</label>
                                <div class="input-with-icon">
                                    <i class="fas fa-envelope icon-prefix"></i>
                                    <input type="email" id="email" value="andre.martins@zoo.pt" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="phone">Número de Telemóvel</label>
                            <div class="input-with-icon">
                                <i class="fas fa-phone icon-prefix"></i>
                                <input type="tel" id="phone" value="912 345 678" placeholder="Ex: 912 345 678">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="bio">Biografia</label>
                            <textarea id="bio" placeholder="Sobre mim...">Amante da natureza e visitante do Zoo de Picoas.</textarea>
                        </div>

                        <button type="submit" class="btn">
                            <i class="fas fa-save"></i> Guardar Alterações
                        </button>
                    </form>
                </div>

                <!-- ABA 2: Segurança & Senha -->
                <div class="tab-pane" id="tab-seguranca">
                    <h3 class="profile-section-title">
                        <i class="fas fa-shield-alt"></i> Alterar Palavra-passe
                    </h3>
                    <form onsubmit="event.preventDefault(); alert('Palavra-passe alterada com sucesso!');">
                        <div class="form-group">
                            <label for="current_password">Palavra-passe Atual</label>
                            <div class="input-with-icon">
                                <i class="fas fa-key icon-prefix"></i>
                                <input type="password" id="current_password" required>
                                <i class="fas fa-eye password-toggle"></i>
                            </div>
                        </div>

                        <div class="form-grid-2">
                            <div class="form-group">
                                <label for="new_password">Nova Palavra-passe</label>
                                <div class="input-with-icon">
                                    <i class="fas fa-lock icon-prefix"></i>
                                    <input type="password" id="new_password" required>
                                    <i class="fas fa-eye password-toggle"></i>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="confirm_password">Confirmar Nova Palavra-passe</label>
                                <div class="input-with-icon">
                                    <i class="fas fa-lock icon-prefix"></i>
                                    <input type="password" id="confirm_password" required>
                                    <i class="fas fa-eye password-toggle"></i>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn">
                            <i class="fas fa-sync-alt"></i> Atualizar Palavra-passe
                        </button>
                    </form>
                </div>

                <!-- ABA 3: Bilhetes e Reservas -->
                <div class="tab-pane" id="tab-bilhetes">
                    <h3 class="profile-section-title">
                        <i class="fas fa-ticket-alt"></i> Os Meus Bilhetes
                    </h3>
                    <div class="tickets-empty">
                        <i class="fas fa-ticket-alt"></i>
                        <h4>Nenhum bilhete ativo no momento</h4>
                        <p>Explore as tarifas e reserve bilhetes para a sua visita.</p>
                        <a href="index.php#pricing" class="btn">
                            <i class="fas fa-plus"></i> Ver Preçário
                        </a>
                    </div>
                </div>

                <!-- ABA 4: Animais Favoritos -->
                <div class="tab-pane" id="tab-favoritos">
                    <h3 class="profile-section-title">
                        <i class="fas fa-heart"></i> Animais Favoritos
                    </h3>
                    <div class="tickets-empty">
                        <i class="fas fa-paw"></i>
                        <h4>Ainda não adicionou animais aos favoritos</h4>
                        <p>Guarde aqui as suas espécies preferidas.</p>
                        <a href="index.php#animal" class="btn btn-secondary">
                            <i class="fas fa-compass"></i> Ver Animais
                        </a>
                    </div>
                </div>

            </div>
        </div>

    </div>
</main>

<!-- Footer -->
<footer class="footer">
    <div class="credit">
        &copy; 2026 <span>Zoo de Picoas</span> - Projeto PHP - André Martins 219. Todos os direitos reservados.
    </div>
</footer>

<script src="assets/js/script.js"></script>
</body>
</html>
