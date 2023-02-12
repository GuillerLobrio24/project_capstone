<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class B1R201 extends Model
{
    use HasFactory;
    protected $table = 'b1_r201_s';
    protected $primaryKey = 'id';
    protected $fillable = ['b1r201subject', 'b1r201professor', 'b1r201schedulefrom', 'b1r201scheduleto'];
}
