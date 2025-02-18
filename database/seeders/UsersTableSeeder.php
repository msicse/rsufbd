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
            'name'          => 'Mr Rsuf BD',
            'email'         => 'user@rsuf.test',
            'image'         => 'no-image.png',
            'description'      => 'This is a test user',
            'password'   => bcrypt('123456'),
        ]);
    }
}
