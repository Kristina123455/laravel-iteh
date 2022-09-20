<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Bookshelf;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Bookshelf::truncate(); //izbacuje sve iz tabela
        Book::truncate();
        User::truncate();


        $user = User::factory()->create();
        $bs1 = Bookshelf::factory()->create();
        $bs2 = Bookshelf::factory()->create();

        Book::factory(5)->create([
            'user_id'=>$user->id,
            'bookshelf_id'=>$bs1->id
        ]);

        Book::factory(4)->create([
            'user_id'=>$user->id,
            'bookshelf_id'=>$bs2->id
        ]);

        /*
        $user = User::factory()->create();
        $bs1 = Bookshelf::create(['slug'=>"shelf-one",'gender'=>"drama"]);
        $bs2 = Bookshelf::create(['slug'=>"shelf-two",'gender'=>"action"]);
        $bs3 = Bookshelf::create(['slug'=>"shelf-three",'gender'=>"history"]);

        $book1 = Book::create([
            'name'=>'Book1',
            'description'=>'Opis za knjigu jedan',
            'slug'=>'book-one',
            'price'=>2.99,
            'author'=>'Autor jedan',
            'bookshelf_id'=>$bs1->id,
            'user_id'=>$user->id
        ]);

        $book1 = Book::create([
            'name'=>'Book2',
            'description'=>'Opis za knjigu dva',
            'slug'=>'book-two',
            'price'=>5.99,
            'author'=>'Autor dva',
            'bookshelf_id'=>$bs3->id,
            'user_id'=>$user->id
        ]);

        $book1 = Book::create([
            'name'=>'Book3',
            'description'=>'Opis za knjigu tri',
            'slug'=>'book-three',
            'price'=>7.99,
            'author'=>'Autor tri',
            'bookshelf_id'=>$bs2->id,
            'user_id'=>$user->id
        ]);

        */
    }
}
