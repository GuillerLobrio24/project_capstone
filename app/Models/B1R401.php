<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class B1R401 extends Model
{
    use HasFactory;
    protected $table = 'b1_r401_s';
    protected $primaryKey = 'id';
    protected $fillable = ['subject', 'professor', 'schedulefrom', 'scheduleto'];
}
