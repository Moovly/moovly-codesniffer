<?php

$finder = PhpCsFixer\Finder::create()
    ->in(getcwd().'/src')
;

$ruleSet = new PhpCsFixer\RuleSet\Sets\PSR12Set();
$config = new PhpCsFixer\Config();
$config->setRules($ruleSet->getRules());
$config->setRules([
    '@Symfony' => true,
    'concat_space' => ['spacing' => 'one'],
    'yoda_style' => [
        'equal' => false,
        'identical' => false,
        'less_and_greater' => false,
    ],    'phpdoc_no_package' => false,
    'phpdoc_summary' => false,
    'ordered_imports' => ['sort_algorithm' => 'length'],
])
->setFinder($finder);

return $config;
