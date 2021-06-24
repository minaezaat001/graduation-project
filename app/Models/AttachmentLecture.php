<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttachmentLecture extends Model
{
    use HasFactory;
    protected $fillable = ['attach','lecture_id'];
    public $timestamps = false;



    protected $table = 'attachmentlectures';



    //start relation

    public function lecture()
    {
        return $this->belongsTo(lecture::class);

    }
}