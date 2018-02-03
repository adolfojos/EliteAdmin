<?php

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
            'nationality' =>'V',
            'dni' => '195551521',
            'first_name' => 'Adolfo',
            'last_name' => 'Suarez',
            'email' => 'adolfojos@gmail.com',
            'password' => bcrypt('ajsr2010'),
        ]);
    }
}
