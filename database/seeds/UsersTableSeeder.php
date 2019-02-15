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
        DB::table('users')->insert([
            'name' => '13999999999',
            'email' => '790227542@qq.com',
            'password' => bcrypt('123456'),
        ]);
    }
}
