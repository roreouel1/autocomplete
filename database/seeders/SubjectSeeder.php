<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Seeder;
use DB;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Subject::insert([
            [
            
                'name' =>'Our World Our People',
                'st' => '',
                'code'=>'SUB111'
            ],
            [
            
                'name' =>'Language and Literacy',
                'st' => '',
                'code'=>'SUB112'
            ],
            [
            
                'name' =>'Numeracy',
                'st' => '',
                'code'=>'SUB113'
            ],
            [
            
                'name' =>'Creativity ',
                'st' => '',
                'code'=>'SUB114'
            ],
            [
            
                'name' =>'English',
                'st' => '',
                'code'=>'SUB115'
            ],   
            [
            
                'name' =>'Mathematics',
                'st' => '',
                'code'=>'SUB116'
            ],
            [
            
                'name' =>'Science',
                'st' => '',
                'code'=>'SUB117'
            ],
            [
            
                'name' =>'R M.E',
                'st' => '',
                'code'=>'SUB118'
            ],
            [
            
                'name' =>'Creative Art',
                'st' => '',
                'code'=>'SUB119'
            ],
            [
            
                'name' =>'Twi',
                'st' => '',
                'code'=>'SUB120'
            ],
            [
            
                'name' =>'French',
                'st' => '',
                'code'=>'SUB121'
            ], 
            [
            
                'name' =>'Computing',
                'st' => '',
                'code'=>'SUB122'
            ],
        ]);
        }
}
