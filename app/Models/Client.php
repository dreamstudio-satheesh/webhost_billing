<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = ['first_name', 'last_name', 'email', 'password'];

    // A client has many invoices
    public function invoices() {
        return $this->hasMany(Invoice::class);
    }

    // A client has many hosting packages
    public function hostingPackages() {
        return $this->belongsToMany(HostingPackage::class, 'client_packages');
    }
}

