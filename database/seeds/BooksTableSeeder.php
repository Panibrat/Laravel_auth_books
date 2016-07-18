<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('books')->delete(); 
        $users = array(
            array(
                'title' => "Wild Wolf",
                'author' => "London",
                'year' => 1878,
                'genre' => 'adventure',
                'client_id' => 1               
                
            ),
            array(
                'title' => "War and Peace",
                'author' => "Tolstoy",
                'year' => 1878,
                'genre' => 'Erotic',
                'client_id' => 4               
                
            ),
            array(
                'title' => "Viy",
                'author' => "Gogol",
                'year' => 1928,
                'genre' => 'Fantastic',
                'client_id' => 2               
                
            ),
            array(
                'title' => "Robinson Cruso",
                'author' => "Defo",
                'year' => 1901,
                'genre' => 'Adventure',
                'client_id' => 8               
                
            ),
            array(
                'title' => "Volvo",
                'author' => "Petterson",
                'year' => 2001,
                'genre' => 'Technic',
                'client_id' => 7               
                
            ),
            array(
                'title' => "CRUD",
                'author' => "Academy",
                'year' => 2016,
                'genre' => 'Adventure',
                'client_id' => 5               
                
            ),
            array(
                'title' => "Mumu",
                'author' => "Turgeniev",
                'year' => 1999,
                'genre' => 'Adventure',
                'client_id' => 7               
                
            ),
            array(
                'title' => "Black Jack",
                'author' => "Kristy",
                'year' => 1961,
                'genre' => 'Adventure',
                'client_id' => null               
                
            ),
            array(
                'title' => "Robinson Cruso",
                'author' => "Defo",
                'year' => 1901,
                'genre' => 'Adventure',
                'client_id' => 9               
                
            ),
            array(
                'title' => "Robinson Cruso",
                'author' => "Defo",
                'year' => 1901,
                'genre' => 'Adventure',
                'client_id' => 10               
                
            ),
            array(
                'title' => "Go away",
                'author' => "Jackson",
                'year' => 2008,
                'genre' => 'Documental',
                'client_id' => 1               
                
            )
            
            
        );
        DB::table('books')->insert($users); 
    }
}
