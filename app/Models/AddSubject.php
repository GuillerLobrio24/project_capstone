<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddSubject extends Model
{
    use HasFactory;
    protected $table = 'add_subjects';
    protected $primaryKey = 'id';
    protected $fillable = ['subjectname', 'subjectcode'];
}
