<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreCustomerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
           'name' => ['required'],
           'type' => ['required', Rule::in(['I', 'B', 'i', 'b'])],
           'email' => ['required', 'email'],
           'address' => ['required'],
           'city' => ['required'],
           'state' => ['required'],
           'postal_code' => ['required']

        ];
    }

    // protected function prepareForValidation() {
    //     $this->merge([
    //         'postal_code' => $this->postalCode
    //     ]);
    // }
}
