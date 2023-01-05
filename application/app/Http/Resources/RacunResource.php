<?php

namespace App\Http\Resources;

use App\Models\Pacijent;
use App\Models\Lek;
use Illuminate\Http\Resources\Json\JsonResource;

class RacunResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'=>$this->resource->id,
            'pacijent'=> Pacijent::find($this->resource->pacijent_id),
            'lek'=> Lek::find($this->resource->lek_id),
            'datum_od' => $this->resource->datum_od,
            'datum_do' => $this->resource->datum_do,
        ];
    }
}
