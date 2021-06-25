<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;
    protected $fillable = ['Name','department_id'];




    // start relations
    public function department ()
    {
        return $this ->belongsTo (department::class);
    }


   public function student()
   {
       return $this->hasMany(Student::class);
   }
public function lecture()
{
    return $this->hasMany(lecture::class);
}

public function course()
{
    return $this->belongsToMany(course::class);
}

public function instructors()
{
    return $this->belongsToMany(instructors::class);
}
}
