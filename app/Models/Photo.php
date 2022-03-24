<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;
     
    protected $fillable = [
        'nom',
        'lien',
        'album',
    ]; // model_anchor
     
    protected $table = 'photos';
}
