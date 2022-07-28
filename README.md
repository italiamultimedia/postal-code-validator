# italiamultimedia/postal-code-validator

Basic postal code validation (format only).

Regular expression patterns are taken from `https://i18napis.appspot.com/address/data/{COUNTRY_CODE}`, however they are customized.

---

## Usage example

```shell
composer require italiamultimedia/postal-code-validator
```

```php
// Postal code validation
$postalCodeValidator = new \ItaliaMultimedia\PostalCodeValidator\PostalCodeValidator();
$postalCodeFormatHelper = new \ItaliaMultimedia\PostalCodeValidator\PostalCodeFormatHelper();
try {
    // Check "to"
    if ($this->data('toPostalCode')) {
        if (!$postalCodeValidator->isValid($this->data('toCountryId'), $this->data('toPostalCode'))) {
            $this->errors['toPostalCode'][] = \sprintf(
                '%s %s',
                \sprintf(\__('This field is not valid: %s.'), $this->setting('meta/toPostalCode')),
                \sprintf(
                    \__('Correct format: %s'),
                    $postalCodeFormatHelper->getFormat($this->data('toCountryId')),
                ),
            );
        }
    }
} catch (\ItaliaMultimedia\PostalCodeValidator\PostalCodeValidatorException $e) {
// Validation not available. Nothing to do.
}
// Postal code validation
```
