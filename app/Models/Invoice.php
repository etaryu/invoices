<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',  // Permite a inserção do ID do usuário
        'type',     // Permite o tipo da fatura (B, P, C)
        'paid',     // Permite a alteração do status de pago
        'value'     // Permite definir o valor da fatura
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    
}
