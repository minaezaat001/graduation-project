<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attachmentassiment extends Model
{
    use HasFactory;

    protected $fillable = ['attach','assiment_id','student_id'];

    protected $table = 'attachmentassiment';

    //start relation

    public function assiment()
    {
        return $this->belongsTo( assiment::class);
    }

    public function student()
    {
        return $this->belongsTo(student::class);
    }
}