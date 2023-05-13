<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HostingPackage extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'price'];

    // A hosting package belongs to many clients
    public function clients() {
        return $this->belongsToMany(Client::class, 'client_packages');
    }
}
