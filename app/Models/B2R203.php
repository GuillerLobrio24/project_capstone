<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class B2R203 extends Model
{
    use HasFactory;
    protected $table = 'b2_r203_s';
    protected $primaryKey = 'id';
    protected $fillable = ['b2r203subject', 'b2r203professor', 'b2r203schedulefrom', 'b2r203scheduleto'];
}
