<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $books = [
            [   'name'=>'book 1',
                'photo'=>'images/book/1.jpeg',
                'description'=>'description book 1',
                'publish_date'=>'2023-2-5',
                'author_id'=>1,
                'genre_id'=>1
            ],
            [   'name'=>'book 2',
                'photo'=>'images/book/2.jpeg',
                'description'=>'description book 2',
                'publish_date'=>'2023-4-5',
                'author_id'=>2,
                'genre_id'=>1
            ],
            [   'name'=>'book 3',
                'photo'=>'images/book/3.jpeg',
                'description'=>'description book 3',
                'publish_date'=>'2023-5-5',
                'author_id'=>3,
                'genre_id'=>1
            ],
            [   'name'=>'book 4',
                'photo'=>'images/book/4.jpeg',
                'description'=>'description book 4',
                'publish_date'=>'2023-7-5',
                'author_id'=>4,
                'genre_id'=>2
            ],
            [   'name'=>'book 5',
                'photo'=>'images/book/5.jpeg',
                'description'=>'description book 5',
                'publish_date'=>'2023-9-5',
                'author_id'=>5,
                'genre_id'=>2
            ]
        ];
        DB::table('books')->insert($books);
    }
}
