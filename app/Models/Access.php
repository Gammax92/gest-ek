<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Access extends Model
{
    use HasFactory;


    protected $fillable = [
        'name', 'user', 'password', 'domain'
    ];
    // public function client()
    // {
    //     return $this->belongsTo('App\Models\Client');
    // }
}
