<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
     
    protected $fillable = [
        'name',
        'firstname',
        'age',
        'borndate',
        'email',
        'password',
        'album',
    ]; // model_anchor
     
    protected $table = 'users';
}
