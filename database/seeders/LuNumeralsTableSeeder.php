<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LuNumeralsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {        
        \DB::table('lu_numerals')->insert(array (
            0 => 
            array (
                'id' => 1,
                'number' => 1,
                'numeral' => 'I',
            ),
            1 => 
            array (
                'id' => 2,
                'number' => 4,
                'numeral' => 'IV',
            ),
            2 => 
            array (
                'id' => 3,
                'number' => 5,
                'numeral' => 'V',
            ),
            3 => 
            array (
                'id' => 4,
                'number' => 9,
                'numeral' => 'IX',
            ),
            4 => 
            array (
                'id' => 5,
                'number' => 10,
                'numeral' => 'X',
            ),
            5 => 
            array (
                'id' => 6,
                'number' => 40,
                'numeral' => 'XL',
            ),
            6 => 
            array (
                'id' => 7,
                'number' => 50,
                'numeral' => 'L',
            ),
            7 => 
            array (
                'id' => 8,
                'number' => 90,
                'numeral' => 'XC',
            ),
            8 => 
            array (
                'id' => 9,
                'number' => 100,
                'numeral' => 'C',
            ),
            9 => 
            array (
                'id' => 10,
                'number' => 400,
                'numeral' => 'CD',
            ),
            10 => 
            array (
                'id' => 11,
                'number' => 500,
                'numeral' => 'D',
            ),
            11 => 
            array (
                'id' => 12,
                'number' => 900,
                'numeral' => 'CM',
            ),
            12 => 
            array (
                'id' => 13,
                'number' => 1000,
                'numeral' => 'M',
            ),
        ));
        
        
    }
}