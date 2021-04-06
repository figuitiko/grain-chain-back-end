<?php

namespace App\Http\Controllers;

use App\Http\Resources\CharacterCollection;
use App\Http\Resources\CharacterResource;
use App\Models\Character;

use App\Repositories\Character\CharacterRepositoryInterface;

use Illuminate\Http\Request;

class CharacterController extends Controller
{


    /**
     * @var CharacterRepositoryInterface
     */
    private $repository;

    public function __construct(CharacterRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {

       $characters = $this->repository->tabulatorPagination();
       // $characters = Character::all();
       // dd($characters);

        //$charactersCollection = new CharacterCollection(Character::paginate());

       //dd($charactersCollection);

        return  response()->json([
            'msg'=>'ok',
            'data'=> $characters
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        //


        $character = Character::find($id);
        $character->update($request->all());
        return response()->json([
            'msg'=>'ok',
            'success' => 'updated character'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
