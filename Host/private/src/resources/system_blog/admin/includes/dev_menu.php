<?php
// Verifica o estado atual de login
$currentLoginState = isset($_GET['logged']) ? $_GET['logged'] === 'true' : false;
?>

<div class="dev-menu">
    <button class="btn-dev" onclick="toggleDevMenu()" title="Menu do Desenvolvedor">
        <i class="fas fa-tools"></i>
    </button>
    
    <div class="dev-links glass-effect" id="devLinks">
        <div class="dev-header">
            <i class="fas fa-code"></i>
            <span>Dev Tools</span>
            <small class="ms-auto text-muted">Salve Matheus! 🚀</small>
        </div>

        <!-- Estado de Login -->
        <div class="menu-section">
            <div class="section-title">
                <i class="fas fa-key"></i>
                <span>Estado de Login</span>
            </div>
            <div class="login-toggle">
                <label class="switch">
                    <input type="checkbox" id="loginToggle" <?php echo $currentLoginState ? 'checked' : ''; ?>>
                    <span class="slider"></span>
                    <span class="labels" data-on="Logado" data-off="Deslogado"></span>
                </label>
            </div>
        </div>

        <!-- Área Pública -->
        <div class="menu-section">
            <div class="section-title expandable" onclick="toggleSection(this)" data-section="public">
                <i class="fas fa-globe"></i>
                <span>Área Pública</span>
                <i class="fas fa-chevron-down ms-auto"></i>
            </div>
            <div class="section-content">
                <a href="/ProjetoModelo/Host/private/src/resources/system_blog/">
                    <i class="fas fa-home"></i>
                    <span>Home</span>
                    <div class="hover-effect"></div>
                </a>
                <a href="/ProjetoModelo/Host/private/src/resources/system_blog/post.php">
                    <i class="fas fa-file-alt"></i>
                    <span>Post</span>
                    <div class="hover-effect"></div>
                </a>
                <a href="/ProjetoModelo/Host/private/src/resources/system_blog/categories.php">
                    <i class="fas fa-tags"></i>
                    <span>Categorias</span>
                    <div class="hover-effect"></div>
                </a>
                <a href="/ProjetoModelo/Host/private/src/resources/system_blog/search.php">
                    <i class="fas fa-search"></i>
                    <span>Pesquisa</span>
                    <div class="hover-effect"></div>
                </a>
            </div>
        </div>

        <!-- Área Admin -->
        <div class="menu-section">
            <div class="section-title expandable" onclick="toggleSection(this)" data-section="admin">
                <i class="fas fa-lock"></i>
                <span>Área Admin</span>
                <i class="fas fa-chevron-down ms-auto"></i>
            </div>
            <div class="section-content">
                <a href="/ProjetoModelo/Host/private/src/resources/system_blog/admin/">
                    <i class="fas fa-list"></i>
                    <span>Dashboard</span>
                    <div class="hover-effect"></div>
                </a>
                <a href="/ProjetoModelo/Host/private/src/resources/system_blog/admin/create.php">
                    <i class="fas fa-plus-circle"></i>
                    <span>Novo Post</span>
                    <div class="hover-effect"></div>
                </a>
                <a href="/ProjetoModelo/Host/private/src/resources/system_blog/admin/edit.php">
                    <i class="fas fa-edit"></i>
                    <span>Editar Post</span>
                    <div class="hover-effect"></div>
                </a>
                <a href="/ProjetoModelo/Host/private/src/resources/system_blog/admin/delete.php">
                    <i class="fas fa-trash-alt"></i>
                    <span>Excluir Post</span>
                    <div class="hover-effect"></div>
                </a>
            </div>
        </div>

        <!-- Docs -->
        <div class="menu-section">
            <div class="section-title expandable" onclick="toggleSection(this)" data-section="docs">
                <i class="fas fa-book"></i>
                <span>Documentação</span>
                <i class="fas fa-chevron-down ms-auto"></i>
            </div>
            <div class="section-content">
                <a href="/ProjetoModelo/Host/private/src/resources/system_blog/docs/diary.js">
                    <i class="fas fa-journal-whills"></i>
                    <span>Diário</span>
                    <div class="hover-effect"></div>
                </a>
                <a href="/ProjetoModelo/Host/private/src/resources/system_blog/docs/current.js">
                    <i class="fas fa-info-circle"></i>
                    <span>Estado Atual</span>
                    <div class="hover-effect"></div>
                </a>
                <a href="/ProjetoModelo/Host/private/src/resources/system_blog/docs/api.js">
                    <i class="fas fa-code"></i>
                    <span>API</span>
                    <div class="hover-effect"></div>
                </a>
            </div>
        </div>
    </div>
