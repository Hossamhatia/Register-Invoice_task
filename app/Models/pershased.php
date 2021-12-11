<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pershased extends Model
{
    use HasFactory;
    protected $fillable = [
        'ProductName',
        'CustomerName',
        'Quantity',
        'Totalprice',
    ];
}
