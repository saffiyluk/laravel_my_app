<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timetable extends Model
{
    use HasFactory;

    public $table = 'timetables';
    
    protected $fillable = [
        'user_id',
        'subject_id',
        'day_id',
        'hall_id',
        'group_id',
        'time_from',
        'time_to',
    ];
<<<<<<< HEAD
=======

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function day()
    {
        return $this->belongsTo(Day::class);
    }

    public function hall()
    {
        return $this->belongsTo(Hall::class);
    }

    public function group()
    {
        return $this->belongsTo(Group::class);
    }
>>>>>>> c85620f (adding new files and codes)
}
