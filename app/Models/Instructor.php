<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    use HasFactory;

    protected $fillable = ['Name','Phone','Email'];

    //start relation
    public function course()
    {
        return $this->hasMany(course::class);
    }
}
