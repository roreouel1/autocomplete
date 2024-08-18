<?php

namespace Database\Seeders;

use App\Models\Times;
use Illuminate\Database\Seeder;
class TimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Times::insert([
            [
                'duration' =>'8:00-9:00',
            ],   
            [
                'duration' =>'9:00-10:00',
            ], 
            [
                'duration' =>'10:00-10:30',
            ],     
            [
                'duration' =>'10:30-11:30',
            ],   
            [
                'duration' =>'11:30-12:30',
            ],    
            [
                'duration' =>'12:30-1:00',
            ],        
            [
                'duration' =>'1:00-2-00',
            ],       

        ]);
        }
    }

