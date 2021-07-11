<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// $roleData = array(0 => array('role_name' => 'admin'),1 =>array('role_name' => 'vendor') );
        DB::table('users')->insert([
        	'uuid' => Str::uuid()->toString().mt_rand(5, 100000),
        	'role_id' => '1',
            'name' => 'creatudevelopers',
            'email' => 'creatudevelopers@admin.com',
            'password' => Hash::make('creatudevelopers'),
            'status' => '1'
        ]);

        // DB::table('roles')->insert($roleData);
    }
}
