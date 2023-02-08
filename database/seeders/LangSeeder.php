<?php

namespace Database\Seeders;

use App\Models\Lang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lang::create([
            'title' => [
                'en' => 'English',
                'fr' => 'Anglais'
            ],
            'code' => 'en'
        ]);
        
        Lang::create([
            'title' => [
                'en' => 'French',
                'fr' => 'Français'
            ],
            'code' => 'fr'
        ]);
    }
}
