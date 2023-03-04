# Czech Republic vat format validator

![Code Coverage Badge](./badge.svg)

This component provides Czech Republic vat number format validator.

Implementation of interface **rocketfellows\CountryVatFormatValidatorInterface\CountryVatFormatValidatorInterface**

Depends on https://github.com/rocketfellows/country-vat-format-validator-interface

## Installation

```shell
composer require rocketfellows/cz-vat-format-validator
```

## Usage example

Valid Czech Republic vat number:

```php
$validator = new CZVatFormatValidator();
$validator->isValid('CZ12345678');
$validator->isValid('CZ123456789');
$validator->isValid('CZ1234567890');
$validator->isValid('12345678');
$validator->isValid('123456789');
$validator->isValid('1234567890');
```

Returns:

```shell
true
true
true
true
true
true
```

Invalid Czech Republic vat number:

```php
$validator = new CZVatFormatValidator();
$validator->isValid('1234567');
$validator->isValid('12345678901');
$validator->isValid('DE123456789');
```

```shell
false
false
false
```

## Contributing

Welcome to pull requests. If there is a major changes, first please open an issue for discussion.

Please make sure to update tests as appropriate.

