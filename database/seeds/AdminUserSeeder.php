<?php

use Illuminate\Database\Seeder;
use App\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(User::find(1) == null){
            User::create([
                'name'     => 'admin',
                'password' => bcrypt('admin'),
                'email' => config('email.email'),
            ]);
        }
    }
}
