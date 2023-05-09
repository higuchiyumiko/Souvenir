<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            'name'=>'商品名１',
        //    'item_image'=>null(), nullで許可されている値はseederファイルに記述しなくても〇
            'market_name'=>'○○商店',
            'allergy'=>'卵',
            'category_id'=>1,
            ]);
    }
}
