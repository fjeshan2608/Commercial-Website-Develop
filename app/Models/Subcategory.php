<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;
    protected $primaryKey  = 'subcategory_id';
    protected $fillable = [
        'subcategory_name',
        'Subcategory_slug',
        'category_id',
        'subcategory_status',
    ];
}
