<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class B2R302 extends Model
{
    use HasFactory;
    protected $table = 'b2_r302_s';
    protected $primaryKey = 'id';
    protected $fillable = ['b2r302subject', 'b2r302professor', 'b2r302schedulefrom', 'b2r302scheduleto'];
}
