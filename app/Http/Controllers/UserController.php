<?php

namespace App\Http\Controllers;

use Image;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
			'Status' => 'Succes',
			'Message' => 'Liste des ressources actives et supprimées.',
			'Data' => User::all(),
		], 200);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Veriffication des informations
		$validator = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required',
            'profile' => 'nullable|image',
        ]);
		// Gestion des messages en cas d'échec.
		if ($validator->fails()) {
			return response()->json([
				"Status"    => "Erreur",
				"Message"   => $validator->errors()->messages(),
				"Data"      => null,
			], 200);
		}
        if ($request->hasFile('profile')) {
            Image::make($request->profile)->resize(300, 200)->save(public_path('storage\\test.jpg'));
        }
		// Verification de Role
        $data = User::create($validator->validated());
        return response()->json([
            "Status"    => "Succes",
            "Data"      => $data,
        ], 200);
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
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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