<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataInsert = [
    		[
    		'name' => 'Web',
            
    		],
    		[
    		'name' => 'CSD',
            
    		]
    	];

        DB::table('categories')->insert($dataInsert);
    }
}
