<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;


    protected $fillable = ['client_id', 'status', 'due_date'];

    // An invoice belongs to a client
    public function client() {
        return $this->belongsTo(Client::class);
    }

    // An invoice has many invoice items
    public function invoiceItems() {
        return $this->hasMany(InvoiceItem::class);
    }
}
