<?php

namespace App\Models;

use App\Http\Controllers\instructorController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class assiment extends Model
{
    use HasFactory;

    protected $fillable = ['Name','Kind','course_id','grade_id','instructor_id'];
    protected $table = 'assiment';

    //start relation

    public function course()
    {
        return $this->belongsTo(course::class);
    }

    public function attachmentassiment()
    {
        return $this->hasMany(Attachmentassiment::class);
    }

    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }
    public function instructor()
    {
        return $this->belongsTo(Instructor::class);
    }


}
