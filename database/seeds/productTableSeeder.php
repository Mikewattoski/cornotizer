<?php

use Illuminate\Database\Seeder;

class productTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
        	'name'=>'Suger',
        	'price'=>'20',
        	'description'=>'Sweet suger!!',
        	'shop_id'=>'1',
        	'image'=>'iStock_63854727_LARGE-a43c35e.jpg'
        ]);
    DB::table('products')->insert([
        	'name'=>'Tazza tea',
        	'price'=>'140',
        	'description'=>'good tea!!',
        	'shop_id'=>'1',
        	'image'=>'tea.jpg'
        ]);
    DB::table('products')->insert([
        	'name'=>'dal',
        	'price'=>'120',
        	'description'=>'masoor dal',
        	'shop_id'=>'1',
        	'image'=>'dal.jpg'
        ]);
    DB::table('products')->insert([
        	'name'=>'aata',
        	'price'=>'400',
        	'description'=>'best refine aata',
        	'shop_id'=>'1',
        	'image'=>'aata.jpg'
        ]);
    DB::table('products')->insert([
        	'name'=>'Rice',
        	'price'=>'150',
        	'description'=>'Basmati Rice!!',
        	'shop_id'=>'1',
        	'image'=>'rice-agencies.jpg'
        ]);
    DB::table('products')->insert([
        	'name'=>'Milk',
        	'price'=>'52',
        	'description'=>'Amul milk',
        	'shop_id'=>'2',
        	'image'=>'milk.jpg'
        ]);
    DB::table('products')->insert([
        	'name'=>'Curd',
        	'price'=>'30',
        	'description'=>'Amul masti dahi',
        	'shop_id'=>'2',
        	'image'=>'curd.jpg'
        ]);
    DB::table('products')->insert([
        	'name'=>'cheese',
        	'price'=>'170',
        	'description'=>'amul cheese',
        	'shop_id'=>'2',
        	'image'=>'butter.jpg'
        ]);
    DB::table('products')->insert([
        	'name'=>'icecream',
        	'price'=>'20',
        	'description'=>'Amul icecream',
        	'shop_id'=>'2',
        	'image'=>'icecream.jpg'
        ]);
    DB::table('products')->insert([
        	'name'=>'Refine oil',
        	'price'=>'98',
        	'description'=>'fortune refine oil',
        	'shop_id'=>'3',
        	'image'=>'refine.jpg'
        ]);
    DB::table('products')->insert([
        	'name'=>'Surf',
        	'price'=>'160',
        	'description'=>'Surf excel',
        	'shop_id'=>'3',
        	'image'=>'surf.jpg'
        ]);
    DB::table('products')->insert([
        	'name'=>'masala',
        	'price'=>'80',
        	'description'=>'mdh masala',
        	'shop_id'=>'3',
        	'image'=>'masala.jpg'
        ]);
    DB::table('products')->insert([
        	'name'=>'deodrant',
        	'price'=>'200',
        	'description'=>'body deodrant',
        	'shop_id'=>'3',
        	'image'=>'deo.jpg'
        ]);
    DB::table('products')->insert([
        	'name'=>'Eno',
        	'price'=>'6',
        	'description'=>'eno pouch',
        	'shop_id'=>'4',
        	'image'=>'eno.jpg'
        ]);
    DB::table('products')->insert([
        	'name'=>'combiflame',
        	'price'=>'20',
        	'description'=>'pain relife',
        	'shop_id'=>'4',
        	'image'=>'combiflame.jpg'
        ]);
    DB::table('products')->insert([
        	'name'=>'desprine',
        	'price'=>'20',
        	'description'=>'head pain relife',
        	'shop_id'=>'4',
        	'image'=>'disp.jpg'
        ]);
    DB::table('products')->insert([
        	'name'=>'crocine',
        	'price'=>'20',
        	'description'=>'cold relife',
        	'shop_id'=>'4',
        	'image'=>'crosine.jpg'
        ]);
   
    }
}
