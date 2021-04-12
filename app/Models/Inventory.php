<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'art_id',
        'stock',

    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * table to store teachers records.
     */
    protected $table = 'inventory';

    public function articleHas()
    {
        return $this->hasOne(Product::class, 'art_id');
    }
}
