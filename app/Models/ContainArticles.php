<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContainArticles extends Model
{
    use HasFactory;

    protected $fillable = [
        'prod_id',
        'art_id',
        'amount_of', 
        
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
    * table to store teachers records.
    */
    protected $table = 'contain_articles';

    public function articleHas()
    {
        return $this->hasOne(Product::class, 'contain_articles');
    }
}
