<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class B1R402 extends Model
{
    use HasFactory;
    protected $table = 'b1_r402_s';
    protected $primaryKey = 'id';
    protected $fillable = ['b1r402subject', 'b1r402professor', 'b1r402schedulefrom', 'b1r402scheduleto'];
}