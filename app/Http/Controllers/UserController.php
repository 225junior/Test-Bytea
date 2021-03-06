<?php


namespace App\Http\Controllers;

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
			'Message' => 'Liste de tous les utilisateurs.',
			'Data' => User::all(),
		], 200);
    }

    public function indexx()
    {
        $userFile = User::find(1);
        $userFileData = base64_decode($userFile->data);

        // $userFileDataDownload = file_put_contents('image.jpg', $userFileData);
        // $userFileDataDownload = file_put_contents('image.jpg', file_get_contents($userFileData));
        // $userFileDataDownload = $userFileData;
        $filename = $userFileData;
        $handle = fopen($filename, "rb");
        $contents = fread($handle, filesize($filename));
         fclose($handle);
        // $userFileDataDownload = readfile($userFileData);
        return $contents;
        // return $userFileDataDownload;
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

            $file = file_get_contents($request->file('fichier'));

            $file64 = base64_encode($file);

            $binaire = pg_escape_bytea($file);

            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'old_name' => $request->file('fichier')->getClientOriginalName(), # anciens nom
                'ext' => $request->file('fichier')->getClientOriginalExtension(), # extension
                'size' => $request->file('fichier')->getSize(), # taille
                'typemime' => $request->file('fichier')->getClientMimeType(), # type mime
                'binaire' => $binaire,
                'data' => $file64,
            ]);
            return 'Enregistrement Effectué';
        }

    }


    public function getfile(){
        $user = User::find(7); 

        $decode = base64_decode($user->data);
        $file = fopen('test.'.$user->ext,'w');
        fwrite($file, $decode);
        fclose($file);

        header($user->typemime);

        return readfile('test.'.$user->ext);
    }


    public function affichage(){
        $userFile = User::find(6);
        $file_decode = base64_decode($userFile->data);
        $img = imagecreatefromstring($file_decode);

        header('Content-Type:Image/jpg');
        imagejpeg($img);
        return $img;
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