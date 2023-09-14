<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkPlatform extends Model
{
    use HasFactory;
    protected $table="work_platforms";
    protected $primaryKey="work_id";

    protected $fillable=(['title','description','user_id']);

    public function user(){
        return $this->belongsTo(User::class);
    }
}
