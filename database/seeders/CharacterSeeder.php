<?php

namespace Database\Seeders;

use App\Models\Character;
use App\Models\Location;
use App\Models\Origin;
use Illuminate\Database\Seeder;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Origin::truncate();
        Location::truncate();
        Character::truncate();
    $origin1 = $this->createOrigin('tlaxcala', 'national', '3,997 km²', ['/api/characters/1','/api/characters/3', '/api/characters/4']);
    $origin2 = $this->createOrigin('texas', 'international', '5,662 km²', ['/api/characters/2','/api/characters/5', '/api/characters/6']);
    $location1 = $this->createLocation('mexico city', 'national', '1,485 km²',['/api/characters/1','/api/characters/3', '/api/characters/4']);
    $location2 = $this->createLocation('New York', 'international', '783.8 km²',['/api/characters/2','/api/characters/5', '/api/characters/6']);

     $this->createCharacter('lolo', 'live', 'aquatic', 'brave', 'male',
        'https://image.freepik.com/free-vector/cute-shark-cartoon-hand-drawn-style_42349-577.jpg', ['anime1', 'anime2','anime3'],
        1, 1);

     $this->createCharacter('pepe', 'live', 'air', 'smart', 'male',
        'https://c8.alamy.com/compes/fym7ep/cacatua-loro-cartoon-ilustracion-fym7ep.jpg', ['anime4', 'anime5','anime6'],
        2, 2);
     $this->createCharacter('firulai', 'live', 'earth', 'brave', 'female',
        'https://image.freepik.com/free-vector/cute-shark-cartoon-hand-drawn-style_42349-577.jpg', ['anime1', 'anime2','anime3'],
        1, 1);
   $this->createCharacter('nemo', 'live', 'acuatic', 'smart', 'male',
        'https://i.pinimg.com/originals/bc/09/a0/bc09a03ef0926f797ccc9731ec480630.jpg', ['anime4', 'anime5','anime6'],
        2, 2);
        $this->createCharacter('monkey', 'live', 'earth', 'brave', 'female',
            'https://image.freepik.com/free-vector/cute-monkey-cartoon_160606-265.jpg', ['anime1', 'anime2','anime3'],
            1, 1);
        $this->createCharacter('elephant', 'live', 'earth', 'smart', 'male',
            'https://i.pinimg.com/originals/f4/01/02/f401027e381eba6dd92e0290dfd3b382.jpg', ['anime4', 'anime5','anime6'],
            2, 2);


    }
    private function  createOrigin($name, $type, $dimension, $residents){
        $residents = json_encode($residents);
        $origin = new Origin();
        $origin->name = $name;
        $origin->type = $type;
        $origin->dimension = $dimension;
        $origin->residents = $residents;
        $origin->save();
    }
    private function  createLocation($name, $type, $dimension, $residents){
        $residents = json_encode($residents);
        $origin = new Location();
        $origin->name = $name;
        $origin->type = $type;
        $origin->dimension = $dimension;
        $origin->residents = $residents;
        $origin->save();
    }
    private  function  createCharacter($name,$status, $species, $type, $gender, $image, $episode, $location_id, $origin_id ){
        $episode = json_encode($episode);
        $character = new Character();
        $character->name  = $name;
        $character->status = $status;
        $character->species = $species;
        $character->type = $type;
        $character->gender = $gender;
        $character->image = $image;
        $character->episode = $episode;
        $character->location_id = $location_id;
        $character->origin_id = $origin_id;
        $character->save();

    }
}
