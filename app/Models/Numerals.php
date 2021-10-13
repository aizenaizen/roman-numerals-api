<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Numerals extends Model
{	
    use HasFactory;
	
    protected $table = 'lu_numerals';
    public $timestamps = false;
}
