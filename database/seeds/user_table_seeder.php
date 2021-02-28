<?php

use Illuminate\Database\Seeder;

class user_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'gee',
            'email' => 'test@mail.com',
            'password' => bcrypt('test1234')
        ]);
    }
}
