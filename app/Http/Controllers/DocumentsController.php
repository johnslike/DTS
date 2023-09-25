<?php

namespace App\Http\Controllers;

use App\Models\Documents;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class DocumentsController extends Controller
{
    public function index(){

        
        // $data = Documents::where('type', '=', 'DB')->orderby('subject', 'asc')->limit(5)->get();


            //*Can declare freely inside the raw like sql query
        // $data = DB::table('documents')
        //             ->select(DB::raw('count(*) as gender_count, type'))->groupBy('type')->get();
        

            //*if not exist it direct to 404 not found
        // $data = Documents::where('id', 50)->firstOrFail()->get();

        $data = array('documents' => DB::table('documents')->orderBy('created_at', 'desc')->simplePaginate(10));
        return view('documents.documents', $data);
    }

    public function show($id){

            //*if ID is not exist it directly to 404 not found
        $data = Documents::findOrFail($id);
        // dd($data);
        return view('documents.edit', ['document' => $data]);
    }

    public function create(){
        return view('documents.create')->with('title', 'Add New Document');
    }

    public function store(Request $request){
        $validated = $request->validate([
            "tracking_no" => ['required', 'min:4', Rule::unique('documents', 'tracking_no')],
            "subject" => ['required', 'min:4'],
            "type" => ['required'],
            "remarks" => ['required', 'min:4'],
        ]);

        Documents::create($validated);

        return redirect('/')->with('message', 'New Document added successfully!');

    }

    public function update(Request $request, Documents $document){

        $validated = $request->validate([
            "tracking_no" => ['required', 'min:4'],
            "subject" => ['required', 'min:4'],
            "type" => ['required'],
            "remarks" => ['required', 'min:4'],
        ]);

        $document->update($validated);

        return back()->with('message', 'Data was successfully updated');
        
    }

    public function destroy(Documents $document){
        $document->delete();
        return redirect('/')->with('message', 'Data was successfully deleted');
    }
    
}
