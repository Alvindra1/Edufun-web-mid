<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Writer;

class WrtierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Writer::create([
            'name' => 'Raka Putra Wicaksono',
            'specialist' => 'Data Science Specialist'
        ]);
        Writer::create([
            'name' => 'Bia Mecca Annisa',
            'specialist' => 'Network Security Specialist'
        ]);
        Writer::create([
            'name' => 'Abi Firmansyah',
            'specialist' => 'Data Science & AI Expert'
        ]);
    }
}
