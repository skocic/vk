# VK SDK for PHP

[![Build Status](https://img.shields.io/travis/facebook/php-graph-sdk/5.4.svg)](https://travis-ci.org/sasakocic/vk)
[![Latest Stable Version](http://img.shields.io/badge/Latest%20Stable-5.4.4-blue.svg)](https://packagist.org/packages/sasakocic/vk)
[![Code Style Status](https://styleci.io/repos/83059149/shield)](https://styleci.io/repos/83059149)


This repository contains the open source PHP SDK that allows you to access the VKontakte Platform from your PHP app.


## Installation

The VK PHP SDK can be installed with [Composer](https://getcomposer.org/). Run this command:

```sh
composer require skocic/vk
```

## Usage

> **Note:** This version of the VK SDK for PHP requires PHP 5.4 or greater.

Simple GET example of a user's profile.

```php
$fb = new \Vk([
		'client_id' => '{app-id}',
		'client_secret' => '{app-secret}',
		'redirect_uri' => '{redirect-url}',
		'scope' => ['email', 'offline'],
]);
```

Complete documentation, installation instructions, and examples are available [here](docs/).


## Tests

1. [Composer](https://getcomposer.org/) is a prerequisite for running the tests. Install composer globally, then run `composer install` to install required files.
2. Create a test app on [Facebook Developers](https://developers.facebook.com), then create `tests/VkTestCredentials.php` from `tests/VkTestCredentials.php.dist` and edit it to add your credentials.
3. The tests can be executed by running this command from the root directory:

```bash
$ ./vendor/bin/phpunit
```

By default the tests will send live HTTP requests to the Graph API. If you are without an internet connection you can skip these tests by excluding the `integration` group.

```bash
$ ./vendor/bin/phpunit --exclude-group integration
```


## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.


## License

Please see the [license file](LICENSE) for more information.
