<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $fillable = ['name', 'phone_number', 'age', 'img', 'place_of_residence', 'role'];
}
