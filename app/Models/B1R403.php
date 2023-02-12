<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class B1R403 extends Model
{
    use HasFactory;
    protected $table = 'b1_r403_s';
    protected $primaryKey = 'id';
    protected $fillable = ['b1r403subject', 'b1r403professor', 'b1r403schedulefrom', 'b1r403scheduleto'];
}
