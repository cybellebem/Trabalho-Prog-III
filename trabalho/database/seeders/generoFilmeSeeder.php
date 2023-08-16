<?php

namespace Database\Seeders;
use App\Models\GeneroFilme;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class generoFilmeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GeneroFilme::create([
            'filme_fk' => '1',
            'categoria_fk' => '1'
        ]);GeneroFilme::create([
            'filme_fk' => '2',
            'categoria_fk' => '2'
        ]);
    }
}
