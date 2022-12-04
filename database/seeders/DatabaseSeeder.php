<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\TODOList;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run() : void
    {
        TODOList::factory(4)->create();
    }
}
