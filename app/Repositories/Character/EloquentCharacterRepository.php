<?php


namespace App\Repositories\Character;


use App\Http\Resources\CharacterResource;
use App\Models\Character;
use Illuminate\Pagination\LengthAwarePaginator;

class EloquentCharacterRepository implements CharacterRepositoryInterface
{

    public function tabulatorPagination()
    {
        $characters = Character::select("id", "name", "status", "species","gender","image", "location_id", "origin_id")
                                    ->with(["location:id,name", "origin:id,name"])
                                    ->orderByDesc("id")
                                    ->get();

        /** @var LengthAwarePaginator $resource */
        $resource = CharacterResource::collection($characters);
        return [
            "data"=>$resource->all(),


        ];
    }
}
