<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtherAnnouncement extends Model
{
    use HasFactory;
    protected $table = 'other_announcements';
    protected $primaryKey = 'id';
    protected $fillable = ['otherannouncementtitle', 'otherannouncementcontent'];
}
