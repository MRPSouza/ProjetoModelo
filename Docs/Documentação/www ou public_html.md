# Documentação da Pasta Pública (public_html)

## Estrutura da Pasta
| Arquivo/Diretório | Descrição |
|-------------------|-----------|
| css/ | Arquivos de estilo CSS |
| js/ | Arquivos JavaScript |
| img/ | Imagens e recursos visuais |
| .htaccess | Configurações do servidor Apache |
| .htpasswd | Arquivo de senhas para autenticação |
| sitemap.xml | Mapa do site principal |
| sitemap-pages.xml | Mapa das páginas estáticas |
| sitemap-posts.xml | Mapa das postagens/artigos |
| robots.txt | Instruções para crawlers |


## Arquivos PHP

### Estrutura Padrão
Todos os arquivos PHP na raiz seguem uma estrutura padronizada que inclui:

1. Definição da página atual
2. Configuração de visibilidade
3. Cabeçalhos de segurança
4. Estrutura HTML dinâmica
5. Inclusão de conteúdo específico da página

### Exemplo de Estrutura:

php
<?php
# Definição da página atual
$current_page = basename($SERVER['PHP_SELF'], '.php');
$current_page = ucfirst(str_replace('-', ' ', $current_page));
# Inclusões obrigatórias
require_once('../private/src/pages/config/page_visibility/page_public.php');
require_once '../private/src/pages/layouts/components/html-header/php/security_headers.php';
require_once '../private/src/pages/layouts/components/html-head.php';
require_once '../private/src/pages/layouts/header.php';
# Conteúdo dinâmico
echo '<main id="content-dynamic">';
require_once '../private/src/pages/'.$current_page.'.php';
echo '</main>';
# Rodapé
require_once '../private/src/pages/layouts/footer.php';
require_once '../private/src/pages/layouts/components/html-footer.php';
?>


## Arquivos de Configuração

### .htaccess
- Controla configurações do servidor Apache
- Define regras de reescrita de URL
- Configura cabeçalhos de segurança
- Gerencia cache e compressão

### robots.txt
- Define diretrizes para crawlers de mecanismos de busca
- Especifica quais áreas do site podem ser indexadas
- Lista de diretórios/arquivos restritos

### Sitemaps XML
- **sitemap.xml**: Índice principal que referencia outros sitemaps
- **sitemap-pages.xml**: Mapa das páginas estáticas do site
- **sitemap-posts.xml**: Mapa das postagens/artigos dinâmicos

## Diretórios de Recursos

### css/
- Arquivos de estilo compilados
- Folhas de estilo específicas por página
- Frameworks CSS (se aplicável)

### js/
- Scripts JavaScript
- Bibliotecas de terceiros
- Arquivos de configuração JS

### img/
- Imagens otimizadas do site
- Ícones e logos
- Recursos visuais compartilhados

## Observações Importantes
1. Todo o conteúdo dinâmico é carregado da pasta `private/src/pages/`
2. Os arquivos seguem uma estrutura modular para facilitar manutenção
3. Cabeçalhos de segurança são implementados em todas as páginas
4. A visibilidade das páginas é controlada através de configurações específicas