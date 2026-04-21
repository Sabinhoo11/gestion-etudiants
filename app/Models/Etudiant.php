<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
   
    public $timestamps = false;
    protected $fillable = ['nom', 'age', 'note'];
}

