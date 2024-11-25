<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Laravel\Passport\Passport;

class ClientSecretValid implements ValidationRule
{
    public function __construct($client_id, $grant_type)
    {
        $this->client_id = $client_id;
        $this->grant_type = $grant_type;
    }

    /**
     * Run the validation rule.
     *
     * @param  Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (! Passport::client()->newQuery()->where([
            'id' => $this->client_id,
            'secret' => $value,
            'password_client' => $this->grant_type == 'password',
        ])->exists()) {
            $fail('Acceso no autorizado para este cliente');
        }
    }
}
