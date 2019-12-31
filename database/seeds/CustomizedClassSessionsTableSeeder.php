<?php

use Illuminate\Database\Seeder;

class CustomizedClassSessionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('class_sessions')->delete();
        
        \DB::table('class_sessions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'class_id' => 1,
                'start_at' => '2019-12-30 19:10:00',
                'end_at' => '2019-12-30 20:35:00',
                'created_at' => '2019-12-31 18:35:29',
                'updated_at' => '2019-12-31 18:35:29',
            ),
        ));
        
        
    }
}