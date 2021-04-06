<?php

namespace App\Http\Resources;

use App\Models\Character;
use Illuminate\Http\Resources\Json\JsonResource;
/**
 * Class CharacterResource
 * @package  App\Http\Resources
 * @mixin Character
 */
class CharacterResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'status' => $this->status,
            'species' => $this->species,
            'gender' => $this->gender,
            'image' => $this->image,
            "location" => $this->location,
            "origin" => $this->origin,


        ];
    }
}
