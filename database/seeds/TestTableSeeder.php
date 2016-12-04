<?php

use Illuminate\Database\Seeder;

class TestTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $num = 1000;
        for($i=1;$i<=$num;$i++) {
            DB::table('test')->insert([
                'name' => str_random(10),
                'email' => str_random(10) . '@gmail.com',
                'address' => str_random(10) . ' Street',
            ]);
        }
    }
}
