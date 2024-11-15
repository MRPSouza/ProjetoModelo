<?php
// Apenas redireciona se estiver na área admin e deslogado
$isAdmin = strpos($_SERVER['REQUEST_URI'], '/admin/') !== false;
$isLoggedIn = isset($_GET['logged']) ? $_GET['logged'] === 'true' : true; // Logado por padrão

if ($isAdmin && !$isLoggedIn) {
    header('Location: /ProjetoModelo/Host/private/src/resources/system_blog/?logged=false');
    exit;
}
?>

<?php if ($isAdmin): ?>
    <!-- Header Admin -->
    <nav class="navbar navbar-dark admin-header">
        <div class="container-fluid">
            <div class="d-flex align-items-center">
                <i class="fas fa-window-maximize me-2"></i>
                <a class="navbar-brand" href="/ProjetoModelo/Host/private/src/resources/system_blog/admin/">
                    Blog Admin
                </a>
            </div>
            
            <div class="user-info">
                <i class="fas fa-user me-2"></i>
                <span class="user-name me-3">Admin</span>
                <a href="/ProjetoModelo/Host/private/src/resources/system_blog/?logged=false" class="btn btn-outline-light btn-sm">
                    <i class="fas fa-sign-out-alt me-1"></i> Sair
                </a>
            </div>
        </div>
    </nav>
<?php else: ?>
    <!-- Header Público -->
    <div class="auth-menu ms-auto">
        <?php if ($isLoggedIn): ?>
            <!-- Usuário Logado -->
            <div class="user-menu">
                <div class="user-avatar" data-bs-toggle="dropdown">
                    <i class="fas fa-user"></i>
                </div>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-user-circle"></i> Meu Perfil
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="/ProjetoModelo/Host/private/src/resources/system_blog/admin/">
                            <i class="fas fa-cog"></i> Painel Admin
                        </a>
                    </li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <a class="dropdown-item" href="#" onclick="toggleLogin()">
                            <i class="fas fa-sign-out-alt"></i> Sair
                        </a>
                    </li>
                </ul>
            </div>
        <?php else: ?>
            <!-- Usuário Não Logado -->
            <button class="btn btn-outline-light btn-auth" data-bs-toggle="modal" data-bs-target="#loginModal">
                <i class="fas fa-sign-in-alt"></i> Entrar
            </button>
            <button class="btn btn-primary btn-auth" data-bs-toggle="modal" data-bs-target="#registerModal">
                <i class="fas fa-user-plus"></i> Cadastrar
            </button>
        <?php endif; ?>
    </div>
<?php endif; ?>

<script>
function toggleLogin() {
    const currentState = <?php echo $isLoggedIn ? 'true' : 'false'; ?>;
    window.location.href = window.location.pathname + '?logged=' + (!currentState);
    return false;
}
</script> 