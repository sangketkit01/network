<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class EmailOrPhone implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @param  Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        // Check if the value is a valid email
        if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
            // Check if it's a valid phone number (adjust regex as needed)
            if (!preg_match('/^[0-9]{10,15}$/', $value)) {
                $fail('The ' . $attribute . ' must be a valid email address or a valid phone number.');
            }
        }
    }
}
