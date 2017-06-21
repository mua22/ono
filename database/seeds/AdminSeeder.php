<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Modules\Users\Models\User::create([
            "name" => "Demo Admin",
            "email" => "demo@ono.com",
            "password" => bcrypt("123456")
        ]);
    }
}
