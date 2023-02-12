<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class B2R303 extends Model
{
    use HasFactory;
    protected $table = 'b2_r303_s';
    protected $primaryKey = 'id';
    protected $fillable = ['b2r303subject', 'b2r303professor', 'b2r303schedulefrom', 'b2r303scheduleto'];
}
