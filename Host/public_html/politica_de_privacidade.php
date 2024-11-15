<?php   
    # Definir o nome da página atual dinamicamente
    $current_page = basename($_SERVER['PHP_SELF'], '.php');
    $current_page = ucfirst(str_replace('-', ' ', $current_page));
    
    # Definir a visibilidade da página
    require_once('../private/src/pages/config/page_visibility/page_public.php');

    # Incluir cabeçalho de segurança
    require_once '../private/src/pages/layouts/components/html-header/php/security_headers.php';

    # Incluir o cabeçalho HTML  
    require_once '../private/src/pages/layouts/components/html-head.php';

    # Incluir o cabeçalho
    require_once '../private/src/pages/layouts/header.php';
    
    # Incluir o conteúdo dinâmico
    echo '<main id="content-dynamic">' . "\n".'<!-- Início do conteúdo dinâmico -->'."\n";
    require_once '../private/src/pages/'.$current_page.'.php';
    echo "\n".'<!-- Fim do conteúdo dinâmico -->'."\n".'</main>';

    # Incluir o rodapé
    require_once '../private/src/pages/layouts/footer.php';

    # Incluir o rodapé HTML
    require_once '../private/src/pages/layouts/components/html-footer.php';
?>