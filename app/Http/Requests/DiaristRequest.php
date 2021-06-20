<?php

namespace App\Http\Requests;

use App\Rules\ValidateCep;
use App\Services\ZipCode;
use Illuminate\Foundation\Http\FormRequest;

class DiaristRequest extends FormRequest
{
    public ZipCode $zipCode;

    public function __construct(ZipCode $zipCode) {

        $this->zipCode = $zipCode;
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
       $rules = [
            'fullname' => ['required', 'max:100'],
            'cpf' => ['required', 'size:14'],
            'email' => ['required', 'email', 'max:100'],
            'phone' => ['required', 'size:14'],
            'address' => ['required', 'max:255'],
            'number' => ['required', 'max:20'],
            'district' => ['required', 'max:50'],
            'city' => ['required', 'max:50'],
            'state' => ['required', 'size:2'],
            'cep' => ['required', 'size:9', new ValidateCep($this->zipCode) ],
            'user_photo' => ['image', 'required']
        ];

        if($this->isMethod('post')) {

            $rules['user_photo'] = ['required', 'image'];
        }

        return $rules;
    }
}
