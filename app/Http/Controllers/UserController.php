<?php


namespace App\Http\Controllers;

use Image;
use App\Models\User;
use Illuminate\Http\Request;
use File;
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
            'fichier' => 'nullable|file',
        ]);
		// Gestion des messages en cas d'échec.
		if ($validator->fails()) {
			return response()->json([
				"Status"    => "Erreur",
				"Message"   => $validator->errors()->messages(),
				"Data"      => null,
			], 200);
		}
        if ($request->hasFile('fichier')) {

            $old_name = $request->file('fichier')->getClientOriginalName();
            $ext = $request->file('fichier')->getClientOriginalExtension();
            $size = $request->file('fichier')->getSize();

            $image = $request->file('fichier');
            $file = file_get_contents($image);
            $file64 = base64_encode($file);

            $user = User::create(
                [
                    'name' => $request->name,
                    'email' => $request->email,
                    'old_name' => $old_name,
                    'ext' => $ext,
                    'size' => $size,

                    'data' => $file64,
                    'binaire' => pg_escape_bytea($file),
                ]
            );

            return $user;
            $path = storage_path('/app/avatars/'. $user->id .'/');
            
            $filename = 'avatar.'. $ext;
            
            if (!File::exists($path)) {
                File::makeDirectory($path, 0775, true, true);
            }
            $location = storage_path('/app/avatars/' . $user->id . '/'. $filename);

            Image::make($image)->resize(800,400)->save($location); //resizing and saving the image
            
            User::whereId($user->id)->update([
                'fichier' => $user->id . '/' . $filename,
            ]);
            
        }
		// Verification de Role
        // $user1 = User::find($user->id);
        // $test2 = pg_fetch_object($user1->binaire);
        // return pg_unescape_bytea($test2->field_bytea);

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