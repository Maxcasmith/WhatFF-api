<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Avatar;

class AvatarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach([
            "cloud.jpg",
            "red.jpg",
            "vincent.jpg",
            "tifa.jpg",
            "yuffie.jpg",
            "barret.jpg",
            "caitsith.jpg",
            "cid.jpg",
            "Sephiroth.jpg",
            "Aerith.jpg",
            "Edea.jpg",
            "irvine.jpg",
            "Kiros.jpg",
            "Laguna.jpg",
            "quistis.jpg",
            "rinoa.jpg",
            "seifer.jpg",
            "selphie.jpg",
            "squall.jpg",
            "Ward.jpg",
            "zell.jpg",
            "blank.png",
            "zidane.png",
            "quena.png",
            "steiner.png",
            "beatrix.png",
            "eiko.png",
            "vivi.png",
            "cinna.png",
            "lamont.png",
            "freya.png",
            "dagger.png",
            "marcus.png",
            "garnet.png",
            "jecht.png",
            "auron.jpg",
            "tidus.jpg",
            "rikku.jpg",
            "yuna.jpg",
            "seymour.jpg",
            "wakka.jpg",
            "lulu.jpg",
            "kimahri.jpg",
        ] as $avatar ) {
            $a = new Avatar();
            $a->path = $avatar;
            $a->save();
        }
    }
}
