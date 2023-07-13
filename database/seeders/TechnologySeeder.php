<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $technologies = ['HTML', 'CSS', 'SASS', 'JS', 'PHP', 'LARAVEL', 'VITE', 'VUEJS', 'BOOTSTRAP', 'TAILWIND', 'AXIOS', 'NODEJS'];

        foreach ($technologies as $item) {
            $newTech = new Technology();
            $newTech->name = $item;
            $newTech->save();
        }
    }
}
