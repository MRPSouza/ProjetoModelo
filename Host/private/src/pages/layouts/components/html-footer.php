<?php
# Chamadas dos scripts externos
require_once '../private/src/pages/layouts/components/html-footer/php/external_links.php';

# Inclusão dos scripts internos
echo '<script>';
require_once ('../private/src/pages/layouts/components/html-footer/js/content_dynamic.js');
require_once ('../private/src/pages/layouts/components/html-footer/js/tooltip_popover.js');
require_once ('../private/src/pages/layouts/components/html-footer/js/resize_body_bootstrap.js');
require_once ('../private/src/pages/layouts/components/html-footer/js/restriction_against_iframe.js');
echo '</script>';

# Fim do arquivo html
echo '</body>';
echo '</html>';
?>

