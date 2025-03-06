<?php

namespace App\Http\Resources\v1;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class InvoiceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    private array $types = ['C' => 'Cartão', 'B'=> 'Boleto', 'P' => 'Pix'];


    public function toArray($request)
    {
        $paid = $this->paid;
        return [
            'user' => [
                'name' => $this->name,
                'email' => $this->email
            ],
            'type' => $this->types[$this->type],
            'value'=> 'R$ ' . number_format($this->value, 2, ',', '.'),
            'paid'=> $paid ? 'Pago' : 'Nao Pago',
            'payment_date' => $paid ? Carbon::parse($this->payment_date)->format('d/m/Y H:i:s'): Null,
            'paymentSince' => $paid ? Carbon::parse($this->payment_date)->diffForHumans(): Null,   
        ];
    }
}
