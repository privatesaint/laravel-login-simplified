<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
        	[
        		'role' => "Admin"
        	],
        	[
        		'role' => 'User',
        	],
        ]);
    }
}
