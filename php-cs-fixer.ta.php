<?php

return (new PhpCsFixer\Config('standards'))
    ->setFinder(
        (new PhpCsFixer\Finder())->in([
            __DIR__ . '/src',
            __DIR__ . '/tests',
        ])
    )
    ->setRiskyAllowed(true)
    ->setRules([
        '@PhpCsFixer' => true,
        '@Symfony:risky' => true,
        '@PHP80Migration' => true,
        '@PHP80Migration:risky' => true,
        '@PHPUnit84Migration:risky' => true,
        'concat_space' => [
            'spacing' => 'one',
        ],
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
        ],
        'no_superfluous_phpdoc_tags' => true,
        'phpdoc_add_missing_param_annotation' => false,
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
