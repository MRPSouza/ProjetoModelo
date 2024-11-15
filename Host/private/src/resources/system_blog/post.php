<?php 
require_once 'includes/cdn_links.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeiro Post do Blog - Sistema de Blog</title>
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

    <div class="container mt-4">
        <div class="row">
            <!-- Conteúdo Principal -->
            <div class="col-lg-8">
                <!-- Artigo -->
                <article class="card mb-4">
                    <div class="card-body">
                        <h1 class="card-title mb-3">Primeiro Post do Blog</h1>
                        
                        <!-- Meta Informações -->
                        <div class="post-meta mb-4">
                            <span><i class="fas fa-calendar"></i> 21 de Março, 2024</span>
                            <span class="mx-2">|</span>
                            <span><i class="fas fa-user"></i> Por Admin</span>
                            <span class="mx-2">|</span>
                            <span><i class="fas fa-eye"></i> 123 visualizações</span>
                        </div>

                        <!-- Conteúdo -->
                        <div class="post-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                            <h2 class="mt-4 mb-3">Subtítulo do Post</h2>
                            
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                        </div>

                        <!-- Tags -->
                        <div class="mt-4">
                            <i class="fas fa-tags"></i>
                            <a href="#" class="badge bg-secondary text-decoration-none">tecnologia</a>
                            <a href="#" class="badge bg-secondary text-decoration-none">programação</a>
                        </div>

                        <!-- Compartilhar -->
                        <div class="share-buttons mt-4">
                            <button class="btn btn-primary">
                                <i class="fab fa-facebook-f"></i> Compartilhar
                            </button>
                            <button class="btn btn-info text-white">
                                <i class="fab fa-twitter"></i> Tweetar
                            </button>
                            <button class="btn btn-success">
                                <i class="fab fa-whatsapp"></i> WhatsApp
                            </button>
                        </div>
                    </div>
                </article>

                <!-- Comentários -->
                <section class="comments-section">
                    <h3>Comentários (2)</h3>
                    
                    <!-- Lista de Comentários -->
                    <div class="comments-list mt-4">
                        <!-- ... comentários ... -->
                    </div>

                    <!-- Formulário de Comentário -->
                    <div class="comment-form">
                        <h4>Deixe seu comentário</h4>
                        <form>
                            <div class="mb-3">
                                <textarea class="form-control" rows="4" placeholder="Seu comentário..."></textarea>
                            </div>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Seu nome">
                                </div>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" placeholder="Seu email">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Enviar Comentário</button>
                        </form>
                    </div>
                </section>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <!-- Sobre o Autor -->
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="mb-0">Sobre o Autor</h5>
                    </div>
                    <div class="card-body">
                        <div class="text-center mb-3">
                            <i class="fas fa-user-circle fa-4x text-secondary"></i>
                        </div>
                        <h6 class="text-center">Admin</h6>
                        <p class="text-center mb-0">Desenvolvedor e escritor técnico apaixonado por tecnologia.</p>
                    </div>
                </div>

                <!-- Posts Relacionados -->
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="mb-0">Posts Relacionados</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <a href="#" class="text-decoration-none text-dark">
                                    <h6>Segundo Post do Blog</h6>
                                    <p class="text-muted small mb-0">21 de Março, 2024</p>
                                </a>
                            </div>
                            <div class="col-12">
                                <a href="#" class="text-decoration-none text-dark">
                                    <h6>Post Agendado</h6>
                                    <p class="text-muted small mb-0">22 de Março, 2024</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Newsletter -->
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Newsletter</h5>
                    </div>
                    <div class="card-body">
                        <p>Receba nossas atualizações por email:</p>
                        <form>
                            <div class="input-group">
                                <input type="email" class="form-control" placeholder="Seu email">
                                <button class="btn btn-primary" type="submit">Inscrever</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require_once 'admin/includes/dev_menu.php'; ?>

    <script src="<?php echo $cdn_links['popper_js']; ?>"></script>
    <script src="<?php echo $cdn_links['bootstrap_js']; ?>"></script>
    <?php require_once 'includes/auth_modals.php'; ?>
</body>
</html>
