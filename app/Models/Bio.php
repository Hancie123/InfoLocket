<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bio extends Model
{
    use HasFactory;
    protected $table="bios";
    protected $primaryKey="bio_id";

    public function user(){
        return $this->belongsTo(User::class);
    }
}
