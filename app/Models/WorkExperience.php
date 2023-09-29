<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{
    use HasFactory;
    protected $fillable=['name','title','location','started_from', 'ended_in','user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
