<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Donee';
        $user->email = 'donee@gmail.com';
        $user->password = bcrypt('123456');
        $user->role = 'donee';
        $user->status = 'verified';
        $user->save();
    }
}
