<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;

class roomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    { DB::table('rooms')->insert([
        [
        'name'=>"one",
        'amount'=>"2",
        
    ],
        [
            'name'=>"Two",
            'amount'=>"4",
        ],
        [
            'name'=>"Three",
            'amount'=>"9",
        ],

        [
            'name'=>"For",
            'amount'=>"4",
        ]

    ],

);
}
    }
