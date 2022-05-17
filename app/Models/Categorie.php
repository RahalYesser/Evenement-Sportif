<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

    public function events(){
        return $this->belongsTo(Event::class);
    }
        
    public function athletes(){
        return $this->hasMany(Athlete::class);
    }
        
}
