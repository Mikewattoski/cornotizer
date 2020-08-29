
<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class orderitemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orderitems')->insert([
        	'order_id'=>'1',
        	'product_id'=>'1',
            'quantity'=>'3',
            'price'=>'30',

        ]);
     }
}
