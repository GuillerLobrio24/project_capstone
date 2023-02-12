<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class B2R402 extends Model
{
    use HasFactory;
    protected $table = 'b2_r402_s';
    protected $primaryKey = 'id';
    protected $fillable = ['b2r402subject', 'b2r402professor', 'b2r402schedulefrom', 'b2r402scheduleto'];
}
