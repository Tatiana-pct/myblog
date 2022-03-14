<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
           'email'=> 'admin@admin.com',
           'name'=> 'Admin',
           'password'=>Hash::make('00000000'),
           'role'=>User::ADMIN_ROLE
        ]);

        User::create([
            'email'=> 'vincent.brayann@gmail.com',
            'name'=> 'petrochka',
            'password'=>Hash::make('00000000'),
            'role'=>User::ADMIN_ROLE
        ]);
    }
}
