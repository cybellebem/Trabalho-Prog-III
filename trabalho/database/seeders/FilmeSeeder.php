<?php

namespace Database\Seeders;
use App\Models\Filme;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FilmeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Filme::create([
            'name' => 'Guardiões da Galáxia Vol. 3',
            'sinopse' => 'O amado grupo de desajustados busca se estabelecer em Lugar Nenhum, mas não demora muito para que suas vidas sejam reviradas pelos ecos do passado turbulento de Rocket',
            'ano' => '2023',
            'imagem' => 'gdg3.jpeg',
            'link' => 'https://youtu.be/JqcncLPi9zw',
        ]);
        Filme::create([
            'name' => 'Homem Aranha: Através do Aranhaverso',
            'sinopse' => 'Morales é transportado para uma aventura épica através do multiverso, e deve unir forças com a mulher-aranha Gwen Stacy e um novo time de Pessoas-Aranha, formado por heróis de diversas dimensões.',
            'ano' => '2023',
            'imagem' => 'filme.webp',
            'link' => 'https://youtu.be/LZBlXkDvhh4',
        ]);
    }
}
