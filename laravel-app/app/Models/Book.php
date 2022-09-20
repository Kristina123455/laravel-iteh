<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable=[
        'name', 'slug', 'description','price','author'
    ];

    public function bookshelf(){
        return $this->belongsTo(Bookshelf::class); //pripada jednoj polici 
    }

    public function user(){
        return $this->belongsTo(User::class); //cita je jedan korisnik 
    }

}
