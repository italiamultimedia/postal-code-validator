# italiamultimedia/postal-code-validator

Basic postal code validation (format only).

Regular expression patterns are taken from `https://i18napis.appspot.com/address/data/{COUNTRY_CODE}`.

Implemented countries:
- Great Britain (`GB`): `\ItaliaMultimedia\PostalCodeValidator\Countries\GreatBritainValidator`
- Italy (`IT`): `\ItaliaMultimedia\PostalCodeValidator\Countries\ItalyValidator`

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
$validator = new \ItaliaMultimedia\PostalCodeValidator\Countries\ItalyValidator();

// Validate
try {
    $result = $validator->validate($postalCode);
} catch (\ItaliaMultimedia\PostalCodeValidator\PostalCodeValidatorException $e) {
    ... // handle exception
}

// Get format
$format = $validator->getFormat();
```
