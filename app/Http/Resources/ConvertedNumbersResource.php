<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ConvertedNumbersResource extends JsonResource
{
	public function toArray($request)
	{
		return [
			'id' => $this->id,
			'number' => $this->number,
			'created_at' => $this->created_at
		];
	}
}
