<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddProfessor extends Model
{
    use HasFactory;
    protected $table = 'add_professors';
    protected $primaryKey = 'id';
    protected $fillable = ['proflname', 'proffname'];
}
