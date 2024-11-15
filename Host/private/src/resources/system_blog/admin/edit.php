<?php require_once '../includes/cdn_links.php'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Post - Sistema de Blog</title>
    <link href="<?php echo $cdn_links['bootstrap_css']; ?>" rel="stylesheet">
    <link href="<?php echo $cdn_links['font_awesome']; ?>" rel="stylesheet">
    <link href="<?php echo $css_paths['main']; ?>" rel="stylesheet">
    <link href="<?php echo $css_paths['admin']; ?>" rel="stylesheet">
</head>
<body>
    <?php require_once '../includes/auth_header.php'; ?>

    <div class="container mt-4">
        <div class="row">
            <!-- Editor Column -->
            <div class="col-md-8">
                <!-- Title Input -->
                <div class="mb-3">
                    <input type="text" class="form-control form-control-lg" value="Título do Post Existente">
                </div>

                <!-- Editor Toolbar -->
                <div class="editor-toolbar mb-2">
                    <div class="btn-group">
                        <button class="btn btn-light" title="Negrito">
                            <i class="fas fa-bold"></i>
                        </button>
                        <button class="btn btn-light" title="Itálico">
                            <i class="fas fa-italic"></i>
                        </button>
                        <button class="btn btn-light" title="Sublinhado">
                            <i class="fas fa-underline"></i>
                        </button>
                    </div>
                    
                    <div class="btn-group">
                        <button class="btn btn-light" title="Alinhamento à Esquerda">
                            <i class="fas fa-align-left"></i>
                        </button>
                        <button class="btn btn-light" title="Centralizar">
                            <i class="fas fa-align-center"></i>
                        </button>
                        <button class="btn btn-light" title="Alinhamento à Direita">
                            <i class="fas fa-align-right"></i>
                        </button>
                        <button class="btn btn-light" title="Justificar">
                            <i class="fas fa-align-justify"></i>
                        </button>
                    </div>

                    <div class="btn-group">
                        <input type="color" class="color-picker" title="Cor do Texto">
                    </div>
                </div>

                <!-- Editor Content -->
                <div class="editor-content" contenteditable="true">
                    Conteúdo existente do post...
                </div>
            </div>

            <!-- Settings Column -->
            <div class="col-md-4">
                <!-- Post Settings -->
                <div class="card mb-3">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Configurações do Post</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">URL do Post</label>
                            <input type="text" class="form-control" value="titulo-do-post-existente">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Descrição</label>
                            <textarea class="form-control" rows="3">Descrição existente do post...</textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Status</label>
                            <select class="form-select">
                                <option>Rascunho</option>
                                <option selected>Publicado</option>
                                <option>Agendado</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Categorias</label>
                            <select class="form-select" multiple>
                                <option selected>Tecnologia</option>
                                <option selected>Programação</option>
                                <option>Design</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tags</label>
                            <input type="text" class="form-control" value="tech, programming, tutorial">
                        </div>
                    </div>
                </div>

                <!-- Preview Settings -->
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Pré-visualização</h5>
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-tabs preview-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#desktop">
                                    <i class="fas fa-desktop"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tablet">
                                    <i class="fas fa-tablet-alt"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#mobile">
                                    <i class="fas fa-mobile-alt"></i>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="desktop">
                                <div class="preview-container">
                                    <iframe src="about:blank" class="preview-frame"></iframe>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tablet">
                                <div class="preview-container preview-tablet">
                                    <iframe src="about:blank" class="preview-frame"></iframe>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="mobile">
                                <div class="preview-container preview-mobile">
                                    <iframe src="about:blank" class="preview-frame"></iframe>
                                </div>
                            </div>
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
