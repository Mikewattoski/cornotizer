<?php

use Illuminate\Database\Seeder;

class adminuserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('adminusers')->insert([
        	'name'=>'Admin',
        	'email'=>'admin@123.com',
            'password'=>bcrypt('rootadmin')
        ]);
}
}

