<?php
require_once 'includes/cdn_links.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link href="<?php echo $cdn_links['bootstrap_css']; ?>" rel="stylesheet">
    <link href="<?php echo $cdn_links['font_awesome']; ?>" rel="stylesheet">
    <link href="<?php echo $css_paths['main']; ?>" rel="stylesheet">
    <link href="<?php echo $css_paths['public']; ?>" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Blog</a>
            <?php require_once 'includes/auth_header.php'; ?>
        </div>
    </nav>

    <!-- Modal de Login -->
    <div class="modal fade" id="loginModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Entrar</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Senha</label>
                            <input type="password" class="form-control" required>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="rememberMe">
                            <label class="form-check-label" for="rememberMe">Lembrar-me</label>
                        </div>
                        <button type="submit" class="btn btn-primary w-100" onclick="toggleLogin()">Entrar</button>
                    </form>
                    <div class="text-center mt-3">
                        <a href="#" class="text-decoration-none">Esqueceu a senha?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal de Cadastro -->
    <div class="modal fade" id="registerModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Cadastrar</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Nome</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Senha</label>
                            <input type="password" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Confirmar Senha</label>
                            <input type="password" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row">
            <!-- Blog Posts -->
            <div class="col-lg-8">
                <h1 class="blog-title">Blog</h1>

                <!-- Post -->
                <article class="blog-post">
                    <h2><a href="post.php">Primeiro Post do Blog</a></h2>
                    <div class="post-meta">
                        <i class="fas fa-calendar"></i> Publicado em 21/03/2024
                    </div>
                    <div class="post-excerpt">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...
                    </div>
                    <a href="post.php" class="read-more">
                        <i class="fas fa-arrow-right"></i> Ler mais
                    </a>
                </article>

                <!-- Post -->
                <article class="blog-post">
                    <h2><a href="post.php">Segundo Post do Blog</a></h2>
                    <div class="post-meta">
                        <i class="fas fa-calendar"></i> Publicado em 21/03/2024
                    </div>
                    <div class="post-excerpt">
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat...
                    </div>
                    <a href="post.php" class="read-more">
                        <i class="fas fa-arrow-right"></i> Ler mais
                    </a>
                </article>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <!-- Search -->
                <div class="search-box">
                    <h3><i class="fas fa-search"></i> Pesquisar</h3>
                    <input type="text" class="form-control" placeholder="Buscar posts...">
                </div>

                <!-- Recent Posts -->
                <div class="recent-posts">
                    <h3><i class="fas fa-clock"></i> Posts Recentes</h3>
                    <ul>
                        <li>
                            <i class="fas fa-file-alt"></i>
                            <a href="post.php">Primeiro Post do Blog</a>
                        </li>
                        <li>
                            <i class="fas fa-file-alt"></i>
                            <a href="post.php">Segundo Post do Blog</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script src="<?php echo $cdn_links['popper_js']; ?>"></script>
    <script src="<?php echo $cdn_links['bootstrap_js']; ?>"></script>
    <?php require_once 'admin/includes/dev_menu.php'; ?>
</body>
</html>
