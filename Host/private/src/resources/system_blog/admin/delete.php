<?php require_once '../includes/cdn_links.php'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Post - Sistema de Blog</title>
    <link href="<?php echo $cdn_links['bootstrap_css']; ?>" rel="stylesheet">
    <link href="<?php echo $cdn_links['font_awesome']; ?>" rel="stylesheet">
    <link href="<?php echo $css_paths['main']; ?>" rel="stylesheet">
    <link href="<?php echo $css_paths['admin']; ?>" rel="stylesheet">
</head>
<body>
    <?php require_once '../includes/auth_header.php'; ?>

    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-danger">
                    <div class="card-header bg-danger text-white">
                        <h5 class="mb-0">Confirmar Exclusão</h5>
                    </div>
                    <div class="card-body">
                        <div class="text-center mb-4">
                            <i class="fas fa-exclamation-triangle text-danger" style="font-size: 48px;"></i>
                        </div>
                        
                        <h4 class="text-center mb-4">Tem certeza que deseja excluir este post?</h4>
                        
                        <div class="alert alert-warning">
                            <strong>Título:</strong> Primeiro Post do Blog
                            <br>
                            <strong>URL:</strong> /blog/primeiro-post-do-blog
                            <br>
                            <strong>Status:</strong> <span class="badge bg-success">Publicado</span>
                            <br>
                            <strong>Data de Publicação:</strong> 21/03/2024
                        </div>
                        
                        <div class="alert alert-danger">
                            <i class="fas fa-info-circle"></i> Esta ação não pode ser desfeita!
                        </div>

                        <div class="d-flex justify-content-center gap-2">
                            <a href="index.php" class="btn btn-secondary">
                                <i class="fas fa-times"></i> Cancelar
                            </a>
                            <button type="button" class="btn btn-danger">
                                <i class="fas fa-trash"></i> Confirmar Exclusão
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require_once 'includes/dev_menu.php'; ?>

    <script src="<?php echo $cdn_links['popper_js']; ?>"></script>
    <script src="<?php echo $cdn_links['bootstrap_js']; ?>"></script>
</body>
</html>
