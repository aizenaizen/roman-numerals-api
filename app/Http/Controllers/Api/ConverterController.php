<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Resources\ConvertedNumberResource;
use App\Services\RomanNumeralConverter;

use Validator;

class ConverterController extends Controller
{
    function __construct() 
	{
        $this->romanNumeralConverter = new RomanNumeralConverter;
    }
	
    public function index(Request $request) 
	{
		$number = $request->number;
		
		$rules = ['number' => 'required|integer|between:1,3999'];
        $validator = Validator::make(['number' => $number], $rules);
		
		if ($validator->fails()) {
			$result['errors'] = $validator->messages();
		} else {
			$result['numeral'] = $this->romanNumeralConverter->convertInteger($number);
		}
		
		return new ConvertedNumberResource($result);
	}
}
