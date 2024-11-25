<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $authors = [
            [
                'name'=>'Author 1',
                'photo'=>'images/author/1.jpg',
                'birth_date'=>'2000-5-25'
            ],
            [
                'name'=>'Author 2',
                'photo'=>'images/author/2.jpg',
                'birth_date'=>'2000-5-25'
            ],
            [
                'name'=>'Author 3',
                'photo'=>'images/author/3.jpg',
                'birth_date'=>'2000-5-25'
            ],
            [
                'name'=>'Author 4',
                'photo'=>'images/author/2.jpg',
                'birth_date'=>'2000-5-25'
            ],
            [
                'name'=>'Author 5',
                'photo'=>'images/author/2.jpg',
                'birth_date'=>'2000-5-25'
            ]
        ];

        DB::table('authors')->insert($authors);
    }
}
