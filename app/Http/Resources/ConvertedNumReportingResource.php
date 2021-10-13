<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ConvertedNumReportingResource extends JsonResource
{
    public function toArray($request)
    {
		return [
			'rank' => $this->rank,
			'number' => $this->number,
			'times_converted' => $this->times_converted
		];
    }
}
