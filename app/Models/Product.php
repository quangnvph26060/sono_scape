<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'sgo_products';
    protected $fillable = [
        'name',
        'images',
        'source',
        'company_id',
        'country_id',
        'model',
        'condition_level',
        'guarantee',
        'price',
        'status',
        'description',
    ];

    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }

    public function company()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
