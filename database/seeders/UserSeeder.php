<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use App\Models\User;

class UserSeeder extends Seeder
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
                'name' => 'Maxcasmith',
                'email' => 'maxcasmith@gmail.com',
                'avatar' => 17
            ],
            [
                'name' => 'ChuckCassadyJr',
                'email' => 'darrenyeahyeah@gmail.com',
                'avatar' => 14
            ]
        ] as $dev) {
            $u = new User();
            $u->name = $dev['name'];
            $u->email = $dev['email'];
            $u->code = (string) Str::uuid();
            $u->password = Hash::make('Password123');
            $u->admin = true;
            $u->avatar_id = $dev['avatar'];
            $u->save();
        }

    }
}
