<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class B2R202 extends Model
{
    use HasFactory;
    protected $table = 'b2_r202_s';
    protected $primaryKey = 'id';
    protected $fillable = ['b2r202subject', 'b2r202professor', 'b2r202schedulefrom', 'b2r202scheduleto'];
}
