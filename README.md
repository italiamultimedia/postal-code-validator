# italiamultimedia/postal-code-validator

Basic postal code validation (format only).

Implemented countries:
- Italy (`IT`): `\ItaliaMultimedia\PostalCodeValidator\PostalCodeValidatorItaly`

## Install

```shell
composer require italiamultimedia/postal-code-validator @dev
```

## Usage

### General

```php
$validator = new \ItaliaMultimedia\PostalCodeValidator\PostalCodeValidator();
try {
    $result = $validator->validate($countryCode, $postalCode);
} catch (\ItaliaMultimedia\PostalCodeValidator\PostalCodeValidatorException $e) {
    ... // handle exception
}
```

### Individual country

Example for Italy.

```php
$validator = new \ItaliaMultimedia\PostalCodeValidator\PostalCodeValidatorItaly();
try {
    $result = $validator->validate($postalCode);
} catch (\ItaliaMultimedia\PostalCodeValidator\PostalCodeValidatorException $e) {
    ... // handle exception
}
```
