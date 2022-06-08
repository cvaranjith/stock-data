<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stock_in extends Model
{
    use HasFactory;
    
    protected $table    = 'stock_ins';
    protected $fillable = [
        'product',
        'date',
        'Qty',
    ];
}
