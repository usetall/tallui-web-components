<div align="center">

<img src="https://raw.githubusercontent.com/usetall/tallui-art/main/logo/logo-gh.png" />

<br><br>

[![Latest Version on Packagist](https://img.shields.io/packagist/v/usetall/tallui-web-components.svg?style=flat-square)](https://packagist.org/packages/usetall/tallui-web-components) [![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/usetall/tallui-web-components/run-tests?label=tests&style=flat-square)](https://github.com/usetall/tallui-web-components/actions?query=workflow%3ATests+branch%3Amaster) [![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/usetall/tallui-web-components/Check%20&%20fix%20styling?label=code%20style&style=flat-square)](https://github.com/usetall/tallui-web-components/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amaster) [![Total Downloads](https://img.shields.io/packagist/dt/usetall/tallui-web-components.svg?style=flat-square)](https://packagist.org/packages/usetall/tallui-web-components)

</div>

# TallUI Web Components
W-I-P - renderless UI components for your next Laravel website

## Installation

You can install the package via composer:

```bash
composer require usetall/tallui-web-components
```

~~You can publish and run the migrations with:~~

```bash
php artisan vendor:publish --provider="TallUI\TalluiWebComponentsServiceProvider" --tag="tallui-web-components-migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="TallUI\TalluiWebComponentsServiceProvider" --tag="tallui-web-components-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$skeleton = new Spatie\Skeleton();
echo $skeleton->echoPhrase('Hello, Spatie!');


$tallui_web_components = new Tallui\TalluiWebComponents();
echo $tallui_web_components->echoPhrase('Hello, I am TallUI!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Alf Drollinger](https://github.com/adrolli)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
