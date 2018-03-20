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
        if (! DB::table('users')->where('email', 'user@example.com')->first()) {
          DB::table('users')->insert([
            'name'     => 'Kiko Seijo',
            'email'    => 'user@example.com',
            'password' => app('hash')->make('secret'),
            // 'admin' => 1,
          ]);
        }
    }
}
