<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    use HasFactory;

    protected $fillable = ['Name','grade_id','course_id','instructor_id','created_at','updated_at'];

    //start relation

    public function grade()
    {
        return $this->belongsTo(grade::class);
    }

    public function course()
    {
        return $this->belongsTo(course::class);
    }

    public function attachmentLecture()
    {
        return $this->hasMany(attachmentlecture::class);
    }

    public function instructor()
    {
        return $this->belongsTo(Instructor::class);
    }

}