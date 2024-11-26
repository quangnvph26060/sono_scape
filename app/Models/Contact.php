<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $table = 'sgo_contacts';
    protected $fillable = [
        'name',
        'address',
        'phone',
        'email'
    ];
}
