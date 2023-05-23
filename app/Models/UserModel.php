<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;

    protected $table = 'accounts';

    protected $fillables = ["firstname", "lastname", "email", "phonenum", "dob", "created at", "updated at"];
}
