<?php

namespace Wijoc\ValidifyMI\Rules;

use Wijoc\ValidifyMI\Rule;

class FilesRule implements Rule
{
    public function validate($field, $value, $parameters): bool
    {
        return isset($_FILES[$field]);
    }

    public function getErrorMessage($field, $parameters): string
    {
        return "Input must be file(s).";
    }
}
