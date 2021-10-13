<?php
namespace App\Services;
use Exception;
use DB;

use App\Models\Numerals;
use App\Models\Numbers;

class RomanNumeralConverter
{
    function __construct() 
	{
        $this->numerals  = new Numerals;
        $this->numbers  = new Numbers;
    }
	
	public function convertInteger($number)
	{
		try {			
			$numerals = $this->numerals
				->orderBy('number', 'desc')
				->get()
				->keyBy('numeral');
				
			$this->numbers->insert(['number' => $number]);
		} catch (Exception $e) {
			$numerals = config('numerals'); // Backup numerals lookup, incase the script cannot connect to DB.
		}
		
		$returnValue = '';
		while ($number > 0) {
			foreach ($numerals as $roman => $num) {
				$num = is_object($num) ? $num->number : $num;
				if ($number >= $num) {
					$number -= $num;
					$returnValue .= $roman;
					break;
				}
			}
		}
		
		return $returnValue;
	}
}
