<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Zoo de Picoas</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="auth-simple-body">

    <div class="auth-simple-container">
        
        <div class="auth-simple-box">
            
            <a href="index.php" class="auth-simple-logo">
                <i class="fas fa-paw"></i> Zoo de Picoas
            </a>

            <!-- PAINEL LOGIN -->
            <div class="auth-panel active" id="auth-panel-login">
                <h3>Login</h3>

                <form action="profile.php" method="GET">
                    <div class="auth-input-group">
                        <i class="fas fa-envelope"></i>
                        <input type="email" placeholder="E-mail" required>
                    </div>

                    <div class="auth-input-group">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Palavra-passe" required>
                    </div>

                    <button type="submit" class="auth-simple-btn">Entrar</button>
                </form>

                <div class="auth-simple-links">
                    <a href="javascript:void(0)" onclick="switchTab('register')">Criar conta</a>
                    <span>•</span>
                    <a href="index.php">Voltar ao site</a>
                </div>
            </div>

            <!-- PAINEL REGISTO -->
            <div class="auth-panel" id="auth-panel-register">
                <h3>Criar Conta</h3>

                <form action="profile.php" method="GET">
                    <div class="auth-input-group">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Nome" required>
                    </div>

                    <div class="auth-input-group">
                        <i class="fas fa-envelope"></i>
                        <input type="email" placeholder="E-mail" required>
                    </div>

                    <div class="auth-input-group">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Palavra-passe" required>
                    </div>

                    <div class="auth-input-group">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Confirmar Palavra-passe" required>
                    </div>

                    <button type="submit" class="auth-simple-btn">Registar</button>
                </form>

                <div class="auth-simple-links">
                    <a href="javascript:void(0)" onclick="switchTab('login')">Já tenho conta</a>
                    <span>•</span>
                    <a href="index.php">Voltar ao site</a>
                </div>
            </div>

        </div>


    </div>

    <script>
        function switchTab(tab) {
            const login = document.getElementById('auth-panel-login');
            const reg = document.getElementById('auth-panel-register');
            if (tab === 'register') {
                login.classList.remove('active');
                reg.classList.add('active');
                document.title = 'Registo - Zoo de Picoas';
            } else {
                reg.classList.remove('active');
                login.classList.add('active');
                document.title = 'Login - Zoo de Picoas';
            }
        }
    </script>
</body>
</html>
