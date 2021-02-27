<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Game;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach([
            'FINAL FANTASY',
            'FINAL FANTASY II',
            'FINAL FANTASY III',
            'FINAL FANTASY IV',
            'FINAL FANTASY V',
            'FINAL FANTASY VI',
            'FINAL FANTASY VII',
            'FINAL FANTASY VIII',
            'FINAL FANTASY IX',
            'FINAL FANTASY X',
            'FINAL FANTASY X-2',
            'FINAL FANTASY XI',
            'FINAL FANTASY XII',
            'FINAL FANTASY XIII',
            'FINAL FANTASY XV',
        ] as $game) {
            $g = new Game();
            $g->label = $game;
            $g->save();
        }
    }
}
