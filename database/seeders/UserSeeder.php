<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   $user = User::where('email', '=', 'admin@example.com');
        if ($user === null) {
            User::create(array(
                'name'     => 'admin',
                'email'    => 'admin@example.com',
                'password' => Hash::make('admin'),
            ));
         }
    }
}
