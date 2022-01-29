
<?php

class UserTableSeeder extends Seeder
{

public function run()
{
    DB::table('users')->delete();
    User::create(array(
        'name'     => 'admin',
        'username' => 'admin',
        'email'    => 'admins@test.com',
        'password' => Hash::make('admin'),
    ));
}

}