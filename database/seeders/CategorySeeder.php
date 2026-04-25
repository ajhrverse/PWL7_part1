<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categorys =[
        ['category' => 'fiksi'],
        ['category' => 'Non-Fiksi'],
        ['category' => 'sains'],
        ['category' => 'sejarah'],
        ['category' => 'agama'],
        ['category' => 'bahasa'],
        ['category' => 'biografi'],
        ['category' => 'teknologi'],
        ['category' => 'budaya'],
        ['category' => 'seni'],
        ['category' => 'geologi'],
        ['category' => 'astronomi']
        ];
        DB::table('categories')->insert($categorys);
    }
}
