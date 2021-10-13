<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;

use App\Models\Numbers;
use App\Http\Resources\ConvertedNumbersResource;
use App\Http\Resources\ConvertedNumReportingResource;

class ReportingController extends Controller
{    function __construct() 
	{
        $this->numbers  = new Numbers;
    }
    public function list(Request $request)
    {
		$page = $request->page ?? 10;
		$data = $this->numbers
			->orderBy('created_at', 'desc')
			->paginate($page);
		
		return ConvertedNumbersResource::collection($data);
    }
	
    public function top()
    {
		$data = $this->numbers
			->select(
				DB::Raw("COUNT(number) times_converted"),
				DB::Raw("ROW_NUMBER() OVER (ORDER BY times_converted desc) rank"),
				'number',
			)
			->groupBy('number')
			->orderBy('times_converted', 'desc')
			->take(10)
			->get();
						
		return ConvertedNumReportingResource::collection($data);
    }
}
