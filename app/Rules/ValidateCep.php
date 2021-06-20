<?php

namespace App\Rules;

use App\Services\ZipCode;
use Illuminate\Contracts\Validation\Rule;

class ValidateCep implements Rule
{

    public ZipCode $zipCode;

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct(ZipCode $zipcode)
    {
        $this->zipCode = $zipcode;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $cep = str_replace('', '-', $value);

       return  !! $this->zipCode->search($cep);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Cep inválido!';
    }
}
