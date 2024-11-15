<?php require_once 'includes/cdn_links.php'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias - Blog</title>
    <link href="<?php echo $cdn_links['bootstrap_css']; ?>" rel="stylesheet">
    <link href="<?php echo $cdn_links['font_awesome']; ?>" rel="stylesheet">
    <link href="<?php echo $css_paths['main']; ?>" rel="stylesheet">
</head>
<body>
    <!-- Navbar com Auth -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">Blog</a>
            <?php require_once 'includes/auth_header.php'; ?>
        </div>
    </nav>

    <div class="container mt-4">
        <h1 class="mb-4">Categorias</h1>
        
        <!-- Lista de Categorias -->
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            <i class="fas fa-code text-primary"></i>
                            Tecnologia
                        </h5>
                        <p class="card-text text-muted">42 posts</p>
                        <a href="search.php?category=tecnologia" class="btn btn-outline-primary">Ver Posts</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            <i class="fas fa-laptop text-success"></i>
                            Programação
                        </h5>
                        <p class="card-text text-muted">28 posts</p>
                        <a href="search.php?category=programacao" class="btn btn-outline-success">Ver Posts</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            <i class="fas fa-mobile-alt text-info"></i>
                            Mobile
                        </h5>
                        <p class="card-text text-muted">15 posts</p>
                        <a href="search.php?category=mobile" class="btn btn-outline-info">Ver Posts</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require_once 'admin/includes/dev_menu.php'; ?>

    <script src="<?php echo $cdn_links['popper_js']; ?>"></script>
    <script src="<?php echo $cdn_links['bootstrap_js']; ?>"></script>
</body>
</html> 