<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class B1R302 extends Model
{
    use HasFactory;
    protected $table = 'b1_r302_s';
    protected $primaryKey = 'id';
    protected $fillable = ['b1r302subject', 'b1r302professor', 'b1r302schedulefrom', 'b1r302scheduleto'];
}
