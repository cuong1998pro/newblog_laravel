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
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('users')->truncate();
        DB::table('users')->insert([
            [
                'name' => 'cuong1998pro',
                'email' => 'cuong1998pro@gmail.com',
                'password' => bcrypt('password')
            ],
            [
                'name' => 'phuongcute',
                'email' => 'phuong@gmail.com',
                'password' => bcrypt('password')
            ]
        ]);
    }
}
