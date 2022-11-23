<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Student extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'phone', 'address','image'];

    public function name() : Attribute
    {
        return new Attribute(
            get : fn($value) => ucfirst($value),
        );
    }

    
}
