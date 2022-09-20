<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookshelf extends Model
{
    use HasFactory;

    public function books(){ //vraca vise knjiga zato je bookS
        return $this->hasMany(Book::class);
    }

}
