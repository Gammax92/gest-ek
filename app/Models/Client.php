<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;


    protected $fillable = [
        'uuid', 'name', 'email', 'phone', 'mobile', 'reference_person', 'piva', 'address'
    ];

    public function domains()
    {
        return $this->hasMany('App\Models\Domain');
    }
}
