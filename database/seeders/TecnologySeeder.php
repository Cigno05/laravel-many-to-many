<?php

namespace Database\Seeders;

use App\Models\Tecnology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TecnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tecnologies = ['css', 'bootstrap', 'js', 'laravel', 'php', 'vue', 'vite', 'sql'];

        foreach ($tecnologies as $tecnology) {

            $new_tecnology = new Tecnology();

            $new_tecnology->name = $tecnology;
            $new_tecnology->slug = Str::slug($tecnology);

            $new_tecnology->save();
        }
    }
}
