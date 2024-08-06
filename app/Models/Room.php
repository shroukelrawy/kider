<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Teacher;
use App\Models\Kid;

class Room extends Model
{
    use HasFactory;
    protected $fillable=[
        'title',
        'teacher_id',
        'price',
        'capacity',
        'age',
        'time',
        'img',

    ];
    public function teacher(){
        return $this->belongsTo(Teacher::class);
    }
    public function kids(){
        return $this->belongsToMany(Kid::class,'room_kid','kid_id','room_id');
    }
}
