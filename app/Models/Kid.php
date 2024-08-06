<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Master;
use App\Models\Room;
class Kid extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'age',
        'grade',
        'parent_id',
    ];
    public function master(){
        return $this->belongsTo(Master::class);
    }
    public function rooms(){
        return $this->belongsToMany(Room::class,'room_kid','kid_id','room_id');
    }
    
}
