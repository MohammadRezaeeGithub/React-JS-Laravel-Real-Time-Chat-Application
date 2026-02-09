<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //
    protected $fillable = [
        'message',
        'group_id',
        'sender_id',
        'reciver_id'
    ];

    public function sender(){
        return $this->belongsTo(User::class,'sender_id');
    }

    public function reciver(){
        return $this->belongsTo(User::class,'reciver_id');
    }

    public function group(){
        return $this->belongsTo(Group::class);
    }

    public function attachements(){
        return $this->hasMany(MessageAttachment::class);
    }
}
