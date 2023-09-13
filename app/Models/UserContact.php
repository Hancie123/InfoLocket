<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserContact extends Model
{
    use HasFactory;
    protected $table="user_contacts";
    protected $primaryKey="usercontact_id";

    protected $fillable=[
        'country','location','address','phone','website','user_id'

    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
