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
            ],
            [
            
                'name' =>'Language and Literacy',
                'st' => '',
            ],
            [
            
                'name' =>'Numeracy',
                'st' => '',
            ],
            [
            
                'name' =>'Creativity ',
                'st' => '',
            ],
            [
            
                'name' =>'English',
                'st' => '',
            ],   
            [
            
                'name' =>'Mathematics',
                'st' => '',
            ],
            [
            
                'name' =>'Science',
                'st' => '',
            ],
            [
            
                'name' =>'R M.E',
                'st' => '',
            ],
            [
            
                'name' =>'Creative Art',
                'st' => '',
            ],
            [
            
                'name' =>'Twi',
                'st' => '',
            ],
            [
            
                'name' =>'French',
                'st' => '',
            ], 
            [
            
                'name' =>'Computing',
                'st' => '',
            ],
        ]);
        }
}
