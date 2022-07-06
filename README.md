# Very short description of the package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/shawnveltman/phpcsfixer-helper.svg?style=flat-square)](https://packagist.org/packages/shawnveltman/phpcsfixer-helper)
[![Total Downloads](https://img.shields.io/packagist/dt/shawnveltman/phpcsfixer-helper.svg?style=flat-square)](https://packagist.org/packages/shawnveltman/phpcsfixer-helper)
![GitHub Actions](https://github.com/shawnveltman/phpcsfixer-helper/actions/workflows/main.yml/badge.svg)

This allows our team to share the same code styling, to reduce the amount of time we need to discuss those things, as well as sorting through changes between commits that are only formating related.

## Prerequisites

If you don't already have PhpCsFixer and Husky installed, then copy & paste below into terminal:

```php
composer require friendsofphp/php-cs-fixer --dev
npm i -D husky lint-staged@^11.x.x
npm install --save-dev @shufo/prettier-plugin-blade prettier
npx husky install
npx husky add .husky/pre-commit "npx lint-staged"
```

Then, add this line to package.json (this assumes your Php CS Fixer file is called .php-cs-fixer.php, change as needed):

```php 
"lint-staged": {
    "*.php": "php ./vendor/bin/php-cs-fixer fix --config .php-cs-fixer.php",
    "*.blade.php": "node_modules/.bin/prettier --write resources/**/*.blade.php"
  },
```

## Installation

You can install the package via composer:

```bash
composer require shawnveltman/phpcsfixer-helper --dev
```

Once you've installed it, create a new file called .php-cs-fixer.php in your base directory.

## Update .gitignore

Add .php-cs-fixer.cache to your .gitignore file!

## Usage

After installing the package, navigate to your PHP CS Fixer file (ie .php-cs-fixer.php), and replace the existing $rules
array with:

```php
use Shawnveltman\PhpcsfixerHelper\PhpcsfixerHelper;

$helper = new PhpcsfixerHelper();
$rules = $helper->get_style_rules();
```

## Fixer File

If you don't have a fixer file, you can use the template below to your .php-cs-fixer.php file:

```php
<?php

use PhpCsFixer\Finder;
use Shawnveltman\PhpcsfixerHelper\PhpcsfixerHelper;

$helper = new PhpcsfixerHelper();
$rules = $helper->get_style_rules();

$finder = Finder::create()
    ->notPath('bootstrap')
    ->notPath('storage')
    ->notPath('vendor')
    ->notPath('coverage-report')
    ->in(getcwd())
    ->name('*.php')
    ->notName('*.blade.php')
    ->notName('index.php')
    ->notName('server.php')
    ->ignoreDotFiles(true)
    ->ignoreVCS(true);

$config = new PhpCsFixer\Config();

return $config->setFinder($finder)
    ->setRules($rules)
    ->setRiskyAllowed(true)
    ->setUsingCache(true);
 
```

### Testing

```bash
composer test
```

## Common Issues / Troubleshooting
If you run the above steps and it is not automatically running on commit, there may be different npm versions at play in your team.

Step 1 is to delete your node_modules directory, and package-lock.json files, and then run npm install.

Step 2 is to ensure all team members are using the same version of npm.

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email shawn.veltman@gmail.com instead of using the issue tracker.

## Credits

- [Shawn Veltman](https://github.com/shawnveltman)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
