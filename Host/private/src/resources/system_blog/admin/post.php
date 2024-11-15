<?php require_once '../includes/cdn_links.php'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar Post - Sistema de Blog</title>
    <link href="<?php echo $cdn_links['bootstrap_css']; ?>" rel="stylesheet">
    <link href="<?php echo $cdn_links['font_awesome']; ?>" rel="stylesheet">
    <link href="<?php echo $css_paths['main']; ?>" rel="stylesheet">
    <link href="<?php echo $css_paths['admin']; ?>" rel="stylesheet">
</head>
<body>
    <?php require_once '../includes/auth_header.php'; ?>

    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <article class="card">
                    <div class="card-body">
                        <h1 class="card-title">Primeiro Post do Blog</h1>
                        
                        <div class="post-meta text-muted mb-4">
                            <i class="fas fa-calendar"></i> 21 de Março, 2024
                            <span class="mx-2">|</span>
                            <i class="fas fa-user"></i> Por Admin
                            <span class="mx-2">|</span>
                            <span class="badge bg-success">Publicado</span>
                        </div>

                        <div class="post-content">
                            <!-- Conteúdo do Post -->
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...</p>
                            
                            <h2>Subtítulo do Post</h2>
                            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat...</p>
                        </div>

                        <hr>

                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <a href="edit.php" class="btn btn-primary">
                                    <i class="fas fa-edit"></i> Editar
                                </a>
                                <a href="delete.php" class="btn btn-danger">
                                    <i class="fas fa-trash"></i> Excluir
                                </a>
                            </div>
                            <a href="index.php" class="btn btn-outline-secondary">
                                <i class="fas fa-arrow-left"></i> Voltar
                            </a>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>

    <?php require_once 'includes/dev_menu.php'; ?>
    <script src="<?php echo $cdn_links['popper_js']; ?>"></script>
    <script src="<?php echo $cdn_links['bootstrap_js']; ?>"></script>
</body>
</html>
