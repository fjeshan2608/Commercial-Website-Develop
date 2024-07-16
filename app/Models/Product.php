<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $primaryKey  = 'product_id';
    protected $fillable = [
        'category_id',
        'subcategory_id',
        'brand_id',
        'product_name',
        'product_slug',
        'product_code',
        'product_description',
        'product_tags',
        'color',
        'size',
        'product_purchase_price',
        'product_selling_price',
        'discount_price',
        'in_stock',
        'main_thumbnail',
        'image_1',
        'image_2',
        'image_3',
        'product_status',
        'on_sale',
        'best_rated',
        'flast_sale',
    ];
}
