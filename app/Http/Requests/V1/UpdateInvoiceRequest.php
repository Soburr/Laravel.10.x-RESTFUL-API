<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Routing\SortedMiddleware;
use Illuminate\Validation\Rule;

class UpdateInvoiceRequest extends FormRequest
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
        $method = $this->method();

        if ($method === 'PUT') {
            return [
               'customer_id' => ['required'],
               'amount' => ['required'],
               'status' => ['required', Rule::in(['B', 'P', 'V', 'b', 'p', 'v'])],
               'billed_date' => ['required'],
               'paid_date' => ['nullable']
            ];
        }else {
            return [
                'customer_id' => ['sometimes', 'required', 'integer'],
                'amount' => ['sometimes', 'required', 'numeric'],
                'status' => ['sometimes', 'required', Rule::in(['B', 'P', 'V', 'b', 'p', 'v'])],
                'billed_date' => ['sometimes', 'required', 'date_format:Y-m-d H:i:s', 'nullable'],
                'paid_date' => ['sometimes', 'nullable', 'date_format:Y-m-d H:i:s', 'nullable']
             ];
        }

    }
}