</div>

<script>
const STORAGE_KEY = 'devMenuState';
let menuState;

// Carrega estado imediatamente (não espera DOM)
(function initState() {
    try {
        menuState = JSON.parse(localStorage.getItem(STORAGE_KEY)) || {
            activeSection: null,
            menuOpen: false,
            loginState: true
        };
    } catch {
        menuState = {
            activeSection: null,
            menuOpen: false,
            loginState: true
        };
    }
})();

// Salva estado (simples e confiável)
function saveMenuState(state) {
    localStorage.setItem(STORAGE_KEY, JSON.stringify(state));
}

// Inicialização
document.addEventListener('DOMContentLoaded', function() {
    // 1. Restaura estado visual do menu
    if (menuState.menuOpen) {
        document.getElementById('devLinks').classList.add('show');
    }

    // 2. Restaura seção ativa
    if (menuState.activeSection) {
        const section = document.querySelector(`[data-section="${menuState.activeSection}"]`);
        if (section) {
            section.closest('.menu-section').classList.add('expanded');
        }
    }

    // 3. Verifica área administrativa
    const isAdmin = window.location.pathname.includes('/admin/');

    // 4. Se estiver deslogado e for área admin, redireciona
    if (!menuState.loginState && isAdmin) {
        window.location.href = '/ProjetoModelo/Host/private/src/resources/system_blog/?logged=false';
        return;
    }

    // 5. Atualiza URL com estado atual (com reload)
    const urlParams = new URLSearchParams(window.location.search);
    const urlLoginState = urlParams.get('logged');
    
    if (urlLoginState !== (menuState.loginState ? 'true' : 'false')) {
        window.location.href = window.location.pathname + '?logged=' + menuState.loginState;
        return;
    }

    // 6. Atualiza checkbox com estado atual
    const loginToggle = document.getElementById('loginToggle');
    if (loginToggle) {
        loginToggle.checked = menuState.loginState;
    }
});

// Toggle do menu
function toggleDevMenu() {
    const devLinks = document.getElementById('devLinks');
    menuState.menuOpen = devLinks.classList.toggle('show');
    saveMenuState(menuState);
}

// Toggle de seção
function toggleSection(element) {
    const sections = document.querySelectorAll('.menu-section');
    const clickedSection = element.closest('.menu-section');
    const sectionId = element.getAttribute('data-section');

    sections.forEach(section => {
        if (section !== clickedSection) {
            section.classList.remove('expanded');
        }
    });

    const isExpanded = clickedSection.classList.toggle('expanded');
    menuState.activeSection = isExpanded ? sectionId : null;
    saveMenuState(menuState);
}

// Toggle de login (versão que funciona)
document.getElementById('loginToggle').addEventListener('change', function() {
    const newState = this.checked;
    menuState.loginState = newState;
    saveMenuState(menuState);

    // Atualiza URL com reload (mais lento mas confiável)
    window.location.href = window.location.pathname + '?logged=' + newState;
});

// Click outside
document.addEventListener('click', function(event) {
    const devMenu = document.querySelector('.dev-menu');
    const devLinks = document.getElementById('devLinks');
    
    if (!devMenu.contains(event.target) && devLinks.classList.contains('show')) {
        devLinks.classList.remove('show');
        menuState.menuOpen = false;
        saveMenuState(menuState);
    }
});
</script> 