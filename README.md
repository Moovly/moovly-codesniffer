# Moovly Code Sniffer

This code works with [squizlabs/php_codesniffer](https://github.com/squizlabs/PHP_CodeSniffer)
and checks code against the coding standards used in CakePHP.

This sniffer package mainly follows [Symfony](https://symfony.com/doc/current/contributing/code/standards.html) with some
specific rules excluded.

## Installation

You should install this codesniffer with composer:

	composer require --dev moovly/moovly-codesniffer
	vendor/bin/phpcs --config-set installed_paths /path/to/your/app/vendor/moovly/moovly-codesniffer

The second command lets `phpcs` know where to find your new sniffs. Ensure that
you do not overwrite any existing `installed_paths` value. Alternatively, install
the [`dealerdirect/phpcodesniffer-composer-installer`](https://github.com/Dealerdirect/phpcodesniffer-composer-installer)
composer package which will handle configuring the `phpcs` `installed_paths` for you.

## Usage

:warning: Warning when these sniffs are installed with composer, ensure that
you have configured the CodeSniffer `installed_paths` setting.

Depending on how you installed the code sniffer changes how you run it. If you have
installed phpcs, and this package with PEAR, you can do the following:

	vendor/bin/phpcs --colors -p -s --standard=Moovly /path/to/code/

