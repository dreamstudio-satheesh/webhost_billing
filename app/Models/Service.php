<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = ['client_id', 'name', 'description', 'status'];

    // A service belongs to a client
    public function client() {
        return $this->belongsTo(Client::class);
    }
}
