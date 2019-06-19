<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\User::truncate();
        $faker=Faker\Factory::create();

        $password=\Illuminate\Support\Facades\Hash::make('toptal');
        \App\User::create([
           'name'=>'Administrator',
           'email'=>'admin@test.com',
           'password'=>$password,
        ]);
        for ($i = 0; $i < 10; $i++) {
            \App\User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => $password,
            ]);
        }
    }
}
