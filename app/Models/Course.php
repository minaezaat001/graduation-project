<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['Name','instructor_id'];

    //start relation

    public function instructor()
    {
        return $this->belongsTo(instructor::class);
    }

    public function lecture()
    {
        return $this->hasMany(lecture::class);
    }

    public function assiment()
    {
        return $this->hasMany(assiment::class);
    }

    public function student()
    {
        return $this->belongsToMany(student::class);
    }

    public function grade()
    {
        return $this->belongsToMany(grade::class);
    }
}
