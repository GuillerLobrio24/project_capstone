<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class B2R403 extends Model
{
    use HasFactory;
    protected $table = 'b2_r403_s';
    protected $primaryKey = 'id';
    protected $fillable = ['b2r403subject', 'b2r403professor', 'b2r403schedulefrom', 'b2r403scheduleto'];
}
