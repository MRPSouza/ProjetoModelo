<?php require_once 'includes/cdn_links.php'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados da Pesquisa - Blog</title>
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
        <!-- Barra de Pesquisa -->
        <div class="row mb-4">
            <div class="col-md-8 mx-auto">
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Pesquisar posts..." 
                           value="<?php echo isset($_GET['q']) ? htmlspecialchars($_GET['q']) : ''; ?>">
                    <button class="btn btn-primary" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
            </div>
        </div>

        <!-- Filtros -->
        <div class="row mb-4">
            <div class="col-md-8 mx-auto">
                <div class="d-flex gap-2">
                    <div class="btn-group">
                        <button class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fas fa-filter"></i> Categoria
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Tecnologia</a></li>
                            <li><a class="dropdown-item" href="#">Programação</a></li>
                            <li><a class="dropdown-item" href="#">Mobile</a></li>
                        </ul>
                    </div>
                    <div class="btn-group">
                        <button class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fas fa-sort"></i> Ordenar por
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Mais Recentes</a></li>
                            <li><a class="dropdown-item" href="#">Mais Antigos</a></li>
                            <li><a class="dropdown-item" href="#">Mais Visualizados</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Resultados -->
        <div class="row">
            <div class="col-md-8 mx-auto">
                <!-- Post -->
                <article class="card mb-4">
                    <div class="card-body">
                        <h2 class="card-title h4">
                            <a href="post.php" class="text-decoration-none">Introdução ao PHP 8</a>
                        </h2>
                        <p class="card-text text-muted">
                            Descubra as novidades do PHP 8 e como elas podem melhorar seu código...
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="meta">
                                <span class="text-muted">
                                    <i class="fas fa-calendar"></i> 21 Mar, 2024
                                </span>
                                <span class="text-muted ms-3">
                                    <i class="fas fa-folder"></i> Programação
                                </span>
                            </div>
                            <a href="post.php" class="btn btn-sm btn-outline-primary">Ler mais</a>
                        </div>
                    </div>
                </article>

                <!-- Paginação -->
                <nav aria-label="Navegação dos resultados">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Anterior</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Próxima</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <?php require_once 'admin/includes/dev_menu.php'; ?>

    <script src="<?php echo $cdn_links['popper_js']; ?>"></script>
    <script src="<?php echo $cdn_links['bootstrap_js']; ?>"></script>
</body>
</html> 