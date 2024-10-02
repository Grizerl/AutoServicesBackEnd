<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class repair extends Model
{
    use HasFactory;

    public $timestamps=false;

    protected $fillable= ['name','telephone','car','comment','price','done'];
}
