<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
    use HasFactory;

    protected $fillable = ['client_id', 'name', 'registration_date', 'expiry_date'];

    // A domain belongs to a client
    public function client() {
        return $this->belongsTo(Client::class);
    }
}
