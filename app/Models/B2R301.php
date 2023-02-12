<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class B2R301 extends Model
{
    use HasFactory;
    protected $table = 'b2_r301_s';
    protected $primaryKey = 'id';
    protected $fillable = ['b2r301subject', 'b2r301professor', 'b2r301schedulefrom', 'b2r301scheduleto'];
}
