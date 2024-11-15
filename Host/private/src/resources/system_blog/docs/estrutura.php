<?php
/*
ESTRUTURA DO PROJETO BLOG
========================

DIRETÓRIOS E ARQUIVOS
--------------------
/admin/
    /includes/
        dev_menu.php
        header.php
        footer.php
    create.php
    edit.php
    delete.php
    index.php

/includes/
    config.php      - Configurações globais e constantes
    database.php    - Conexão PDO com o banco
    cdn_links.php   - Links CDN centralizados

/src/
    /Models/
        Post.php    - Model para manipulação de posts

/docs/
    diario.txt     - Registro cronológico do desenvolvimento
    estrutura.txt  - Este arquivo (estrutura do projeto)
    database.txt   - Estrutura do banco de dados
    api.txt        - Documentação das funções e APIs

index.php          - Página principal do blog


BANCO DE DADOS
-------------
Tabela: blog_posts
    id                  - INT PK AUTO_INCREMENT
    title               - VARCHAR(255)
    content            - TEXT
    title_styles       - TEXT
    background_styles  - TEXT
    status             - ENUM('draft','published','pending_review','pending_moderation')
    created_at         - DATETIME
    updated_at         - DATETIME

Índices:
    - PRIMARY KEY (id)
    - INDEX (status)
    - INDEX (created_at)


FUNÇÕES PRINCIPAIS
----------------
Model Post:
    - getAllPosts()
    - createPost($data)
    - updatePost($id, $data)
    - deletePost($id)
    - getPostById($id)

Funções Globais:
    - formatDate($date)
    - getStatusLabel($status)
    - getStatusBadgeClass($status)


CONSTANTES
---------
DEV_MODE         - Boolean para modo desenvolvimento
DB_HOST         - Host do banco de dados
DB_NAME         - Nome do banco de dados
DB_USER         - Usuário do banco
DB_PASS         - Senha do banco


PRÓXIMAS IMPLEMENTAÇÕES
---------------------
1. Sistema de autenticação
2. Gerenciamento de usuários
3. Sistema de comentários
4. Tags e categorias
5. Sistema de busca 
*/