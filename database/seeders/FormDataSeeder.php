<?php

namespace Database\Seeders;

use App\Models\FormData;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FormDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FormData::insert([
            [
                'name' =>'Mike Smith',
                'pid' =>'PID200007',
                'dob' =>'15-09-1989',
                'age' =>'35',
                'oc' =>'IT Project Manager',
                'loc' =>'London',
            ],  
            [
                'name' =>'Paul Mensah',
                'pid' =>'PID200112',
                'dob' =>'16-05-1989',
                'age' =>'35',
                'oc' =>'Product Manager',
                'loc' =>'Ohio',
            ],

            [
                'name' =>'Charles Mccarthy',
                'pid' =>'PID200102',
                'dob' =>'16-02-1992',
                'age' =>'32',
                'oc' =>'Software Engineer',
                'loc' =>'Sydney',
            ],

            [
                'name' =>'Aaron Ramsey',
                'pid' =>'PID200202',
                'dob' =>'18-09-1992',
                'age' =>'32',
                'oc' =>'Software Engineer',
                'loc' =>'Seattle',
            ],
            [
                'name' =>'Alfred Roose',
                'pid' =>'PID223202',
                'dob' =>'30-06-1993',
                'age' =>'31',
                'oc' =>'Network Engineer',
                'loc' =>'New York',
            ],

            [
                'name' =>'Angela Chadwill',
                'pid' =>'PID223702',
                'dob' =>'02-02-1993',
                'age' =>'31',
                'oc' =>'Marketing Executive',
                'loc' =>'Dublin',
            ],

            [
                'name' =>'Belinda Sey',
                'pid' =>'PID262392',
                'dob' =>'10-07-1997',
                'age' =>'26',
                'oc' =>'Digital Marketer',
                'loc' =>'Accra',
            ],

            [
                'name' =>'Sam Abraham',
                'pid' =>'PID262222',
                'dob' =>'10-07-1985',
                'age' =>'39',
                'oc' =>'Software Engineer',
                'loc' =>'Chicago',
            ],

        ]);
    }
}
