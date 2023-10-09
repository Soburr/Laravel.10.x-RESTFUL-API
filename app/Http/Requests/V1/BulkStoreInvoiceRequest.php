<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Models\Invoice;

class BulkStoreInvoiceRequest extends FormRequest
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
        //    '*.customer_id' => ['required', 'integer'],
        //    '*.amount' => ['required', 'numeric'],
        //    '*.status' => ['required',  Rule::in(['P', 'B', 'V', 'p', 'b', 'v'])],
        //    '*.billed_date' => ['required', 'date_format:Y-m-d H:i:s'],
        //    '*.paid_date' => ['date_format:Y-m-d H:i:s', 'nullable']
        ];
    }
}
