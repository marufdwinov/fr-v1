<?php

use Illuminate\Database\Seeder;

class CustomizedClassesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('classes')->delete();
        
        \DB::table('classes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Computer Vision',
                'code' => '2276120',
                'day' => 1,
                'start' => '07:00:00',
                'end' => '08:40:00',
                'created_at' => '2019-12-31 18:34:56',
                'updated_at' => '2019-12-31 18:34:56',
            ),
        ));
        
        
    }
}