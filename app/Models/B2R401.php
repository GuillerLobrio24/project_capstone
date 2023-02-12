<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class B2R401 extends Model
{
    use HasFactory;
    protected $table = 'b2_r401_s';
    protected $primaryKey = 'id';
    protected $fillable = ['b2r401subject', 'b2r401professor', 'b2r401schedulefrom', 'b2r401scheduleto'];
}
