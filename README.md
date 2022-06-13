# Moovly PHP Codestyle Standards and configs

## PHPCS

This code works with [squizlabs/php_codesniffer](https://github.com/squizlabs/PHP_CodeSniffer)
and checks code against the coding standards used in CakePHP.

This sniffer package mainly follows [Symfony](https://symfony.com/doc/current/contributing/code/standards.html) with some
specific rules excluded.

### Installation

You could install this codesniffer with composer:

	composer require --dev moovly/php-codestyle-configs
	vendor/bin/phpcs --config-set installed_paths /path/to/your/app/vendor/moovly/php-codestyle-configs

The second command lets `phpcs` know where to find your new sniffs. Ensure that
you do not overwrite any existing `installed_paths` value.

This is optional, since we have the [`dealerdirect/phpcodesniffer-composer-installer`](https://github.com/Dealerdirect/phpcodesniffer-composer-installer)
composer package installed, which will handle configuring the `phpcs` `installed_paths` for you.

### Usage

:warning: Warning when these sniffs are installed with composer, ensure that
you have configured the CodeSniffer `installed_paths` setting.

Depending on how you installed the code sniffer changes how you run it. If you have
installed phpcs, and this package with PEAR, you can do the following:

	./vendor/bin/phpcs --colors -p -s --standard=Moovly src

## Phpstan

    phpstan.neon

## Phpmd

    phpmd_ruleset.xml

## Php-cs-fixer

    .php-cs-fixer.dist.php

## Grumphp

```
grumphp:
    tasks:
      git_blacklist:
        regexp_type: E
        keywords:
          - "die\\("
          - "var_dump\\("
          - "exit;"
          - "\\$\\$"
          - "call_user_func"
          - "call_user_method"
      composer:
      yamllint:
      phpcs:
         standard: Moovly
         ignore_patterns:
           - "*/tests/*"
           - "*/var/*"
      phpstan:
        ignore_patterns: ['tests', 'var']
        memory_limit: "-1"
        configuration: "./vendor/moovly/php-codestyle-configs/phpstan.neon"
      phpcpd:
        directory: ['src']
      phpcsfixer:
        config: './vendor/moovly/php-codestyle-configs/.php-cs-fixer.dist.php'
      phpmd:
        exclude: ['tests', 'var']
        report_format: ansi
        ruleset: ['./vendor/moovly/php-codestyle-configs/phpmd_ruleset.xml']
```
