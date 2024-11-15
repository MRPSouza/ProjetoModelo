/**
 * INSTRUÇÕES DE MANUTENÇÃO DO PROJETO
 * ==================================
 * @lastUpdate 2024-03-21
 * @author Claude
 * @version 1.0
 */

const PROJECT_GUIDELINES = {
    /**
     * REGRAS DE DOCUMENTAÇÃO
     * --------------------
     */
    documentation: {
        currentJs: {
            rules: [
                'Atualizar IMEDIATAMENTE após criar/modificar qualquer arquivo',
                'Manter estrutura de pastas sempre atualizada',
                'Usar ✓ para marcar itens implementados',
                'Incluir data da última atualização'
            ],
            sections: [
                'PROJECT STRUCTURE',
                'COMPLETED INTERFACES',
                'CURRENT FEATURES',
                'PENDING IMPLEMENTATION'
            ]
        },

        diaryJs: {
            rules: [
                'Registrar todas as alterações significativas',
                'Incluir data e descrição clara',
                'Agrupar alterações relacionadas',
                'Documentar próximos passos'
            ]
        },

        apiJs: {
            rules: [
                'Manter interfaces atualizadas',
                'Documentar novos tipos e componentes',
                'Incluir exemplos de uso quando necessário'
            ]
        }
    },

    /**
     * PADRÕES DE COMMITS
     * ----------------
     */
    commitPatterns: {
        feat: 'nova funcionalidade',
        fix: 'correção de bug',
        docs: 'atualização de documentação',
        style: 'formatação, semicolons, etc',
        refactor: 'refatoração de código',
        test: 'adição/modificação de testes'
    },

    /**
     * PADRÕES DE CÓDIGO
     * ---------------
     */
    codeStandards: {
        php: {
            autoload: 'PSR-4',
            style: 'PSR-12',
            requirements: [
                'Documentar funções e classes',
                'Usar type hints',
                'Seguir princípios SOLID'
            ]
        },
        javascript: {
            linting: 'ESLint padrão',
            documentation: 'JSDoc',
            practices: [
                'Usar ES6+',
                'Preferir const/let sobre var',
                'Implementar error handling'
            ]
        },
        css: {
            naming: 'BEM methodology',
            organization: [
                'Componentes isolados',
                'Variáveis para cores e medidas',
                'Mobile-first approach'
            ]
        }
    },

    /**
     * WORKFLOW DE DESENVOLVIMENTO
     * ------------------------
     */
    developmentWorkflow: [
        {
            step: 1,
            action: 'Verificar current.js para contexto',
            description: 'Entender o estado atual do projeto'
        },
        {
            step: 2,
            action: 'Implementar nova feature/correção',
            description: 'Seguir padrões de código definidos'
        },
        {
            step: 3,
            action: 'Atualizar documentação',
            description: 'current.js, diary.js, api.js conforme necessário'
        },
        {
            step: 4,
            action: 'Testar funcionalidade',
            description: 'Garantir que tudo funciona conforme esperado'
        },
        {
            step: 5,
            action: 'Commit com padrão adequado',
            description: 'Usar os padrões de commit definidos'
        }
    ],

    /**
     * MANUTENÇÃO DE DEPENDÊNCIAS
     * ------------------------
     */
    dependencies: {
        management: [
            'cdn_links.php para recursos externos',
            'Verificar atualizações periodicamente',
            'Testar compatibilidade'
        ]
    },

    /**
     * SEGURANÇA
     * --------
     */
    security: {
        requirements: [
            'Sanitizar inputs',
            'Validar dados',
            'Prevenir XSS',
            'Usar prepared statements'
        ],
        validation: {
            input: 'Validar todos os dados de entrada',
            output: 'Escapar dados na saída',
            files: 'Verificar uploads'
        }
    }
};

// Exportar para uso em outros módulos se necessário
if (typeof module !== 'undefined' && module.exports) {
    module.exports = PROJECT_GUIDELINES;
} 