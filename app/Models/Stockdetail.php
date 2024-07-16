<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stockdetail extends Model
{
    use HasFactory;
    protected $primaryKey  = 'sotckdetail_id';
    protected $fillable = [
        'stock_id',
        'qty',
        'added_on',
        'added_month',
        'added_year',
    ];
}