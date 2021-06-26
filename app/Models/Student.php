<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['Name','Phone','Code','grade_id'];


    public function grade()
    {
        return $this->belongsTo(grade::class);
    }

    public function attachmentassiment()
    {
        return $this->hasMany(Attachmentassiment::class);
    }

    public function course()
    {
        return $this->belongsToMany(course::class,'student_course');
    }
}
