<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Document;


class DocumentController extends Controller
{
    public function index()
    {
        $docs = Document::all()->sortByDesc("updated_at");
        $user_id = Auth::id();
        return view('documents.index',['documents'=>$docs, 'user_id' => $user_id]);
    }

    public function store(Request $request)
    {

        //$name = $request->file('file')->getClientOriginalName();
        //$path = $request->file->store('public/files');

        $request->validate([
            'titre' => 'required',
            ]);

        $fileName = time().'.'.$request->file->extension();  
        $request->file->move(public_path('uploads'), $fileName);
        
        
        $newDocument = Document::create([
            'titre' => $request->titre,
            'document' => $fileName,
            'langue' => 'fr',
            'user_id' => Auth::id(),
        ]); 


        return redirect('/documents');
    }


    
    public function edit(Document $id)
    {
        return view('documents.edit', ['document' => $id]);
    }

    
    public function update(Request $request, Document $id)
    {
        $request->validate([
            'titre' => 'required',
            ]);
            
        $id->update([
            'titre' => $request->titre,
            //'document' => $request->document,
        ]);
        return redirect('/documents');
    }

   
    public function destroy(Document $id)
    {
        $id->delete();
        return redirect('/documents');
    }
}
