<?php

$finder = (new PhpCsFixer\Finder())
    ->in(__DIR__)
    ->exclude(['bootstrap', 'storage', 'vendor'])
    ->name('*.php')
    ->ignoreDotFiles(true)
    ->ignoreVCS(true);

return (new PhpCsFixer\Config())
    ->setRules([
        '@PSR2' => true,
        'array_indentation' => true,
        'array_syntax' => ['syntax' => 'short'],
        'cast_spaces' => ['space' => 'single'],
        'constant_case' => ['case' => 'lower'],
        'integer_literal_case' => true,
        'lowercase_cast' => true,
        'lowercase_keywords' => true,
        'lowercase_static_reference' => true,
        'magic_constant_casing' => true,
        'magic_method_casing' => true,
        'native_function_casing' => true,
        'no_leading_import_slash' => true,
        'no_unused_imports' => true,
        'ordered_imports' => ['sort_algorithm' => 'length'],
        'switch_case_semicolon_to_colon' => true,
    ])
    ->setFinder($finder)
    ->setIndent("\t")
    ->setLineEnding("\n");
