<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class assiment extends Model
{
    use HasFactory;

    protected $fillable = ['Name','Kind','course_id'];

    //start relation

    public function course()
    {
        return $this->belongsTo(course::class);
    }

    public function attachmentassiment()
    {
        return $this->hasMany(Attachmentassiment::class);
    }
}
