<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;
     
    protected $fillable = [
        'nom',
        'description',
        'auteur',
        'photo',
    ]; // model_anchor
     
    protected $table = 'albums';
}
