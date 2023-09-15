<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $table="contacts";
    protected $primaryKey="contact_id";
    protected $fillable=['name','email','occupation','phone','location','user_id'];
}
