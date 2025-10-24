<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Factories\BelongsToRelationship;
use Illuminate\Database\Eloquent\Factories\BelongsToManyRelationship;

class Product extends Model
{
    //
    use HasFactory;

    protected $table = "products";
    protected $fillable = [
        'categories_id',
        'name',
        'image',
        'description',
        'news',
        'price',
        
    ] ; 
        //liasons eloquante belongsto pour lire le contenue de la categories du produit

    
    /**
     * Get the user that owns the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    
    
}
