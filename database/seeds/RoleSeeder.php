<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleData = array(0 => array('role_name' => 'admin'),1 =>array('role_name' => 'vendor') );
        DB::table('roles')->insert($roleData);
    }
}
