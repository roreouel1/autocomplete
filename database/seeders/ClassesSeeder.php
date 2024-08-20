<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Classes;

class ClassesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Classes::insert([
            [
            
                'name' =>'Class one',
      
            ],
            [
            
                'name' =>'Class two',

            ],
            [
            
                'name' =>'Class three',
   
            ],
            [
            
                'name' =>'Class four',
     
            ],
            [
            
                'name' =>'Class five',
 
            ],   
            [
            
                'name' =>'Class six',
       
            ],
        
        ]);
    }
}
