<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class B1R303 extends Model
{
    use HasFactory;
    protected $table = 'b1_r303_s';
    protected $primaryKey = 'id';
    protected $fillable = ['b1r303subject', 'b1r303professor', 'b1r303schedulefrom', 'b1r303scheduleto'];
}
