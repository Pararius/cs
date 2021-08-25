# Code style configurations

This repository contains configurations to set up and maintain code style across Pararius repositories.

## Installation & usage

Add it to your dev requirements. This will install php-cs-fixer as well.

```shell
composer require --dev pararius/cs
```

Now create/update your cs-fixer configuration file like this:

```php
# .php-cs-fixer.dist.php
$config = require __DIR__ . '/vendor/pararius/cs/php-cs-fixer.ta.php';
$config->getFinder()->in([
    __DIR__ . '/src',
    __DIR__ . '/tests',
]);

return $config;
```
