<?php

use App\Modules\Users\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name" => "Demo Admin",
            "email" => "demo@ono.com",
            "password" => bcrypt("123456")
        ]);
    }
}
