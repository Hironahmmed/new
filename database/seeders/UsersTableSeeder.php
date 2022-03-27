<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role_id' => '1',
            'name' => 'Rezaul Islam',
            'username' => 'admin',
            'email' => 'rezaul.islam.cse@gmail.com',
            'password' => bcrypt('admin12345'),
        ]);

        DB::table('users')->insert([
            'role_id' => '2',
            'name' => 'Sumon Mia',
            'username' => 'freelancer',
            'email' => 'freelancer@gmail.com',
            'password' => bcrypt('freelancer12345'),
        ]);

        DB::table('users')->insert([
            'role_id' => '3',
            'name' => 'Jhon De',
            'username' => 'customer',
            'email' => 'customer@gmail.com',
            'password' => bcrypt('customer12345'),
        ]);

        DB::table('users')->insert([
            'role_id' => '4',
            'name' => 'Moyon Khan',
            'username' => 'author',
            'email' => 'author@gmail.com',
            'password' => bcrypt('author12345'),
        ]);
    }
}
