<?php

declare(strict_types=1);

namespace ItaliaMultimedia\PostalCodeValidator;

interface PostalCodeValidatorInterface
{
    public function getFormat(): string;

    public function validate(string $postalCode): bool;
}
