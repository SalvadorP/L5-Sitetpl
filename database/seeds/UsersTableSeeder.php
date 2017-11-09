<?php

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
        // Only for dev env!!!
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@localhost.com',
            'password' => bcrypt('1234'),
        ]);

        factory(App\User::class, 10)->create();
       
    }
}
