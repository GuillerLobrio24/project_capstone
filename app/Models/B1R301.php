<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class B1R301 extends Model
{
    use HasFactory;
    protected $table = 'b1_r301_s';
    protected $primaryKey = 'id';
    protected $fillable = ['b1r301subject', 'b1r301professor', 'b1r301schedulefrom', 'b1r301scheduleto'];
}
