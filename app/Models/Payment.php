<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = ['client_id', 'invoice_id', 'amount', 'payment_method', 'payment_date'];

    // A payment belongs to a client
    public function client() {
        return $this->belongsTo(Client::class);
    }

    // A payment belongs to an invoice
    public function invoice() {
        return $this->belongsTo(Invoice::class);
    }
}
