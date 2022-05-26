# italiamultimedia/postal-code-validator

Basic postal code validation (format only).

Implemented countries:
- Italy (`IT`): `\ItaliaMultimedia\PostalCodeValidator\PostalCodeValidatorItaly`

## Install

```shell
composer require italiamultimedia/postal-code-validator @dev
```

## Usage

### General, using the helper

```php
$validatorHelper = new \ItaliaMultimedia\PostalCodeValidator\PostalCodeValidatorHelper();

// Validate
try {
    $result = $validatorHelper->validate($countryCode, $postalCode);
} catch (\ItaliaMultimedia\PostalCodeValidator\PostalCodeValidatorException $e) {
    ... // handle exception
}

// Get format
$format = $validatorHelper->getValidator($countryCode)->getFormat();
```

### Individual country

Example for Italy.

```php
$validator = new \ItaliaMultimedia\PostalCodeValidator\PostalCodeValidatorItaly();

// Validate
try {
    $result = $validator->validate($postalCode);
} catch (\ItaliaMultimedia\PostalCodeValidator\PostalCodeValidatorException $e) {
    ... // handle exception
}

// Get format
$format = $validator->getFormat();
```
