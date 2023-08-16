<?php

use PhpCsFixer\RuleSet\Sets\PhpCsFixerSet;

$csFixerSet = new PhpCsFixerSet();

return (new PhpCsFixer\Config('standards'))
    ->setRiskyAllowed(true)
    ->setRules([
        '@PhpCsFixer' => true,
        '@Symfony:risky' => true,
        'blank_line_before_statement' => [
            // don't put lines between "case" statements
            'statements' => array_filter(
                $csFixerSet->getRules()['blank_line_before_statement']['statements'],
                static fn (string $statement): bool => $statement !== 'case',
            )
        ],
        'blank_line_between_import_groups' => false,
        'concat_space' => [
            'spacing' => 'one',
        ],
        'declare_strict_types' => true,
        'general_phpdoc_annotation_remove' => [
            'annotations' => [
                'author',
                'inheritdoc',
                'inheritDoc',
                'package',
                'subpackage',
                'version',
            ],
        ],
        'global_namespace_import' => [
            'import_classes' => true,
            'import_constants' => true,
            'import_functions' => true,
        ],
        'no_superfluous_phpdoc_tags' => true,
        'ordered_imports' => [
            'imports_order' => [
                'const',
                'class',
                'function',
            ],
        ],
        'phpdoc_add_missing_param_annotation' => false,
        'phpdoc_to_comment' => false,
        'php_unit_internal_class' => false,
        'php_unit_method_casing' => [
            'case' => 'snake_case',
        ],
        'php_unit_test_annotation' => [
            'style' => 'annotation',
        ],
        'php_unit_test_case_static_method_calls' => [
            'call_type' => 'self',
        ],
        'php_unit_test_class_requires_covers' => false,
        'yoda_style' => false,
    ])
;
