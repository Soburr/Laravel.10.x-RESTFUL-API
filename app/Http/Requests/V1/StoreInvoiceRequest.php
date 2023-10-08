<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreInvoiceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
           'customer_id' => ['required'],
           'amount' => ['required'],
           'status' => ['required',  Rule::in(['P', 'B', 'V', 'p', 'b', 'v'])],
           'billed_date' => ['required'],
           'paid_date' => ['nullable']
        ];
    }
}
