<?php

declare(strict_types=1);

namespace ItaliaMultimedia\PostalCodeValidator;

interface PostalCodeValidatorInterface
{
    public function validate(string $postalCode): bool;
}
