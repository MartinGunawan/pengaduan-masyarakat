<?php

use Illuminate\Database\Seeder;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB:table('user')->insert([
            'name' => 'martin',
            'email' => 'martin@gmail.com',
            'password' => 'test'
        ]);
    }
}
