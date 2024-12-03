<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $table = 'payments';
    protected $fillable = [
        'billing_id',
        'payment_date',
        'payment_method',
        'receipt_proof_imgUrl',
    ];

    protected $casts = [
        'payment_date' => 'datetime',
    ];

    public function billing()
    {
        return $this->belongsTo(Billing::class, 'billing_id');
    }
}
