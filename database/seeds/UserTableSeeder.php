<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
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
    		'name' => 'Nguyen Van A',
            'email' => 'Nguyen Van A@gmail.com',
            'password' => bcrypt('123456'),
    		],
    		[
    		'name' => 'Nguyen Van B',
            'email' => 'Nguyen Van B@gmail.com',
            'password' => bcrypt('1234567'),
    		]
    	];

        DB::table('users')->insert($dataInsert);
    }
}
