<?php

namespace App\Http\Controllers;

use App\Models\Documents;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DocumentsController extends Controller
{
    public function index(){

        
        // $data = Documents::where('type', '=', 'DB')->orderby('subject', 'asc')->limit(5)->get();


            //*Can declare freely inside the raw like sql query
        // $data = DB::table('documents')
        //             ->select(DB::raw('count(*) as gender_count, type'))->groupBy('type')->get();
        

            //*if not exist it direct to 404 not found
        $data = Documents::where('id', 50)->firstOrFail()->get();

        return view('documents.documents', ['documents' => $data]);
    }


    public function show($id){

            //*if ID is not exist it directly to 404 not found
        $data = Documents::findOrFail($id);
        dd($data);
        return view('documents.documents', ['documents' => $data]);
    }

    
}
