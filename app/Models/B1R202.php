<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class B1R202 extends Model
{
    use HasFactory;
    protected $table = 'b1_r202_s';
    protected $primaryKey = 'id';
    protected $fillable = ['b1r202subject', 'b1r202professor', 'b1r202schedulefrom', 'b1r202scheduleto'];
}
