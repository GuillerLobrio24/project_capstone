<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class B1R203 extends Model
{
    use HasFactory;
    protected $table = 'b1_r203_s';
    protected $primaryKey = 'id';
    protected $fillable = ['b1r203subject', 'b1r203professor', 'b1r203schedulefrom', 'b1r203scheduleto'];
}
