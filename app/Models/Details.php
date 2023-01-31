<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Details extends Model
{
    use HasFactory;
    
    protected $table = 'detailstable';
    protected $fillable = ['ip','useragent','device','browser'];
}
