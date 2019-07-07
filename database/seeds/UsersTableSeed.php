<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	[
        		'role_id' => 1,
        		'name' => "Admin",
        		'email' => 'admin@system.com',
        		'password' => bcrypt('password')
        	],
        	[
        		'role_id' => 2,
        		'name' => "User",
        		'email' => 'user@system.com',
        		'password' => bcrypt('password')
        	],
        ]);
    }
}
