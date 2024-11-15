# Documentação dos Esquemas de Banco de Dados

## Visão Geral do Sistema
Este documento descreve os principais esquemas de banco de dados do sistema:
- bd_accesses: Gerenciamento de acessos
- db_permissionManagement: Gerenciamento de permissões
- db_visibility_public: Gerenciamento de visibilidade

## Configurações Comuns dos Esquemas
Todos os esquemas compartilham as seguintes configurações:
- **Codificação**: UTF-8MB4
- **Collation**: utf8mb4_unicode_ci
- **Engine**: InnoDB
- Timestamps automáticos para rastreamento de criação e atualização de registros

## Esquema: bd_accesses

### Descrição
Gerencia acessos de usuários, incluindo nomes de usuário, emails e senhas.

### Tabelas

#### 1. tb_accesses.accesses
Armazena informações de nomes de usuário.
| Coluna | Tipo | Restrições |
|--------|------|------------|
| id | INT | Auto incremento, Chave primária |
| userName | VARCHAR(50) | Não nulo, Único, Sem espaços |
| createdAt | DATETIME | Valor padrão: timestamp atual |
| updatedAt | DATETIME | Atualiza automaticamente |

- **Restrições de Caracteres no Username**
  - **Caracteres permitidos:** A-Z, a-z, 0-9, _ (underscore), # (hashtag)
  - **Implementação:** 
    - CHECK constraint: `^[A-Za-z0-9_#]+$`
    - Triggers: `no_invalid_chars_trigger_insert` e `no_invalid_chars_trigger_update`
  - **Mensagem de erro:** "O campo username só pode conter letras, números, underscore (_) e hashtag (#)"

#### 2. tb_accesses.emails
| Coluna | Tipo | Restrições |
|--------|------|------------|
| id | INT | Auto incremento, Chave primária |
| email | VARCHAR(100) | Não nulo, Único, Sem espaços |
| createdAt | DATETIME | Valor padrão: timestamp atual |
| updatedAt | DATETIME | Atualiza automaticamente |

#### 3. tb_accesses.passwords
| Coluna | Tipo | Restrições |
|--------|------|------------|
| id | INT | Auto incremento, Chave primária |
| password | VARCHAR(256) | Não nulo |
| createdAt | DATETIME | Valor padrão: timestamp atual |
| updatedAt | DATETIME | Atualiza automaticamente |

## Esquema: db_permissionManagement

### Descrição
Responsável pelo gerenciamento de permissões e níveis de acesso dos usuários.

### tb_users_accessLevels
| Coluna | Tipo | Descrição | Restrições |
|--------|------|-----------|------------|
| id | INT | Identificador único | Primary Key, Auto Increment |
| user_fk | INT | ID do usuário | Foreign Key → db_accesses.accesses(id), Not Null |
| accessLevel_fk | INT | Nível de acesso | Foreign Key → db_accessLevel.accessLevels(id), Not Null |
| createdAt | DATETIME | Data de criação | Default: CURRENT_TIMESTAMP |
| updatedAt | DATETIME | Última atualização | Default: CURRENT_TIMESTAMP, Auto update |

## Esquema: db_visibility_public

### Descrição
Gerencia configurações de visibilidade para diferentes aspectos dos dados dos usuários.

### tb_visibility
| Coluna | Tipo | Descrição |
|--------|------|-----------|
| id | int | Chave primária, auto incremento |
| visibility | varchar(50) | Nome único do nível de visibilidade |
| createdAt | datetime | Data de criação |
| updatedAt | datetime | Última atualização |

#### Níveis de Visibilidade Padrão
- only_me_and_admins
- only_me_and_coworkers
- only_me_and_friends
- only_me_and_followers
- only_me_and_followers_of_followers
- everyone

### Tabelas de Visibilidade
As seguintes tabelas compartilham a mesma estrutura:
- tb_users_visibility
- tb_emails_visibility
- tb_phones_visibility

Estrutura comum:
| Coluna | Tipo | Descrição |
|--------|------|-----------|
| id | int | Chave primária, auto incremento |
| user_fk | int | FK → db_accesses.accesses |
| visibility_fk | int | FK → tb_visibility |
| createdAt | datetime | Data de criação |
| updatedAt | datetime | Última atualização |

## Relacionamentos
- Todas as tabelas de visibilidade se relacionam com:
  - `db_accesses.accesses` através da coluna `user_fk`
  - `tb_visibility` através da coluna `visibility_fk`
