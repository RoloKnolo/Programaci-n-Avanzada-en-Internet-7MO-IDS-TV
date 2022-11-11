<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
        $user = new User();
        $user->name = 'Edgar';

        $user->email = 'e@gmail.com';
        $user->password =bcrypt ('pass');
        $user->save();

        $user = new User();
        $user->name = 'Juan';

        $user->email = 'jm@gmail.com';
        $user->password =bcrypt ( 'pass1');
        $user->save();
    }
}
