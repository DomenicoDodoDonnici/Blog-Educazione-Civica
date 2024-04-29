<?php

namespace App\Rules;
use Closure;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\Auth;

class Authcheck implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $auth_user = Auth::user()->id;
        // Sicurezza per evitare di ispezionare e passare un altro valore
        if ($auth_user != $value) {
            $fail('The :attribute must be current Auth User.');
        }
    }
}
