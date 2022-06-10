<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__)
;

$config = new PhpCsFixer\Config();
return $config->setRules([
        '@Symfony' => true,
        'concat_space' => false,
        'yoda_style' => false,
        'phpdoc_no_package' => false,
        'phpdoc_summary' => false,
    ])
    ->setFinder($finder)
;
