<?php

use Illuminate\Database\Seeder;

class shopTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('shops')->insert([
        	'name'=>'Big bazzar',
        	'address'=>'Nangloi delhi 110041',
        	'description'=>'Retailer shop',
        	
        	'image'=>'bb.jpg'
        ]);
         DB::table('shops')->insert([
        	'name'=>'Mother dairy',
        	'address'=>'Paschim Vihar',
        	'description'=>'Dairy  shop',
        	'image'=>'md.jpg'
        ]);
         DB::table('shops')->insert([
        	'name'=>'Relince',
        	'address'=>'Nangloi delhi 110041',
        	'description'=>'Grocery shop',
        	'image'=>'re.jpg'
        ]);
         DB::table('shops')->insert([
        	'name'=>'Medical shop',
        	'address'=>'surajmal stadium, delhi 110038',
        	'description'=>'Retailer shop',
        	'image'=>'ch.jpg'
        ]);    }
}
