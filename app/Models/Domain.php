<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
    use HasFactory;


    protected $fillable = [
        'name', 'client_id', 'expiration_date'
    ];


    public function client()
    {
        return $this->belongsTo('App\Models\Client');
    }
}
