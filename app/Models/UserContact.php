<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserContact extends Model
{
    use HasFactory;
    protected $guraded=['id'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
