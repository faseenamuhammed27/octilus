<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    use HasFactory;

    protected $table = 'registertable';
    protected $fillable = ['fname','lname','dob','email','phone'];
}
