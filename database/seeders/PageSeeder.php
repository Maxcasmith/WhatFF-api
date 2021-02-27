<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Page;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach([
            [
                'label' => 'Home',
                'route' => '/home',
                'active' => true
            ],
            [
                'label' => 'Songs',
                'route' => '/ost',
                'active' => false
            ],
            [
                'label' => 'Equipment',
                'route' => '/equip',
                'active' => false
            ],
            [
                'label' => 'Party',
                'route' => '/party',
                'active' => false
            ],
            [
                'label' => 'Beasts',
                'route' => '/beasts',
                'active' => false
            ],
            [
                'label' => 'Shop',
                'route' => '/shop',
                'active' => false
            ]
        ] as $page) {
            $p = new Page();
            $p->label = $page['label'];
            $p->route = $page['route'];
            $p->active = $page['active'];
            $p->save();
        }
    }
}
