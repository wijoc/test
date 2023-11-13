<?php

namespace Wijozoe\ValidifyMI\Rules;

use Wijozoe\ValidifyMI\Rule;

class UrlRule implements Rule
{
    public function validate($field, $value, $parameters): bool
    {
        if ($value === null || $value === "") {
            return true;
        }

        return filter_var($value, FILTER_VALIDATE_URL) !== false;
    }

    public function getErrorMessage($field, $parameters): string
    {
        // return "The {$field} must be a valid url.";
        return "Het veld {$field} moet een geldige URL zijn.";
    }
}
