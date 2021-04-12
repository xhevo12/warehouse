<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'prod_id',
        'contain_article',
        'price', 
        
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
    * table to store teachers records.
    */
    protected $table = 'product';

    public function contain_articles()
    {
        return $this->belongsTo(ContainArticles::class, 'contain_article');
    }
}
