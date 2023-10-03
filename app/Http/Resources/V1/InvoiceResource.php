<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class InvoiceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => (string) $this->id,
            'customerId' => (string) $this->customer_id,
            'attributes' => [
                'amount' => $this->amount,
                'billedDate' => $this->billed_date,
                'paidDate' => $this->paid_date
            ]
        ];
    }
}
